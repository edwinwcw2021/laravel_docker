rm -f ~/mysql.tgz
rm -f ~/vendor.tgz
cp /usr/src/startup.sh /usr/local/bin/.
chmod 755 /usr/local/bin/startup.sh
cd
wget https://freeware.vagweb.com/mysql.tgz
wget https://freeware.vagweb.com/vendor.tgz
cd /usr/local
tar zxvf ~/mysql.tgz
cd /var/www/html/restapi
tar zxvf ~/vendor.tgz
rm -f ~/mysql.tgz
rm -f ~/vendor.tgz

