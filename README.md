Sass_framework
==============
This is a lightweight responsive framework I put together to use as a base for building websites/apps.
Fully configurable/expandable to any set up.

You will need to install
==============
node : http://nodejs.org/<br/>
npm : https://www.npmjs.org/<br/>
grunt : http://gruntjs.com/<br/>
sass : http://sass-lang.com/<br/>
compass : http://compass-style.org/

Grunt is used to run these npm plugins
==============
autoprefixer : https://www.npmjs.org/package/grunt-autoprefixer<br/>
cssmin : https://www.npmjs.org/package/grunt-contrib-cssmin

Grunt also uses the compass config file to run the compiling of the scss
Just run 'grunt' from the command line in the directory to run the tasks

The grid
==============
The grid is taken from Zurbs Foundation 5 and stripped out to its basic grid and optimised to make it as light as possible.

The icon font
==============
The font is from fontello and has a config file included so you can easily add/subtract icons as needed.
http://fontello.com/

In the SCSS directory
==============
base-settings/ : framework main settings including mixins, functions and the base variables for the site.

site-settings/ : This is where the site/app specific files go.

Browser compatibility
==============
This framework is only built to support modern browsers last 2 versions (can be altered in grunt.js file).
It uses REMs instead of px and I took out the support for px fallbacks as I prefer to build this framework for the future not the past!

There is a conditional statement for IE versions 9 or older to state this. It is hard coded in as well for display purposes ONLY.
