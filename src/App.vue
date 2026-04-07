<template>
  <div class="min-h-screen bg-bg-base text-text-main">
    <Navbar />

    <HeroSlider :slides="slides" />

    <main class="">
      <section id="o-nas" class="py-28 bg-bg-card">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
          <div>
            <p class="reveal text-sm tracking-widest uppercase mb-5 text-sage-light">O mně</p>
            <h2 class="reveal text-3xl font-extrabold md:text-4xl leading-snug mb-6" style="transition-delay:80ms">
              Péče s osobním<br />
              <em class="text-sage">přístupem</em>
            </h2>
            <div class="reveal h-0.5 w-16 bg-sage mb-8" style="transition-delay:160ms"></div>
            <p class="reveal text-base leading-relaxed mb-5 text-text-muted" style="transition-delay:240ms">
              Jsme nestátní zdravotnické zařízení poskytující komplexní rehabilitační péči v oboru fyzioterapie.
              Od roku 2007 se o vaše zdraví stará registrovaná fyzioterapeutka
              <strong class="text-text-main font-medium">Ilona Kozáková</strong>.
            </p>
            <p class="reveal text-base leading-relaxed mb-10 text-text-muted" style="transition-delay:320ms">
              Kladu důraz na individuální a komplexní přístup ke každému klientovi.
              Kombinuji moderní fyzioterapeutické metody s tradičními technikami pro dosažení nejlepších výsledků.
            </p>

          </div>

          <div class="reveal reveal-right relative overflow-hidden rounded-2xl shadow-lg" style="transition-delay:200ms">
            <img
              src="/assets/ilona-kozakova.jpg"
              alt="Fyzioterapie"
              class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-bg-base/80 via-transparent to-transparent" />
            <div class="absolute top-5 left-5 w-24 h-24 rounded-full bg-white flex flex-col items-center justify-center shadow-lg">
              <span class="text-[1.8rem] font-extralight text-sage leading-tight">{{ yearsOfExperience }}+</span>
              <span class="text-[0.55rem] tracking-widest uppercase text-gray-500 text-center leading-tight mt-0.5">let<br/>zkušeností</span>
            </div>
            <div class="absolute bottom-5 left-5 right-5 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl px-4 py-3">
              <p class="text-white font-semibold text-base leading-tight">Ilona Kozáková</p>
              <p class="text-white/70 text-xs tracking-wide mt-0.5">Registrovaný fyzioterapeut</p>
            </div>
          </div>
        </div>
      </section>

      <section id="sluzby" class="py-28">
        <div class="max-w-6xl mx-auto px-6">
          <p class="reveal text-sm tracking-widest uppercase mb-5 text-sage-light">Služby</p>
          <h2 class="reveal font-extrabold text-3xl md:text-4xl leading-snug mb-6 text-sage" style="transition-delay:80ms">
            Co pro vás mohu udělat
          </h2>
          <div class="reveal h-0.5 w-16 bg-sage mb-8" style="transition-delay:160ms"></div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="reveal rounded-2xl bg-bg-card p-8 border border-[rgba(250,250,250,0.06)] flex flex-col items-center text-center" style="transition-delay:0ms">
              <PersonStanding class="w-10 h-10 text-sage mb-4 animate-walk" />
              <h3 class="text-xl font-semibold text-text-main mb-3">Fyzioterapie</h3>
              <p class="text-text-muted leading-relaxed">
                Individuální terapie zaměřená na odstranění bolesti, zlepšení pohyblivosti a funkce pohybového aparátu.
                Využívám manuální techniky, mobilizace i cvičení na míru každému pacientovi.
              </p>
            </div>
            <div class="reveal rounded-2xl bg-bg-card p-8 border border-[rgba(250,250,250,0.06)] flex flex-col items-center text-center" style="transition-delay:100ms">
              <Hand class="w-10 h-10 text-sage mb-4 animate-massage" />
              <h3 class="text-xl font-semibold text-text-main mb-3">Masáže</h3>
              <p class="text-text-muted leading-relaxed">
                Masáže zad a šíje, Dornova metoda a Breussova masáž páteře.
                Uvolní svalové napětí, podpoří prokrvení a přinesou celkovou úlevu tělu i mysli.
              </p>
            </div>
            <div class="reveal rounded-2xl bg-bg-card p-8 border border-[rgba(250,250,250,0.06)] flex flex-col items-center text-center" style="transition-delay:200ms">
              <div class="flash-zap mb-4">
                <Zap class="w-10 h-10 text-sage" />
              </div>
              <h3 class="text-xl font-semibold text-text-main mb-3">Laserová terapie</h3>
              <p class="text-text-muted leading-relaxed">
                Neinvazivní terapeutická léčba pomocí laseru urychlující hojení tkání, tlumící záněty
                a zmírňující bolest kloubů, šlach i svalů.
              </p>
            </div>
            <div class="reveal rounded-2xl bg-bg-card p-8 border border-[rgba(250,250,250,0.06)] flex flex-col items-center text-center" style="transition-delay:300ms">
              <svg class="w-12 h-12 text-sage mb-4" viewBox="0 0 24 24" fill="currentColor">
                <path class="drop d1" d="M4,1 C2,5 1,9 1,12 A3,3,0,0,0,7,12 C7,9 6,5 4,1Z"/>
                <path class="drop d2" d="M12,1 C10,5 9,9 9,12 A3,3,0,0,0,15,12 C15,9 14,5 12,1Z"/>
                <path class="drop d3" d="M20,1 C18,5 17,9 17,12 A3,3,0,0,0,23,12 C23,9 22,5 20,1Z"/>
              </svg>
              <h3 class="text-xl font-semibold text-text-main mb-3">Lymfodrenáže</h3>
              <p class="text-text-muted leading-relaxed">
                Ruční i přístrojová lymfodrenáž pro podporu odtoku lymfy, snížení otoků a detoxikaci organismu.
                Vhodná po operacích, při chronických otocích i pro celkovou regeneraci.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="cenik" class="py-28 bg-bg-card">
        <div class="max-w-6xl mx-auto px-6">
          <div class="max-w-2xl mx-auto">
            <p class="reveal text-sm tracking-widest uppercase mb-5 text-sage-light">Ceník</p>
            <h2 class="reveal font-extrabold text-3xl md:text-4xl leading-snug mb-6" style="transition-delay:80ms">
              Přehled cen<br />
              <em class="text-sage">všech služeb</em>
            </h2>
            <div class="reveal h-0.5 w-16 bg-sage mb-8" style="transition-delay:160ms"></div>
            <p class="reveal text-text-muted leading-relaxed mb-10" style="transition-delay:240ms">
              Všechny ceny jsou orientační a může je ovlivnit rozsah ošetření.
              Pro přesnou nabídku kontaktujte provozovnu.
            </p>

            <div class="space-y-4">
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:0ms">
                <span class="text-text-main">Vstupní vyšetření, terapie (1. návštěva)</span>
                <span class="text-sage whitespace-nowrap">1 400 Kč / 60 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:50ms">
                <span class="text-text-main">Individuální terapie, odborné metody</span>
                <span class="text-sage whitespace-nowrap">1 000 Kč / 45 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:100ms">
                <span class="text-text-main">Masáž (záda, šíje)</span>
                <span class="text-sage whitespace-nowrap">1 000 Kč / 45 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:150ms">
                <span class="text-text-main">Dornova metoda, Breussova masáž</span>
                <span class="text-sage whitespace-nowrap">1 000 Kč / 45 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:200ms">
                <span class="text-text-main">Lymfodrenáž – ruční</span>
                <span class="text-sage whitespace-nowrap">1 400 Kč / 45 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:300ms">
                <span class="text-text-main">Fyzikální terapie – laser</span>
                <span class="text-sage whitespace-nowrap">180 Kč / 8 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:350ms">
                <span class="text-text-main">DD proudy, IF, TENS, Trab., MGT</span>
                <span class="text-sage whitespace-nowrap">200 Kč / 15 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:450ms">
                <span class="text-text-main">Lymfodrenáž přístrojová</span>
                <span class="text-sage whitespace-nowrap">400 Kč / 40 min</span>
              </div>
              <div class="reveal flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]" style="transition-delay:500ms">
                <span class="text-text-main">Tejp</span>
                <span class="text-sage whitespace-nowrap">200 – 300 Kč</span>
              </div>
            </div>
            <div class="mt-8 space-y-3 text-sm text-text-muted">
              <p>Pracoviště má smlouvu se zdravotní pojišťovnou <strong class="text-text-main font-medium">205 – Česká průmyslová zdravotní pojišťovna (ČPZP)</strong>.</p>
              <p>Terapie probíhá na přímou platbu.</p>
              <p>Upozorňuji klienty, že v případě kdy se nedostaví v objednaném termínu, bude mu účtována cena zameškaného výkonu.</p>
              <p>Omluva nejpozději 24 hodin před domluveným termínem.</p>
            </div>
            
          </div>
        </div>
      </section>

      <section id="galerie" class="py-28">
        <div class="max-w-6xl mx-auto px-6">
          <p class="reveal text-sm tracking-widest uppercase mb-5 text-sage-light">Galerie</p>
          <h2 class="reveal font-extrabold text-3xl md:text-4xl leading-snug mb-6 text-sage" style="transition-delay:80ms">
            Naše ordinace
          </h2>
          <div class="reveal h-0.5 w-16 bg-sage mb-8" style="transition-delay:160ms"></div>

          <div class="grid gap-4 md:grid-cols-2 md:grid-rows-3">
            <a href="/assets/ordinace-0-chodba.jpeg" data-fancybox="galerie" data-caption="Chodba" class="reveal overflow-hidden rounded-2xl shadow-lg block cursor-zoom-in md:row-span-3" style="transition-delay:0ms">
              <img
                src="/assets/ordinace-0-chodba.jpeg"
                alt="Chodba"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
              />
            </a>
            <a href="/assets/ordinace-1.jpg" data-fancybox="galerie" data-caption="Ordinace" class="reveal overflow-hidden rounded-2xl shadow-lg block cursor-zoom-in" style="transition-delay:100ms">
              <img
                src="/assets/ordinace-1.jpg"
                alt="Ordinace"
                class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300"
              />
            </a>
            <a href="/assets/ordinace-2.jpg" data-fancybox="galerie" data-caption="Ordinace 2" class="reveal overflow-hidden rounded-2xl shadow-lg block cursor-zoom-in" style="transition-delay:200ms">
              <img
                src="/assets/ordinace-2.jpg"
                alt="Ordinace 2"
                class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300"
              />
            </a>
            <a href="/assets/ordinace-3.jpg" data-fancybox="galerie" data-caption="Ordinace 3" class="reveal overflow-hidden rounded-2xl shadow-lg block cursor-zoom-in" style="transition-delay:300ms">
              <img
                src="/assets/ordinace-3.jpg"
                alt="Ordinace 3"
                class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300"
              />
            </a>
          </div>
        </div>
      </section>

      <section id="kontakt" class="py-28 bg-bg-card">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-16">
          <div class="reveal" style="transition-delay:0ms">
            <p class="text-sm tracking-widest uppercase mb-5 text-sage-light">Kontakt</p>
            <h2 class="font-extrabold text-3xl md:text-4xl leading-snug mb-6">
              Kde nás najdete?<br />
            </h2>
            <div class="h-0.5 w-16 bg-sage mb-8"></div>

            <div class="space-y-4">
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <div>
                  <p class="text-text-main font-medium">Kremličkova 990, Kolín</p>
                  <p class="text-text-muted">(parkování u budovy)</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.84 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.77 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 17z"/></svg>
                <div>
                  <p class="text-text-main font-medium">607 702 669</p>
                  <p class="text-text-muted">Telefonická objednávka je k dispozici v ordinační době.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                <div>
                  <p class="text-text-main font-medium">info@fyziokozakova.cz</p>
                  <p class="text-text-muted">Pošlete nám zprávu a my se ozveme zpět.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="reveal" style="transition-delay:100ms">
            <p class="text-sm tracking-widest uppercase mb-5 text-sage-light">Ordinační doba</p>
            <div class="h-0.5 w-16 bg-sage mb-8"></div>

            <div class="space-y-3">
              <div class="flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]">
                <span class="text-text-main">Pondělí</span>
                <span class="text-sage">14:00 – 18:00</span>
              </div>
              <div class="flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]">
                <span class="text-text-muted">Úterý</span>
                <span class="text-xs tracking-wider uppercase text-text-dim">Zavřeno</span>
              </div>
              <div class="flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]">
                <span class="text-text-muted">Středa</span>
                <span class="text-xs tracking-wider uppercase text-text-dim">Zavřeno</span>
              </div>
              <div class="flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]">
                <span class="text-text-main">Čtvrtek</span>
                <span class="text-sage">14:00 – 18:00</span>
              </div>
              <div class="flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]">
                <span class="text-text-muted">Pátek</span>
                <span class="text-xs tracking-wider uppercase text-text-dim">Zavřeno</span>
              </div>
              <div class="flex justify-between items-center py-4 border-b border-[rgba(250,250,250,0.08)]">
                <span class="text-text-muted">Sobota – Neděle</span>
                <span class="text-xs tracking-wider uppercase text-text-dim">Zavřeno</span>
              </div>
            </div>

            <div class="mt-8 p-5 rounded-2xl border border-[rgba(250,250,250,0.08)] bg-bg-raised">
              <p class="text-sm leading-relaxed text-text-muted">
                Ordinace funguje pouze <strong class="text-text-main font-medium">na objednávku</strong>.
                Pro rezervaci termínu kontaktujte mě telefonicky nebo e-mailem.
              </p>
            </div>
          </div>

          <div class="reveal rounded-2xl overflow-hidden shadow-lg" style="transition-delay:200ms">
            <iframe
              class="w-full h-96"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.7876758872335!2d15.190929176089823!3d50.0005952517472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e9bfd4265a3bf%3A0x857361f7d0bf1afd!2sKremli%C4%8Dkova%20990%2C%20Kol%C3%ADn!5e0!3m2!1scs!2scz!4v1700000000000!5m2!1scs!2scz"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>
    </main>

    <CookieBar />

    <footer class="py-8 bg-bg-base border-t border-border">
      <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="flex flex-col items-center md:items-start">
          <img src="/assets/logo.svg" alt="Logo" class="h-20 w-auto mb-2" />
        </div>

        <p class="text-xs text-center text-text-dim">
          © 2026 Fyzioterapie Ilona Kozáková · Kremličkova 990, Kolín · IČO 751 02 081
        </p>

        <div class="flex flex-col md:flex-row items-center gap-6">
          <div class="flex items-center gap-4">
            <a
              href="https://www.facebook.com/profile.php?id=100054559834134"
              target="_blank"
              rel="noopener noreferrer"
              class="text-text-dim hover:text-sage"
              aria-label="Facebook"
            >
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.407.593 24 1.324 24h11.495v-9.294H9.691v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.716-1.795 1.764v2.312h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.324V1.324C24 .593 23.407 0 22.676 0z"/>
            </svg>
            </a>
            <a
              href="https://www.instagram.com/fyziokozakova/"
              target="_blank"
              rel="noopener noreferrer"
              class="text-text-dim hover:text-sage"
              aria-label="Instagram"
            >
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.96.24 2.41.4a4.92 4.92 0 0 1 1.78 1.16 4.92 4.92 0 0 1 1.16 1.78c.16.45.344 1.24.4 2.41.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.96-.4 2.41a4.924 4.924 0 0 1-1.16 1.78 4.924 4.924 0 0 1-1.78 1.16c-.45.16-1.24.344-2.41.4-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.96-.24-2.41-.4a4.92 4.92 0 0 1-1.78-1.16 4.92 4.92 0 0 1-1.16-1.78c-.16-.45-.344-1.24-.4-2.41C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.96.4-2.41a4.92 4.92 0 0 1 1.16-1.78 4.92 4.92 0 0 1 1.78-1.16c.45-.16 1.24-.344 2.41-.4C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.736 0 8.332.013 7.052.072 5.77.131 4.632.307 3.673.582 2.405.931 1.385 1.517.52 2.383.186 2.717-.009 3.131-.07 3.673c-.058 1.28-.072 1.689-.072 4.327s.013 3.047.072 4.327c.058.542.244.956.578 1.29.866.866 1.886 1.453 3.154 1.803.959.276 2.097.452 3.379.511 1.28.059 1.689.072 4.327.072s3.047-.013 4.327-.072c1.282-.059 2.42-.235 3.379-.511 1.268-.35 2.288-.937 3.154-1.803.334-.334.52-.748.578-1.29.059-1.28.072-1.689.072-4.327s-.013-3.047-.072-4.327c-.058-.542-.244-.956-.578-1.29-.866-.866-1.886-1.453-3.154-1.803C19.47.307 18.332.131 17.05.072 15.77.013 15.361 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
              </svg>
            </a>
          </div>
          <div class="flex gap-6">
            <a href="tel:607702669" class="text-xs tracking-wider hover:underline text-text-dim">607 702 669</a>
            <a href="mailto:info@fyziokozakova.cz" class="text-xs tracking-wider hover:underline text-text-dim">info@fyziokozakova.cz</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup lang="ts">
