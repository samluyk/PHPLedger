# PHPLedger

This program was created to be a ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization. 
It's meant only to run locally.
It's also my first "real" attempt at a project, git, and good documentation.

### Requirements:
- wampserver3.1.9 (on windows) or the following on linux
- php 7.2.18
- php extensions: mysqli curl mbstring
- mysqli 5.7.26
- apache 2.4.39
- phpmyadmin 4.8.5

### To do:
- ~~finalize categories~~
- ~~less ugly front end~~
- ~~use Ubuntu font locally~~
- ~~mysql backend to store the data~~
- ~~fix date input issue~~
- break up fixed/variable expenses in code
- finalize database scheme
- separate file for database connection information
- success/failure messages on insert/delete
- GUI to query the database
- documentation
- encryption

### Windows Install Instructions:
- Download and install wampserver version 3.1.9 http://www.wampserver.com/en/
- Install Git for windows https://git-scm.com/download/win
- 

### Ubuntu Install Instructions:
- Open the terminal and run "sudo apt update"
- Run the command "sudo apt install git apache2 php7.2 php7.2-curl php7.2-mysqli php7.2-mbstring phpmyadmin"
- cd to
-

### Links I couldn't have done this without:
- http://web.archive.org/web/20191128183219/https://stackoverflow.com/questions/30243775/get-date-from-input-form-within-php
- 