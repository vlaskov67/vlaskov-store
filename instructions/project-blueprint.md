# Project Blueprint for vlaskov.ch

## Overview
The goal is to build an online store for tech accessories at `vlaskov.ch`, focusing on user-friendly design, performance, and security. The site targets users in Switzerland, supports CHF currency, and languages: EN, DE, FR, IT, RU.

## Tech Stack
- **Backend**: Flask (Python) for routing and logic.
- **Frontend**: Tailwind CSS for styling, vanilla JavaScript for interactivity.
- **Database**: SQLite for storing users, products, orders.
- **Integrations**: 
  - Payment: Stripe (use placeholder keys: `pk_test_xxx`, `sk_test_xxx`).
  - Shipping: Ship24 (placeholder: `ship24_api_key`).
  - Notifications: Twilio (SMS, placeholder: `twilio_sid`, `twilio_token`), SendGrid (email, placeholder: `sendgrid_key`).
  - Currency: Fixer.io (placeholder: `fixer_io_key`, daily updates).
  - Chatbot: OpenAI API (placeholder: `openai_key`).
- **Deployment**: Bluehost via GitHub Actions.

## Functional Requirements
1. **Main Page**:
   - Header: Logo, language selector (EN, DE, FR, IT, RU), live search, cart, tracking, wishlist, profile icons.
   - Banner: Promotional slider with Tailwind styles.
   - Categories: Clickable tiles for product categories.
   - Popular/New Products: Tabbed section with product cards (image, name, price, add-to-cart).
   - Footer: Company info, support links, contacts, social media.
2. **Catalog**:
   - Product cards: Image, name, price, color options (up to 5), add-to-cart, add-to-wishlist.
   - Filters: Model (autocomplete), price (slider), availability (checkbox).
   - Infinite scroll and live search.
3. **Cart & Checkout**:
   - Modal cart: List items, adjust quantity, remove items, apply promo codes.
   - Single-page checkout: Name, phone, email, address (Google API autofill), payment (Stripe, Twint).
   - Free shipping, estimated delivery (3-5 days).
4. **User Account**:
   - Registration/Login: Phone-based with OTP (SMS/email), optional email.
   - Profile: Manage details, view orders, wishlist, returns.
   - Password recovery: Via SMS or email with reCAPTCHA.
5. **Order Tracking**:
   - Timeline view of order statuses via Ship24 API.
   - Accessible for guests (via tracking number) and logged-in users.
6. **Returns**:
   - Form: Reason (dropdown), optional photos (max 5MB), comments.
   - Status updates: Requested, approved, rejected, returned, completed.
7. **Chatbot & Support**:
   - ChatGPT-based bot for FAQs, order status, product recommendations.
   - Switch to human operator after 3 "I don't know" or negative feedback.
   - File uploads (max 5MB), 24/7 support.
8. **SEO & Analytics**:
   - Meta tags, unique URLs for products.
   - Google Analytics for tracking (events: `order_completed`, `tracking_viewed`, `chat_started`).
   - CRM placeholders for logging user actions.
9. **Admin Panel**:
   - Manage products, orders, returns, promo codes.
   - Roles: superadmin (full access), admin, marketing, content, support.

## Design Requirements
- **Style**: Minimalistic, neumorphism, glassmorphism modals.
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accents (#34C759).
- **Typography**: Roboto (body), Montserrat (headings).
- **Animations**:
   - Fade-in: `animate-fade-in duration-500`.
   - Hover: `hover:bg-green-500 hover:text-white transition duration-300`.
   - Buttons: Neumorphism (`shadow-md hover:shadow-lg`).
   - Loading: Circular spinner with percentage.
   - Modals: Glassmorphism (`bg-white/30 backdrop-blur-md`).
   - Parallax scrolling on main page.
- **Tailwind Classes**:
   - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
   - Modals: `bg-white/30 backdrop-blur-md rounded-lg p-4`.
   - Cards: `border border-gray-200 rounded-lg p-4 hover:shadow-lg`.
   - Inputs: `border-b-2 border-gray-300 focus:border-green-500 transition duration-200`.

## Security & GDPR
- SSL via Cloudflare WAF.
- Login limits: 5 attempts/15 min.
- Cookie consent banner.
- Data deletion option (GDPR compliance).

## Performance
- Page load < 2 seconds.
- Use Cloudflare CDN for static assets.
- Logging: Sentry/New Relic, archive logs after 30 days.

## Bot Instructions
- Create files and folder structure as needed (e.g., `templates/`, `static/`).
- Use placeholders for API keys.
- Generate pull requests for each task.
- Ensure code is compatible with Flask and Tailwind CSS.
- Test functionality before creating pull requests.

## Steps to Build
1. Initialize Flask project (app.py, requirements.txt, MySQL DB).
2. Create main page (header, footer, catalog, live search).
3. Implement catalog with filters and product cards.
4. Build cart and checkout functionality.
5. Add user authentication and profile management.
6. Integrate tracking and returns.
7. Set up chatbot and support.
8. Configure analytics and admin panel.
