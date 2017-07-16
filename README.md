# PHP Vegas Website

This is the PHP Vegas website, built using Laravel 5.4.

# Running The Site Locally For Development

The site is containerized, so it should be as simple as running docker-compose up.
You would then just exec into your php container after setting up your .env file and
run the migrations, if you're wanting to contribute to the admin side of things, you
could also execute the make:admin command inside of artisan to create a test admin
account for you.

```
php artisan make:admin --name="" --email="" --pass=""
```