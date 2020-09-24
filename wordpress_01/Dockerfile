FROM wordpress
COPY wp-config.php /var/www/html
COPY uploads.ini /usr/local/etc/php/conf.d
RUN chgrp -R www-data /var/www/html
RUN chmod -R 775 /var/www/html