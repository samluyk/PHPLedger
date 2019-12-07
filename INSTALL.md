### Installation

This is currently being developed.

### General Requirements:
- git
- php 7.4.0
- php extensions: mysqli curl mbstring
- mysqli 8.0.18
- apache 2.4.41
- phpmyadmin 4.9.2
- chartjs 2.9.3

### Windows Install Instructions:
- Download and install wampserver https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/
- Install Git for windows https://git-scm.com/download/win
- Open git for windows
- type `cd c:/wamp64/www`
- type `git clone https://github.com/samluyk/phpledger`
- open a web browser and enter the following url: `localhost/phpledger`


### Ubuntu Install Instructions:
- Open the terminal
- `sudo apt update`
- `sudo apt upgrade`
- `sudo apt install software-properties-common`
- `sudo add-apt-repository ppa:ondrej/php`
- `sudo apt update`
- `sudo apt install php7.4`
- `sudo apt install php7.4-common php7.4-mysql php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-mbstring php7.4-opcache php7.4-zip     php7.4-intl add-apt-repository ppa:ondrej/apache2`
- `sudo apt update`
- `sudo apt upgrade`
- `sudo add-apt-repository ppa:phpmyadmin/ppa`
- `sudo apt update`
- `sudo apt upgrade`
- `sudo apt install phpmyadmin`
- `cd /tmp/ && wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb`
- `sudo dpkg -i mysql-apt-config_0.8.14-1_all.deb`
- `sudo apt install mysql-server mysql-client`
- `sudo apt autoremove`

### Data import instructions:
- This puppy can take CSV's from excel/google sheets, like the one linked in the reddit thread above. Instructions coming soon.