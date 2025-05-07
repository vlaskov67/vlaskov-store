# Task 010: Initialize Project and Set Up Integrations for vlaskov.ch

## Objective
Initialize the Flask project for `vlaskov.ch` and set up placeholders for external integrations.

## Functional Requirements
- **Project Setup**:
  - Create Flask app with basic routing.
  - Set up MySQL database connection.
  - Configure Cloudflare CDN for static assets.
- **Integrations**:
  - Stripe: Payment gateway (placeholder: `pk_test_xxx`, `sk_test_xxx`).
  - Ship24: Order tracking (placeholder: `ship24_api_key`).
  - Twilio: SMS notifications (placeholder: `twilio_sid`, `twilio_token`).
  - SendGrid: Email notifications (placeholder: `sendgrid_key`).
  - Fixer.io: Currency updates (placeholder: `fixer_io_key`, daily cron).
  - OpenAI: Chatbot (placeholder: `openai_key`).
- **Security**:
  - Enable SSL via Cloudflare WAF.
  - Mock cookie consent logic (store user consent).
- **Logging**:
  - Set up Sentry/New Relic for error tracking (placeholders: `sentry_dsn`, `newrelic_key`).
  - Log actions to MySQL (30-day retention).

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - None required for this task.
- **Tailwind Classes**:
  - None required for this task.

## Technical Requirements
- Use Flask for project setup (e.g., `app.py`).
- Create config file (e.g., `config.py` or `.env`).
- Set up MySQL DB (schemas: users, products, orders, logs).
- Add integration libraries (e.g., `stripe`, `requests` for Ship24, `twilio`).
- Create script for cron job (e.g., `scripts/currency_update.py`).
- Add CSS/JS in `static/` for future use.
- Ensure initial setup completes in < 5 minutes.

## Instructions for Bot
- Create necessary files and folder structure (e.g., `app.py`, `static/`, `templates/`).
- Mock MySQL DB with initial schemas.
- Use placeholder keys for all integrations.
- Generate pull request with changes.
- Test Flask app (basic route `/` returns 200) and DB connection.
