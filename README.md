# PHPLedger

This program was created to be a digital ledger that allows me to store and categorize all the money I make and spend, and save it in a database for logging purposes and visualization via the open source project Metabase.

This is meant only to run locally to help compensate for my lack of proper code/best practice knowledge. You should do the same.

The idea for this was based off of this linked google sheet/form. I was hoping for similar functionality, just fully self-hostable.
https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/


### ⭕ To do:
- squash javascript child category bug
- finalize bootstrap forms
- a working "delete last entry" button in case of incorrect input
- use of a global config.php file for global variables and database connection
- complete documentation & install/usage guide
- finalize automatic database backup
- automatic 401k contrib counted as expense


### 🔥 Links I couldn't have done this without: 
- https://stackoverflow.com/questions/30243775/get-date-from-input-form-within-php
- https://www.w3schools.com/css/tryit.asp?filename=trycss_forms
- https://www.reddit.com/r/PHPhelp/comments/e50nh0/ive_written_a_simple_php_ledger_for_my_first/f9gsymn/
- https://www.reddit.com/r/personalfinance/comments/53ktyv/budget_spreadsheet_with_google_form_for_tracking/
- https://stackoverflow.com/questions/10462839/how-to-display-a-confirmation-dialog-when-clicking-an-a-link
- https://stackoverflow.com/questions/54053043/mysql-create-table-if-not-exists-and-insert-record-only-if-table-was-created
- https://www.metabase.com/
- https://www.reddit.com/r/personalfinance/comments/3qs1k9/budget_categories/
- https://jsfiddle.net/k148pk76/1/
- https://stackoverflow.com/questions/2170182/how-to-backup-mysql-database-in-php
- https://github.com/ttodua/useful-php-scripts/blob/master/my-sql-export%20(backup)%20database.php
- https://stackoverflow.com/questions/4701861/how-do-i-run-a-php-script-using-windows-schedule-task
- https://github.com/daniloaz/myphp-backup/blob/master/myphp-backup.php
- https://getbootstrap.com/docs/4.0/components/forms/
- https://emojipedia.org/
- https://stackoverflow.com/questions/39443875/how-can-i-define-a-variable-available-to-all-php-fileslike-superglobals
- https://discourse.metabase.com/t/run-metabase-as-a-windows-service/1173/5
- https://jquery.com/
- https://stackoverflow.com/questions/14650932/set-value-to-currency-in-input-type-number