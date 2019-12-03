# PHPLedger

This program was created to be a ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization. 

It's meant only to run locally to help compensate for my lack of proper code/best practice knowledge. 

It's also my first "real" attempt at a program I'll really use, git, and good documentation.

The idea for this was based off of this linked spreadsheet. I was hoping for similar functionality, just self-hostable.
https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/

### To do:
- more & better input sanitization
- separate file for database connection information
- success/failure messages on insert/delete
- a working delete last entry button in case of incorrect input
- mysql skip-networking for local only use
- define expenses as fixed or variable in code
- something to display database info graphically on separate page
- Do not just blindly use SELECT * in the code, explicitly type out the column names which are actually needed
- complete documentation
- data import guide

### To done:
- ~~finalize categories~~
- ~~use Ubuntu font locally~~
- ~~mysql backend to store the data~~
- ~~fix date input issue~~
- ~~add payment method feature~~
- ~~finalize database scheme/datatypes~~
- ~~database & table variables for both income & expenses~~
- ~~nicer text boxes~~
- ~~if table exist, dont recreate it logic~~

### Links I couldn't have done this without:
- http://web.archive.org/web/20191128183219/https://stackoverflow.com/questions/30243775/get-date-from-input-form-within-php
- https://www.w3schools.com/css/tryit.asp?filename=trycss_forms
- https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/
- https://stackoverflow.com/questions/10462839/how-to-display-a-confirmation-dialog-when-clicking-an-a-link

### Requirements:
- git
- php 7.2.18
- php extensions: mysqli curl mbstring
- mysqli 5.7.26
- apache 2.4.39
- phpmyadmin 4.8.5

### Windows Install Instructions:
- Download and install wampserver version 3.1.9 http://www.wampserver.com/en/
- Install Git for windows https://git-scm.com/download/win

### Ubuntu Install Instructions:
- Open the terminal and run "sudo apt update"
- Run the command "sudo apt install git apache2 php7.2 php7.2-curl php7.2-mysqli php7.2-mbstring phpmyadmin"
- cd to

### Data import instructions:
- This puppy can take CSV's from excel/google sheets, like the one linked in the reddit thread above. Instructions coming soon.

