# Newsletter Web App

Hi! This is my first web app, it is a simple Newsletter system contected to a **MySQL** database. This app is based in two main pages:

 - **Subscription** page, where users from a website can enter their personal data to get newsletter.
 - **Administration** page, where web owners are able to manage the database using a CRUD and also bulksend emails to the whole list of people in the database.

# App Diagram 
This is an schematized diagram of how the app is going to be working, sending customers data to the database and connecting it to the CRUD page and the email bulksend page for the web owner:

![App Diagram](https://www.linkpicture.com/q/Copia-de-newsletter.drawio.png)

# Try it

Follow this steps to try this web app in your localhost:

 1. Install XAMPP ([Download](https://www.apachefriends.org/es/index.html))
 2. Download ZIP file from this repository and place the files in a folder (newsletter, for example) in your XAMPP path (C:\xampp\htdocs).
 3. Open XAMPP and start Apache and MySQL services.
 4. In your browser type the following URL to enter to [MySQL](http://localhost/phpmyadmin/) administration page: http://localhost/phpmyadmin/
 5. Create a new database called **newsletter**, navigate into it and create a table called **clients**.
 6.  Type this URL in your browser: localhost/htdocs/*newsletter_folder_name*.

Once this is done you will be able to see a form where you can type clients data, when submitting it, you can check in the database the new introduced data.
