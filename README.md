# 🍽️ Parsa Restaurant & Bistro

A modern, elegant restaurant website built with WordPress and Supabase, featuring digital menus, real-time table reservations, and a luxurious dark theme with gold accents.

![WordPress](https://img.shields.io/badge/WordPress-6.0%2B-blue)
![Supabase](https://img.shields.io/badge/Supabase-PostgreSQL-green)
![License](https://img.shields.io/badge/License-GPL--2.0-blue)
![Status](https://img.shields.io/badge/Status-Production-success)

## ✨ Features

- **📱 Fully Responsive Design** - Optimized for all devices including mobile, tablet, and desktop
- **🍴 Interactive Digital Menu** - Filter by category and dietary preferences
- **📅 Real-time Table Reservations** - Easy booking system with time slot selection
- **🎨 Elegant Dark Theme** - Obsidian background with gold accents for a luxurious feel
- **⚡ Fast Performance** - Lightweight and optimized for speed
- **🔍 Search Functionality** - Quick menu item search
- **♿ Accessible** - WCAG compliant with proper ARIA labels and keyboard navigation
- **🍷 Wine Pairing Recommendations** - Expert suggestions for each dish

## 🚀 Live Demo

Visit the live site: [Parsa Restaurant](https://parsa-restaurant.com)

## 📸 Screenshots

![Hero Section](https://via.placeholder.com/800x400/0a0b0e/d4af37?text=Hero+Section)
![Menu Section](https://via.placeholder.com/800x400/0a0b0e/d4af37?text=Menu+Section)
![Reservation Form](https://via.placeholder.com/800x400/0a0b0e/d4af37?text=Reservation+Form)

## 🛠️ Technologies Used

- **WordPress 6.0+** - Content management system
- **Supabase** - PostgreSQL database backend
- **PHP 7.4+** - Server-side scripting
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with CSS variables and Flexbox/Grid
- **JavaScript (ES6+)** - Interactive features

## 📦 Installation

### Prerequisites
- Web server (Apache/Nginx) or PHP-enabled hosting
- Supabase account with PostgreSQL database
- PHP 7.4 or higher
- WordPress 6.0 or higher

### Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/Parsa111/WordPress-website.git
cd WordPress-website
```

2. Configure Supabase database:
   - Create a new project in Supabase
   - Get your database credentials (host, name, username, password)
   - Update `wp-config.php` with your Supabase credentials

3. Install PG4WP plugin (for PostgreSQL support):
   - Download PG4WP from https://github.com/Neurodynamic/PG4WP
   - Extract to `wp-content/plugins/pg4wp/`

4. Upload to your web server:
   - Upload all files to your web server's root directory
   - Ensure `wp-content` directory is writable

5. Run WordPress installation:
   - Visit your site URL in a browser
   - Follow the WordPress installation wizard
   - Create your admin account

6. Activate the Parsa Bistro theme:
   - Go to Appearance > Themes in WordPress admin
   - Click "Activate" on Parsa Bistro theme

7. Configure the theme:
   - Go to Appearance > Menus to set up navigation
   - Add menu items through the "Menu Items" custom post type
   - Add specials through the "Specials" custom post type

## 📁 Project Structure

```
WordPress-website/
├── assets/
│   ├── css/
│   │   ├── main.css
│   │   └── style.css
│   ├── images/
│   │   ├── hero.jpg
│   │   ├── dish-wagyu.jpg
│   │   ├── dish-pasta.jpg
│   │   └── ...
│   └── js/
│       └── main.js
├── scripts/
│   ├── build-zip.js
│   ├── bundle-vercel.js
│   └── generate-dish-pages.js
├── public/
├── preview/
├── admin.html
├── dish-*.html
├── index.html
├── package.json
├── server.js
└── README.md
```

## 🎨 Customization

### Colors
Edit the CSS variables in `style.css` or the inline styles in `index.html`:

```css
:root {
  --bg-primary: #0a0b0e;
  --gold-primary: #d4af37;
  --gold-light: #f3e5ab;
  /* ... more variables */
}
```

### Menu Items
Update dish information in the JavaScript `DISH_DETAILS` object in `index.html` or `assets/js/main.js`.

## 📱 Mobile Responsiveness

The website is fully responsive with optimized layouts for:
- 📱 Mobile phones (< 480px)
- 📱 Large phones/small tablets (< 768px)
- 💻 Tablets (< 992px)
- 🖥️ Desktop (992px+)

## 🔧 Development

### Adding New Dish Pages

Run the dish page generator script:

```bash
node scripts/generate-dish-pages.js
```

### Building for Production

```bash
node scripts/build-zip.js
```

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📄 License

This project is licensed under the GNU General Public License v2.0 - see the [LICENSE](LICENSE) file for details.

## 👨‍🍳 Author

**Parsa Restaurant Team**

- Website: [https://parsa-restaurant.com](https://parsa-restaurant.com)
- GitHub: [@Parsa111](https://github.com/Parsa111)

## 🙏 Acknowledgments

- Google Fonts for beautiful typography
- Icons from various open-source libraries
- Inspiration from luxury restaurant websites worldwide

## 📞 Contact

For support or questions:
- Email: info@parsa-restaurant.com
- Phone: +1 (212) 555-8900

---

Made with ❤️ by Parsa Restaurant Team
