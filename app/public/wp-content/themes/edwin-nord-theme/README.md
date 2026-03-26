# Edwin Nord Portfolio — WordPress Theme v2.0

A clean, minimal professional portfolio WordPress theme.

## Installation

1. Zip the `edwin-nord-theme` folder
2. Go to WordPress Admin → Appearance → Themes → Add New → Upload Theme
3. Activate the theme
4. Set your front page: Settings → Reading → "A static page" → select your homepage

## Adding Projects

1. Go to **Projects** in the WordPress admin sidebar
2. Add New Project
3. Fill in: Title, Excerpt (description), Featured Image, Live URL, Category Tag
4. Check **"Show on homepage"** to display it in the Projects section
5. The theme shows up to 6 featured projects. If none exist, static placeholder projects are shown.

## Contact Form Setup

The form uses **EmailJS** by default:
1. Create a free account at emailjs.com
2. Create a service and email template
3. In `js/main.js`, replace:
   - `'GUY4sNoil3TacnxC0'` → your EmailJS public key
   - `'YOUR_SERVICE_ID'` → your service ID
   - `'YOUR_TEMPLATE_ID'` → your template ID

A WordPress AJAX fallback is also included if EmailJS is unavailable.

## Customisation

- **Colors / fonts**: Edit CSS variables at the top of `style.css`
- **Accent color**: `--accent: #C8392B;`
- **About section stats**: Edit directly in `index.php` (the stat cards)
- **Skills lists**: Edit the PHP arrays in `index.php`
- **Hero copy**: Edit the hero section in `index.php`

## Theme Structure

```
edwin-nord-theme/
├── style.css          ← Theme styles + header comment
├── functions.php      ← Enqueues, CPT, meta boxes
├── index.php          ← Front page template (all sections)
├── header.php         ← Nav + <head>
├── footer.php         ← Footer + wp_footer()
├── js/
│   └── main.js        ← Nav scroll, reveal animations, contact form
└── README.md
```

## Screenshot

Add a `screenshot.png` (1200×900px) to the theme root to show a preview in the WP admin.
