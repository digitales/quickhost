<VirtualHost *:80>
  ServerName <?php echo $name . PHP_EOL ?>
  ServerAdmin <?php echo $name . PHP_EOL ?>
  DocumentRoot "<?php echo $root ?>"
  <Directory />
     Options FollowSymLinks
     AllowOverride all
     Order deny,allow
     #Deny from all   # This is the original line
     Allow from all   # Changed to this line
     Satisfy all
     
    # New directive needed in Apache 2.4.3:
   	Require all granted
  </Directory>
  ErrorLog "/var/log/sites/<?php echo $name ?>.local-error_log"
  CustomLog "/var/log/sites/<?php echo $name ?>.local-access_log" common
</VirtualHost>
