## LaravelEmailSMTPConfigTester 
Steps to use 
- git clone https://github.com/abiget/EmailSMTPConfigTester.git
- composer install
- Create & use app passwords for your gmail accoutn 
    Important: To create an app password, you need 2-Step Verification on your Google Account.

    If you use 2-Step-Verification and get a "password incorrect" error when you sign in, you can try to use an app password.

    1. Go to your Google Account.
    2. Select Security.
    3. Under "Signing in to Google," select 2-Step Verification.
    4. At the bottom of the page, select App passwords.
    5. Enter a name that helps you remember where you’ll use the app password.
    6. Select Generate.
    * To enter the app password, follow the instructions on your screen. The app password is the 16-character code that generates on your device.
    Select Done.
- fill the .env configs 

        MAIL_MAILER=smtp

        MAIL_HOST=smtp.gmail.com

        MAIL_PORT=587

        MAIL_USERNAME=youremail@gmail.com

        MAIL_PASSWORD="generate app password from the above step"

        MAIL_ENCRYPTION=tls

        MAIL_FROM_ADDRESS=youremail@gmail.com
        
        MAIL_FROM_NAME="${APP_NAME}"

* run the application 