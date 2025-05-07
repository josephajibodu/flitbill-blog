# WordPress Local Development

This repository contains a WordPress site configured for local development and version control. It includes custom themes, plugins, and development configurations while excluding WordPress core files and environment-specific settings.

## 📋 Prerequisites

- PHP >= 8.1
- MySQL/MariaDB
- [WP-CLI](https://wp-cli.org/) (globally installed)
- Git
- Local development environment (choose one):
  - [Laravel Herd](https://herd.laravel.com/) (recommended for Mac users)
  - [LocalWP](https://localwp.com/)
  - [MAMP](https://www.mamp.info/)
  - [XAMPP](https://www.apachefriends.org/)
  - [Valet](https://laravel.com/docs/valet)

## 🚀 Local Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/your-username/your-wp-site.git
   cd your-wp-site
   ```

2. **Download WordPress Core**

   ```bash
   wp core download
   ```

3. **Configure WordPress**

   ```bash
   # Option 1: Copy the sample config
   cp wp-config-sample.php wp-config.php
   
   # Option 2: Create config with WP-CLI
   wp config create --dbname=your_db_name --dbuser=root --dbpass= --dbhost=127.0.0.1
   ```

4. **Set Up Database**

   ```bash
   # Option A: Create a fresh database
   wp db create
   
   # Option B: Import from SQL dump (if available)
   wp db import database.sql
   ```

5. **Install WordPress** (if not using an imported DB)

   ```bash
   wp core install \
     --url=http://localhost:8000 \
     --title="My Local Site" \
     --admin_user=admin \
     --admin_password=password \
     --admin_email=you@example.com
   ```

6. **Start Your Server**
   - If using Laravel Herd, you're good to go!
   - For other environments, ensure PHP/MySQL are running locally

## 📂 Version Control

### What's Included

- Custom themes and plugins (`wp-content/themes`, `wp-content/plugins`)
- `.gitignore`
- `README.md`

### What's Ignored

- WordPress core files
- Media uploads
- Sensitive configuration (`wp-config.php`)
- Default themes and plugins
- Cache and temporary files

## 🚀 Production Deployment

1. Clone this repository on your server
2. Install WordPress core: `wp core download`
3. Create and configure `wp-config.php` with production credentials
4. Import database if needed
5. Sync `wp-content/uploads/` via SFTP or rsync

## 💡 Troubleshooting

If you encounter setup issues, verify:

- WP-CLI is installed and accessible globally
- MySQL is running and accepting local connections
- Your server is serving from the correct root path
- File permissions are set correctly

## 📝 Notes

- This setup is optimized for local development
- WordPress core files are excluded from version control
- Custom themes and plugins are tracked in git
- Environment-specific settings should be managed separately