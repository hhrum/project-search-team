<template>
    <div :class="getRootClasses">
        <div class="message__content">Texxt</div>
        <div class="message__time">00:00</div>
    </div>
</template>

<script>
    export default {
        name: "vMessage",
        props: ['isMessageFromThem'],
        computed: {
            getRootClasses: function () {
                let classes = ['message__sms'];
                if (this.isMessageFromThem) classes.push('message__sms--from-them');

                return classes.join(' ');
            }
        }
    }
</script>

<style lang="scss">
    .message {
        &__content {
            max-width: 60%;
            padding: 8px 16px;

            font-size: 13px;
            font-weight: 400;
            word-break: break-all;

            background: #282B3E;
            border-radius: 16px;
        }

        &__time {
            font-size: 9px;
            font-weight: 300;
            opacity: .5;
        }

        &__sms {
            display: flex;
            align-items: flex-end;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            margin-bottom: 10px;


            &--from-them {
                flex-direction: unset;
                flex-wrap: unset;
            }
        }
    }
</style>
