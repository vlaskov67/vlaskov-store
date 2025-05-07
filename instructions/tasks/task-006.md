# Task 006: Create Order Tracking for vlaskov.ch

## Objective
Build the order tracking functionality for `vlaskov.ch` with a timeline view for guests and logged-in users.

## Functional Requirements
- **Tracking Page**:
  - Input: Tracking number (for guests) or order selection (for logged-in users).
  - Timeline: Display order statuses (e.g., Ordered, Shipped, Delivered) with dates.
  - Contact info: Show carrier details (phone/email).
  - Tailwind: `max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Features**:
  - Guest access: Enter tracking number to view status.
  - Logged-in access: Select order from profile.
  - Shareable tracking link for third parties.
  - Review option: Rate delivery speed/condition after completion.
- **Notifications**:
  - Key status updates: "Shipped", "At delivery point" (SMS/email via Twilio/SendGrid placeholders).

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Timeline fade-in: `animate-fade-in duration-300`.
  - Hover on buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 transition duration-200`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 w-full p-2`.
  - Timeline: `flex flex-col space-y-4 border-l-2 border-green-500 pl-4`.

## Technical Requirements
- Use Flask for routing (e.g., `/track`).
- Create HTML template (e.g., `templates/track.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for timeline updates (e.g., `static/js/track.js`).
- Mock MySQL DB for orders (schema: id, user_id, tracking_number, status, carrier_info).
- Use Ship24 placeholder (`ship24_api_key`) for tracking API.
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock tracking data for 5 orders.
- Implement shareable link generation.
- Generate pull request with changes.
- Test tracking for guests and logged-in users, including review submission.
