# DiviChild

Child theme for Divi [Elegant Themes](https://www.elegantthemes.com/) - wordpress theme


## SECURITY

For security purposes, you can add code to the .httacess and wp-config-sample.php files.

### .httacess

Forbidden access to files from the browser: wp-config-sample.php, readme.html, license.txt

```
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
```

### wp-config.php

Dissallow File Editing setting within the WordPress admin dashboard

```
define( 'DISALLOW_FILE_EDIT', true );
```




