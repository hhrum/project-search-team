<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::viaRequest('vk-sign', function (Request $request) {
            $url = $request->fullUrl();
            $client_secret = 'rdjH4zuTEkDXlKRa9GgJ'; //Защищённый ключ из настроек вашего приложения

            $query_params = [];
            parse_str(parse_url($url, PHP_URL_QUERY), $query_params); // Получаем query-параметры из URL

            $sign_params = [];
            foreach ($query_params as $name => $value) {
                if (strpos($name, 'vk_') !== 0) { // Получаем только vk параметры из query
                    continue;
                }

                $sign_params[$name] = $value;
            }

            ksort($sign_params); // Сортируем массив по ключам
            $sign_params_query = http_build_query($sign_params); // Формируем строку вида "param_name1=value&param_name2=value"
            $sign = rtrim(strtr(base64_encode(hash_hmac('sha256', $sign_params_query, $client_secret, true)), '+/', '-_'), '='); // Получаем хеш-код от строки, используя защищеный ключ приложения. Генерация на основе метода HMAC.

            $status = $sign === $request->input('sign'); // Сравниваем полученную подпись со значением параметра 'sign'

            if (!$status)
                abort(403);

            return $status ? User::firstOrCreate(['vk_user_id' => $request->input('vk_user_id')]) : false;
        });
    }
}
