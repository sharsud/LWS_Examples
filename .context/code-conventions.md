# Code Conventions & Guardrails

## 🛑 Strict Rules for AI & Human Contributors
1. **Automation-First Locators:**
   - EVERY interactive UI element (`<input>`, `<button>`, `<a>`, `<select>`) MUST contain an explicit `data-testid` attribute alongside standard `id` and `name` attributes.
   - Example: `<button id="submitBtn" data-testid="register-submit-btn" ...>`

2. **Styling & Layout:**
   - **Tailwind Only:** No inline style tags (`style="display:none"`) or raw CSS files. Use Tailwind utility classes for layout, visibility, and transitions.
   - Use Tailwind's state modifiers for dynamic display (e.g., `hidden` vs `block`).

3. **React & Modern Standards:**
   - Use functional components with hooks (`useState`, `useEffect`).
   - Replace PHP includes (`generic_header.php`) with reusable React layout wrappers (`<Header />`, `<Footer />`).
   - Replace native browser popups or unstyled inline `<div>` modals with styled React overlay components.