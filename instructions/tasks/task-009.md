# Task 009: Implement SEO and Analytics for vlaskov.ch

## Objective
Set up SEO optimization and analytics tracking for `vlaskov.ch` to improve search visibility and monitor user actions.

## Functional Requirements
- **SEO**:
  - Meta tags: Unique title, description for each page (main, catalog, product).
  - Product URLs: `/product/<sku>` with SEO-friendly slugs.
  - SEO block: Text description at bottom of catalog page.
  - Tailwind for SEO block: `bg-gray-100 p-4 mt-4 text-sm text-gray-700`.
- **Analytics**:
  - Google Analytics: Track events (`order_completed`, `tracking_viewed`, `chat_started`).
  - Mock CRM integration: Log actions (orders, registrations, returns).
  - Event logging: Timestamp, user_id, action details.
- **Cookie Consent**:
  - Banner: Prompt for cookie acceptance (GDPR).
  - Tailwind: `fixed bottom-0 bg-white/30 backdrop-blur-md p-4 rounded-t-lg shadow-lg`.

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Cookie banner fade-in: `animate-fade-in duration-300`.
  - Hover on buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Cookie banner buttons: `bg-green-500 text-white p-2 rounded-lg hover:bg-green-600`.

## Technical Requirements
- Use Flask for routing (e.g., `/cookie-consent`).
- Create HTML template (e.g., `templates/partials/seo-block.html`, `templates/partials/cookie-banner.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for analytics and cookie consent (e.g., `static/js/analytics.js`).
- Mock MySQL DB for CRM logs (schema: id, user_id, action, timestamp).
- Use Google Analytics placeholder (`UA-XXX-X`) for tracking.
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock SEO meta tags for 5 products and catalog.
- Implement Google Analytics with 3 event triggers.
- Generate pull request with changes.
- Test SEO tags, cookie banner functionality, and event logging.
