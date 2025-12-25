# Worker – Node.js Script

This folder contains a Node.js worker that sends article data to the backend API.

## Responsibilities

- Simulates an external data producer
- Sends article payloads to the Laravel backend using HTTP requests

## Tech Stack

- Node.js 18+
- Axios
- dotenv

## Setup Instructions

### Prerequisites

- Node.js 18+

### Steps

cd worker  
npm install

Create a `.env` file in this folder:

BACKEND_BASE_URL=http://127.0.0.1:8000

Run the worker:

node index.js

## Behavior

- Sends one or more articles to the backend
- Exits after execution (one-time worker)

## Notes

- Designed as a simple script, not a long-running service
