var gulp = require('gulp'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins();
 
var cdnUrl = [
	[ 'assets/', 'http://anyway-web.b0.upaiyun.com/iconmoon/' ]
];
 
gulp.task('watch', function() {
	gulp.watch(['*','*/*'], ['default']);
 });
 
 
gulp.task('default', function() {

	gulp.src('*.html')
		.pipe(plugins.batchReplace(cdnUrl))
		.pipe(gulp.dest('builds'));
		
	gulp.src('*.css')
		.pipe(plugins.cleanCss({compatibility: 'ie8'}))
		.pipe(gulp.dest('builds'));     
});

