module.exports = function (grunt) {

  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        compass: {
          dev: {
            options: {
              config: 'config.rb',
              force: true
            }
          }
        },

        autoprefixer: {
          options: {
            browsers: ['last 2 versions']
          },
          dist: {
            files: [{
              expand: true,
              cwd:    'css/',
              src:    '{,*/}*.css',
              dest:   'css/'
            }]
          }
        },

        cssmin: {
          my_target: {
            files: [{
              expand: true,
              cwd:    'css/',
              src:   ['*.css', '!*.min.css'],
              dest:   'css/',
              ext:    '.min.css'
            }]
          }
        },

        watch: {
          compass: {
            files: ['scss/*.scss', 'scss/**/*.scss', 'scss/**/**/*.scss', 'scss/**/**/**/*.scss'],
            tasks: ['compass:dev', 'autoprefixer', 'cssmin']
          }
        }

    }); // close initConfig

  // default tasks
  grunt.registerTask('default', ['compass', 'autoprefixer', 'cssmin', 'watch']);

};