<template>
  <Teleport to="body">
    <Transition name="fade">
      <div
        v-if="modelValue"
        class="fixed inset-0 z-[200] flex items-center justify-center p-4"
        @click.self="$emit('update:modelValue', false)"
      >
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" @click="$emit('update:modelValue', false)" />
        <div class="relative bg-bg-card border border-[rgba(250,250,250,0.1)] rounded-2xl shadow-2xl max-w-lg w-full p-8 z-10">
          <button
            class="absolute top-4 right-4 text-text-dim hover:text-text-main transition-colors"
            @click="$emit('update:modelValue', false)"
            aria-label="Zavřít"
          >
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18M6 6l12 12"/>
            </svg>
          </button>

          <h2 class="text-xl font-bold text-text-main mb-2">Informace o cookies</h2>
          <div class="h-0.5 w-12 bg-sage mb-6" />

          <div class="space-y-5 text-sm text-text-muted leading-relaxed">
            <p>
              Tyto webové stránky používají soubory cookies ke zlepšení uživatelského zážitku
              a ke sledování návštěvnosti prostřednictvím služby <strong class="text-text-main">Google Analytics</strong>.
            </p>

            <div>
              <h3 class="text-text-main font-semibold mb-1">Nezbytné cookies</h3>
              <p>
                Tyto cookies jsou nutné pro základní fungování webu (např. uložení vašeho souhlasu
                s cookies). Nelze je zakázat.
              </p>
            </div>

            <div>
              <h3 class="text-text-main font-semibold mb-1">Analytické cookies (Google Analytics)</h3>
              <p>
                Používáme službu Google Analytics (GA4, ID: <code class="text-sage">G-N5DHEDE497</code>)
                pro sledování anonymní návštěvnosti – počet návštěv, nejnavštěvovanější stránky
                a zdroje příchodů. Data jsou zpracovávána společností Google LLC v souladu
                s jejich <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer" class="text-sage hover:underline">zásadami ochrany soukromí</a>.
                Analytické cookies jsou nastaveny pouze po vašem souhlasu.
              </p>
            </div>

            <div>
              <h3 class="text-text-main font-semibold mb-1">Vaše práva (GDPR)</h3>
              <p>
                Máte právo svůj souhlas kdykoli odvolat. Stačí smazat cookies v nastavení
                prohlížeče nebo kontaktovat provozovatele webu na
                <a href="mailto:info@fyziokozakova.cz" class="text-sage hover:underline">info@fyziokozakova.cz</a>.
              </p>
            </div>
          </div>

          <div class="mt-8 flex flex-col sm:flex-row gap-3">
            <button
              class="flex-1 bg-sage hover:bg-sage-light text-white font-semibold py-2.5 px-5 rounded-xl transition-colors text-sm"
              @click="accept"
            >
              Přijmout cookies
            </button>
            <button
              class="flex-1 border border-[rgba(250,250,250,0.15)] hover:border-sage text-text-muted hover:text-text-main font-semibold py-2.5 px-5 rounded-xl transition-colors text-sm"
              @click="decline"
            >
              Odmítnout
            </button>
          </div>
        </div>
      </div>
    </Transition>
  </Teleport>
</template>

<script setup lang="ts">
defineProps<{ modelValue: boolean }>()
const emit = defineEmits<{
  (e: 'update:modelValue', value: boolean): void
  (e: 'accept'): void
  (e: 'decline'): void
}>()

function accept() {
  emit('accept')
  emit('update:modelValue', false)
}
function decline() {
  emit('decline')
  emit('update:modelValue', false)
}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.25s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
