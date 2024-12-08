<script setup></script>

<template>

    <Head :title="`| ${$page.component}`" />

    <!-- Access any shared props -->
    {{ $page.props.auth.user }}

    <!-- Add the preserve-scroll attribute to preserve the scroll throughout webpages -->
    <!-- <Link class="mt-[1400px] block" href="/" preserve-scroll>Refresh</Link> -->

</template>