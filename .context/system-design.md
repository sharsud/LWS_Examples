# System Design & Architecture

## 🏗️ Repository Strategy
- **Deployment:** Standalone repository dedicated exclusively to `examples.learnwithpsudo.com`.
- **Hosting:** Independent static/single-page application deployment pointing to the `examples` subdomain.

## 🛠️ Technical Stack
- **Framework:** React.js (Vite build setup).
- **Styling:** Tailwind CSS (replaces legacy custom CSS assets).
- **Icons & Assets:** Lucide React / SVG icons.

## 📁 Directory Structure
```text
/examples-learnwithpsudo
├── public/
│   └── favicon.ico
├── src/
│   ├── components/       # Reusable UI components (Modals, Forms, Nav)
│   │   ├── FormElements/
│   │   └── Layout/
│   ├── pages/            # Test Sandbox Pages
│   │   ├── Registration.jsx
│   │   ├── Login.jsx
│   │   └── DynamicElements.jsx
│   ├── styles/
│   │   └── index.css     # Tailwind directives
│   ├── App.jsx           # Main router & layout container
│   └── main.jsx
|── .context/ 
|    ├── product-scope.md
|    ├── system-design.md
|    ├── system-design.md
|    ├── code-conventions.md
|    ├── roadmap.md
|    ├── ui-ux.md
|    └── changelog.md
├── package.json
└── tailwind.config.js