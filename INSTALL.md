### Installation

How to use this program.

### General Requirements:
- git
- php 7.4.0
- php extensions: mysqli curl mbstring
- mysqli 8.0.18
- postgresql 12.1
- apache 2.4.41
- phpmyadmin 4.9.2

### Windows Install Instructions:
- Download and install wampserver (Currently version 3.2.0) https://sourceforge.net/projects/wampserver/files/latest/download
- Install Git for windows https://git-scm.com/download/win
- https://bitnami.com/tag/postgresql

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
- sudo apt install phpmyadmin
- cd /tmp/ && wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
- sudo dpkg -i mysql-apt-config_0.8.14-1_all.deb
- sudo apt install mysql-server mysql-client
- sudo apt autoremove

### Data import instructions:
- This puppy can take CSV's from excel/google sheets, like the one linked in the reddit thread above. Instructions coming soon.