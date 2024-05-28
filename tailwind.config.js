/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
      ],
  darkMode: 'class',
  theme: {
    extend: {},
    fontFamily: {
        lato: ["Lato", 'sans'],
        poppins: ["Poppins", 'sans'],
        montserrat: ["Montserrat", 'serif']
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}

