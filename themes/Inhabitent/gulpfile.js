const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const cssnano = require('gulp-cssnano');
const eslint = require('gulp-eslint');
const gulp = require('gulp');
const prettyError = require('gulp-prettyerror');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const terser = require('gulp-terser');
const babel = require('gulp-babel');

// Set up source files
// scss/css
const cssSource = './sass/**/*.scss';
const cssDest = './';


// Create sass Gulp tasks
gulp.task('sass', () => {
  return gulp
    .src(cssSource, { sourcemaps: true })
    .pipe(sourcemaps.init())
    .pipe(prettyError())
    .pipe(sass())
    .pipe(
      autoprefixer({
        browsers: ['last 2 versions']
      })
    )
    // .pipe(gulp.dest(cssDest))
    .pipe(cssnano())
    .pipe(rename('style.css'))
    .pipe(sourcemaps.write('../maps'))
    .pipe(gulp.dest(cssDest))
    .pipe(browserSync.stream());
});


// Create JS Gulp Tasks
// gulp.task('lint', function() {
//   return gulp
//     .src(['./js/*.js'])
//     .pipe(prettyError())
//     .pipe(eslint())
//     .pipe(eslint.format())
//     .pipe(eslint.failAfterError());
// });

// gulp.task('scripts', gulp.series('lint', () => {
//   return gulp
//     .src('./js/*.js')
//     .pipe(
//       babel({
//         presets: ['env']
//       })
//     )
//     .pipe(terser())
//     .pipe(
//       rename({
//         extname: '.min.js'
//       })
//     )
//     .pipe(gulp.dest('./build/js'));
//   })
// );


// Set-up BrowserSync
gulp.task('browser-sync', () => {
  const files = [
    cssDest,
    // './build/js/*.js',
    './*.php',
    './**/*.php'
  ];

  browserSync.init({
    proxy: 'http://localhost/project4-inhabitent-new/wordpress/'
  });

  gulp.watch(files).on('change', browserSync.reload);
});


// Set up Watch and default fuctions
gulp.task('watch', () => {
  // gulp.watch('js/*.js', gulp.series('scripts'));
  gulp.watch(cssSource, gulp.series('sass'));
});

gulp.task('default', gulp.parallel('browser-sync', 'watch'));