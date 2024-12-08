<script setup></script>

<template>

    <Head :title="`| ${$page.component}`" />

    <!-- Access any shared props -->
    {{ $page.props.auth.user }}

</template>