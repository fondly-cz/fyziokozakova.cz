/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}"
  ],
  theme: {
    extend: {
      fontFamily: {
        display: ["Archivo", "ui-sans-serif", "system-ui"],
        body: ["Jost", "ui-sans-serif", "system-ui"],
      },
      colors: {
        sage: "#327355",
        "sage-light": "#4a9070",
        "sage-mid": "#295f45",
        "sage-dark": "#1f4434",
        "bg-base": "#CBCBCB",
        "bg-card": "#1c2520",
        "bg-raised": "#222d28",
        "text-main": "#e8e2d8",
        "text-muted": "#979797",
        "text-dim": "#4f5e58",
        border: "#2e3a34",
      },
      keyframes: {
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(28px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        walk: {
          '0%, 100%': { transform: 'rotate(-8deg) translateY(0px)' },
          '25%': { transform: 'rotate(0deg) translateY(-3px)' },
          '50%': { transform: 'rotate(8deg) translateY(0px)' },
          '75%': { transform: 'rotate(0deg) translateY(-3px)' },
        },
        massage: {
          '0%, 100%': { transform: 'rotate(-20deg)' },
          '50%': { transform: 'rotate(20deg)' },
        },
      },
      animation: {
        'fade-up': 'fadeUp 0.9s ease forwards',
        'walk': 'walk 1.2s ease-in-out infinite',
        'massage': 'massage 1s ease-in-out infinite',
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}
