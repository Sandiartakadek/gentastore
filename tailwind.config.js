/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/*.php",
    "./includes/*.php",
    "./index.php"
  ],
  theme: {
    extend: {
      colors: {
        "mainText": "rgba(52, 52, 52, 0.8)",
      },
      dropShadow: {
        containerShadow: '0 8px 23px rgba(80, 107, 82, 0.13)',
      }
    },
  },
  plugins: [],
}