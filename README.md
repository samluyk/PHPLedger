# PHPLedger

This program was created to be a digital ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization. 

It's meant only to run locally to help compensate for my lack of proper code/best practice knowledge. 

It's also my first "real" attempt at a program I'll really use, git, and good documentation.

The idea for this was based off of this linked spreadsheet. I was hoping for similar functionality, just self-hostable.
https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/

### To do:
- more detailed error messages
- better input sanitization - htmlspecialchar
- create config.php for time zone and db connection - require_once('config.php');
- better success/failure messages on insert/delete
- add mobile device css
- a working delete last entry button in case of incorrect input
- define expenses as "fixed" or "variable" in code
- something to display database info graphically on separate page - grafana?
- Don't use SELECT * , explicitly type out the column names needed
- complete documentation
- data import guide
- move chartjs directory

### To done:
- ~~finalize categories~~
- ~~use Ubuntu font locally~~
- ~~mysql backend to store the data~~
- ~~fix date input issue~~
- ~~add payment method feature~~
- ~~finalize database scheme/datatypes~~
- ~~database & table variables for both income & expenses~~
- ~~nicer text boxes~~
- ~~if table already exist, dont recreate it everytime~~

### Links I couldn't have done this without:
- https://stackoverflow.com/questions/30243775/get-date-from-input-form-within-php
- https://www.w3schools.com/css/tryit.asp?filename=trycss_forms
- https://www.reddit.com/r/PHPhelp/comments/e50nh0/ive_written_a_simple_php_ledger_for_my_first/f9gsymn/
- https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/
- https://stackoverflow.com/questions/10462839/how-to-display-a-confirmation-dialog-when-clicking-an-a-link
- https://stackoverflow.com/questions/54053043/mysql-create-table-if-not-exists-and-insert-record-only-if-table-was-created
- https://www.cloudbooklet.com/install-php-7-4-on-ubuntu/
- https://www.mysterydata.com/update-apache-2-4-to-latest-version-on-ubuntu-16-04-server-vestacp/
- https://websiteforstudents.com/install-mysql-8-0-on-ubuntu-16-04-17-10-18-04/
- https://dev.mysql.com/downloads/repo/apt/
- https://www.youtube.com/watch?v=cREXtrFiJBc
- https://www.madsycode.com/download/chartjs-mysql/
