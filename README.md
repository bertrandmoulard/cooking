# PHP MVC example code

This repository is an example of a Model View Controller web app in PHP.

## Setup

You will need 
* an Apache webserver with a <Directory> poiting that the root of the repository ("cooking")
* a Mysql server with a "cooking" database
* a config.ini file containing the necessary information to use the database

### example config.ini

```
[db]
dsn='mysql:host=localhost;dbname=cooking'
user=cooking
password=apassword

```
