const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');

gulp.task('frontend', () => {
  return gulp.src('./frontend/scss/*.scss')
    .pipe( sass({ outputStyle: 'expanded' }) )
    .pipe( gulp.dest('./frontend/web/css') )
    .pipe( sass({outputStyle: 'compressed'}) )
    .pipe( rename({
        suffix: ".min"
    }))
    .pipe( gulp.dest('./frontend/web/css') );
});

gulp.task('default', function () {
  gulp.watch('./frontend/scss/**/*.scss', gulp.parallel('frontend'));
});