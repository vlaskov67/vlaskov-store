# Task 004: Create User Authentication for vlaskov.ch

## Objective
Build user registration, login, and password recovery functionality for `vlaskov.ch`.

## Functional Requirements
- **Registration**:
  - Fields: Name, phone (required), email (optional), password (8-24 chars, 1 uppercase, 1 digit, 1 special char).
  - OTP confirmation via SMS (Twilio placeholder).
  - Tailwind: `max-w-md mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Login**:
  - Fields: Phone or email, password.
  - Limit: 5 attempts/15 min, then block with SMS/email recovery link.
  - Tailwind: `max-w-md mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Password Recovery**:
  - Options: SMS (OTP) or email (link), valid for 15 min.
  - Max 3 attempts/hour, reCAPTCHA v2.
  - Tailwind: `max-w-md mx-auto p-4 bg-white rounded-lg shadow-md`.
- **Notifications**:
  - Registration: "Account created" (SMS/email).
  - Login: "Blocked after 5 attempts" (SMS/email).
  - Recovery: "Password reset link sent" (SMS/email).

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Form fade-in: `animate-fade-in duration-300`.
  - Hover on buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 transition duration-200`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Inputs: `border-b-2 border-gray-300 focus:border-green-500 w-full p-2`.
  - Error messages: `text-red-500 text-sm mt-1`.

## Technical Requirements
- Use Flask for routing (e.g., `/register`, `/login`, `/password-reset`).
- Create HTML templates (e.g., `templates/register.html`, `templates/login.html`, `templates/password-reset.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for form validation (e.g., `static/js/auth.js`).
- Mock MySQL DB for users (schema: id, name, phone, email, password_hash, created_at).
- Use Twilio placeholder (`twilio_sid`, `twilio_token`) for OTP.
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock user data for testing.
- Implement reCAPTCHA v2 for password recovery.
- Generate pull request with changes.
- Test registration, login, and recovery (OTP, attempt limits).
