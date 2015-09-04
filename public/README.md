# TacoWordpress Boilerplate 2015
## By Vermilion

coming soon on how to use...

This project uses [tacowordpress](https://github.com/tacowordpress/tacowordpress).

### Requirements
*sass
*composer

###Setting up the repo locally in terminal:

##### run composer to get tacowordpress and other vendor requirements
*```cd``` into the ```/public``` directory
*run ```composer install```

##### setup localhost to point to ```wordpress```

### Setting up WordPress locally:

*create an empty database
*update the wp-config.php table_prefix and salts
*update the db.php (not committed through .git) with db creds
*go to your localhost url, setup to run the project
*remove the -x.x version extension the wordpress symlink tries to append
*run the wp install
*once logged into the dashboard, first activate the theme
*next, activate taco_app, then taco_theme_options

### Deploying the website:

*deploy files under version control
*FTP or setup composer on production server to get the /vendor directory deployed
*FTP uploads


### More Documentation
*The theme is setup to have more documentation, seen when logged into WP, under ```/docs```
*The theme is setup with a Sample Page for general wysiwyg and content entry, seen when logged into WP, under ```/sample-page```


###### Below is a list of the symlink configurations in this project:

* cd into ```/public```

* ```ln -s wordpress-4.1 wordpress```

Once you cd into the wordpress-x.x directory:

* ```ln -s ../app/.htaccess .htaccess```
* ```ln -s ../app/favicon.ico favicon.ico```
* ```ln -s ../app/apple-touch-icon.png apple-touch-icon.png```
* ```ln -s ../app/apple-touch-icon-72x72.png apple-touch-icon-72x72.png```
* ```ln -s ../app/apple-touch-icon-120x120.png apple-touch-icon-120x120.png```
* ```ln -s ../app/apple-touch-icon-152x152.png apple-touch-icon-152x152.png```
* ```ln -s ../app/wp-config.php wp-config.php```
* ```ln -s ../app/wp-content wp-content```