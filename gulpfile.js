// Define plugins
const gulp = require('gulp'),
      sass = require('gulp-sass'),
      rename = require('gulp-rename');

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

gulp.task('backend', () => {
  return gulp
    .src('./backend/scss/layouts/layout_1/material/compile/*.scss')
    .pipe( sass({ outputStyle: 'expanded' }) )
    .pipe( gulp.dest('./backend/web/css') )
    .pipe( sass({outputStyle: 'compressed'}) )
    .pipe( rename({
        suffix: ".min"
    }))
    .pipe( gulp.dest('./backend/web/css') );
});

// Listen for changes in all SCSS files and automatically re-compile
gulp.task('default', function() {
    gulp.watch('./backend/scss/**/*.scss', gulp.parallel('backend'));
});

// gulp.task('default', function () {
//   gulp.watch('./frontend/scss/**/*.scss', gulp.parallel('frontend'));
// });
