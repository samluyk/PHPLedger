# PHPLedger

This program was created to be a ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization. 

It's meant only to run locally to help compensate for my lack of proper code/best practice knowledge.

It's also my first "real" attempt at a progrma I'll use, git, and good documentation.

### To do:
- ~~finalize categories~~
- ~~less ugly front end~~
- ~~use Ubuntu font locally~~
- ~~mysql backend to store the data~~
- ~~fix date input issue~~
- ~~add payment method feature~~
- mysql skip-networking for local only use
- input sanatization
- define categories in database, and list these in dropdown instead of other way around?
- define expenses as fixed or variable in code
- finalize database scheme/datatypes
- separate file for database connection information
- success/failure messages on insert/delete
- something to display database info graphically on separate page
- documentation
- automatic (encrypted?) database backups


### Windows Requirements:
- wampserver3.1.9
- git

### Ubuntu Requirements:
- git
- php 7.2.18
- php extensions: mysqli curl mbstring
- mysqli 5.7.26
- apache 2.4.39
- phpmyadmin 4.8.5

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