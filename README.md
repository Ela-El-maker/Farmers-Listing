# Farm Equipment Rental Platform

## Overview

The **Farm Equipment Rental Platform** is a web-based system that connects farmers with equipment owners. It allows farmers to rent agricultural machinery and tools while enabling owners to list their equipment for rental. The platform ensures seamless transactions through booking management, secure payments, and real-time communication.

## Features

### Must-Have Features

- **User Authentication** (Farmers, Equipment Owners, Admins)
- **Equipment Listings & Management** (Upload, Edit, Delete, Search)
- **Booking & Rental System** (Request, Approve, Schedule)
- **Secure Payment Integration** (Stripe, PayPal, Mobile Money)
- **Admin Dashboard** (User, Equipment, and Transaction Management)

### Should-Have Features

- **Reviews & Ratings System**
- **Live Chat for Communication**
- **Automated Rental Notifications & Reminders**
- **Basic Analytics Dashboard**

### Could-Have Features

- **AI-Powered Equipment Recommendations**
- **Loyalty & Discount Programs**
- **Blockchain for Rental Agreements**
- **Offline Mode for Limited Connectivity Areas**

## Tech Stack

### Frontend

- **HTML, CSS, JavaScript**
- **Bootstrap** (Styling)

### Backend

- **Laravel (PHP)** (API & Business Logic)
- **MySQL** (Database Management)

### Additional Services

- **Payment Gateway** (Stripe, PayPal, Mobile Money)
- **WebSockets** (For real-time chat & notifications)

## Installation Guide

### Prerequisites

- PHP 8+
- Composer
- Node.js & npm
- MySQL
- Laravel Framework

### Steps

1. **Clone the Repository**
   ```bash
   git clone git@github.com:Ela-El-maker/Farmers-Listing.git
   cd farm-equipment-rental
   ```
2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run dev
   ```
3. **Set Up Environment Variables**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Configure Database** (Update `.env` file with DB credentials)
5. **Run Migrations & Seed Database**
   ```bash
   php artisan migrate --seed
   ```
6. **Start the Development Server**
   ```bash
   php artisan serve
   ```

## Deployment

1. **Build the frontend**
   ```bash
   npm run build
   ```
2. **Optimize Laravel for Production**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
3. **Deploy to a Cloud Server (AWS, DigitalOcean, Firebase Hosting)**

## Contributors

- **[Ela-El-maker]**

## License

This project is licensed under the MIT License.
