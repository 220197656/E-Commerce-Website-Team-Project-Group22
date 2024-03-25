Team Project 22 How to set up Laravel locally
By Hubert W. 

Firstly, install xampp --> https://www.apachefriends.org/download.html
Next, install WSL2 (Windows Subsystem for Linux 2) by following the below steps
 - Open CMD.exe (command prompt) with admin rights
 - enter "wsl.exe --install" and press enter
 - reboot computer
 - in cmd, run "apt update" and  "apt upgrade"
Next, install node.js --> https://nodejs.org/en/download
Following that, install composer --> https://getcomposer.org/Composer-Setup.exe

Now you are ready to unzip the zip file for the project. Unzip it into C:\xampp\htdocs\
Next launch xampp and start the MYSQL server locally. 
Following that, press the "admin" button to head over to the configuration site for the MYSQL server. 
Head over to databases and make a new database. 
use the updateddb.sql file in the root project folder to import the databases into the server
in the root, edit the .env file so that it points to the xampp server directly, making sure to select the following settings: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DATABASE_NAME_GOES_HERE
DB_USERNAME=root
DB_PASSWORD=

Additionally, paste in the following code for mail settings for the SMTP to work: 

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=aston220197656@gmail.com
MAIL_PASSWORD="zzsy lxvy pbdm rzsh"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=aston220197656@gmail.com
MAIL_FROM_NAME="Team Project 22 Test Email SMTP"

Next, open the folder that contains the project within C:\xampp\htdocs\project22/ with VSC, and open terminal from the top left corner. 
In the terminal do composer install
next, do npm install
following that do npm run dev
type exit and press enter
now you are ready to launch the server by typing "php artisan serve"





