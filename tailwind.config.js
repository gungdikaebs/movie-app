/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      width: {
        '96': '24rem',
        '128': '32rem',
      },
    },
  },
  plugins: [],
}