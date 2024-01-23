<h3 align="left">Job posting application</h3>
<p>Registered users can post job advertisements, as well as modify or delete the ads they have posted.</p>
<p>All users can view all job advertisements.</p>

<h3 align="left">Iinstallation and settings</h3>

1. Clone the repository
2. composer install
3. Copy env.example to .env file and configure the database settings.
4. php artisan key:generate
5. Run npm install (you may need to run npm audit and npm audit fix if the installed versions are outdated and require updating).
6. npm run build
7. Run php artisan migrate (ensure that the database settings in the .env file are configured and that the database is created in phpMyAdmin or a similar tool).
8. php artisan serve
