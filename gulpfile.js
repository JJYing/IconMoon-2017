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

	gulp.src('blog2/template/iconmoon-2016/elements.php')
		.pipe(plugins.batchReplace(cdnUrl))
		.pipe(gulp.dest('builds'));
		
	gulp.src('*.css')
		.pipe(plugins.cleanCss({compatibility: 'ie8'}))
		.pipe(plugins.rename({
		      suffix: '.min'
		    }))
		.pipe(gulp.dest('build'));     
});

