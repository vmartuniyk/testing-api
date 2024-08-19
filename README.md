# Submission API

## Setup Instructions
1. Clone the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env` and update the database settings.
4. Run `php artisan migrate`.
5. Run `php artisan serve` to start the server.
6.  Run `php artisan test` to check all tests.
7. Run `php artisan queue:work` for start queue


## API Testing
To test the API, you can use the following cURL command or you can use POSTMAN or another clint for this:
```bash
curl -X POST http://127.0.0.1:8000/api/submit \
     -H "Content-Type: application/json" \
     -d '{"name": "John Doe", "email": "john.doe@example.com", "message": "This is a test message."}'
