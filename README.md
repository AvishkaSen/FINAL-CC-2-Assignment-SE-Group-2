# [FINAL] CC-2 FUTURESEEKERS Group Assignment 
## (SE_GROUP-02)

SE Group 02 Team Members: 

- Mohammed Yahya
- Dilki Delgoda
- Siduja Perera
- Avishka Senanayake

Methods of use:

- Go to your XAMPP htdocs folder and create a file called 'futureseekers'
- In that folder's address bar, type 'cmd' and press enter to open the command prompt
- In the cmd terminal, type 'git init' to initialize a local git repository
- Then pull the files in this repository by typing and entering 'git pull https://github.com/AvishkaSen/FINAL-CC-2-Assignment-SE-Group-2.git'
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


*This assignment was for the Commercial Computing 2 AGILE Assignment*
