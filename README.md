# [FINAL] CC-2 FUTURESEEKERS Group Assignment 
## (SE_GROUP-02)

*~~~ Some good to know notes are placed at the bottom of this readME ~~~*

SE Group 02 Team Members: 

- Mohammed Yahya
- Dilki Delgoda
- Siduja Perera
- Avishka Senanayake

Methods of use:

- Go to your XAMPP htdocs folder and create a file called 'futureseekers'
- In that folder's address bar, type 'cmd' and press enter to open the command prompt
- In the cmd terminal, type 'git init' to initialize a local git repository
- Then pull the files in this repository by typing and entering the following line:
    ```
    git pull https://github.com/AvishkaSen/FINAL-CC-2-Assignment-SE-Group-2.git
    ```
- Open XAMPP and start the Apache and MySQL service modules 

For database creation and seeding, in the address bar of the file directory, type 'cmd' (or powershell)
and type:

```
php spark migrate (to automatically create all database tables in phpMyAdmin)
php spark db:seed AdminSeeder (add admin login data to database)

php spark migrate:rollback (if you want to drop all created database tables)
```

To go to the webpage, type in your browser address bar :
```
http://localhost/futureseekers/public/
```

Admin logins from seeder file are:

    - admin123@admin.com
    - admin123

## (Additional Notes)
* Make sure your php.init file has extension=intl enabled. The way to make sure of that is: 
```

    Open XAMPP (make sure the Apache module IS NOT running)
    Next to the Apache module, press 'config' and then 'PHP'. (alternatively: [your_xampp_folder_path]/php/php.ini to edit.)
    Search for ;extension=intl and remove the ; at the start.
    Save the php.ini file and restart Apache on XAMPP.

```

* Make sure your php version is LOWER than php 8.1
   - This is because certain methods and features are depreciated in php 8.1. 
   - This is a known issue with the Codeigniter 4 framework of version 4.1.4 +
   - *php version 8.0.9 was used for the development of this application*

   ```
   You can also TRY changing the .env file's environment by uncommenting the 'CI_ENVIRONMENT = production' and commenting the development line.
   This is because production environment supresses certain errors. 
   But this is not recommended.  
   ```

* If initially the css does not load when opening the webpage through localhost
   - Try pressing ctrl + F5 to refresh your browser cache. 
   - Try opening in a different browser


*This assignment was for the Commercial Computing 2 AGILE Assignment*
