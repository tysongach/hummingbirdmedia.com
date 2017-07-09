var autoprefixer  = require("gulp-autoprefixer");
var bourbon       = require("bourbon").includePaths;
var browserSync   = require("browser-sync");
var connect       = require("gulp-connect-php");
var eyeglass      = require("eyeglass");
var gulp          = require("gulp");
var sass          = require("gulp-sass");

gulp.task("serve", ["sass"], function() {
  connect.server({}, function (){
    browserSync({
      proxy: "127.0.0.1:8000"
    });
  });

  gulp.watch("assets/stylesheets/*.scss", ["sass"]);
  gulp.watch("**/*.php").on("change", function () {
    browserSync.reload();
  });
});

gulp.task("sass", function() {
  return gulp.src("assets/stylesheets/*.scss")
    .pipe(sass(eyeglass()))
    .pipe(autoprefixer({
      browsers: ["last 2 versions"]
    }))
    .pipe(gulp.dest("assets/stylesheets"))
    .pipe(browserSync.stream());
});

gulp.task("default", ["serve"]);
