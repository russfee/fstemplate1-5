// Gulp Plugin Setup

var gulp = require('gulp'),
sass = require('gulp-sass'),
browserSync = require('browser-sync'),
autoprefixer = require('gulp-autoprefixer'),
uglify = require('gulp-uglify'),
jshint = require('gulp-jshint'),
header  = require('gulp-header'),
rename = require('gulp-rename'),
minifyCSS = require('gulp-clean-css'),
notify = require("gulp-notify"),
cache = require('gulp-cache'),
replace = require('gulp-replace'),
plumber = require('gulp-plumber'),
gutil = require('gulp-util'),
concat = require('gulp-concat'),
sourcemaps = require ('gulp-sourcemaps'),
package = require('./package.json');


// Project Variables

var _theme_loc = 'wp-content/themes/Fee and Sons 2018/',
_local_server = 'http://fstemplate1-5.local';


// Inject Package.json Project details into CSS files

var banner = [
'/*!\n' +
' * <%= package.name %>\n' +
' * <%= package.title %>\n' +
' * <%= package.url %>\n' +
' * @author <%= package.author %>\n' +
' * @version <%= package.version %>\n' +
' * Copyright ' + new Date().getFullYear() + '. <%= package.license %> licensed.\n' +
' */',
'\n'
].join('');


// Handle Errors

var onError = function( err ) {
 gutil.beep();
 gutil.log( 'An error occurred:', err.message );
 notify.onError({
  title:    "Gulp",
  subtitle: "Failure!",
  message:  "Woops!",
  sound:    "Beep"
})(err);
this.emit('end');
};


// Concatinate and Minify CSS, Compile SASS

gulp.task('css', function () {
  return gulp.src([
      _theme_loc + 'assets/scss/main.scss'
      ])
  .pipe(plumber({errorHandler: onError}))
  .pipe(sass({errLogToConsole: true}))
  .pipe(autoprefixer('last 4 version'))
  .pipe(sass({outputStyle: 'expanded'}))
  .pipe(concat('main.css'))
  .pipe(gulp.dest(_theme_loc + 'assets/css'))
    //.pipe(minifyCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest(_theme_loc + 'assets/css'))
    .pipe(notify({
     title: 'Gulp',
     subtitle: 'success',
     message: 'BAM!'
   }))
    .pipe(browserSync.stream());
  });


// Concatinate and Minify JS

gulp.task('js',function(){
  return gulp.src([
    _theme_loc + 'assets/js/slim-select.min.js',
    _theme_loc + 'assets/js/js.cookie.js',
    _theme_loc + 'assets/js/jquery.waypoints.min.js',
    _theme_loc + 'assets/js/sticky.min.js',
    _theme_loc + 'assets/js/slick.min.js',
    _theme_loc + 'assets/js/_application.js'
    ])
    //.pipe(jshint('.jshintrc'))
    //.pipe(jshint.reporter('default'))
    //.pipe(header(banner, { package : package }))
    .pipe(gulp.dest(_theme_loc + 'assets/js'))
    //.pipe(uglify())
    //.pipe(header(banner, { package : package }))
    .pipe(concat('main.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(_theme_loc + 'assets/js'))
    .pipe(notify({
     title: 'Gulp',
     subtitle: 'success',
     message: 'JS GO!!'
   }))
    .pipe(browserSync.reload({stream:true, once: true}));
  });



// Setup Browser sync

gulp.task('browser-sync', function() {
  browserSync.init(null, {
    proxy: _local_server,
    online: true,
    host: "10.176.231.27",
  });
});
gulp.task('bs-reload', function () {
  browserSync.reload();
});


// Gulp Tasks

gulp.task('default', ['css', 'js', 'bs-reload', 'browser-sync'], function () {
  gulp.watch(_theme_loc + "assets/scss/main.scss", ['css']);
  gulp.watch(_theme_loc + "assets/scss/*/*.scss", ['css']);
  gulp.watch(_theme_loc + "assets/scss/*/*/*.scss", ['css']);
  gulp.watch(_theme_loc +"assets/js/*.js", ['js']);
  gulp.watch(_theme_loc + "/*/*/*/*.php", ['bs-reload']);
  gulp.watch(_theme_loc + "/*/*/*.php", ['bs-reload']);
  gulp.watch(_theme_loc + "/*/*.php", ['bs-reload']);
  gulp.watch(_theme_loc + "*.php", ['bs-reload']);
});
