#!/bin/bash
#
# ssh -i ~/.ssh/snarker.pem ubuntu@ec2-52-11-36-207.us-west-2.compute.amazonaws.com

cd ~/projects

one_time ()
{
    sudo apt-get install mysql-server mysql-client libapache2-mod-auth-mysql libsql-statement-perl

    sudo apt-get install php5-common php5-dev php5-mysql php5-geoip php5-curl php5-dbg php5-adodb
    sudo apt-get install php5-xmlrpc php5-xsl

#    sudo apt-get install gdb-doc gdbserver
    sudo apt-get install emacs24 emacs24-el

    sudo a2enmod ssl
    sudo chown -R www-data /var/log/apache2 /var/www/snarc
}

# http://php.net/manual/en/geoip.setup.php
putin_php_geo_ip ()
{
    if [[ ! -f /usr/share/GeoIP/GeoIPCity.dat ]]
    then
        wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz
        gunzip GeoLiteCity.dat.gz
        sudo mv -v GeoLiteCity.dat /usr/share/GeoIP/GeoIPCity.dat
    fi

    sudo chown -R www-data /usr/share/GeoIP
    sudo chmod -R u+rw,g+rw /usr/share/GeoIP
    sudo find /usr/share/GeoIP -type d ! -perm -g=x -exec chmod u+x,g+x '{}' +

#    pecl install geoip
}

putin_php ()
{
    wget http://us1.php.net/get/php-5.6.6.tar.gz/from/this/mirror -O php-5.6.6.tar.gz
    tar -xzf php-5.6.6.tar.gz
    pushd php-5.6.6

    ./configure --prefix=/usr/local/php5.6 --with-apxs2=/usr/local/apache2/bin/apxs \
      --with-mysql --with-pdo-mysql=mysqlnd \
      --with-pgsql=/usr/lib/postgresql/9.4 --with-pdo-pgsql \
      --with-pcre-regex --with-curl --with-zlib --with-bz2 --enable-zip \
      --with-gd --with-jpeg-dir --with-png-dir --with-openssl --with-imap-ssl \
      --enable-calendar --enable-exif
    make
    make test
    sudo make install

    popd
}

# Deployment
cd ~/projects/snarc

full_deploy ()
{
    sudo -u www-data cp -R src/{*.php,model,resources,view} /var/www/snarc/

    sudo cp config/apache/php.ini /etc/php5/apache2/php.ini
    sudo cp config/apache/php-cli.ini /etc/php5/cli/php.ini

    sudo cp config/apache/snarc*.conf /etc/apache2/sites-available/
    sudo cp config/apache/apache2.conf /etc/apache2/apache2.conf
    sudo service apache2 restart
    sudo chown -R www-data /var/log/apache2
}
