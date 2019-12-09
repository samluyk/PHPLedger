### Installation

This is currently being written.

### General Requirements:
- git
- OpenJDK11.0.5+10 (for metabase)
- Metabase v0.33.6
- php 7.4.0
- php extensions: mysqli curl mbstring
- mysqli 8.0.18
- apache 2.4.41
- phpmyadmin 4.9.2

### Windows Install Instructions:
- Download and install wampserver https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/
- Download and install OpenJDK11 https://adoptopenjdk.net/index.html?variant=openjdk11&jvmVariant=hotspot
- Install Git for windows https://git-scm.com/download/win
- Open git for windows
- type `cd c:/wamp64/www`
- type `git clone https://github.com/samluyk/phpledger`
- Download Metabase https://www.metabase.com/start/jar.html
- move metabase.jar to `c:/wamp64`
- Open powershell and type `c:/wamp64`
- run `java -jar metabase.jar`
- open a web browser and enter the following url: `localhost/phpledger`

### Ubuntu Install Instructions:
- Open the terminal
- `sudo apt update`
- `sudo apt upgrade`
- `sudo apt install software-properties-common`
- `sudo add-apt-repository ppa:ondrej/php`
- `sudo apt update`
- `sudo apt install php7.4`
- `sudo apt install php7.4-common php7.4-mysql php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-mbstring php7.4-opcache php7.4-zip php7.4-intl`
-  `add-apt-repository ppa:ondrej/apache2`
- `sudo apt update`
- `sudo apt upgrade`
- `sudo apt install apache2`
- `sudo add-apt-repository ppa:phpmyadmin/ppa`
- `sudo apt update`
- `sudo apt upgrade`
- `sudo apt install phpmyadmin`
- `cd /tmp/ && wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb`
- `sudo dpkg -i mysql-apt-config_0.8.14-1_all.deb`
- `sudo apt install mysql-server mysql-client`
- `sudo apt autoremove`

### Data import instructions:
- This puppy can take CSV's from excel/google sheets, like the one linked in the reddit thread above. If you need help with this, contact me. 