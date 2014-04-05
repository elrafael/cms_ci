module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/scripts.js',
        dest: 'js/scripts.min.js'
      }
    },
    less: {
      options: {
        compress: true,
        cleancss: true,
        optimization: 2
      },
      "css/admin.min.css": "less/admin.less",
      "css/styles.min.css": "less/styles.less"
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'less']);

};
