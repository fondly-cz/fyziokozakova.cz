<template>
  <Teleport to="body">
    <Transition name="slide-up">
      <div
        v-if="visible"
        class="fixed bottom-0 left-0 right-0 z-[100] px-4 pb-4 sm:pb-6"
      >
        <div class="max-w-3xl mx-auto bg-bg-card border border-[rgba(250,250,250,0.12)] rounded-2xl shadow-2xl px-6 py-5 flex flex-col sm:flex-row gap-4 items-start sm:items-center">
          <div class="flex-1 text-sm text-text-muted leading-relaxed">
            <span class="text-text-main font-semibold">Tento web používá cookies.</span>
            Analytické cookies (Google Analytics) nám pomáhají zlepšovat web.
            <button
              class="text-sage hover:underline whitespace-nowrap ml-1"
              @click="showInfo = true"
            >
              Více informací
            </button>
          </div>
          <div class="flex gap-3 flex-shrink-0">
            <button
              class="bg-sage hover:bg-sage-light text-white font-semibold py-2 px-5 rounded-xl transition-colors text-sm"
              @click="accept"
            >
              Přijmout
            </button>
            <button
              class="border border-[rgba(250,250,250,0.15)] hover:border-sage text-text-muted hover:text-text-main font-semibold py-2 px-5 rounded-xl transition-colors text-sm"
              @click="decline"
            >
              Odmítnout
            </button>
          </div>
        </div>
      </div>
    </Transition>

    <CookieInfo
      v-model="showInfo"
      @accept="accept"
      @decline="decline"
    />
  </Teleport>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import CookieInfo from './CookieInfo.vue'

const STORAGE_KEY = 'cookie_consent'
const GA_ID = 'G-N5DHEDE497'

const visible = ref(false)
const showInfo = ref(false)

onMounted(() => {
  const stored = localStorage.getItem(STORAGE_KEY)
  if (stored === 'accepted') {
    loadGA()
  } else if (stored === null) {
    visible.value = true
  }
})

function accept() {
  localStorage.setItem(STORAGE_KEY, 'accepted')
  visible.value = false
  loadGA()
}

function decline() {
  localStorage.setItem(STORAGE_KEY, 'declined')
  visible.value = false
}

function loadGA() {
  if (document.getElementById('ga-script')) return
  const script = document.createElement('script')
  script.id = 'ga-script'
  script.async = true
  script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_ID}`
  document.head.appendChild(script)
  script.onload = () => {
    ;(window as any).dataLayer = (window as any).dataLayer || []
    function gtag(...args: any[]) { (window as any).dataLayer.push(args) }
    gtag('js', new Date())
    gtag('config', GA_ID)
  }
}
</script>

<style scoped>
.slide-up-enter-active,
.slide-up-leave-active {
  transition: transform 0.35s ease, opacity 0.35s ease;
}
.slide-up-enter-from,
.slide-up-leave-to {
  transform: translateY(100%);
  opacity: 0;
}
</style>
