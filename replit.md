# G4 Our Festival - CS100 Christmas Eve

A PHP-based festival website for CS100 Christmas Eve 2025 event at Bangkok Campus.

## Project Overview

This is a festival management website that includes:
- Festival information pages (homepage, booth directory)
- User authentication (login, registration)
- Booth pages and information
- Feedback system
- Admin features for managing registrations and feedback

## Team Members

- Chanitnan Kitnantakhun (6809616862) - Team Lead
- Siwat Sangchan (6809617449) - Tech Lead
- Jomthap samuhaseneeto (6809617019) - Booth Directory
- Harit nilnoi (6809616953) - Homepage
- Siwadol Arnamwat (6809617431) - Booth pages
- Parameth Suktast (6809617233) - Booth pages
- Chawisa Apiruknusit (6809620062) - JS Lead
- Anon Phoonsin (6809681494) - Feedback Pair
- Theeranut Muangkram (6809617191) - Feedback Pair

## Tech Stack

- **Frontend**: HTML, CSS (Bootstrap), JavaScript
- **Backend**: PHP 8.2
- **Database**: PostgreSQL (converted from MySQL for Replit environment)
- **Server**: PHP built-in development server

## Project Structure

```
.
├── api/                    # Backend API endpoints
│   ├── auth/              # Authentication endpoints (login, register, logout, me)
│   ├── config/            # Configuration files (database)
│   ├── lib/               # Shared libraries (db, auth, session, response)
│   ├── routes/            # API routes
│   └── summary/           # Admin summary endpoints
├── booths/                # Individual booth pages
├── component/             # Reusable HTML components (header, footer, fireworks)
├── css/                   # Stylesheets
├── js/                    # JavaScript files
├── resources/             # Images and assets
├── sql/                   # Database schema
├── router.php             # PHP router for development server
└── *.html                 # Main pages (index, login, registration, feedback, etc.)
```

## Recent Changes (Nov 6, 2025)

- Converted database from MySQL to PostgreSQL for Replit environment
- Updated database configuration to use Replit's PostgreSQL environment variables
- Created PHP router for serving both static files and API endpoints
- Configured workflow to run on port 5000 with webview
- Set up development environment with PHP 8.2

## Database

The application uses PostgreSQL with the following main tables:
- `users`: User accounts with authentication and role management (admin/user)

Development database includes seeded admin accounts using student IDs as usernames (password: 'password').

## Environment Variables

The application uses Replit's PostgreSQL environment variables:
- `PGHOST`: Database host
- `PGPORT`: Database port (5432)
- `PGDATABASE`: Database name
- `PGUSER`: Database user
- `PGPASSWORD`: Database password

## Running the Application

The application runs automatically via the configured workflow:
- Command: `php -S 0.0.0.0:5000 router.php`
- Port: 5000
- The webview opens automatically

## API Endpoints

### Authentication
- `POST /api/auth/login` - User login
- `POST /api/auth/register` - User registration
- `POST /api/auth/logout` - User logout
- `GET /api/auth/me` - Get current user info

### Summary (Admin only)
- `GET /api/summary/registrations` - Get registration summary
