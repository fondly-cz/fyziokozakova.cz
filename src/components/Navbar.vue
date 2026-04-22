<template>
  <header class="fixed inset-x-0 top-0 z-50 bg-white/30 backdrop-blur-md">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#home" class="flex items-center gap-3">
        <img src="/assets/logo.svg" alt="Logo" class="h-20 w-auto" />
      </a>

      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-white">
        <a href="#o-nas" class="hover:text-sage">O mně</a>
        <a href="#sluzby" class="hover:text-sage">Služby</a>
        <a href="#cenik" class="hover:text-sage">Ceník</a>
        <a href="#galerie" class="hover:text-sage">Galerie</a>
        <a href="#kontakt" class="hover:text-sage">Kontakt</a>
        <a
          href="tel:607702669"
          class="px-5 py-2 text-xs tracking-widest uppercase font-medium rounded bg-sage text-white transition-opacity hover:opacity-80"
        >
          Objednat se
        </a>
      </nav>

      <button
        type="button"
        @click="mobileOpen = !mobileOpen"
        class="md:hidden flex flex-col gap-1.5"
        aria-label="Menu"
      >
        <span class="block w-6 h-px bg-text-muted"></span>
        <span class="block w-6 h-px bg-text-muted"></span>
        <span class="block w-4 h-px bg-text-muted"></span>
      </button>
    </div>

    <Notice />

    <div
      v-show="mobileOpen"
      class="md:hidden px-6 py-5 gap-4 flex flex-col bg-bg-base"
    >
      <a href="#o-nas" class="text-sm text-black" @click="close">O mně</a>
      <a href="#sluzby" class="text-sm text-black" @click="close">Služby</a>
      <a href="#cenik" class="text-sm text-black" @click="close">Ceník</a>
      <a href="#galerie" class="text-sm text-black" @click="close">Galerie</a>
      <a href="#kontakt" class="text-sm text-black" @click="close">Kontakt</a>
      <a href="tel:607702669" class="text-sm text-sage flex items-center gap-2" @click="close">
        <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.84 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.77 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 17z"/></svg>
        607 702 669
      </a>
    </div>
  </header>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import Notice from './Notice.vue'

const mobileOpen = ref(false)

function close() {
  mobileOpen.value = false
}

onMounted(() => {
  window.addEventListener('hashchange', close)
})
</script>
