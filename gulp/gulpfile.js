// gulpプラグインの読み込み
const gulp  = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require('gulp-dart-sass');
// エラー発生時のアラート出力または「SCSSをコンパイルしました」と表示するプラグインの読み込み
const notify = require("gulp-notify"); 
 // エラーが発生しても強制終了させないプラグインの読み込み
const plumber = require("gulp-plumber");
//  ブラウザリロードプラグインの読み込み
const browserSync = require("browser-sync"); 

// ここからSCSSコンパイル対応
    const compileSass = () => {
      return (
        gulp
          .src("../scss/**/*.scss",               
                { // style.scssファイルを取得
                  sourcemaps: true
                })
          .pipe(
          //エラーが出ても処理を止めない
            plumber({
              errorHandler: notify.onError('Error:<%= error.message %>')
            }))
          .pipe(
            sass({
              outputStyle: "expanded" // 出力時のコードを整形
            })
          )
          // Sassのコンパイルを実行
          .pipe(sass())

          // cssフォルダー以下に保存
          .pipe(gulp.dest("../css/", { sourcemaps: './' }))

          // Sassを編集した際に、ブラウザがリロードしていないのに変更内容が反映
          .pipe(browserSync.stream())

          // SCSSをコンパイルすると「Sassをコンパイルしました！」と表示される
          .pipe(notify({
            message: 'Sassをコンパイルしました！',
            onLast: true
          }))
      );

    }; 

//  htmlの自動リロード→WordPress化の為、HTMLは不要
    const browserSyncFunc = () => {
      browserSync.init(browserSyncOption);
    }

    const browserSyncOption = {
      server: "../new_portfolio/"
    }

    const browserSyncReload = (done) => {
      browserSync.reload();
      done();
    }    



 // SCSS配下のSCSSファイルへ変更があれば、反映される様にSCSSファイルを監視
    const watchSassFiles = () => { 
                                   gulp.watch("../scss/**/*.scss", gulp.series(compileSass));
                                   gulp.watch("../new_portfolio/*.html", gulp.series(browserSyncReload));
                                  } 
// npx gulpというコマンドを実行した時、watchSassFiles,browserSyncFuncが実行されるようにします
    exports.default = gulp.series(
      watchSassFiles,
      browserSyncFunc,
    );