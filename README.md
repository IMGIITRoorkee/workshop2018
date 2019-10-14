# Building your first dynamic web application

This is the repository of the application developed during a workshop conducted on 14 October 2018 by [IMG](http://img.channeli.in) at IIT Roorkee.

## Application developed: [Blogger](https://www.blogger.com/about)
The main objective of the workshop was to develop a dynamic application in a limited time of 4 hours.

## Technologies used (LAMP, WAMP or MAMP)
* PHP
* Apache
* MySQL

## Database table design
```
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| id         | int(11)      | NO   | PRI | NULL    | auto_increment |
| post_title | varchar(255) | NO   |     | NULL    |                |
| content    | text         | YES  |     | NULL    |                |
| author     | varchar(255) | NO   |     | NULL    |                |
| posted_on  | date         | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+

```

## Reading material
* HTML, CSS and JS
  * https://www.w3schools.com/
  * https://learn.shayhowe.com/
  * https://javascript.info/

* PHP
  * https://www.w3schools.com/php/ (Basics of PHP)
  * https://github.com/ziadoz/awesome-php (Curated list of all the necessary resources, can be checked after mastering the basics)

* Apache
  * http://howtoubuntu.org/how-to-install-lamp-on-ubuntu (LAMP)
  * http://www.wampserver.com/en/ (WAMP for Window users)
  
* MySQL
  * https://www.w3schools.com/sql/default.asp (SQL)
  * https://www.tutorialspoint.com/mysql/ (MySQL)
  * https://www.w3schools.com/php/php_mysql_intro.asp (MySQL + PHP)

## Step by step development
The commit history can be checked out to get the insights of the different stages of development. Can be seen [here](https://github.com/IMGIITRoorkee/workshop2017/commits)

## Setup
Detailed guidelines for setting up the project can be viewed at [SETUP.md](https://github.com/IMGIITRoorkee/workshop2018/blob/master/SETUP.md)

## Additional features that can be added to this project
* Make your app pretty using CSS (https://www.w3schools.com/css/)
* Prevent SQL Injection and XSS attacks (https://www.w3schools.com/sql/sql_injection.asp)
* Add user signup and login features
  * Username/Email and Password based login with a Remember Me button
  * Change password feature
  * Save the password as a hash (https://crackstation.net/hashing-security.htm)
* Frontend and backend validations for user signup
  * https://www.w3schools.com/php/php_form_validation.asp
  * https://www.w3schools.com/js/js_validation.asp
* Use sessions (https://www.w3schools.com/php/php_sessions.asp)
* Use cookies (https://www.w3schools.com/php/php_cookies.asp)
* Provide an option to login with facebook, google and github (Find a way to do it)
* Host your app somewhere so that people can see your app live in action
and a lot more.

## Further queries
Feel free to open issues if facing problems with the code written. IMG is always there to help.
