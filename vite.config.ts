import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],
  base: '/', // změň na '/repo-name/' pokud nepoužíváš vlastní doménu
  server: {
    port: 5173
  }
})
