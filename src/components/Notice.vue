<template>
  <div
    v-if="text"
    class="bg-sage text-white px-6 py-2.5 text-sm text-center whitespace-pre-line border-t border-white/15"
  >
    {{ text }}
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'

const text = ref('')

onMounted(async () => {
  try {
    const res = await fetch('/notice.txt', { cache: 'no-store' })
    if (!res.ok) return
    const body = (await res.text()).trim()
    if (body) text.value = body
  } catch {
    /* ignore */
  }
})
</script>
