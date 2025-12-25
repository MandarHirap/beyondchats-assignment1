# BeyondChats Assignment

## Overview

This project demonstrates a simple backend + worker architecture.

- A Laravel backend exposes REST APIs to store and fetch articles
- A Node.js worker pushes article data into the backend
- Articles are stored in a database and retrieved via API endpoints

---

## Tech Stack

- Backend: Laravel 12
- Worker: Node.js (Axios)
- Database: SQLite
- Runtime: PHP 8+, Node.js 18+

---

## Project Structure

beyondchats-assignment/
├── backend/ # Laravel backend (API + database)
├── worker/ # Node.js worker that sends article data
├── diagrams/ # Architecture diagrams (if any)
└── README.md

---

## Backend Setup

### Prerequisites

- PHP 8+
- Composer

### Steps

cd backend  
composer install  
php artisan migrate  
php artisan serve

Backend runs at:
http://127.0.0.1:8000

---

## API Endpoints

### Get all articles

GET /api/articles

Example response:
[
{
"id": 1,
"title": "AI is changing backend development",
"content": "AI tools are speeding up development workflows.",
"source": "BeyondChats Worker",
"published_at": "2025-12-25T15:26:19.893Z",
"created_at": "2025-12-25T15:26:20.000000Z",
"updated_at": "2025-12-25T15:26:20.000000Z"
}
]

### Create article

POST /api/articles

---

## Worker Setup

### Prerequisites

- Node.js 18+

### Steps

cd worker  
npm install

Create a .env file inside worker:

BACKEND_BASE_URL=http://127.0.0.1:8000

Run the worker:

node index.js

The worker sends article data to the backend API.

---

## Data Flow

Node.js Worker  
→ POST /api/articles  
→ Laravel Backend  
→ SQLite Database  
→ GET /api/articles

---

## Notes

- The worker runs as a one-time script
- Authentication is not implemented (out of scope)
- SQLite is used for simplicity

---

## Status

Backend API working  
Worker successfully pushing data  
Articles stored and fetched correctly
