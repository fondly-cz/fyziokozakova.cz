# fyziokozakova.cz

Website for a physiotherapy practice built with Vue 3, TypeScript, Tailwind CSS, and Vite.

## Tech Stack

- **Vue 3** — component framework
- **TypeScript** — type safety
- **Tailwind CSS** — utility-first styling
- **Vite** — build tool and dev server
- **Fancyapps UI** — lightbox / gallery
- **Lucide Vue Next** — icon library

## Prerequisites

- [Node.js](https://nodejs.org/) v18+
- [pnpm](https://pnpm.io/) v8+

## Getting Started

```bash
# Install dependencies
pnpm install

# Start development server
pnpm dev

# Build for production
pnpm build

# Preview production build
pnpm preview
```

## Project Structure

```
src/
├── components/       # Vue components
│   ├── Navbar.vue
│   └── HeroSlider.vue
├── App.vue           # Root component
├── main.ts           # App entry point
└── index.css         # Global styles
public/               # Static assets (copied as-is)
dist/                 # Production build output
```

## Development Notes

- Tailwind config: [tailwind.config.cjs](tailwind.config.cjs)
- Vite config: [vite.config.ts](vite.config.ts)
- TypeScript config: [tsconfig.json](tsconfig.json)
