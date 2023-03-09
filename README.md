
#   CA_server_Site (Dental Clinic Website) 
** This PHP-based website was created for a dental clinic and provides various features for users to explore. The website includes a homepage with a slideshow of images and captions, along with a main section that provides information about the clinic and its services. Additionally, the website uses a database to display information about clinics and treatment types and includes sorting functionality for easy navigation.

# Technologies used
-PHP
-MySQL Database
-Javascript
-HTML
-CSS

# Installation
-Download and install XAMPP or any other PHP development environment.
-Clone or download the PHP program from the repository.
-Create a new database and import the database.sql file in the root directory of the program to create the required tables and insert sample data.
-Copy the program directory to the htdocs directory in the XAMPP installation folder.
-Start the Apache and MySQL services in XAMPP.
-Access the program by navigating to http://localhost/program_directory in a web browser.

# Features
-Homepage slideshow with captions
-Information about the dental clinic and its services
-Database integration to display information about clinics and treatment types
-Sorting functionality for clinic and treatment type data
-Contact form with validation

# Files
-index.php: The main file for the website, which includes the homepage slideshow and main section with information about the clinic and its services. It also includes PHP code to retrieve and display data from a database.
-includes/header.php: A header file that is included on each page of the website to provide consistent styling and navigation.
-includes/footer.php: A footer file that is included on each page of the website to provide consistent styling and copyright information.
-database.php: A PHP file that includes code to connect to a database and retrieve data.
-contact.php: A PHP file that includes a contact form for users to submit inquiries to the clinic. The form includes validation to ensure that all required fields are filled out before submission.

# Usage
To use this website, simply download the files and host them on a PHP-enabled web server. You will also need to set up a database with information about clinics and treatment types, which can be configured in the database.php file.

Once the website is set up, navigate to the homepage (index.php) to see the slideshow and information about the dental clinic. You can also click on the links in the navigation bar to view information about clinics and treatment types, The program displays a list of dental treatments with their name, price, and image. The treatments can be sorted based on their name or price using the respective dropdowns. The program also allows searching for a treatment by name using the search bar. The clinics and their details are not displayed directly in the frontend but are used for sorting. As well you can use the contact form to submit inquiries to the dental clinic.

# Credits
The program was created by Erling Munguia.



