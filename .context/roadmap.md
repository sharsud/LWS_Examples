# Execution Roadmap

## Phase 1: Legacy Code Cleanup & Modularization (Current)
- [x] Extract legacy HTML structure across demo pages.
- [ ] Consolidate all inline styles (`<style>` tags and `style="..."` attributes) into a shared `./assets/css/common.css`.
- [ ] Consolidate all inline scripts (`<script>` tags and event listeners) into a shared `./assets/js/common.js`.
- [ ] Standardize header and footer inclusion across all pages using native PHP directives (`require_once`).

## Phase 2: Automation Sandbox Expansion & Locator Alignment
- [ ] Append explicit `data-testid` attributes to all interactive elements across `index.php`, `./pages/login.php`, `./pages/webElements.php`, etc., while strictly preserving existing `id` and `name` attributes.
- [ ] Ensure deterministic UI states for test automation (modals, dynamic alerts, loading spinners, dropdowns) using vanilla JavaScript.
- [ ] Audit and resolve relative file pathing for asset loading across root and nested subdirectories (`./pages/`).

## Phase 3: Ecosystem & Deployment Sync
- [ ] Align common navigation headers, footers, and global CSS styling with main `learnwithpsudo.com` design guidelines.
- [ ] Verify test stability across Selenium, Playwright, and Puppeteer test runners.
- [ ] Deploy updated PHP sandbox environment to `examples.learnwithpsudo.com`.