var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyjs = require('gulp-js-minify');
var browserSync = require('browser-sync').create();

gulp.task('browserSync', function() {
	browserSync.init({
		proxy: 'http://localhost:8888/wedding'
	});
});

gulp.task('sass', function() {
	return gulp.src('scss/style.scss')
	.pipe(sass({outputStyle: 'compressed'}))
	.pipe(gulp.dest('dist/css/'))
	.pipe(browserSync.reload({
		stream:true
	}))
});

gulp.task('minify-js', function() {
	gulp.src('js/*.js')
	.pipe(minifyjs())
	.pipe(gulp.dest('dist/js/'))
	.pipe(browserSync.reload({
		stream:true
	}))
});


gulp.task('watch', ['browserSync', 'sass'], function() {
	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch('js/*.js', ['minify-js']);
	gulp.watch('*.php', browserSync.reload);
	gulp.watch('/inc/*.php', browserSync.reload);
	gulp.watch('js/*.js', browserSync.reload);
})
