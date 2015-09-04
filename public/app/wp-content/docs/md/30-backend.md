# Backend

## Overview

### This Section is for Developers

This project uses an OOP-like plugin for all CPT and Custom Field registration, called [tacowordpress](https://github.com/tacowordpress/tacowordpress).

It also uses an additional plugin, which requires taco, and is called [https://github.com/tacowordpress/addbysearch](https://github.com/tacowordpress/addbysearch).

## Setting up the Backend

Setting up this theme requires that you use composer to install tacowordpress and addbysearch. ```CD``` into the /public directory and run ```composer install```

For more information about these plugins, see their docs on github.

## Vendor Directory

The /public/vendor directory is ignored in the .gitignore largely because it complicates the repo to have it under technically 2 version controls. For the production environment, either FTP the files over if changed, or install composer on the production server and update by running ```composer update```

## Querying Pages

Be sure that if any page querying happens, to disclude non-public pages. The Sample Page is Private, thus inaccessible to the Public, unless your query did not specify to only get public posts.