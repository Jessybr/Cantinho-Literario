/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}", "./view/*.php", "./.php"],
  theme: {
    fontFamily: {
        'sans': ['Jost', 'sans-serif'],
      },
    screens: {
        'sm': '240px',
        // => @media (min-width: 640px) { ... }

        'md': '600px',
        // => @media (min-width: 768px) { ... }

        'lg': '768px'
      },
    extend: {},
  },
  plugins: [],
}

