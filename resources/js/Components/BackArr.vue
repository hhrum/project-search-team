<template>
    <div class="wrap">
        <div class="back-arr"><span></span></div>
    </div>

</template>

<script>
    export default {
        name: 'backArr'
    }
</script>

<style lang="scss" scoped>
    .wrap {
        padding: 15px 0;
    }

    .back-arr {
        display: block;
        width: 18px;
        height: 2px;
        position: relative;

        background: #fff;

        & span:before,
        & span:after {
            content: '';
            display: block;
            position: absolute;
            width: 10px;
            height: 2px;

            background: #fff;
        }

        & span:before {
            transform: rotate(-45deg);
            transform-origin: left bottom;
        }

        & span:after {
            transform: rotate(45deg);
            transform-origin: left top;
        }
    }
</style>
