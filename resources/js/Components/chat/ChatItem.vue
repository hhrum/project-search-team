<template>
    <div :class="getRootClasses">
        <avatar-square48 />

        <div class="chat__text">
            <div class="chat__name">
                <slot name="name">Денис, допустим</slot>
            </div>
            <div class="chat__content">
                <div class="chat__message">
                    <slot name="message">Новое сообщение</slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import AvatarSquare48 from "../avatar/AvatarSquare48";

    export default {
        name: 'chatItem',
        components: {
            AvatarSquare48,
        },
        props: ['isNewMessage'],
        computed: {
            getRootClasses: function () {
                let classes = ['chat'];
                if (this.isNewMessage) classes.push('new-message');

                return classes.join(' ');
            }
        }
    }
</script>

<style lang="scss" scoped>
    .chat {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
        padding: 16px;

        background: rgba(38, 42, 53, 1);
        border-radius: 16px;

        &__text {
            margin-left: 12px;
            white-space: nowrap;
            overflow: hidden;
        }

        &__name {
            font-size: 16px;
            font-weight: 400;
        }

        &__content {
            text-overflow: ellipsis;
            overflow: hidden;
        }

        &__message {
            font-size: 14px;
            font-weight: 300;
            opacity: .5;
        }
    }

    .new-message {
        position: relative;
        box-shadow: 0 0 30px 0 rgba(123, 97, 255, .25);

        &:after {
            content: '';
            display: block;
            position: absolute;
            width: 8px;
            height: 8px;
            right: 16px;

            background: #6A55D6;
            border-radius: 50%;
        }
    }
</style>
