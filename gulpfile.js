const 
{
	series,
	src,
	dest,
	watch,
	parallel
} = require('gulp');

const sass   = require('gulp-sass');
const concat = require('gulp-concat');
const cssmin = require('gulp-cssmin');
const rename = require('gulp-rename');
const del    = require('del');

const paths  = 
{
	'dev_scss': 'dev/scss/',
	'dist_css': 'dist/css/'
};

function clean() 
{
	return del([paths.dist_css + "flexo.min.css",
	]);
}

function cssFlexo(done) 
{
	src([paths.dev_scss + 'flexo.scss'])
		.pipe(sass())
		.pipe(concat('flexo.css'))
		.pipe(cssmin())
		.pipe(rename({suffix: '.min'}))
		.pipe(dest(paths.dist_css));

	done();
}

function watchCSS() 
{
	watch([
			paths.dev_scss + 'flexo.scss', 
			paths.dev_scss + '_mixin.scss', 
			paths.dev_scss + '_config.scss'], parallel(cssFlexo));
}

exports.wcss    = parallel(watchCSS);
exports.default = series(clean, parallel(cssFlexo));
