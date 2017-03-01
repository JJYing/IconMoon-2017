var gulp = require('gulp'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins();
 
var cdnUrl = [
	[ '../blog-2016.css', 'http://anyway-web.b0.upaiyun.com/iconmoon/blog-2016.min.css' ]
];
 
gulp.task('watch', function() {
	gulp.watch(['*','*/*'], ['default']);
 });
 
 
gulp.task('default', function() {

	gulp.src('blog2/template/iconmoon-2016/elements.php')
		.pipe(plugins.batchReplace(cdnUrl))
		.pipe(gulp.dest('build'));
		
	gulp.src('*.css')
		.pipe(plugins.cleanCss({compatibility: 'ie8'}))
		.pipe(plugins.rename({
		      suffix: '.min'
		    }))
		.pipe(gulp.dest('build'));     
});

