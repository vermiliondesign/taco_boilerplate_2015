# Symlinks

## Upgrading WordPress

```
cd [WEBROOT]
rm wordpress
ln -s wordpress-4.3 wordpress
cd wordpress-4.3
rm .htaccess
rm favicon.ico
rm apple-touch-icon.png
rm apple-touch-icon-72x72.png
rm apple-touch-icon-120x120.png
rm apple-touch-icon-152x152.png
rm wp-config.php
rm wp-config-sample.php
rm -R wp-content
ln -s ../app/.htaccess .htaccess
ln -s ../app/favicon.ico favicon.ico
ln -s ../app/apple-touch-icon.png apple-touch-icon.png
ln -s ../app/apple-touch-icon-72x72.png apple-touch-icon-72x72.png
ln -s ../app/apple-touch-icon-120x120.png apple-touch-icon-120x120.png
ln -s ../app/apple-touch-icon-152x152.png apple-touch-icon-152x152.png
ln -s ../app/wp-config.php wp-config.php
ln -s ../app/wp-content wp-content
```
