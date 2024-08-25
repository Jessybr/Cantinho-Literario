/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./view/**/*.{html,js,php}', "./node_modules/flowbite/**/*.js"],
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
  plugins: [
    require('flowbite/plugin')
  ],
}

