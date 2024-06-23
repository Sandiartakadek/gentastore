/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/*.php",
    "./includes/*.php",
    "./index.php"
  ],
  theme: {
    extend: {
      dropShadow: {
        containerShadow: '0 8px 23px rgba(80, 107, 82, 0.13)',
      }
    },
  },
  plugins: [],
}