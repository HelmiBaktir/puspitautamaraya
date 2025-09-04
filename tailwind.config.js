module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        'fade-in-up': {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'slide-in-left': {
          '0%': { opacity: '0', transform: 'translateX(-50px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'slide-in-right': {
          '0%': { opacity: '0', transform: 'translateX(50px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'zoom-in': {
          '0%': { opacity: '0', transform: 'scale(0.9)' },
          '100%': { opacity: '1', transform: 'scale(1)' },
        },
        'blur-up': {
          '0%': { opacity: '0', transform: 'translateY(40px)', filter: 'blur(8px)' },
          '100%': { opacity: '1', transform: 'translateY(0)', filter: 'blur(0)' },
        },
        'fadeUp': {
          '0%': { opacity: '0', transform: 'translateY(50px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'slideUp': {
          '0%': { opacity: '0', transform: 'translateY(60px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'slide-up-slow': {
          '0%': { opacity: '0', transform: 'translateY(100px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
      animation: {
        // Default speed
        'fade-in-up': 'fade-in-up 1s ease-out forwards',
        'slide-in-left': 'slide-in-left 1s ease-out forwards',
        'slide-in-right': 'slide-in-right 1s ease-out forwards',
        'zoom-in': 'zoom-in 1s ease-out forwards',
        'blur-up': 'blur-up 1s ease-out forwards',
        'fade-up': 'fadeUp 1s ease-out forwards',
        'slide-up': 'slideUp 1s ease-out forwards',

        // Slow variants
        'fade-in-up-slow': 'fade-in-up 3.5s ease-out forwards',
        'slide-in-left-slow': 'slide-in-left 3.5s ease-out forwards',
        'slide-in-right-slow': 'slide-in-right 3.5s ease-out forwards',
        'zoom-in-slow': 'zoom-in 3.5s ease-out forwards',
        'blur-up-slow': 'blur-up 3.5s ease-out forwards',
        'fade-up-slow': 'fadeUp 3.5s ease-out forwards',
        'slide-up-slow': 'slideUp 3.5s ease-out forwards',

        // Bounce
        'bounce-slow': 'bounce 3s infinite',
      },
    },
  },
  plugins: [],
}
