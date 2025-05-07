# Task 007: Create Chatbot and Support for vlaskov.ch

## Objective
Build a chatbot and support system for `vlaskov.ch` with FAQ responses, order status checks, and operator handoff.

## Functional Requirements
- **Chatbot Widget**:
  - Position: Bottom-right corner, opens on click.
  - Features: FAQ answers, order status check (for logged-in users), product recommendations.
  - Personalized greeting based on user language (EN, DE, FR, IT, RU).
  - Tailwind: `fixed bottom-4 right-4 bg-white/30 backdrop-blur-md rounded-lg p-4 shadow-lg`.
- **Operator Handoff**:
  - Triggers: 3 "I don't know" responses, negative feedback (👎), or user complaint.
  - 24/7 operator support, notify if operators busy (>2 min wait).
  - Tailwind for operator chat: `bg-white p-4 rounded-lg`.
- **Features**:
  - File uploads: Max 5MB (e.g., photos for returns).
  - Feedback: 👍/👎 for chatbot responses.
  - History: Store last 30 days, viewable in user profile.
- **Notifications**:
  - Operator messages: Pop-up and sound (toggleable).
  - Busy status: "All operators busy, wait or leave question" (SMS/email via Twilio/SendGrid placeholders).

## Design Requirements
- **Colors**: White (#FFFFFF), gray (#E5E7EB), black (#000000), green accent (#34C759).
- **Fonts**: Roboto (body), Montserrat (headings).
- **Animations**:
  - Chat fade-in: `animate-fade-in duration-300`.
  - Hover on buttons: `hover:bg-green-500 hover:text-white transition duration-300`.
  - Messages: `animate-slide-up duration-200`.
- **Tailwind Classes**:
  - Buttons: `bg-white shadow-md rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-300`.
  - Chat input: `border-b-2 border-gray-300 focus:border-green-500 w-full p-2`.
  - Messages: `bg-gray-100 p-2 rounded-lg mb-2`.

## Technical Requirements
- Use Flask for routing (e.g., `/chat`).
- Create HTML template (e.g., `templates/chat.html`).
- Add CSS in `static/css/style.css` (or inline Tailwind).
- Use JavaScript for chat functionality (e.g., `static/js/chat.js`).
- Mock MySQL DB for chat history (schema: id, user_id, message, timestamp).
- Use OpenAI API placeholder (`openai_key`) for chatbot.
- Use Twilio/SendGrid placeholders for notifications.
- Ensure page load < 2 seconds.

## Instructions for Bot
- Create necessary files and folder structure.
- Mock FAQ data and 5 chat sessions.
- Implement file upload and feedback system.
- Generate pull request with changes.
- Test chatbot responses, operator handoff, and history storage.
