## Overview

This is a sample repo for the [Introduction to Laravel caching blog post](https://planetscale.com/blog/introduction-to-laravel-caching). It has two branches: 

- `starter` &mdash; What you should work off of if you're going through the tutorial from scratch
- `main` &mdash; The final version of the app with caching

Check out the [PlanetScale blog](https://planetscale.com/blog/introduction-to-laravel-caching) for the full tutorial.

## Run the application

1. Create a database on PlanetScale. Refer to [the tutorial for full instructions](https://planetscale.com/blog/introduction-to-laravel-caching#set-up-a-database).
2. Clone this repo:

```bash
git clone -b starter https://github.com/hollylawly/laravel-caching
```

Leave off the `-b starter` if you just want the final version.

3. Install the dependencies:

```bash
composer install
```

4. Copy the `.env.example` file to `.env`:

```bash
mv .env.example .env
```

5. Update the database connection with the credentials from the PlanetScale dashboard:

```
DB_CONNECTION=mysql
DB_HOST=<ACCESS HOST URL> 
DB_PORT=3306
DB_DATABASE=<DATABASE_NAME> 
DB_USERNAME=<USERNAME>
DB_PASSWORD=<PASSWORD>
MYSQL_ATTR_SSL_CA=/etc/ssl/cert.pem
```

6. Run the migrations and seeder:

```bash
php artisan migrate
php artisan db:seed
```

7.  Start your application:

```bash
php artisan serve
```

8. You can now view your non-cached data from the PlanetScale database in the browser at [http://localhost:8000/api/quotes](http://localhost:8000/api/quotes).
