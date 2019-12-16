# PHPLedger

This program was created to be a digital ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization via the open source project Metabase. 

This is meant only to run locally to help compensate for my lack of proper code/best practice knowledge. You should do the same.

The idea for this was based off of this linked google sheet/form. I was hoping for similar functionality, just fully self-hostable.
https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/


### To do:
- a prettier date box
- mobile device css
- one click export of database
- a working "delete last entry" button in case of incorrect input
- use of a global config.php file - timezone/db connection
- convert to PDO's
- complete documentation
- Better install guide with how to edit categories
- ability to track different investment account values (my financial overview spreadsheet)

### To done:
- ~~finalize categories~~
- ~~use Ubuntu font locally~~
- ~~better input sanitization~~
- ~~enable parent/child categories~~
- ~~mysql backend to store the data~~
- ~~fix date input issue~~
- ~~add payment method feature~~
- ~~finalize database scheme/datatypes~~
- ~~database & table variables for both income & expenses~~
- ~~nicer text boxes~~
- ~~if table already exist, dont recreate it everytime~~
- ~~income comments field~~
- ~~users cant submit "CATEGORY" as category logic~~
- ~~more detailed success/failure messages~~

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
- https://stackoverflow.com/questions/129677/how-can-i-sanitize-user-input-with-php
- https://www.metabase.com/
- https://www.sitepoint.com/community/t/populate-dropdown-menu-from-mysql-database/6481/2
- https://www.reddit.com/r/personalfinance/comments/3qs1k9/budget_categories/
- https://jsfiddle.net/k148pk76/1/