# PHPLedger

This program is meant to categorize and log every penny made and spent, and store it in a database for logging purposes and future visualization. 

It is unique to my own personal situation but can be adapted to fit other use cases.


### Requirements:
- wampserver3.1.9 (windows) or the following
- php 7.2
- mysqli 5.7.26
- apache2
- phpmyadmin

### To do:
- ~~finalize categories~~
- break up fixed/variable expenses in code
- define array as ints not strings
- less ugly front end/use external css
- separate file for database credentials
- success/failure messages
- database backend to store the data
- GUI to query the database
- documentation
- encryption

### Database Tables:
- Expenses:
- Item:Varchar200
- Amount:Decimal13,2
- Category:String
- Comment:String
- Date:Date?

- Income:
- Description:Varchar500
- Type:String
- Gross Amount:Decimal13,2
- Net Amount:Decimal13,2
- Date:Date?
- Comment:Varchar500