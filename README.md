# Carsell - E-commerce Showroom for Cars

Carsell is an e-commerce platform designed for users to browse and list cars for sale. Users can create an account, add cars they wish to sell, view their listed cars, and search for cars based on various filters. The platform provides an intuitive interface for users to manage their cars and connect with potential buyers.

## Features

- **User Authentication**: Users can register, login, and manage their accounts.
- **Add Cars**: Registered users can add cars to the platform, including details like make, model, year, price, and other relevant information.
- **View Cars**: Users can view the list of cars they have added to the showroom.
- **Search Functionality**: Users can search for cars based on multiple criteria, including:
  - Car maker
  - Car model
  - State and city
  - Price range
  - Year range
  - Fuel type
- **Pagination**: Results are paginated to ensure a smooth user experience when browsing cars.

## Technologies Used

- **Backend**: Laravel (PHP)
- **Frontend**: HTML, CSS, Bootstrap
- **Database**: Sqlite
- **Authentication**: Laravel authentication using Auth(Facades)
- **Search**: Eloquent queries with filtering functionality

## Installation

### Prerequisites

Before you begin, make sure you have the following installed on your system:

- PHP >= 8.0
- Composer
- Sqlite

### Steps

1. **Clone the repository:**
   ```
   git clone https://github.com/yourusername/carsell.git
   cd carsell
2. **Install dependencies**
   ```
   composer install
3. **Set up environment variables**
   ```
   cp .env.example .env
   edit the env and configure your database and other environment settings
4. **Generate the application key**
   ```
   php artisan key:generate
5. **Migrate the database**
   ```
   php artisan migrate
6. **Run the application**
   ```
   php artisan serve
