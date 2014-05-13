module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    watch: {
      options: {
        livereload: true
      },
      php: {
        files: ['*.php', '**/*.php']
      },
      css: {
        files:['style.css', 'css/**/*.css'],
      },
      less: {
        options: {
          livereload: false
        },
        files:['less/**/*.less'],
        tasks:['less']
      },
    },
    

    less: {
      production: {
        files: {
          "style.css": "less/style.less",
          "css/woocommerce/archive-product.css": "less/woocommerce/archive-product.less"
        }
      }
    },

    uglify: {
      production: {
        files: {
          'js/bootstrap.min.js': 'bower_components/bootstrap/dist/js/bootstrap.js',
          'js/respond.min.js': 'bower_components/respond/dest/respond.min.js',
          'js/modernizr.min.js': 'bower_components/modernizr/modernizr.js',
          'js/backgroundsize.min.js': 'bower_components/background-size-polyfill/src/script.js'
        }
      }
    },
      copy: {
          main: {
              files: [
                  {expand: true, flatten: true, filter: 'isFile', src: ['bower_components/background-size-polyfill/.htaccess'], dest: 'assets/misc/'},
                  {expand: true, flatten: true, filter: 'isFile', src: ['bower_components/background-size-polyfill/backgroundsize.min.htc'], dest: 'assets/misc/'},
              ]
          }
      }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['less', 'uglify', 'copy', 'watch']);

};