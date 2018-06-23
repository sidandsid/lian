var gulp = require('gulp'), 
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    del = require('del'), 
    imagemin = require('gulp-imagemin'), 
    pngquant = require('imagemin-pngquant'), 
    autoprefixer = require('gulp-autoprefixer'), 
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
	uglify = require('gulp-uglify');

/* Task to compile and minify styles */
gulp.task('sass', function(){
    return gulp.src('assets/scss/**/*.scss')
        .pipe(sass())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/css'))
        .pipe(autoprefixer(['last 3 versions'], { cascade: false }))
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('assets/css'))
});

/* Task to include js partials and minify scripts.js */
gulp.task('js', function(){
    gulp.src('assets/js/*.js')
        .pipe(rigger())
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./'))
});

/* Task to minify images */
gulp.task('images', function(){
    gulp.src('assets/images/*.*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest('assets/images/'))
});

/* Task to watch changes and sync with browser */
gulp.task('watch', function() {
    browserSync.init({
        files: ['./**/*.php'],
        proxy: 'http://localhost/lian-wp/'
    });

    gulp.watch('./assets/scss/**/*.scss', ['sass', reload]);
    gulp.watch('./assets/js/**/*.js', ['js', reload]);
});