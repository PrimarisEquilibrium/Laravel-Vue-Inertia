<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div>
    <header class="bg-indigo-500 text-white">
      <nav class="flex items-center justify-between p-4 mx-auto">
        <div class="space-x-6">
          <!-- Laravel named routes in JS using ZiggyVue -->
          <Link :href="route('home')">Home</Link>
          <Link :href="route('about')">About</Link>
        </div>
      </nav>
    </header>

    <main class="p-4">
      <slot />
    </main>
  </div>
</template>