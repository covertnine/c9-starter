// Defining requirements
const gulp = require("gulp");
const plumber = require("gulp-plumber");
const sass = require("gulp-sass");
const cssnano = require("gulp-cssnano");
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const imagemin = require("gulp-imagemin");
const ignore = require("gulp-ignore");
const rimraf = require("gulp-rimraf");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync").create();
const cleanCSS = require("gulp-clean-css");
const gulpSequence = require("gulp-sequence");
const autoprefixer = require("gulp-autoprefixer");
const babel = require("gulp-babel");
const webpack_stream = require("webpack-stream");
const webpack_config = require("./webpack.config.js");
// const vinylPaths = require("vinyl-paths");
// const gzip = require("gulp-gzip");

// Configuration file to keep your code DRY
const cfg = require("./buildconfig.json");
const paths = cfg.paths;
const scriptSrc = paths.js;
const scriptMain = scriptSrc + "/main.js";
const scriptDist = paths.dist + "/js";
const styleDist = paths.dist + "/css";

// Run:
// gulp watch
// Starts watcher. Watcher runs gulp sass task on changes
gulp.task("watch", function() {
  gulpSequence("webpack-once", "styles", "scripts")(function(err) {
    if (err) console.log(err);
  });
  gulp.watch(paths.sass + "/**/*.scss", ["styles"]);
  gulp.watch(scriptMain, function() {
    gulpSequence("webpack-watch", "scripts")(function(err) {
      if (err) console.log(err);
    });
  });
  //Inside the watch task.
  gulp.watch(paths.imgsrc + "/**", ["imagemin-watch"]);
});

gulp.task("webpack-watch", function() {
  return (
    gulp
      .src(scriptMain)
      .pipe(webpack_stream(webpack_config))
      // .pipe(gzip())
      .on("error", function handleError() {
        this.emit("end"); // Recover from errors
      })
      .pipe(gulp.dest(scriptDist))
  );
});

gulp.task("webpack-once", function() {
  webpack_config.watch = false;
  return gulp
    .src(scriptMain)
    .pipe(webpack_stream(webpack_config))
    .on("error", function handleError() {
      this.emit("end"); // Recover from errors
    })
    .pipe(gulp.dest(scriptDist));
});
// Run:
// gulp sass
// Compiles SCSS files in CSS
gulp.task("sass", function() {
  var stream = gulp
    .src(paths.sass + "/*.scss")
    .pipe(
      plumber({
        errorHandler: function(err) {
          console.log(err);
          this.emit("end");
        }
      })
    )
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(sass({ errLogToConsole: true }))
    .pipe(autoprefixer("last 2 versions"))
    .pipe(sourcemaps.write(undefined, { sourceRoot: null }))
    .pipe(gulp.dest(paths.css));
  return stream;
});

/**
 * Ensures the 'imagemin' task is complete before reloading browsers
 * @verbose
 */
gulp.task("imagemin-watch", ["imagemin"], function() {
  browserSync.reload();
});

// Run:
// gulp imagemin
// Running image optimizing task
gulp.task("imagemin", function() {
  gulp
    .src(paths.imgsrc + "/**")
    .pipe(imagemin())
    .pipe(gulp.dest(paths.img));
});

// Run:
// gulp cssnano
// Minifies CSS files
gulp.task("cssnano", function() {
  return gulp
    .src(paths.css + "/theme.css")
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(
      plumber({
        errorHandler: function(err) {
          console.log(err);
          this.emit("end");
        }
      })
    )
    .pipe(rename({ suffix: ".min" }))
    .pipe(cssnano({ discardComments: { removeAll: true } }))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(styleDist));
});

gulp.task("minifycss", function() {
  return gulp
    .src(paths.css + "/theme.css")
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(cleanCSS({ compatibility: "*" }))
    .pipe(
      plumber({
        errorHandler: function(err) {
          console.log(err);
          this.emit("end");
        }
      })
    )
    .pipe(rename({ suffix: ".min" }))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(styleDist));
});

gulp.task("cleancss", function() {
  return gulp
    .src(paths.css + "/*.min.css", { read: false }) // Much faster
    .pipe(ignore("theme.css"))
    .pipe(rimraf());
});

gulp.task("styles", function(callback) {
  gulpSequence("sass", "minifycss")(callback);
});

// Run:
// gulp browser-sync
// Starts browser-sync task for starting the server.
gulp.task("browser-sync", function() {
  browserSync.init(cfg.browserSyncWatchFiles, cfg.browserSyncOptions);
});

// Run:
// gulp watch-bs
// Starts watcher with browser-sync. Browser-sync reloads page automatically on your browser
gulp.task("watch-bs", ["browser-sync", "watch", "scripts"], function() {});

// Run:
// gulp scripts.
// Uglifies and concat all JS files into one
gulp.task("scripts", function() {
  var scripts = [
    paths.node + "babel-polyfill/dist/polyfill.js",

    paths.node + "/js/bootstrap4/bootstrap.js",

    scriptDist + "main.bundle.js"
  ];
  gulp
    .src(scripts)
    .pipe(concat("theme.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest(scriptDist));
});
