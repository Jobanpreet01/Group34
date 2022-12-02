# Group34

# Installation Guide on a local computer:
1# Download the zip file containing the repository from GitHub.
2# Extract the zip file.
3# Open Command prompt as an adminitrator.
4# Use the Command prompt and move to the folder location where the project is stored.
5# In Command prompt type and run: composer update –no-scripts.
6# Create an empty database in myPhpAdmin.
7# Duplicate the .env.example file located in the repository and rename it .env and save it in the same location.
8# Open the .env file using Notepad or any other software you like and start updating the line saying: "DB_DATABASE = myDatabaseName" 
   by changing the database name where myDatabaseName is written to the name of the database you created earlier.
9# Go back to the command prompt and type and run: php artisan key:generate.
10# Stay in the Command prompt and type and run: php artisan migrate.
11# In command prompt type and run: php artisan db:seed --class=AdminSeeder
12# In command prompt type and run: npm install
13# In command prompt type and run: npm run dev
14# In command prompt type and run: php artisan serve

# Admin access credentials if you use the seeder to seed the database:
  Email: group34@gmail.com
  Password: Group34.01


# Quick guide on what the main files of the project do:

# Controllers
There's 4 Controllers in this project:
1. Controller.php is the root of the controller hierarchy and shoudn't be touched.
2. HomeController.php is the main controller that handles 80% of the logical process we do.
3. ProductsController.php is used to handle data for the products.blade.php file.
4. Version1Controller.php is used to handle data for the contact form on the contact.blade.php file.

# Seeders
There's one main seeder you can use to feed or change the data we feed in the database and that is the AdminSeeder.php.

# Models
There's 6 models in the project and each one of them is linked to one table in the database: Account.php, basket.php, Orders.php, Products.php, Queries.php and User.php.

# Migration files
There are 9 migration files in the project and each of them is used to create a table in the database with the field and type in typed in them.

# .env file:
The .env file is used to connect your project to the database.

# Images folder: 
to add or remove any images use the public/images folder.

# Css File: 
The css file to handle the style for the blade files is located in public/css/Style.css

# Blade files (html and php code): 
The blade.php files are located in resources/views and resources/views/auth folders. There are mainly 9 blade.php files we used for the project and their file names says what pages they are.


# Common problems and solutions:
1# If the database is not connected and is giving problems please open the .env file make sure that from line 11 to 16 everything is up to date.
2# If you can't view the project on the browser make sure you are hosting the repository correctly.
3# If you can't view the project make sure the URL is correct. 
4# If the problem persists do the installation steps again from zero.
5# For any other problems contact: 210142187@aston.ac.uk
