/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'custom-radial': 'radial-gradient(118.63% 54.59% at 50% 58.32%, #000 0%, #131831 78%, #090b17 98.55%)',
      },
    },
  },
  plugins: [],
}
