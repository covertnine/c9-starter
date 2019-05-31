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
const del = require("del");
const cleanCSS = require("gulp-clean-css");
const gulpSequence = require("gulp-sequence");
const autoprefixer = require("gulp-autoprefixer");
const babel = require("gulp-babel");
const webpack_stream = require("webpack-stream");
const webpack_config = require("./webpack.config.js");
const vinylPaths = require("vinyl-paths");
const prettierEslint = require("gulp-prettier-eslint");
// const a11y = require("gulp-a11y");

// Configuration file to keep your code DRY
const cfg = require("./gulpconfig.json");
const paths = cfg.paths;

// Run:
// gulp watch
// Starts watcher. Watcher runs gulp sass task on changes
gulp.task("watch", ["styles", "scripts"], function() {
  gulp.watch(paths.sass + "/**/*.scss", ["styles"]);
  gulp.watch([paths.dev + "/js/main.js"], ["webpack"]);
  gulp.watch(
    [
      paths.dev + "/js/**/*.js",
      "js/**/*.js",
      "!js/theme.js",
      "!js/theme.min.js"
    ],
    ["webpack", "scripts"]
  );

  //Inside the watch task.
  gulp.watch(paths.imgsrc + "/**", ["imagemin-watch"]);
});

gulp.task("webpack", function() {
  return webpack_stream(webpack_config)
    .pipe(plumber())
    .pipe(prettierEslint())
    .pipe(gulp.dest("js/"));
});

// const browserSyncOptions = cfg.browserSyncOptions;

gulp.task("watch-scss", ["browser-sync"], function() {
  gulp.watch(paths.sass + "/**/*.scss", ["scss-for-dev"]);
});

gulp.task("webpack-client", function() {
  return gulp.src();
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

gulp.task("clean", () => {
  return gulp.src(paths.dev + "/js/main.js").pipe(vinylPaths(del));
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
    .pipe(gulp.dest(paths.css));
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
    .pipe(gulp.dest(paths.css));
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
gulp.task("scripts", ["webpack"], function() {
  var scripts = [
    paths.node + "babel-polyfill/dist/polyfill.js",

    // Start - All BS4 stuff
    paths.dev + "/js/bootstrap4/bootstrap.js",

    // End - All BS4 stuff

    paths.dev + "/js/skip-link-focus-fix.js",
    paths.node + "magnific-popup/dist/*.js",
    // Adding currently empty javascript file to add on for your own themes´ customizations
    // Please add any customizations to this .js file only!
    paths.dev + "/js/main.bundle.js"
  ];
  gulp
    .src(scripts)
    .pipe(babel({ presets: ["es2015"] }))
    .pipe(gulp.dest("theme.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest(paths.js));

  gulp
    .src(scripts)
    .pipe(concat("theme.js"))
    .pipe(gulp.dest(paths.js));
});

// Deleting any file inside the /src folder
gulp.task("clean-source", function() {
  return del(["src/**/*"]);
});

// Run:
// gulp copy-assets.
// Copy all needed dependency assets files from bower_component assets to themes /js, /scss and /fonts folder. Run this task after bower install or bower update

////////////////// All Bootstrap SASS  Assets /////////////////////////
gulp.task("copy-assets", function() {
  ////////////////// All Bootstrap 4 Assets /////////////////////////
  // Copy all JS files
  var stream = gulp
    .src(paths.node + "bootstrap/dist/js/**/*.js")
    .pipe(gulp.dest(paths.dev + "/js/bootstrap4"));

  // Copy all Bootstrap SCSS files
  gulp
    .src(paths.node + "bootstrap/scss/**/*.scss")
    .pipe(gulp.dest(paths.dev + "/sass/bootstrap4"));

  ////////////////// End Bootstrap 4 Assets /////////////////////////

  // Copy all Font Awesome Fonts
  gulp
    .src(paths.node + "font-awesome/fonts/**/*.{ttf,woff,woff2,eot,svg}")
    .pipe(gulp.dest("./fonts"));

  // Copy all Font Awesome SCSS files
  gulp
    .src(paths.node + "font-awesome/scss/*.scss")
    .pipe(gulp.dest(paths.dev + "/sass/fontawesome"));

  // _s SCSS files
  gulp
    .src(paths.node + "undescores-for-npm/sass/media/*.scss")
    .pipe(gulp.dest(paths.dev + "/sass/underscores"));

  // _s JS files into /src/js
  gulp
    .src(paths.node + "undescores-for-npm/js/skip-link-focus-fix.js")
    .pipe(gulp.dest(paths.dev + "/js"));

  // magnific
  gulp
    .src(paths.node + "magnific-popup/dist/jquery.magnific-popup.min.js")
    .pipe(gulp.dest(paths.dev + "/js"));

  // Copy Popper JS files
  gulp
    .src(paths.node + "popper.js/dist/umd/popper.min.js")
    .pipe(gulp.dest(paths.js + paths.vendor));
  gulp
    .src(paths.node + "popper.js/dist/umd/popper.js")
    .pipe(gulp.dest(paths.js + paths.vendor));
  return stream;
});
