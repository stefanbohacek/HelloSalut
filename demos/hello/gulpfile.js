var gulp = require('gulp'),
    less = require('gulp-less'),
    path = require('path'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    jasmine = require('gulp-jasmine');

gulp.task('styles', function() {
  return gulp.src('src/styles/*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('css'))
    .pipe(autoprefixer('last 3 version', 'android >= 3', { cascade: true }))
    .pipe(gulp.dest('css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('scripts', function() {
  return gulp.src('src/scripts/**/*.js')
    .pipe(jshint('tests/.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('images', function() {
  return gulp.src('src/images/*')
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('images'))
    .pipe(notify({ message: 'Images task complete' }));
});

gulp.task('clean', function() {
  return gulp.src(['css', 'js', 'images'], {read: false})
    .pipe(clean());
});

gulp.task('watch', function() {
  gulp.watch('src/styles/*.less', ['styles']);
  gulp.watch('src/scripts/*.js', ['scripts']);
  gulp.watch('src/images/**/*', ['images']);

  /*
  var server = livereload();

  gulp.watch(['css/**']).on('change', function(file) {
    server.changed(file.path);
  });
  gulp.watch(['images/**']).on('change', function(file) {
    server.changed(file.path);
  });
  gulp.watch(['js/**']).on('change', function(file) {
    server.changed(file.path);
  });
*/
});

gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images', 'watch');
});