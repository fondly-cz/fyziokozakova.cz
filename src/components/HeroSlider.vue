<template>
  <section id="home" class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0">
      <div
        v-for="(slide, index) in slides"
        :key="slide.src"
        class="absolute inset-0 transition-opacity duration-[1200ms] ease-in-out"
        :class="{ 'opacity-0': current !== index, 'opacity-100': current === index }"
      >
        <img
          :src="slide.src"
          :alt="slide.alt"
          class="w-full h-full object-cover brightness-[0.35]"
        />
      </div>

      <div class="absolute inset-0 bg-black/60" />
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 pt-32 pb-20">
      <div class="max-w-2xl" :class="{ 'animate-fade-up': true }">
        <p class="text-sm tracking-widest uppercase mb-6 text-sage-light">
          Nestátní zdravotnické zařízení · Kolín
        </p>

        <h1 class="leading-tight mb-6 text-4xl md:text-6xl font-extrabold text-text-main">
          Cesta k pohybu<br />
          <em class="text-sage">bez bolesti</em>
        </h1>

        <div class="h-0.5 w-16 bg-sage mb-7"></div>

        <p class="text-base md:text-lg leading-relaxed mb-10 text-text-muted max-w-xl">
          Individuální fyzioterapeutická péče s více než 17 lety zkušeností.
          Registrovaný fyzioterapeut Ilona Kozáková – přístup, na kterém záleží.
        </p>

        <div class="flex flex-wrap gap-4">
          <a
            href="tel:607702669"
            class="px-8 py-3.5 text-xs tracking-widest uppercase font-medium rounded bg-sage text-white transition-opacity hover:opacity-80"
          >
            Objednat se
          </a>

          <a
            href="#sluzby"
            class="px-8 py-3.5 text-xs tracking-widest uppercase rounded border border-sage/50 text-text-main hover:border-sage hover:text-sage"
          >
            Naše služby
          </a>
        </div>
      </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-30">
      <span class="text-[0.58rem] tracking-widest uppercase text-text-muted">Scrollovat</span>
      <div class="w-px h-10 bg-text-dim" />
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent, onMounted, onUnmounted, ref, PropType } from 'vue'

export interface Slide {
  src: string
  alt: string
}

export default defineComponent({
  name: 'HeroSlider',
  props: {
    slides: {
      type: Array as PropType<Slide[]>,
      required: true,
    },
    interval: Number,
  },
  setup(props) {
    const current = ref(0)
    let timer: number | undefined

    function start() {
      timer = window.setInterval(() => {
        current.value = (current.value + 1) % props.slides.length
      }, props.interval ?? 4500)
    }

    onMounted(() => {
      start()
    })

    onUnmounted(() => {
      if (timer) clearInterval(timer)
    })

    return {
      current,
    }
  },
})
</script>
