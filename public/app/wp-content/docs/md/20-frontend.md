# Frontend

## Overview

### This Section is for Developers

This project uses a modern workflow to compile sass, uses jshint, and minifies javascript. It uses Grunt as the primary task-runner. Feel free to use a different task-runner like CodeKit or native SASS watch, etc., but run your tool to follow the below patterns.

### Theme Assets

All assets, including images, css, fonts, libs, js, etc. are saved in the<br>
```/themes/app/_/``` directory.

## SASS

This project requires that you have SASS installed.

* [Sass](http://sass-lang.com) Requires Ruby. Install SASS via Terminal: ```gem install sass``` (globally installs so you can run it locally, on a project-to-project basis)

To ensure you have SASS installed via Terminal: ```sass -v```

This project compiles SASS with [LibSass](http://sass-lang.com/libsass) as the preferred compiler, being that it uses C/C++ and is wicked fast.


This project is setup to use [grunt-sass](https://github.com/gruntjs/grunt-sass) for sass compilation with LibSass. The configuration (as seen on the gruntfile.js) specifies the options setup for the project.

* It specifies that all ```/_/scss/*.scss``` will compile to ```/_/css/*.css```

## jshint

This project is setup to use [grunt-contrib-jshint](https://github.com/gruntjs/grunt-contrib-jshint) for jshint, which enables hints and tips on better javascript code. The configuration (as seen on the gruntfile.js) specifies the options setup for the project.

* Review the my_target options inside the uglify task. For more information about the specific jshint options, check out [jshint.com/docs](http://jshint.com/docs/)

## javascript minification

This project is setup to use [grunt-contrib-uglify](https://github.com/gruntjs/grunt-contrib-uglify) for javascript minification.
* It watches ```/themes/app/_/js/main.js``` and minifies to ```/themes/app/_/js/app.js```

*Pass additional .js files to be minified in the array. Setup additional files for minification by adding to the object.

## image minification

.. coming soon

## Running Tasks

Feel free to use codekit, gulp, or native sass to run your tasks -- just follow the instructions provided for setup, otherwise the project was built using Grunt as the task-runner.

### Using Grunt

To use Grunt, you will need to install (globally):

* [Node.js](http://nodejs.org) Install Node first. Walk through wizard install instructions.
* [Grunt](http://gruntjs.com) Install Grunt with Node Package Manageer (npm), via Terminal: <br />
 ```npm install -g grunt-cli```

To ensure all the counterparts are installed via Terminal:

* ```npm -v```
* ```grunt -v```

Running Grunt via Terminal:

* ```cd``` into ```/wp-content/themes/app/```
* Run ```npm install``` -- this will install the node plugins specified on the ```package.json``` for the project locally, in a ```node_modules``` dir (to be ignored with .git). This dir locally enables the commands to be run for the project.
* Test Grunt by running ```grunt``` -- this will run the default grunt tasks (sass) as specified on the ```gruntfile.js```
* To run the watch task (sass, jshint), run ```grunt dev```
* To run the javascript minification task (uglify), run ```grunt uglify```

For more information on the plugins being used, check out their docs on github.

