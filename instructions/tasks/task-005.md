# Task 005: Create User Profile and Personal Cabinet for vlaskov.ch

## Objective
Build the personal cabinet for `vlaskov.ch` to manage user profile, orders, wishlist, and returns.

## Functional Requirements
- **Profile**:
  - View/edit: Name, phone, email (OTP confirmation for changes).
  - Password change: OTP confirmation.
  - Logout from all devices on phone/email change.
  - Tailwind: `max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Orders**:
  - List orders: Date, amount, status, "Track" button.
  - Tailwind: `divide-y divide-gray-200`.
- **Wishlist**:
  - List items: Image, name, price, add-to-cart button.
  - Max 50 items, notify on price/stock changes.
  - Tailwind: `grid grid-cols-2 gap-4 md:grid-cols-1`.
- **Returns**:
  - Submit return: Reason (dropdown), photos (max 5MB), comment.
  - View return status: Requested, approved, rejected, returned, completed.
  - Tailwind: `max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Notifications**:
  - Profile: "Details updated" (SMS/email).
  - Wishlist: "Price changed" or "In stock" (SMS/email).
  - Returns: Status updates (SMS/email).

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
  - Cards: `border border-gray-200 rounded-lg p-4 hover:shadow-lg`.

## Technical Requirements
- Use Flask for routing (e.g., `/profile`, `/orders`, `/wishlist`, `/returns`).
- Create HTML templates (e.g., `templates/profile.html`, `templates/orders.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for dynamic updates (e.g., `static/js/profile.js`).
- Mock MySQL DB for users, orders, wishlist, returns (schemas: user_id, order_id, product_id, return_id).
- Use Twilio/SendGrid placeholders for notifications.
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock data for orders, wishlist, returns.
- Implement OTP for profile changes.
- Generate pull request with changes.
- Test profile editing, order listing, wishlist, and return submission.
