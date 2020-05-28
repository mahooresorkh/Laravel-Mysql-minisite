1-place Laravel-Mysql-minisite folder in htdocs 

2-add below expression to SERVER\apache\conf\extra\httpd-vhosts.conf
<VirtualHost *:80>
    DocumentRoot "I:/SERVER/htdocs/Laravel-Mysql-minisite/public"
    ServerName minisite.test
</VirtualHost>


3- add below expression to Windows\System32\drivers\etc\hosts
127.0.0.1 minisite.test


4-create a database called minisite in mysql


5- modify these cases in .env file located in Laravel-Mysql-minisite folder
DB_DATABASE=minisite
DB_USERNAME= your username
DB_PASSWORD= your password

MAIL_USERNAME= your email address by which the website messages will be sent to users Email
MAIL_PASSWORD= your email password

6- next run :
php artisan migrate

7- at last run: 
php artisan storage:link 

the website address is https://minisite.test
