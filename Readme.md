# Dog Manager Template
This Dog Manager template is bassed off the new Family Furbabies website I made for my grandma.
<br>
(New: https://www.dakotath.com/ffb) (Old: http://www.familyfurbabies.com/)
<br>
# How to setup
Windows:
<br>
1. Download and install XAMPP with MySQL and Apache2 Enabled.
2. Go to ``` C:\xampp\apache\conf ```
3. Replace ``` httpd.conf ``` with the provided httpd.conf file.
4. Start Apache and MySQL.
5. Open a browser and go to http://localhost/phpmyadmin
6. Create a new database and call it whatever you want.
7. Once created, Go to the import tab and select the examplesite.sql file and import it.
8. Now go to ``` site_config/ ``` and change the info in ``` database(all/pwd/name).txt ``` to match the details.
<br>
Normally, All you need to do is change databasename.txt
<br>
Once all done, Go to http://localhost/signup/ and create your account.
<br>
Now once you have made your account, Go to site_config/admin_email.txt  and set it to the email you used to sign up.
<br>
That should give you access to the admin panel. If you want to change the header buttons, 
<br> Go to site_config/headerbuttons.txt and change the html
