# PHP MVC code lab

This repository is an example of a Model View Controller web app in PHP.

## Setup

You will need 
* an Apache webserver with a \<Directory\> pointing at the root of the repository ("cooking")
* a Mysql server with a "cooking" database and a "cooking" user with all privileges on the database
* a config.ini file containing the necessary information to use the database

### example config.ini

```
[db]
dsn='mysql:host=localhost;dbname=cooking'
user=cooking
password=apassword

```

To load the schema
```
$ cd db
$ ./reset.sh
```

To load sample data
```
php db/sample_data.php
```
