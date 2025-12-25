# Backend – Laravel API

This folder contains the Laravel backend for the BeyondChats assignment.

## Responsibilities

-   Exposes REST APIs to create and fetch articles
-   Persists article data in a SQLite database
-   Acts as the central data store for the system

## Tech Stack

-   Laravel 12
-   PHP 8+
-   SQLite

## Setup Instructions

### Prerequisites

-   PHP 8+
-   Composer

### Steps

cd backend  
composer install  
php artisan migrate  
php artisan serve

The backend will be available at:
http://127.0.0.1:8000

## API Endpoints

### Get all articles

GET /api/articles

### Create article

POST /api/articles

## Notes

-   Authentication is intentionally omitted (out of scope)
-   SQLite is used for simplicity
