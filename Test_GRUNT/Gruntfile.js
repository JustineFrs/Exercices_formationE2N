module.exports = function(grunt) {

  // Configuration de Grunt
  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: [{ // C'est ici que l'on définit le dossier que l'on souhaite importer
        "expand": true,
        "cwd": "assets",
        "src": ["*.scss"],
        "dest": "assets",
        "ext": ".css"
      }]
    }
  },
  cssmin: {
    target: {
      files: [{
        expand: true,
        cwd: 'assets',
        src: ['*.css', '!*.min.css'],
        dest: 'assets',
        ext: '.min.css'
      }]
    }
  }
});
grunt.loadNpmTasks('grunt-contrib-sass')
grunt.loadNpmTasks('grunt-contrib-cssmin');
// Définition des tâches Grunt
grunt.registerTask('default', '')
grunt.registerTask('css', ['sass','cssmin'])
}
