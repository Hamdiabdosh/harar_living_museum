# Harar Living Museum Website

A comprehensive website for the Harar Living Museum, showcasing the rich cultural heritage of Harar, Ethiopia.

## Features

- Interactive exploration of Harar's landmarks and cultural sites
- User authentication and personalized experiences
- Tour booking system
- Community engagement through stories and comments
- Photo and video galleries
- Event calendar
- Research resources
- Contact and feedback system

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Modern web browser

## Installation

1. Clone the repository to your web server directory:
   ```bash
   git clone https://github.com/yourusername/harar-living-museum.git
   ```

2. Create a MySQL database named `harar_museum`

3. Import the database schema:
   ```bash
   mysql -u root -p harar_museum < database/schema.sql
   ```

4. Configure the database connection in `handlers/db_connect.php`:
   ```php
   $host = 'localhost';
   $dbname = 'harar_museum';
   $username = 'your_username';
   $password = 'your_password';
   ```

5. Set up the uploads directory permissions:
   ```bash
   chmod 777 uploads/
   ```

## Directory Structure

```
/harar-living-museum/
├── index.html                     # Home Page
├── pages/                         # HTML Pages
├── community/                     # Community Features
├── handlers/                      # PHP Handlers
├── assets/                        # Static Assets
│   ├── images/                    # Images & Icons
│   ├── css/                       # Stylesheets
│   ├── js/                        # JavaScript Files
│   └── fonts/                     # Custom Fonts
├── uploads/                       # User Uploads
├── error.php                      # Error Page
├── 404.html                       # Not Found Page
└── README.md                      # This File
```

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

For any queries, please contact admin@hararlivingmuseum.com 