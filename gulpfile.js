var gulp = require('gulp');
var uglify = require('gulp-uglifyjs');
var pump = require('pump');
var cleanCSS = require('gulp-clean-css');
var $    = require('gulp-load-plugins')();
 

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/style.scss') 
    .pipe($.sass({
      includePaths: sassPaths
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('css'));
});


gulp.task('compressjs', function () {
	var options = {
		compress: true,
		mangle: true,
		concat : true,
		preserveComments : false
	};
	return gulp.src(
		['bower_components/jquery/dist/jquery.js',
		'bower_components/foundation-sites/dist/foundation.js',
		'js/lib/photoswipe.min.js',
		'js/lib/photoswipe-ui-default.min.js',
		'js/lib/packery.pkgd.min.js',
		'js/lib/imagesloaded.pkgd.min.js',
		'js/app.js'])
	    .pipe(uglify('buntamor.min.js', options))
		.pipe(gulp.dest('js'));
});

gulp.task('compresscss', function() {
  return gulp.src('css/style.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('wp-content/themes/buntamor'));
});

gulp.task('default', function() {
	gulp.start('sass','compressjs','compresscss');
	gulp.watch(['scss/**/*.scss'], ['sass']);
	gulp.watch(['js/**/*.js'], ['compressjs']);
	gulp.watch(['css/style.css'], ['compresscss']);
});
