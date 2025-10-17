/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pramuka-blue': {
          50: '#e6f0ff',
          100: '#b3d4ff',
          200: '#80b8ff',
          300: '#4d9cff',
          400: '#1a80ff',
          500: '#0066e6',
          600: '#0052b3',
          700: '#003d80',
          800: '#00294d',
          900: '#00141a',
        },
        'pramuka-yellow': {
          50: '#fffbeb',
          100: '#fff3c1',
          200: '#ffeb97',
          300: '#ffe36d',
          400: '#ffdb43',
          500: '#ffd319',
          600: '#e6be00',
          700: '#b39400',
          800: '#806a00',
          900: '#4d4000',
        },
        'pramuka-orange': {
          50: '#fff4e6',
          100: '#ffddb3',
          200: '#ffc680',
          300: '#ffaf4d',
          400: '#ff981a',
          500: '#ff8800',
          600: '#e67a00',
          700: '#b35f00',
          800: '#804400',
          900: '#4d2900',
        }
      }
    },
  },
  plugins: [],
}
