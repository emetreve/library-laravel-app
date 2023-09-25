/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
              'grayMain':'#36454F',
              'grayLight': '#4E4E4E',
              'grayHeavy':'#3D3B3B',
            },
          },
    },
    plugins: [],
}
