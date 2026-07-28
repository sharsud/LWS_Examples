# Live Context Log (Changelog & Session Memory)

## 📌 Project Baseline State
- **Status:** Initial migration from legacy PHP/vanilla HTML to React + Tailwind CSS.
- **Active Task:** Refactoring registration page (`Registration.php` -> `Registration.jsx`).

## 📝 Recent Decision Log
- Decided to maintain separate standalone repositories for each subdomain (`examples`, `about`, `blog`) for deployment independence.
- Switched from inline JavaScript functions (`openPopup()`) to unified React component state (`isModalOpen`).
- Enforced mandatory `data-testid` attributes on all form elements to ensure compatibility with Selenium/Playwright scripts.

## 🐛 Open Tasks & Pending Bug Fixes
- [ ] Replace remaining native `alert()` calls on "terms and conditions" with custom visual toast indicators.