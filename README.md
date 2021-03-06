# info1208-lab03

## system configuration

This implementation relies on a simple routing service to make URL more user friendly and also secure in order not to show users the paths and folder structure on the server.

The router implemmentation catches the **request** from url and loads the correct page.

For this to happen, all http requests to the server are directed to the root folder, to the file **index.php**. This is done by the **.htaccess** file.

For the *.htaccess* file to be considered, as well as its instructions, the virtual host must be configured to allow this.

In the statements of the virtual host configuration, under APACHE2, we need to have the following, after the virtualhost block:

```
....
</VirtualHost>
<Directory /var/www/html/example.com/public_html>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

You need to replace the directory path to the one configured in your host.

After the virtual host file is saved you need to restart apache. In Ubuntu this is done by:

```
sudo service apache2 restart
```

The **.htaccess** file is already set in the package for this implementation.

````
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]
````
It redirects all requests to the root folder index.php file, which will handle the requests.

If the server shows a error message that the contents could not be located, probably the rewrite feature is not loaded. To correct this, on ubuntu user the following command:

````
sudo a2enmod rewrite
````

### compatibility to hosts

In order to allow to be run in any host, not only localhost, it was created a constant **_URLBASE** that contains the host url address to be used to redirect the post requests.

### api

The routing allows for the implementation of an API and shields access to the folder structure that leads to the files in the server., besides being more user friendly to acknowledge users on where they are.

## questions

Feel free to contribute and ask questions, also to fork this repositorie and suggest improvements.

## references

some useful references:

* https://www.linode.com/docs/web-servers/apache/how-to-set-up-htaccess-on-apache/
* https://hostadvice.com/how-to/how-to-enable-apache-mod_rewrite-on-an-ubuntu-18-04-vps-or-dedicated-server/

## structure of the web app

### fonts
Contains the ttf fonts used to produce the image from the text. This is done by the class TextToImage. The GD library must be enabled for this feature to work.

### img
Contains the images used through the site

### js
Contains the customization scripts to the page and not the bootstrap or other third-parts

### styles
Contains the customization styles to the site and not the bootstrap ones or other third-parts

### templates
Contains the reusable code of the head for all pages, the foot with the javascript code calls and the nav bar code.

### utils
Contains the implemmentation of the feature to convert text to image dynamically through GD library methods. Works only with GD loaded. If it isn't loaded, other features will appear.

### vendor
Contains all third-part libraries, including bootstrap and jquery

### views
Contains all the pages at the site, they are loaded and rendered after the request is processed by the router.

## ISSUE
There is an issue with the saving of the images created are not possible yet if the folder img does not have privileges of writing to public. This will be solved in a next release.