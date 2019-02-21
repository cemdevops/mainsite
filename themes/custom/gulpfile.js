"use strict";
var gulp = require("gulp");
var sass = require("gulp-sass");
var concat = require("gulp-concat");
var concatCss = require("gulp-concat-css");
var plumber = require("gulp-plumber");
var uglify = require("gulp-uglify");
var browserSync = require("browser-sync").create(),
  reload = browserSync.reload;
var $ = require("gulp-load-plugins")({
  pattern: "*"
});
var less = require("gulp-less");

var $themeDrupalDev = "cem";
var $themeDrupalProd = "cem";

/*
 ===================================
 INIT TASKS - begin
 ===================================
*/

/*
:::::::::::::::::::::::
    Styles tasks
:::::::::::::::::::::::
    
    1. 'sass' : compile sass - also in in watch
    2. 'sass-bootstrap' : compile sass-bootstrap  - also in in watch
    3. 'style:vendors' : concat vendors (bootstrap, slick...)
*/

/* sass do projeto */
gulp.task("sass", function() {
  return gulp
    .src($themeDrupalDev + "/assets/scss/estilos.scss")
    .pipe(
      sass({
        errLogToConsole: true,
        sourceComments: "map",
        sourceMap: "sass",
        outputStyle: "expanded"
      }).on("error", $.sass.logError)
    )
    .pipe(gulp.dest($themeDrupalDev + "/assets/css"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

/* sass do bootstrap */
gulp.task("sass-bootstrap", function() {
  //return gulp.src( './node_modules/bootstrap-sass/assets/stylesheets/*.scss')
  return gulp
    .src($themeDrupalDev + "/assets/scss/bootstrap.scss")
    .pipe(
      plumber({
        handleError: function(error) {
          console.log(error);
          this.emit("end");
        }
      })
    )
    .pipe(
      $.sass({
        //includePaths: sassPaths,
        errLogToConsole: true,
        sourceComments: "map",
        sourceMap: "sass",
        outputStyle: "compressed"
      })
    )
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest($themeDrupalDev + "/assets/bootstrap/css/"));
});

/* less do bootstrat  */
gulp.task("less-bootstrap", function() {
  return gulp
    .src("./node_modules/bootstrap/less/*.less")
    .pipe(less())
    .pipe(gulp.dest($themeDrupalDev + "/assets/bootstrap/css"));
});

/* style concat vendors */
gulp.task("style:vendors", ["sass-bootstrap"], function() {
  var src = [
    "./node_modules/slick-carousel/slick/slick.css",
    "./" + $themeDrupalDev + "/assets/bootstrap/css/bootstrap.css"
    /*'./bower_components/tether/dist/css/*.css',*/
    /*'./JornalPucSp-theme/assets/bootstrap-v3/css/bootstrap.css'*/
  ];

  return gulp
    .src(src)
    .pipe(concatCss("vendors.css"))
    .pipe(gulp.dest($themeDrupalDev + "/assets/css/"));
});

/*
:::::::::::::::::::::::
    Scripts tasks
:::::::::::::::::::::::
    
    1. 'scripts:vendors' : concat vendors (jquery, slick...)
    2. 'scripts:main' : concat scripts 
*/

// Uglyfies js on to /js/minjs
gulp.task("scripts", function() {
  gulp
    .src("js/*.js")
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest("js/minjs"));
});

/* js vendors */
gulp.task("scripts:vendors", function() {
  var src = ["./node_modules/slick-carousel/slick/slick.min.js"];
  return gulp
    .src(src)
    .pipe(concat("vendors.js"))
    .pipe(gulp.dest("./" + $themeDrupalDev + "/assets/js/"));
});

/* js main */
gulp.task("scripts:main", function() {
  return gulp
    .src("./" + $themeDrupalDev + "/assets/js-dev/*.js")
    .pipe(concat("main.js"))
    .pipe(gulp.dest("./" + $themeDrupalDev + "/assets/js/"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

/*
:::::::::::::::::::::::
    HTML tasks
:::::::::::::::::::::::
    
    1. 'html' : hello darkness my old friend
*/

/*html task*/
gulp.task("html", function() {
  console.log("Editou html");
  return gulp.src("./" + $themeDrupalDev + "/html-templates/**/*.html").pipe(
    browserSync.reload({
      stream: true
    })
  );
});

/*server browser sync*/
gulp.task("browser-sync", function() {
  browserSync.init(null, {
    server: {
      baseDir: "./"
    },
    //tunnel: true,
    //proxy: 'http://localhost:8010',
    port: 8000,
    ghostMode: false,
    open: false
  });
});

/*
:::::::::::::::::::::::
    Watch tasks
:::::::::::::::::::::::
    
*/
gulp.task("js", ["scripts", "scripts:vendors"]);

gulp.task("watch", ["browser-sync"], function() {
  console.log(
    "\n########################\n\nhttp://localhost:8000/" +
      $themeDrupalDev +
      "/html-templates/index.html\n\n########################"
  );
  gulp.watch([$themeDrupalDev + "/assets/js-dev/*.js"], ["scripts:main"]);
  gulp.watch(
    [$themeDrupalDev + "/assets/scss/**/**/*.scss"],
    ["sass"],
    [reload]
  );
  gulp.watch(
    [$themeDrupalDev + "/assets/bootstrap/scss/**/*.scss"],
    ["sass-bootstrap"],
    [reload]
  );
  gulp.watch(
    [$themeDrupalDev + "/html-templates/**/*.html"],
    ["html"],
    [reload]
  );
});

gulp.task("assets", [
  "scripts:main",
  "scripts:vendors",
  "sass-bootstrap",
  "sass"
]);
