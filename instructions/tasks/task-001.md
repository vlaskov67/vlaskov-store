# Task 001: Create Main Page for vlaskov.ch

## Objective
Build the main page for `vlaskov.ch` with a header, footer, promotional banner, product categories, and popular/new products section.

## Functional Requirements
- **Header**: 
  - Logo: Text "Vlaskov".
  - Language selector: Dropdown for EN, DE, FR, IT, RU.
  - Live search: Input showing results on typing (mock data for now).
  - Icons: Cart, tracking, wishlist, profile.
  - Tailwind: `bg-white shadow-md p-4 flex justify-between items-center`.
- **Banner**: 
  - Promotional slider (static image placeholder).
  - Tailwind: `bg-gray-100 h-64 flex items-center justify-center text-2xl font-montserrat text-black`.
- **Categories**: 
  - 3-4 clickable tiles linking to category pages.
  - Tailwind: `grid grid-cols-3 gap-4 p-4`.
- **Popular/New Products**: 
  - Tabbed section (Popular/New).
  - Product cards: Image, name, price, add-to-cart button, add-to-wishlist button.
  - Tailwind for cards: `border border-gray-200 rounded-lg p-4 hover:shadow-lg`.
- **Footer**: 
  - Links: About, Support, Delivery, Returns, Contacts, Social Media, Privacy Policy, Terms.
  - Tailwind: `bg-gray-800 text-white p-4 grid grid-cols-4 gap-4`.
- **Live Search**: 
  - Results on typing (mock data).
  - Tailwind: `border border-gray-300 rounded-lg p-2 focus:border-green-500`.

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**: 
  - Fade-in: `animate-fade-in duration-500`.
  - Hover on buttons/cards: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Parallax scrolling for banner: `bg-fixed`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Search input: `border-b-2 border-gray-300 focus:border-green-500 transition duration-200`.

## Technical Requirements
- Use Flask for routing (`/` for main page).
- Create HTML template (e.g., `templates/index.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for live search (e.g., `static/js/live-search.js`).
- Mock MySQL DB for products (schema: id, name, price, image, category).
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Use mock product data for catalog.
- Generate pull request with changes.
- Test functionality (live search, navigation).
