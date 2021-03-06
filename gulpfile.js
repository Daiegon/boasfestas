var gulp = require('gulp');
//var browser-sync = require('gulp-browser-sync');
var browserSync = require('browser-sync');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//PLUGINS
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var jade = require('gulp-jade');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var minifyHTML = require('gulp-minify-html');

//TASKS

	// --CSS
	gulp.task('css', function () {
	  return gulp.src('source/less/carne.less')
	    .pipe(less({ paths: [ 'source/less'] }))
	    .pipe(autoprefixer())
	    .pipe(minifyCSS())
	    .pipe(rename('carne.css'))
	    .pipe(gulp.dest('_build/source/css'))
	    .pipe(browserSync.reload({stream:true}))
	});

	// --BOOTSTRAP CSS
	gulp.task('bootstrap', function () {
	  return gulp.src('bower_components/bootstrap-css/css/bootstrap.min.css')
	    .pipe(gulp.dest('_build/source/css'))
	});

	// --BOOTSTRAP FONTS
	gulp.task('fonts', function () {
	  return gulp.src('bower_components/bootstrap-css/fonts/*')
	    .pipe(gulp.dest('_build/source/fonts'))
	});

	// --HMTL
	/*gulp.task('html', function() {
	  gulp.src('source/jade/*.jade')
	    .pipe(jade())
	    .pipe(gulp.dest('_build'))
	    .pipe(browserSync.reload({stream:true}))
	});*/
	gulp.task('html', function() {
	  gulp.src('source/html/*.html')
	    .pipe(gulp.dest('_build'))
	    .pipe(browserSync.reload({stream:true}))
	});

	// --JS
	gulp.task('js', function() {
		gulp.src([
		    'bower_components/jquery/dist/jquery.js',
		    //'bower_components/normalize-strings/normalize.js',
		    'bower_components/bootstrap-css/js/bootstrap.js',
		    'source/js/*.js',
		  ])
	    .pipe( concat('scripts.min.js') ) // concat pulls all our files together before minifying them
	    .pipe(uglify())
	    .pipe(gulp.dest('_build/source/js'))
	    .pipe(browserSync.reload({stream:true}))
	});

	// --IMAGE MIN
	gulp.task('img', function () {
	    return gulp.src('source/images/*')
	        .pipe(imagemin({
	            progressive: true,
	            svgoPlugins: [{removeViewBox: false}],
	            use: [pngquant()]
	        }))
	        .pipe(gulp.dest('_build/source/images'));
	});

	// -- MINIFY HTML
	gulp.task('minify-html', function() {
	  var opts = {
	    conditionals: true,
	    spare:true
	  };
	 
	  return gulp.src('source/html/*.html')
	    .pipe(minifyHTML(opts))
	    .pipe(gulp.dest('_build/'))
	    .pipe(browserSync.reload({stream:true}))
	});

	// --WATCH
	gulp.task('watch', function () {
	   gulp.watch('source/less/*.less', ['css']);
	   //gulp.watch('source/jade/*.jade', ['html']);
	   gulp.watch('source/html/*.html', ['minify-html']);
	   gulp.watch('source/js/*.js', ['js']);
	   gulp.watch('source/images/*', ['img']);
	});


	// * * * //

	// --BROWSER SYNC
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