# Task 002: Create Product Catalog for vlaskov.ch

## Objective
Build the product catalog page for `vlaskov.ch` with product cards, filters, and live search functionality.

## Functional Requirements
- **Catalog Page**:
  - Display product cards in a grid (3 columns on desktop, 1 on mobile).
  - Infinite scroll for loading more products.
  - Tailwind: `grid grid-cols-3 gap-4 p-4 md:grid-cols-1`.
- **Product Cards**:
  - Elements: Image, name, price, up to 5 color options (circles), add-to-cart button, add-to-wishlist button.
  - Tailwind: `border border-gray-200 rounded-lg p-4 hover:shadow-lg`.
- **Filters**:
  - Model: Autocomplete dropdown.
  - Price: Slider (min/max).
  - Availability: Checkbox ("In stock only").
  - Fixed filter panel at top.
  - Tailwind: `sticky top-0 bg-white p-4 shadow-md`.
- **Live Search**:
  - Search bar (reuse from main page) with results on typing.
  - Tailwind: `border border-gray-300 rounded-lg p-2 focus:border-green-500`.

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Fade-in for cards: `animate-fade-in duration-500`.
  - Hover on cards/buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Color circles: `w-4 h-4 rounded-full hover:scale-110 transition duration-200`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Filters: `border border-gray-300 rounded-lg p-2 focus:border-green-500`.
  - Cards: `flex flex-col items-center space-y-2`.

## Technical Requirements
- Use Flask for routing (e.g., `/catalog`).
- Create HTML template (e.g., `templates/catalog.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for filters and infinite scroll (e.g., `static/js/catalog.js`).
- Mock MySQL DB for products (schema: id, name, price, image, category, stock, colors).
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Use mock product data with at least 20 products.
- Implement infinite scroll with a "load more" trigger.
- Generate pull request with changes.
- Test filters, search, and scroll functionality.
