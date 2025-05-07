# Task 003: Create Cart and Checkout for vlaskov.ch

## Objective
Build the cart and checkout functionality for `vlaskov.ch` with a modal cart and single-page checkout.

## Functional Requirements
- **Cart (Modal)**:
  - Triggered by cart icon in header.
  - List items: Image, name, price, quantity selector, remove button.
  - Promo code input with discount display.
  - "Proceed to Checkout" button.
  - Tailwind: `fixed right-0 top-0 w-80 bg-white/30 backdrop-blur-md p-4 rounded-lg shadow-lg`.
- **Checkout (Single Page)**:
  - Fields: Name, phone (required), email (required), address (Google API autofill), ZIP code, comment (optional).
  - Payment options: Stripe (placeholder), Twint (placeholder).
  - Free shipping, estimated delivery: "3-5 days".
  - GDPR checkbox: "Agree to Terms and Privacy Policy".
  - Tailwind: `max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Notifications**:
  - Cart: "Item added" (1-sec toast).
  - Checkout: "Order confirmed" page/modal.

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Modal fade-in/out: `animate-fade-in duration-300`.
  - Hover on buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 transition duration-200`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 w-full p-2`.
  - Toast: `bg-green-500 text-white p-2 rounded-lg fixed bottom-4 right-4`.

## Technical Requirements
- Use Flask for routing (e.g., `/cart`, `/checkout`).
- Create HTML templates (e.g., `templates/cart.html`, `templates/checkout.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for modal and quantity selector (e.g., `static/js/cart.js`).
- Mock MySQL DB for orders (schema: id, user_id, items, total, status).
- Use Stripe placeholder (`pk_test_xxx`) for payment.
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock order data for cart/checkout.
- Implement modal close on outside click.
- Generate pull request with changes.
- Test cart (add/remove items, promo code) and checkout (form validation).
