var gulp = require('gulp');
//var browser-sync = require('gulp-browser-sync');
var browserSync = require('browser-sync');


//PLUGINS
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var jade = require('gulp-jade');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');

//TASKS

	// --CSS
	gulp.task('css', function () {
	  return gulp.src('source/less/*.less')
	    .pipe(less({ paths: [ 'source/less'] }))
	    .pipe(autoprefixer())
	    .pipe(minifyCSS())
	    .pipe(rename('style.css'))
	    .pipe(gulp.dest('_build/source/css'))
	    .pipe(browserSync.reload({stream:true}))
	});

	// --HMTL
	/*gulp.task('html', function() {
	  gulp.src('source/jade/*.jade')
	    .pipe(jade())
	    .pipe(gulp.dest('_build'))
	    .pipe(browserSync.reload({stream:true}))
	});*/
	gulp.task('html', function() {
	  gulp.src('_build/*.html')
	    .pipe(gulp.dest('_build'))
	    .pipe(browserSync.reload({stream:true}))
	});

	// --JS
	gulp.task('js', function() {
		gulp.src([
		    'bower_components/jquery/dist/jquery.js',
		    'bower_components/normalize-strings/normalize.js',
		    'bower_components/bootstrap-css/js/bootstrap.js',
		  ])
	    .pipe( concat('scripts.min.js') ) // concat pulls all our files together before minifying them
	    .pipe(uglify())
	    .pipe(gulp.dest('_build/source/js'))
	});

	// --WATCH
	gulp.task('watch', function () {
	   gulp.watch('source/less/*.less', ['css']);
	   //gulp.watch('source/jade/*.jade', ['html']);
	   gulp.watch('_build/*.html', ['html']);
	});


	// * * * //

	// --browser-sync
	gulp.task('browser-sync', function() {
	  browserSync({
	    server: {
	      baseDir: "_build"
	    }
	  });
	});

	// --START
	gulp.task('start', ['browser-sync', 'watch']);


	// * * * //

	// --DEFAULT
	gulp.task('default', ['css', 'html', 'js']);