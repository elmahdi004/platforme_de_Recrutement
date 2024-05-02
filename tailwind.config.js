/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        primary:'#1A3454',
        secondary:'#7a8591',
        main:'#1967d2',
        textPrimary:'#404046'
      }
    },
  },
  plugins: [],
}

