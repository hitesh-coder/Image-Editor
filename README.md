# Image-Editor

## Instructions for running the app

 - Clone/Download repository.
 - use `npm install` and `composer install` command.
 - start your mysql server and create a data-base with name *upload*.
 - use `php artisan migrate` command.
 - use `npm run dev` command.
 - now run `php artisan serve` command and your app is running.


## Other information
 
 
 ### General
 
 most of the important file are in resources folder.
 
 Routes are created in `./routes/web.php`.
 
 Controllers are created in `./app/Http/controllers`
 
 
 ### Database
 
 Connection for database is implemented in `.env` file.
 
 tables for database are in `./database/migration` .
 
 
 ### Front-End
 
  `./resources/js` contain vue files in which front end is implemented.
  
  `./resources` also have .blade.php files.
  
  
  
 ## App Preview
 
 ### Home screen
 
 <img width="1440" alt="Home Screen" src="https://user-images.githubusercontent.com/58116679/114320025-a5112880-9b31-11eb-8a34-fd3236ccf695.png">
 
 ### Registration System
 
 <img width="1440" alt="Registration Form" src="https://user-images.githubusercontent.com/58116679/114320051-c96d0500-9b31-11eb-9f68-770fa263ad2a.png">
 
 ### Uploading file dashbord
 
 <img width="1440" alt="Upload File" src="https://user-images.githubusercontent.com/58116679/114320071-ddb10200-9b31-11eb-806d-2a4ab0f529d3.png">

 ### File saved in database
 
 <img width="1440" alt="uploaded file" src="https://user-images.githubusercontent.com/58116679/114320095-f6211c80-9b31-11eb-992c-dabfe43456d2.png">

