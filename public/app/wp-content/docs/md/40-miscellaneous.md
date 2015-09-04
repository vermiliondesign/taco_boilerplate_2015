# Miscellaneous

## Cache-Busting

Buste the cache by editing the ```/themes/app/_/scss/main.scss``` with the variable ```$version``` which is used in ```/themes/app/config.php```

## .htaccess

We are compressing and caching files on the .htaccess, as well as redirecting the robots.txt to a template in the theme, ```'/themes/app/tmpl-robots-txt.php'``` as to have environmental variables change the site crawlability.

## Documentation / Sample Page

Development-based documentation for this website is seen on the ```README.md```, as well as once logged in, going to ```/docs```. Client documentation is also outlined on a Private Page, titled "Sample Page", as seen when going to ```/sample-page```. This page is private and only visible to users of the website, so Public has no access to it. This sample page outlines all the custom wysiwyg styles and provides a user style-guide for the Theme styles/standards.

## Updating Wordpress

To update wordpress, Download the newest version and add it to the ```/public``` directory. Follow the instructions on the Tab titled "Symlinks" for recreating them. NEVER do a wordpress update on production without having it tested on a local/staging server first. It is best, for the security of the website, to be maintained and kept up-to-date, however don't do this on your own. Get a developer to do it.

## WP Plugins & Security

### Plugins
It is not wise to download 3rd party plugins to this website. Why? Several Reasons:
1. It makes the version control for the repo out-of-sync, if plugins are installed on the production server
2. Plugins need to always be tested first on a local/staging environment before being introduced to the live site
2. It can break the website, and if there is no current database backup, data will be lost
3. Plugins can be a security threat and introduce malware
4. Unless you are a developer, you may not know how to check the validity and safety of a Plugin, like
  * is it actively maintained
  * is the documentation reliable
  * is it compatible with the latest WordPress
  * how many people use the plugin and # of downloads
  
### Security
WordPress is a mostly secure, however there are some factors that can lead to WordPress being less secure:
1. Weak WordPress CMS admin passwords
  * Always keep strong passwords. Never let a user setup a weak password. WordPress has a built-in tool to help generate strong passwords. Use it. The agency cannot be made responsible if users begin setting up weak passwords, which in turn lead the site to vulnerability and potential to get hacked.



