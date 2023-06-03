# DiviChild
DiviChild for Divi (Elegant Themes) - wordpress theme


# SECURITY

Add to .htaccess

Deny access to wp-config.php, readme.html, license.txt

<files readme.html>
order allow,deny
deny from all
</files>

<files wp-config-sample.php>
order allow,deny
deny from all
</files>

<files license.txt>
order allow,deny
deny from all
</files>

<files xmlrpc.php>
Order Deny,Allow
Deny from all
Allow from 127.0.0.1
</files>

Allow only Selected IP Addresses to Access wp-admin
(change IP Address)

<Limit GET POST PUT>
order deny,allow
deny from all
allow from 192.168.0.0
allow from IP_ADDRESS_2
</Limit>	


Add to wp-config.php

/** Wylaczenie edycji wtyczek przez panel */
define( 'DISALLOW_FILE_EDIT', true );

