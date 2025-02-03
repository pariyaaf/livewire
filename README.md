# Laravel Livewire Project

This repository is a practice project for using Livewire with Laravel to build dynamic and reactive UI components without relying on JavaScript frameworks.

## Features
- Built with Laravel and Livewire
- Real-time UI updates without page reloads
- Blade templating engine for views
- Easy state management with Livewire components

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/pariyaaf/livewire.git
   cd livewire-practice
   ```
2. Install dependencies:
   ```sh
   composer install
   npm install
   ```
3. Copy the example environment file and generate the application key:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. Run database migrations (if applicable):
   ```sh
   php artisan migrate
   ```

## Running the Project

- Start the Laravel development server:
  ```sh
  php artisan serve
  ```
- Start the frontend assets watcher (if using Laravel Mix):
  ```sh
  npm run dev
  ```

## Livewire Usage
- Create a new Livewire component:
  ```sh
  php artisan make:livewire ComponentName
  ```
- Render Livewire components in Blade views:
  ```blade
  @livewire('component-name')
  ```
- Handle Livewire actions inside the component class.


