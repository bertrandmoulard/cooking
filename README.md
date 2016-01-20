# PHP MVC code lab

This repository is an example of a Model View Controller web app in PHP.

## Setup

You will need 
* an Apache webserver with a \<Directory\> pointing at the parent directory of the root of the repository
* a Mysql server with a "cooking" database and a "cooking" user with all privileges on the database
* a config.ini file containing the necessary information to use the database
* composer (http://getcomposer.org/download) then run
  ```
  $ php composer.phar install
  ```

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
