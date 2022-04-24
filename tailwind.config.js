module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/getcandy/stripe-payments/resources/views/**/*.blade.php',
    ],
  theme: {
    extend: {
        fontFamily: {
            'butler': ['butler', 'sans-serif']
        }
    },
  },
  plugins: [],
}
