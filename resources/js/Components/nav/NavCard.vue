<template>
    <div :class="getRootClasses">
        <div class="nav-card__status">
            <slot name="status"></slot>
        </div>
        <div class="icon-wrap">
            <slot name="icon"></slot>
        </div>
        <div class="nav-card__text">
            <text-medium><slot name="text">Отметок</slot></text-medium>
        </div>
        <div class="nav-card__btn nav-card__btn--profile"><text-medium>Открыть</text-medium></div>
    </div>
</template>

<script>
    import TextMedium from "../text/TextMedium";

    export default {
        name: "NavCard",
        components: {
            TextMedium,
        },
        props: ['isProfile'],
        computed: {
            getRootClasses: function () {
                let classes = ['nav-card'];
                if (this.isProfile) classes.push('nav-card--profile');

                return classes.join(' ');
            }
        }
    }
</script>

<style lang="scss" scoped>
    .nav-card {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 180px;
        position: relative;
        padding: 16px;

        font-weight: 600;

        background: #282B3E;
        border-radius: 20px;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .25);

        &__status {
            position: absolute;
            right: 16px;
            top: 16px;

            font-size: 18px;
        }

        .icon-wrap {
            margin: 30px 0 5px;
            width: 40px;
            height: 40px;

            .icon {
                width: 100%;
            }
        }

        &__btn {
            text-align: center;
            margin-top: 10px;
            padding: 10px;

            background: #141523;
            border-radius: 12px;
        }

        &--profile {
            background: rgba(255, 255, 255, .65);
            //backdrop-filter: blur(10px);
            box-shadow: 0 0 24px 0 #6A55D6;


            .nav-card__btn--profile {
                background: rgba(61, 63, 105, .5);
            }


        }
    }
</style>
