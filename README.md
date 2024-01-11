# Mahdi Hasan's Portfolio
  This is a personal portfolio website built with Laravel.
## Table of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Database Setup (Optional)](#database-setup-optional)
- [Usage](#usage)
## Requirements
- PHP 7.4 or higher
- Composer
- Node.js and npm (for front-end assets, if applicable)
- MySQL or another database of your choice (for optional database setup)
## Installation
1. Clone the repository or download the file:

	```bash
	git clone https://github.com/Mahdi-Hasan-337/Assignment-9.git
	```

2. Navigate to the project directory :

	```bash
	cd Assignment-9
	```

3. Install Composer dependencies :

	```bash
	composer install
	```

4. Copy the `.env.example` file to `.env` :

	```bash
	cp .env.example .env
	```

5. Generate an application key :

	```bash
	php artisan key:generate
	```

7. Configure your database connection in the `.env` file.

## Database Setup (Optional)
If you want to include a section for projects or blog posts, you can set up a database:

1. Run migrations to create tables:

	```bash
	php artisan migrate
	```

2. Optionally, seed the database with sample data:

	```bash
	php artisan db:seed
	```

## Usage
To start the Laravel development server : 
```bash
php artisan  serve
```
