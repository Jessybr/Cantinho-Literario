/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}", "./view/*.php", "./.php"],
  theme: {
    fontFamily: {
        'sans': ['Jost', 'sans-serif'],
      },
    screens: {
        'sm': {'max': '768px'},
        // antigo => @media (min-width: 640px) { ... }

        'md': {'max': '1290px'},
        // antigo => @media (min-width: 768px) { ... }
      },
    extend: {},
  },
  plugins: [],
}