import { onMounted } from 'vue'
import Navbar from './components/Navbar.vue'
import HeroSlider from './components/HeroSlider.vue'
import CookieBar from './components/CookieBar.vue'
import { PersonStanding, Hand, Zap } from 'lucide-vue-next'

const yearsOfExperience = new Date().getFullYear() - 2007

onMounted(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible')
          observer.unobserve(entry.target)
        }
      })
    },
    { threshold: 0.12 }
  )
  document.querySelectorAll('.reveal').forEach((el) => observer.observe(el))
})

const slides = [
  {
    src: '/assets/ordinace-1.jpg',
    alt: 'Fyzioterapie ordinace',
  },
  {
    src: '/assets/ordinace-2.jpg',
    alt: 'Terapeutická místnost',
  },
  {
    src: '/assets/ordinace-3.jpg',
    alt: 'Masáže a mobilizace',
  },
]
</script>

<style scoped>
/* Reveal animations */
.reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.65s ease, transform 0.65s ease;
}
.reveal.reveal-right {
  transform: translateX(40px);
}
.reveal.visible {
  opacity: 1;
  transform: translate(0, 0);
}

.flash-zap svg {
  animation: flash 1.5s ease-in-out infinite;
}
@keyframes flash {
  0%, 100% { fill: none; }
  50% { fill: #327355; }
}

.drop {
  animation: drip 1.8s ease-in infinite;
}
.d1 { animation-delay: 0s; }
.d2 { animation-delay: 0.6s; }
.d3 { animation-delay: 1.2s; }

@keyframes drip {
  0%   { transform: translateY(0);    opacity: 0; }
  10%  { transform: translateY(0);    opacity: 1; }
  75%  { transform: translateY(10px); opacity: 1; }
  90%  { transform: translateY(12px); opacity: 0; }
  91%  { transform: translateY(0);    opacity: 0; }
  100% { transform: translateY(0);    opacity: 0; }
}
</style>
