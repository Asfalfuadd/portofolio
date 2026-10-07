# Deployment Guide

This guide covers different deployment options for the Neubrutalist Portfolio website.

## 🚀 Local Development

### Requirements
- PHP 8.2+
- Composer
- Web server (Apache/Nginx) or use Laravel's built-in server

### Setup Steps
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Generate application key: `php artisan key:generate`
5. Start the server: `php artisan serve`

## 🌐 Production Deployment

### Shared Hosting

1. **Upload Files**: Upload all project files to your hosting provider
2. **Dependencies**: Run `composer install --optimize-autoloader --no-dev`
3. **Environment**: Set up `.env` file with production values
4. **Web Root**: Point your domain to the `public` directory
5. **Permissions**: Set proper file permissions (755 for folders, 644 for files)

### VPS/Cloud Deployment

#### Using Apache

1. **Install Dependencies**:
   ```bash
   sudo apt update
   sudo apt install apache2 php8.2 php8.2-cli php8.2-common php8.2-mysql php8.2-xml php8.2-curl
   ```

2. **Install Composer**:
   ```bash
   curl -sS https://getcomposer.org/installer | php
   sudo mv composer.phar /usr/local/bin/composer
   ```

3. **Clone and Setup**:
   ```bash
   cd /var/www/html
   git clone <your-repository>
   cd portfolio
   composer install --optimize-autoloader --no-dev
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set Permissions**:
   ```bash
   sudo chown -R www-data:www-data /var/www/html/portfolio
   sudo chmod -R 755 /var/www/html/portfolio
   sudo chmod -R 755 /var/www/html/portfolio/storage
   sudo chmod -R 755 /var/www/html/portfolio/bootstrap/cache
   ```

5. **Apache Virtual Host**:
   ```apache
   <VirtualHost *:80>
       ServerName your-domain.com
       DocumentRoot /var/www/html/portfolio/public
       
       <Directory /var/www/html/portfolio/public>
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

#### Using Nginx

1. **Nginx Configuration**:
   ```nginx
   server {
       listen 80;
       server_name your-domain.com;
       root /var/www/html/portfolio/public;
       
       index index.php index.html index.htm;
       
       location / {
           try_files $uri $uri/ /index.php?$query_string;
       }
       
       location ~ \.php$ {
           fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
           fastcgi_index index.php;
           fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
           include fastcgi_params;
       }
   }
   ```

### Docker Deployment

1. **Create Dockerfile**:
   ```dockerfile
   FROM php:8.2-fpm
   
   # Install dependencies
   RUN apt-get update && apt-get install -y \
       libpng-dev \
       libjpeg-dev \
       libfreetype6-dev \
       zip \
       unzip
   
   # Install Composer
   COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
   
   # Set working directory
   WORKDIR /var/www/html
   
   # Copy application files
   COPY . .
   
   # Install PHP dependencies
   RUN composer install --optimize-autoloader --no-dev
   
   # Set permissions
   RUN chown -R www-data:www-data /var/www/html
   
   EXPOSE 9000
   ```

2. **Docker Compose** (docker-compose.yml):
   ```yaml
   version: '3.8'
   services:
     app:
       build: .
       volumes:
         - .:/var/www/html
     
     nginx:
       image: nginx:alpine
       ports:
         - "80:80"
       volumes:
         - ./nginx.conf:/etc/nginx/conf.d/default.conf
         - .:/var/www/html
       depends_on:
         - app
   ```

## 🔧 Environment Configuration

### Production .env Settings

```env
APP_NAME="Portfolio Website"
APP_ENV=production
APP_KEY=your-32-character-key
APP_DEBUG=false
APP_URL=https://your-domain.com

LOG_CHANNEL=stack
LOG_LEVEL=error
```

### Optimization Commands

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize
```

## 📱 CDN and Performance

### Static Asset Optimization

1. **Image Optimization**: Use tools like ImageOptim or TinyPNG
2. **CSS/JS Minification**: Laravel Mix or Vite for asset compilation
3. **CDN Integration**: Consider Cloudflare or AWS CloudFront

### Caching Strategy

```php
// Add to .env for production
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

## 🔒 Security Considerations

### SSL Certificate
```bash
# Using Let's Encrypt
sudo certbot --apache -d your-domain.com
```

### Security Headers
Add to your web server configuration:
```
X-Frame-Options: DENY
X-Content-Type-Options: nosniff
X-XSS-Protection: 1; mode=block
Strict-Transport-Security: max-age=31536000; includeSubDomains
```

## 📊 Monitoring

### Basic Monitoring
- Set up log rotation
- Monitor disk space
- Configure error reporting
- Set up uptime monitoring

### Laravel Specific
```bash
# Check application health
php artisan route:list
php artisan config:show
```

## 🚨 Troubleshooting

### Common Issues

1. **500 Error**: Check file permissions and Laravel logs
2. **CSS not loading**: Verify public directory configuration
3. **Routing issues**: Clear route cache with `php artisan route:clear`

### Debug Commands
```bash
# View logs
tail -f storage/logs/laravel.log

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 📋 Checklist

Before going live:
- [ ] Environment variables configured
- [ ] File permissions set correctly
- [ ] SSL certificate installed
- [ ] Caching enabled
- [ ] Error logging configured
- [ ] Backups set up
- [ ] Domain pointed to public directory
- [ ] Contact form tested

---

**Need help with deployment? Check the issues section or contact support.**