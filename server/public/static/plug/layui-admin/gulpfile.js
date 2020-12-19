/**
 layuiAdmin std 构建
*/

var pkg = require('./package.json');
var inds = pkg.independents;

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var replace = require('gulp-replace');
var header = require('gulp-header');
var del = require('del');
var gulpif = require('gulp-if');
var minimist = require('minimist');

//获取参数
var argv = require('minimist')(process.argv.slice(2), {
  default: {
    ver: 'all' 
  }
})

//注释
,note = [
  '/** <%= pkg.name %>-v<%= pkg.version %> <%= pkg.license %> License By <%= pkg.homepage %> */\n <%= js %>'
  ,{pkg: pkg, js: ';'}
]

,destDir = './dist' //构建的目标目录
,releaseDir = '../pack/layuiAdmin.pack/'+ pkg.name +'-v' + pkg.version //发行版本目录

//任务
,task = {
  //压缩 JS
  minjs: function(){
    var src = [
      './src/layuiadmin/**/*.js'
      ,'!./src/layuiadmin/json/**/*.js'
      ,'!./src/layuiadmin/layui/**/*.js'
      ,'!./src/layuiadmin/config.js'
      ,'!./src/layuiadmin/lib/extend/echarts.js'
    ];
    
    return gulp.src(src).pipe(uglify())
     .pipe(header.apply(null, note))
    .pipe(gulp.dest(destDir + '/layuiadmin'));
  }
  
  //压缩 CSS
  ,mincss: function(){
    var src = [
      './src/layuiadmin/**/*.css'
      ,'!./src/layuiadmin/layui/**/*.css'
    ]
     ,noteNew = JSON.parse(JSON.stringify(note));
     
     
    noteNew[1].js = '';
    
    return gulp.src(src).pipe(minify({
      compatibility: 'ie7'
    })).pipe(header.apply(null, noteNew))
    .pipe(gulp.dest(destDir + '/layuiadmin'));
  }
  
  //复制文件夹
  ,mv: function(){    
    gulp.src('./src/layuiadmin/json/**/*')
    .pipe(gulp.dest(destDir + '/layuiadmin/json'));
    
    gulp.src('./src/layuiadmin/lib/extend/echarts.js')
    .pipe(gulp.dest(destDir + '/layuiadmin/lib/extend'));
    
    gulp.src('./src/layuiadmin/config.js')
    .pipe(gulp.dest(destDir + '/layuiadmin'));
    
    gulp.src('./src/layuiadmin/tpl/**/*')
    .pipe(gulp.dest(destDir + '/layuiadmin/tpl'));
    
    gulp.src('./src/layuiadmin/style/res/**/*')
    .pipe(gulp.dest(destDir + '/layuiadmin/style/res'));
    
    gulp.src('./src/layuiadmin/style/res/*')
    .pipe(gulp.dest(destDir + '/layuiadmin/style/res'));
    
    return gulp.src('./src/views/**/*')
    .pipe(gulp.dest(destDir + '/views'));
  }
  
  //复制 layui
  ,layui: function(){
    return gulp.src('../../../../res/layui/rc/**/*')
    .pipe(gulp.dest('./dev-std/layuiadmin/layui'))
    .pipe(gulp.dest('./src/layuiadmin/layui'))
    .pipe(gulp.dest('./dist/layuiadmin/layui'))
  }
};


//清理
gulp.task('clear', function(cb) {
  return del(['./dist/*'], cb);
});

gulp.task('minjs', task.minjs);
gulp.task('mincss', task.mincss);
gulp.task('mv', task.mv);
gulp.task('layui', task.layui);

gulp.task('src', function(){ //命令：gulp src
  return gulp.src('./dev-std/**/*')
  .pipe(gulp.dest('./src'));
});

//构建核心源文件
gulp.task('default', ['clear', 'src'], function(){ //命令：gulp
  for(var key in task){
    task[key]();
  }
});

//发行 - layuiAdmin 官方使用
gulp.task('release', ['layui'], function(){ //命令：gulp && gulp release
  
  //复制核心文件
  gulp.src('./dist/**/*')
  .pipe(gulp.dest(releaseDir + '/dist'));
  
  gulp.src('./src/**/*')
  .pipe(gulp.dest(releaseDir + '/src'));
  
  //复制帮助文件
  gulp.src([
    './帮助/*'
    ,'!./帮助/说明.txt'
  ]).pipe(gulp.dest(releaseDir + '/帮助'));
  
  gulp.src([
    './帮助/说明.txt'
  ]).pipe(gulp.dest(releaseDir));
  
  //说明
  gulp.src('../pack/说明.txt')
  .pipe(gulp.dest('../pack/layuiAdmin.pack'));
  
  //复制 gulpfile
  return gulp.src([
    'gulpfile.js'
    ,'package.json'
  ]).pipe(gulp.dest(releaseDir));
});






