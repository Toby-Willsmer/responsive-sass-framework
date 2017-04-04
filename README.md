Sass website framework
==============
This is a lightweight responsive framework I put together to use as a base for building medium to large websites.
Fully configurable/expandable to any set up.

Dependancies
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

Grunt compiles the scss instead of Compass

The grid
==============
The grid is taken from Zurbs Foundation 5 and stripped out to its basic grid and optimised to make it as light as possible.

In the SCSS directory
==============
base-settings/ : The frameworks main settings including mixins, functions and the base variables for the site. The architecture here is based around the 7 - 1 technique https://sass-guidelin.es/#architecture

There is also an 'example-external-rules' file & folder for an additional seperate CSS sheet to be generated if needed.

Browser compatibility
==============
This framework is only built to support modern browsers last 2 versions (can be altered in grunt.js file).
It uses REMs instead of px and I took out the support for px fallbacks as I prefer to build this framework for the future not the past!

There is a conditional statement for IE versions 9 or older to state this. It is hard coded in as well for display purposes ONLY.
