sleep 60 #add a delay so mysql can start

#Wipe and seed the database
php artisan migrate:fresh --seed

#start apache in foreground so container doesn't exit
apachectl -d /etc/apache2 -e info -DFOREGROUND

