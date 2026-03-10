/* eslint-disable */

// This file allows TypeScript to understand `.vue` imports.
// It is required when using Vue with TypeScript.

declare module '*.vue' {
  import type { DefineComponent } from 'vue'
  const component: DefineComponent<{}, {}, any>
  export default component
}
