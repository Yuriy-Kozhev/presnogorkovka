const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const imagemin = require("gulp-imagemin");
const htmlmin = require("gulp-htmlmin");

gulp.task("styles", function () {
    return gulp
        .src("src/sass/**/*.+(scss|sass)")
        .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS({ compatibility: "ie8" }))
        .pipe(gulp.dest("dist/css"));
});

gulp.task("watch", function () {
    gulp.watch("src/sass/**/*.+(scss|sass|css)", gulp.parallel("styles"));
    gulp.watch("src/*.+(html|php)").on("change", gulp.parallel("html"));
    gulp.watch("src/js/**/*.js").on("change", gulp.parallel("scripts"));
    gulp.watch("src/fonts/**/*").on("all", gulp.parallel("fonts"));
    gulp.watch("src/img/**/*").on("all", gulp.parallel("images"));
});

gulp.task("html", function () {
    return gulp
        .src("src/*.+(html|php)")
        .pipe(htmlmin({ collapseWhitespace: true }))
        .pipe(gulp.dest("dist/"));
});

gulp.task("scripts", function () {
    return gulp
        .src("src/js/**/*.js")
        .pipe(gulp.dest("dist/js"));
});

gulp.task("fonts", function () {
    return gulp
        .src("src/fonts/**/*")
        .pipe(gulp.dest("dist/fonts"));
});

gulp.task("images", function () {
    return gulp
        .src("src/img/**/*")
        .pipe(imagemin())
        .pipe(gulp.dest("dist/img"));
});

gulp.task(
    "default",
    gulp.parallel(
        "watch",
        "styles",
        "scripts",
        "fonts",
        "images",
        "html"
    )
);