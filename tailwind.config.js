/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./includes/**/*.php",
    "./pages/**/*.php",
    "./services/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        forest: {
          900: "#152A20",
          800: "#1F3B2C",
          700: "#2C4A3B",
          600: "#3A5C49",
        },
        olive: {
          600: "#6E7A46",
          500: "#8A9459",
          300: "#B7BE94",
        },
        clay: {
          600: "#A6653A",
          500: "#BE7C4D",
          100: "#F2DFC8",
        },
        cream: {
          100: "#FBF8F1",
          200: "#F5F0E4",
        },
        sand: {
          300: "#E9DDC5",
        },
        ink: {
          900: "#22261F",
          600: "#54584C",
          400: "#83887A",
        },
      },
      fontFamily: {
        display: ["Fraunces", "ui-serif", "Georgia", "serif"],
        body: ["Manrope", "-apple-system", "sans-serif"],
      },
      borderRadius: {
        xl2: "22px",
        xl3: "32px",
      },
      boxShadow: {
        soft: "0 8px 24px rgba(31,59,44,.06)",
        softmd: "0 20px 45px rgba(31,59,44,.10)",
        softlg: "0 30px 70px rgba(31,59,44,.14)",
      },
    },
  },
  plugins: [],
};
