'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
    function css() {
    return (
        gulp
            .src(['scss/main.scss', 'scss/bootstrap-grid.scss'])
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(gulp.dest('css'))
    );
}
function watch() {
    // gulp.watch takes in the location of the files to watch for changes
    // and the name of the function we want to run on change
    gulp.watch('scss/**/*.scss', css)
}

// Don't forget to expose the task!
exports.watch = watch
exports.css = css;


var build = gulp.parallel(watch);
gulp.task('default', build);