# PHPLedger

This program was created to be a ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization. 

It's meant only to run locally to help compensate for my lack of proper code/best practice knowledge.

It's also my first "real" attempt at a program I'll really use, git, and good documentation.

### To do:

- if table exist, dont recreate it. if not, do.
- incomeinput page with database/table variables
- mysql skip-networking for local only use
- input sanatization
- define expenses as fixed or variable in code
- separate file for database connection information
- success/failure messages on insert/delete
- delete last entry button
- something to display database info graphically on separate page
- complete documentation
- Do not just blindly use SELECT * in the code, explicitly type out the column names which are actually needed

### To done:
- ~~finalize categories~~
- ~~use Ubuntu font locally~~
- ~~mysql backend to store the data~~
- ~~fix date input issue~~
- ~~add payment method feature~~
- ~~finalize database scheme/datatypes~~
- ~~database & table variables~~
- ~~nicer text boxes~~

### Windows Install Instructions:
- Download and install wampserver version 3.1.9 http://www.wampserver.com/en/
- Install Git for windows https://git-scm.com/download/win

### Ubuntu Install Instructions:
- Open the terminal and run "sudo apt update"
- Run the command "sudo apt install git apache2 php7.2 php7.2-curl php7.2-mysqli php7.2-mbstring phpmyadmin"
- cd to

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

### Data import instructions:
- This puppy can take CSV's from excel/google sheets. Instructions coming soon.

### Links I couldn't have done this without:
- http://web.archive.org/web/20191128183219/https://stackoverflow.com/questions/30243775/get-date-from-input-form-within-php
- https://www.w3schools.com/css/tryit.asp?filename=trycss_forms
