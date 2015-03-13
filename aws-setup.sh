#!/bin/bash
#
# ssh -i .ssh/snarker.pem ubuntu@ec2-52-11-36-207.us-west-2.compute.amazonaws.com

sudo apt-get install mysql-server mysql-client libsql-statement-perl
#5n@rkQmf3r
sudo apt-get install php5-mysql libapache2-mod-auth-mysql
sudo apt-get install php5-common php5-curl php5-dbg php5-xmlrpc php5-xsl php5-adodb gdb-doc gdbserver

sudo a2enmod ssl
sudo service apache2 restart

sudo apt-get install emacs24 emacs24-el

cd ~/projects
wget http://us1.php.net/get/php-5.6.6.tar.gz/from/this/mirror -O php-5.6.6.tar.gz
tar -xzf php-5.6.6.tar.gz

pushd php-5.6.6
./configure --prefix=/usr/local/php5.6 --with-apxs2=/usr/local/apache2/bin/apxs \
  --with-mysql --with-pdo-mysql=mysqlnd \
  --with-pgsql=/usr/lib/postgresql/9.4 --with-pdo-pgsql \
  --with-pcre-regex --with-curl --with-zlib --with-bz2 --enable-zip \
  --with-gd --with-jpeg-dir --with-png-dir --with-openssl --with-imap-ssl \
  --enable-calendar --enable-exif --enable-short-tags
make
make test
sudo make install

popd
