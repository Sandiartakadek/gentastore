/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/*.php",
    "./index.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.scroll-smooth': {
          'scroll-behavior': 'smooth',
        },
      }
      addUtilities(newUtilities, ['responsive', 'hover'])
    }
  ],
}