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
    import Nav from "../Components/nav/Nav";
    import Notifications from "../Components/notifications/Notifications";

    export default {
        name: "index",

        components: {
            TextSmall, UserCard, Nav, Notifications,
        }
    }
</script>

<style lang="scss" scoped>
    header {
        margin: 0 0 24px;

        font-family: "Roboto", sans-serif;
        font-size: 20px;
        font-weight: 700;
    }

    .welcome-text {
        font-size: 28px;
        font-weight: 700;
    }
</style>
