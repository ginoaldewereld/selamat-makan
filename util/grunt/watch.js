// -------------------------------------
// Grunt watch
// -------------------------------------

module.exports = {

  // ----- Watch tasks ----- //

  scss: {
    files: ['lib/scss/**/*.scss', 'src/scss/**/*.scss'],
    tasks: ['sass:develop', 'autoprefixer:develop', 'ftpush:deploy']
  },
  js: {
    files: ['lib/js/**/*.js', 'src/js/*.js'],
    tasks: ['concat:develop', 'ftpush:deploy']
  },
  php: {
    files: ['php/templates/*.php', 'php/includes/*.php'],
    tasks: ['delete_sync:phptemplates',
      'delete_sync:phpincludes',
      'newer:copy:php',
      'ftpush:deploy'
    ]
  },
  css: {
    files: ['src/css/style.css'],
    tasks: ['copy:css', 'ftpush:deploy']
  },
  img: {
    files: ['src/img/**/*'],
    tasks: ['newer:imagemin:all', 'delete_sync:img', 'ftpush:deploy']
  },

  // ----- Enable livereload ----- //

  livereload: {
    options: {
      livereload: true
    },
    files: ['deploy/**/*']
  }
};
