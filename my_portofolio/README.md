# Portfolio Website - Neubrutalist Design

A modern portfolio website built with Laravel 13, featuring a bold neubrutalist design system with hard borders, vibrant colors, and system fonts.

![Portfolio Website](https://via.placeholder.com/800x400/FFEB3B/000000?text=Portfolio+Website)

## ✨ Features

- **Neubrutalist Design**: Bold borders, hard shadows, and vibrant colors
- **Responsive Layout**: Mobile-first design with comprehensive breakpoints
- **Modern Stack**: Laravel 13 with Blade templating
- **Portfolio Sections**: 
  - Hero landing page
  - About page with experience timeline
  - Projects showcase with featured work
  - Contact form with validation
- **Interactive Elements**: Smooth animations and hover effects
- **Clean Code**: Well-structured controllers, routes, and views

## 🎨 Design System

Based on the neubrutalist design principles:

### Colors
- **Primary**: #FFEB3B (Bright Yellow)
- **Secondary**: #FF5252 (Red)
- **Tertiary**: #2196F3 (Blue)
- **Neutral**: #000000 (Black)

### Typography
- **System Font Stack**: -apple-system, sans-serif
- **Monospace**: JetBrains Mono
- **Bold weights** for headings and emphasis

### Components
- Hard borders (3px solid)
- Offset shadows (4px 4px 0)
- No gradients or blur effects
- Rounded corners (8px)

## 🚀 Quick Start

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm (optional, for asset compilation)

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd portfolio
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run the development server**
   ```bash
   php artisan serve
   ```

5. **Visit your site**
   Open http://localhost:8000 in your browser

## 📁 Project Structure

```
portfolio/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php    # Main portfolio logic
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php              # Main layout with CSS
│       └── portfolio/
│           ├── home.blade.php             # Landing page
│           ├── about.blade.php            # About page
│           ├── projects.blade.php         # Projects showcase
│           └── contact.blade.php          # Contact form
├── routes/
│   └── web.php                            # Application routes
└── DESIGN.md                              # Design specifications
```

## 🛠️ Customization

### Adding New Projects

Edit the `projects()` method in `app/Http/Controllers/PortfolioController.php`:

```php
$projects = [
    [
        'title' => 'Your Project Name',
        'description' => 'Project description...',
        'technologies' => ['Laravel', 'Vue.js', 'MySQL'],
        'github' => 'https://github.com/username/project',
        'live' => 'https://your-project.com',
        'featured' => true,
        'year' => '2024',
        'category' => 'Web Application'
    ],
    // Add more projects...
];
```

### Styling Customization

The main CSS is in `resources/views/layouts/app.blade.php`. Key CSS custom properties:

```css
:root {
    --color-primary: #FFEB3B;
    --color-secondary: #FF5252;
    --color-tertiary: #2196F3;
    --border-width: 3px;
    --shadow-offset: 4px;
    --border-radius: 0.5rem;
}
```

### Contact Form

The contact form includes validation. Customize the validation rules in `submitContact()` method:

```php
$request->validate([
    'name' => 'required|max:255',
    'email' => 'required|email|max:255',
    'subject' => 'required|max:255',
    'message' => 'required|max:1000'
]);
```

## 📱 Responsive Breakpoints

- **Desktop**: 1024px and above
- **Tablet**: 768px - 1023px
- **Mobile**: 480px - 767px
- **Small Mobile**: Below 480px

## 🎯 Pages

### Home Page (`/`)
- Hero section with call-to-actions
- Skills/services overview
- Featured projects preview
- Call-to-action section

### About Page (`/about`)
- Personal introduction
- Experience timeline
- Technical skills with progress bars
- Personal interests

### Projects Page (`/projects`)
- Featured projects with alternating layout
- Complete project grid
- Technology filtering
- Development process overview

### Contact Page (`/contact`)
- Contact form with validation
- Contact information cards
- FAQ section
- Response time information

## 🔧 Development

### Adding New Pages

1. **Create a new method** in `PortfolioController.php`
2. **Add route** in `routes/web.php`
3. **Create view** in `resources/views/portfolio/`
4. **Update navigation** in `layouts/app.blade.php`

### CSS Architecture

The CSS follows a systematic approach:
- CSS Custom Properties for design tokens
- Mobile-first responsive design
- Component-based styling
- Utility classes for common patterns

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 💬 Support

If you have any questions or need help with setup, please open an issue on GitHub.

---

**Built with ❤️ using Laravel 13 and Neubrutalist Design**
