# Book Store

## Overview
A simple book store with login, registration and cart features

## Prerequisites
- XAMPP (v3.3.0 or higher)
- Web browser (Chrome, Firefox, etc.)

## Installation
1. **Clone the repository:**
git clone https://github.com/jeetavasare/bookstorephp.git

2. **Setup XAMPP:**
    - Install XAMPP if not already installed.
    - Start Apache and MySQL services.

3. **Database Setup:**
    - Navigate to `http://localhost/phpmyadmin/`
    - Click on new on the left navigation pane
    - Click on the import tab
    - Browse the database SQL file (`users.xml`) included in the project to set up the database schema and initial data.
    - *In the import page scroll down and choose the format option as XML*

## Configuration
1. **Apache Configuration:**
    - Place the project folder in the `htdocs` directory of your XAMPP installation.

2. **Database Configuration:**
    - Open `config.php` file.
    - Modify database credentials (`DB_HOST`, `DB_USERNAME`, `DB_PASSWORD`, `DB_NAME`) to match the one given in [notice.txt](project/notice.txt).

## Usage
1. Open your web browser.
2. Navigate to `http://localhost/project/main.php`.


Note: In XAMPP, Apache and MySQL needs to started and running

> Project Created on `17/02/2022`
