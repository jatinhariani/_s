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
        files:['style.css']
      },
      less: {
        options: {
          livereload: false
        },
        files:['less/*.less'],
        tasks:['less']
      },
    },
    

    less: {
      production: {
        files: {
          "style.css": "less/style.less"
        }
      }
    },

    uglify: {
      production: {
        files: {
          'js/bootstrap.min.js': 'bower_components/bootstrap/dist/js/bootstrap.js',
          'js/respond.min.js': 'bower_components/respond/dest/respond.min.js'
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['less', 'uglify', 'watch']);

};