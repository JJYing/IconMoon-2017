var gulp = require('gulp'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins();
 
var cdnUrl = [
	[ 'assets/jquery-3.1.1.min.js', 'http://anyway-web.b0.upaiyun.com/js/jquery-3.1.1.min.js' ],
	[ 'assets/in-view.min.js', 'http://anyway-web.b0.upaiyun.com/js/in-view.min.js' ],
	[ 'assets/', 'http://anyway-web.b0.upaiyun.com/iconmoon-2017/' ]
];
 
gulp.task('watch', function() {
	gulp.watch(['*','*/*'], ['default']);
 });
 
 
gulp.task('default', function() {

	gulp.src('*.html')
		.pipe(plugins.batchReplace(cdnUrl))
		.pipe(plugins.htmlMinifier({
			collapseWhitespace: true,
			removeComments: true,
			minifyJS: true
		}))
		.pipe(gulp.dest('builds'));
		
	gulp.src('assets/*.css')
		.pipe(plugins.cleanCss({compatibility: 'ie8'}))
		.pipe(gulp.dest('builds'));     
});

