<template>
  <div>
    <header class="bg-indigo-500 text-white">
      <nav class="flex items-center justify-between p-4 mx-auto">
        <div class="space-x-6">
          <a href="/">Home</a>
          <a href="/about">About</a>
        </div>
      </nav>
    </header>

    <main class="p-4">
      <slot />
    </main>
  </div>
</template>