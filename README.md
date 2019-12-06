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
- better error messages

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
- https://stackoverflow.com/questions/54053043/mysql-create-table-if-not-exists-and-insert-record-only-if-table-was-created
- https://www.cloudbooklet.com/install-php-7-4-on-ubuntu/
- https://www.mysterydata.com/update-apache-2-4-to-latest-version-on-ubuntu-16-04-server-vestacp/
- https://websiteforstudents.com/install-mysql-8-0-on-ubuntu-16-04-17-10-18-04/
- https://dev.mysql.com/downloads/repo/apt/

### Requirements:
- git
- php 7.4.0
- php extensions: mysqli curl mbstring
- mysqli 8.0.18
- apache 2.4.41
- phpmyadmin 4.9.2

### Windows Install Instructions:
- Download and install wampserver version 3.2.0 http://www.wampserver.com/en/
- Install Git for windows https://git-scm.com/download/win

### Ubuntu Install Instructions:
- sudo apt update
- sudo apt upgrade
- sudo apt install software-properties-common
- sudo add-apt-repository ppa:ondrej/php
- sudo apt update
- sudo apt install php7.4
- sudo apt install php7.4-common php7.4-mysql php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-mbstring php7.4-opcache php7.4-zip php7.4-intl
- add-apt-repository ppa:ondrej/apache2
- sudo apt update
- sudo apt upgrade
- sudo add-apt-repository ppa:phpmyadmin/ppa
- sudo apt update
- sudo apt upgrade
- cd /tmp/ && wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
- sudo dpkg -i mysql-apt-config_0.8.14-1_all.deb
- sudo apt install mysql-server mysql-client
- sudo apt autoremove


### Data import instructions:
- This puppy can take CSV's from excel/google sheets, like the one linked in the reddit thread above. Instructions coming soon.