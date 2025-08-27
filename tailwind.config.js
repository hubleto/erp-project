/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  content: [
    "./vendor/hubleto/erp/**/*.{html,js,twig,tsx}",
    "./vendor/hubleto/framework/**/*.{tsx,twig}",
    "./node_modules/primereact/**/*.{js,ts,jsx,tsx}",
  ],
  safelist: [
    'hubleto-lookup__indicator',
    'hubleto-lookup__control',
    'hubleto-lookup__input-container',
    'hubleto-lookup__value-container',
    'hubleto-lookup__input',
  ],
  plugins: [],
}

