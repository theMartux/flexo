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
const zip    = require('gulp-zip');
const del    = require('del');

const paths  = 
{
	'dev_scss': 'dev/scss/',
	'dev_css':  'dev/css/',
	'dist_css': 'dist/css/',
	'download': 'download/'
};

function clean() 
{
	return del([paths.dist_css + "flexo.min.css",
	]);
}
function cleanDev() 
{
	return del([paths.dev_css + "flexo.css",
	]);
}
function cleanZip() 
{
	return del([paths.download + "flexo.zip",
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
function cssFlexoDev(done) 
{
	src([paths.dev_scss + 'flexo.scss'])
		.pipe(sass())
		.pipe(concat('flexo.css'))
		.pipe(dest(paths.dev_css));

	done();
}


function zipFlexo(done) 
{
	src([paths.download + 'flexo/dist/css/*.css', paths.download + '/flexo/dev/**/*.*'],{base: './download/flexo'})
	    .pipe(zip('flexo.zip'))
		.pipe(dest(paths.download+'flexo'));

	done();
}

function watchCSS() 
{
	watch([
			paths.dev_scss + 'flexo.scss', 
			paths.dev_scss + '_mixin.scss', 
			paths.dev_scss + '_config.scss'], parallel(cssFlexo));
}

exports.wcss      = parallel(watchCSS);
exports.zip_flexo = series(cleanZip, parallel(zipFlexo));
exports.default   = series(clean, parallel(cssFlexo));
exports.flexo_dev = series(cleanDev, parallel(cssFlexoDev));
