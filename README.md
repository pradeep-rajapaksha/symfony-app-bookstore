bookstore
=========

A Symfony project created on May 17, 2020, 4:04 pm.

Installation Guide (Run all the commnd withing the root dir.):

1) Clone/Download the source code from github (https://github.com/pradeep-rajapaksha/symfony-app-bookstore)

2) Run below command setup the project dependencies

`composer install`

3) Update the parameters.yml below values in app/config acording to environment

`database_host: 127.0.0.1`
`database_port: 3306`
`database_name: boobkstore`
`database_user: root`
`database_password: null`
`mailer_transport: smtp`
`mailer_host: 127.0.0.1`
`mailer_user: null`
`mailer_password: null`
`secret: 3d0c07d761fabf4df865724eed932685a81dedc3`

4) Run below command to create the databse

`php bin/console doctrine:database:create`

5) Run below command to create the tables

`php bin/console doctrine:schema:update –-force`

6) Run below command to seed the database 

`php bin/console doctrine:fixtures:load`

8) Finally to load the application, run the below command 

`php bin/console server:run` Or `php bin/console server:start`

The application will be available under http://localhost:8000/ Or http://127.0.0.1:8000/ 
Login Email: pradeepprasanna.rajapaksha4@gmail.com
Login Password: 1234
