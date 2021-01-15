<template id="index">
    <div class="content">
        <header>Хочу в тиму</header>

        <div class="welcome-text">Привет, просто!</div>

        <user-card />

        <Nav />

        <notifications />
    </div>
</template>

<script>
    import TextSmall from "../Components/text/TextShallow";
    import UserCard from "../Components/UserCard";
    import Nav from "../Components/Nav";
    import Notifications from "../Components/Notifications";

    export default {
        name: "index",

        components: {
            TextSmall, UserCard, Nav, Notifications,
        }
    }
</script>

<style lang="scss">
    // Обнуление
    *{padding:0;margin:0;border:0;}
    *,*:before,*:after{box-sizing:border-box;}
    :focus,:active{outline:none;}
    a:focus,a:active{outline:none;}
    input,button,textarea{font-family:inherit;font-size:inherit;font-weight:inherit;color:inherit;border:0;}
    button{cursor:pointer;}
    a,a:visited{color:inherit;text-decoration:none;font-family:inherit;font-size:inherit;}
    a:hover{text-decoration:none;}
    img{vertical-align:top;}
    /* ================================== */

    header {
        margin: 0 0 50px;

        font-family: "Roboto", sans-serif;
        font-size: 20px;
        font-weight: 700;
    }

    .welcome-text {
        font-size: 28px;
        font-weight: 700;
    }
</style>
