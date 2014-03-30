module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uncss: {
      dist: {
        src: ['index.php'],
        dest: 'css/tidy.css',
        options: {
          report: 'min' // optional: include to report savings
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-uncss');

  grunt.registerTask('default', ['uncss']);

};
