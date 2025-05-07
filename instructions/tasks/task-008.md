# Task 008: Create Admin Panel for vlaskov.ch

## Objective
Build an admin panel for `vlaskov.ch` to manage products, orders, returns, and promo codes with role-based access.

## Functional Requirements
- **Dashboard**:
  - Metrics: Orders, sales, returns, visitors.
  - Tailwind: `grid grid-cols-4 gap-4 p-4 bg-white rounded-lg shadow-md`.
- **Product Management**:
  - Add/edit/delete products: Name, price, images, colors, stock.
  - CSV import/export.
  - Tailwind: `max-w-4xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Order Management**:
  - View/edit orders: Status, payment details, tracking (Ship24 placeholder).
  - Tailwind: `divide-y divide-gray-200`.
- **Return Management**:
  - Approve/reject returns, update statuses.
  - Tailwind: `max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Promo Codes**:
  - Create/edit promo codes: Code, discount, conditions, expiry.
  - Tailwind: `max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Roles**:
  - Superadmin: Full access.
  - Admin: All except system keys.
  - Marketing: Promo codes, A/B tests.
  - Content: Products, SEO.
  - Support: Returns, chats.
- **Notifications**:
  - New orders/returns: Email/SMS (Twilio/SendGrid placeholders).

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Section fade-in: `animate-fade-in duration-300`.
  - Hover on buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 transition duration-200`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 w-full p-2`.
  - Tables: `w-full border-collapse border border-gray-200`.

## Technical Requirements
- Use Flask for routing (e.g., `/admin/dashboard`, `/admin/products`).
- Create HTML templates (e.g., `templates/admin/dashboard.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for dynamic updates (e.g., `static/js/admin.js`).
- Mock MySQL DB for products, orders, returns, promo codes, users (schemas: product_id, order_id, return_id, promo_id, user_id, role).
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock data: 10 products, 5 orders, 2 returns, 3 promo codes.
- Implement role-based access control.
- Generate pull request with changes.
- Test dashboard metrics, product CRUD, and return approvals.
