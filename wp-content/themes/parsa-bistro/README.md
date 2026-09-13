# 🍽️ Parsa Bistro - WordPress Theme

A modern, elegant restaurant WordPress theme featuring digital menus, dietary filtering, real-time table reservations, and a luxurious dark theme with gold accents.

![WordPress Theme](https://img.shields.io/badge/WordPress-6.0%2B-blue)
![License](https://img.shields.io/badge/License-GPL--2.0-blue)
![Status](https://img.shields.io/badge/Status-Production-success)

## ✨ Features

- **📱 Fully Responsive Design** - Optimized for all devices including mobile, tablet, and desktop
- **🍴 Interactive Digital Menu** - Filter by category and dietary preferences with custom post types
- **📅 Real-time Table Reservations** - Built-in reservation form with time slot selection
- **🎨 Elegant Dark Theme** - Obsidian background with gold accents for a luxurious feel
- **⚡ Performance Optimized** - Lightweight and fast-loading
- **🔍 Search Functionality** - Quick menu item search
- **♿ Accessible** - WCAG compliant with proper ARIA labels and keyboard navigation
- **🍷 Wine Pairing Recommendations** - Expert suggestions for each dish
- **🎛️ Custom Post Types** - Menu Items and Specials with custom taxonomies
- **📸 Featured Images** - Support for dish photos and gallery

## 📦 Installation

### Via WordPress Admin

1. Download the theme ZIP file
2. Go to **Appearance > Themes** in WordPress admin
3. Click **Add New** > **Upload Theme**
4. Select the ZIP file and click **Install Now**
5. Click **Activate**

### Via FTP/SFTP

1. Upload the `parsa-bistro` folder to `/wp-content/themes/`
2. Go to **Appearance > Themes** in WordPress admin
3. Click **Activate** on Parsa Bistro theme

## 🛠️ Theme Setup

### 1. Configure Navigation

1. Go to **Appearance > Menus**
2. Create a new menu and assign it to **Primary Navigation**
3. Add menu items: About Us, Our Menu, Chef's Specials, Photos, Reviews, Contact & Hours

### 2. Add Menu Items

1. Go to **Menu Items** in WordPress admin
2. Click **Add New** to create menu items
3. Fill in:
   - **Title**: Dish name (e.g., "Parsa Special Wagyu Steak")
   - **Description**: Short description
   - **Price**: In the custom meta box (e.g., "$145")
   - **Wine Pairing**: In the custom meta box
   - **Ingredients**: One per line in the custom meta box
   - **Featured Image**: Upload dish photo
   - **Menu Categories**: Select category (Steaks, Pasta, Seafood, etc.)
   - **Dietary Preferences**: Select tags (Gluten-Free, Vegetarian, Vegan, etc.)

### 3. Add Specials

1. Go to **Specials** in WordPress admin
2. Click **Add New** to create featured dishes
3. Fill in title, description, and featured image
4. Add price in the custom meta box

### 4. Customize Theme Options

1. Go to **Appearance > Customize**
2. **Site Identity**: Set logo, site title, and tagline
3. **Hero Image**: Set the background image for the hero section
4. **Colors**: Adjust gold accent colors if needed

## 📁 Theme Structure

```
parsa-bistro/
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
├── template-parts/
│   ├── hero.php
│   ├── about.php
│   ├── menu.php
│   ├── specials.php
│   ├── gallery.php
│   ├── reviews.php
│   ├── reservation.php
│   └── contact.php
├── functions.php
├── index.php
├── header.php
├── footer.php
├── style.css
└── README.md
```

## 🎨 Customization

### Colors

Edit CSS variables in `style.css`:

```css
:root {
  --bg-primary: #0a0b0e;
  --gold-primary: #d4af37;
  --gold-light: #f3e5ab;
  /* ... more variables */
}
```

### Custom Post Types

The theme includes two custom post types:

**Menu Items** (`menu_item`)
- Categories: Steaks, Pasta, Seafood, Desserts, Cocktails
- Dietary: Gluten-Free, Vegetarian, Vegan, Chef's Pick
- Custom fields: Price, Wine Pairing, Ingredients

**Specials** (`special`)
- Featured dishes displayed on homepage
- Custom fields: Price

### Adding Custom CSS

Use the WordPress Customizer or create a child theme to add custom CSS without losing changes on theme updates.

## 📱 Mobile Responsiveness

The theme is fully responsive with optimized layouts for:
- 📱 Mobile phones (< 480px)
- 📱 Large phones/small tablets (< 768px)
- 💻 Tablets (< 992px)
- 🖥️ Desktop (992px+)

### Mobile Features
- Touch-optimized navigation drawer
- Horizontal scrolling for menu categories
- Single-column layouts for grids
- Proper z-index stacking for modals
- iOS input zoom prevention
- Reduced motion support

## 🔧 Development

### Child Theme

To customize the theme safely, create a child theme:

```css
/* style.css in child theme */
/*
Theme Name: Parsa Bistro Child
Template: parsa-bistro
*/

@import url("../parsa-bistro/style.css");

/* Your custom CSS here */
```

```php
/* functions.php in child theme */
<?php
add_action('wp_enqueue_scripts', 'parsa_child_enqueue_styles');
function parsa_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
?>
```

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📄 License

This theme is licensed under the GNU General Public License v2.0 or later.

## 👨‍🍳 Author

**Parsa Restaurant Team**

- Website: [https://parsa-restaurant.com](https://parsa-restaurant.com)
- GitHub: [@Parsa111](https://github.com/Parsa111)

## 🙏 Acknowledgments

- Google Fonts for beautiful typography
- WordPress theme development standards
- Modern CSS features (CSS Variables, Grid, Flexbox)

## 📞 Support

For theme support:
- Email: info@parsa-restaurant.com
- Phone: +1 (212) 555-8900

## 🔄 Changelog

### Version 1.0.0
- Initial release
- Custom post types for Menu Items and Specials
- Responsive design with mobile-first approach
- Interactive menu filtering
- Reservation form with time slots
- Dark obsidian theme with gold accents

---

Made with ❤️ by Parsa Restaurant Team
