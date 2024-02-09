Download composer from their site, search composer and first result, download and install the exe
download and use xampp for phpmyadmin, and put the whole project inside a folder inside htdocs (eg. C:\xampp\htdocs\tp22/project_goes_here)
run xampp to launch the sql server
make sure to edit .env file to make it work and link to database correctly
for when to host site locally, in vsc, in the top bar make a new terminal window, and type php artisan serve
this will launch the server

.blade.php is the default page extension, they can be found in resources/views/
for new url's, make sure the routes are set up (sites cannot be accessed directly by the url like in a folder, they have to be served by the laravel controller, hence why routing is essential)
public folder is always accessible to any site
