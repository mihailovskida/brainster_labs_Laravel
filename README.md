## Darko Mihailovski - Brainster Labs Laravel Application


To test this application it is necessary to install the application by typing the command:

`composer install`

In the .env file you need to enter your information from the database

```
- DB_CONNECTION=
- DB_HOST=
- DB_PORT=
- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD=
```

Run the next command to create the database tables:

`php artisan migrate`

To fill the database run the next command:

`php artisan db:seed`

To login to the application use the next credentials:

### Administrator:
```
Email: admin@live.com
Password: admin123
```

## Mailtrap
` https://mailtrap.io/ `

then in the .env file you need to enter your configuration from Mailtrap

```MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```

On the application in the navbar, fill out the form for Employ our students and you will receive an e-mail in your Mailtrap inbox with the same data that you have entered in the form, the appearance of the e-mail can be changed in contact.blade.php

link to install Mailtrap

` https://mailtrap.io/blog/send-email-in-laravel/ ` 