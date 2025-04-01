# Grow Website

A comprehensive investment and task management platform built with Laravel. This platform allows users to manage investments, complete tasks, track deposits and withdrawals, and manage their balances and commissions.

## Features

- **User Authentication**: Secure login and registration with two-factor authentication
- **Dashboard**: Centralized user dashboard for account overview
- **Investment Management**: Buy investment packages and track their growth
- **Task System**: Complete tasks to earn rewards
- **Deposits & Withdrawals**: Manage financial transactions
- **Invite System**: Refer others to the platform
- **Commission Management**: Track commissions earned through referrals
- **Balance Overview**: Monitor account balance and transactions

## Requirements

- PHP >= 8.2
- Composer
- MySQL or another supported database
- Node.js & NPM
- Laravel 11.x

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/shabbeerumer/Grow_Website.git
   cd Grow_Website
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install JavaScript dependencies:
   ```
   npm install
   ```

4. Copy the environment file:
   ```
   cp .env.example .env
   ```

5. Generate application key:
   ```
   php artisan key:generate
   ```

6. Configure your database settings in the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=grow_website
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Run database migrations:
   ```
   php artisan migrate
   ```

8. Compile assets:
   ```
   npm run build
   ```

9. Start the development server:
   ```
   php artisan serve
   ```

10. Visit `http://localhost:8000` in your browser.

## Project Structure

- **app/Http/Controllers**: All controllers are organized by feature
- **resources/views**: Views organized by feature
- **routes/web.php**: All web routes for the application
- **database/migrations**: Database structure

## Main Pages

- `/register` - User registration
- `/login` - User login
- `/dashboard` - Main user dashboard
- `/deposit` - Deposit funds
- `/withdraw` - Withdraw funds
- `/task` - Task management
- `/buy` - Investment packages
- `/invite` - Referral system
- `/commission` - Commission tracking
- `/account` - Account settings
- `/balance` - Balance overview
- `/two_factor` - Two-factor authentication settings

## Development

For development with hot-reloading:

```bash
npm run dev
```

Concurrently run the Laravel development server:

```bash
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

For any questions or feedback regarding this project, please reach out to [shabbeerumer@gmail.com](mailto:shabbeerumer@gmail.com).
