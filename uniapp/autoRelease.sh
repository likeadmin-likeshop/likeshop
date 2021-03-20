#!/bin/bash
# 文件原路径
srcPath="./unpackage/dist/build/h5"
# 发布路径文件夹
releasePath="../server/public/mobile"

if [ ! -d "$releasePath/static" ]; then
    echo "$releasePath/static ==> 文件夹不存在 已跳过删除步骤"
else
    rm -r $releasePath/static
fi
if [ ! -f "$releasePath/index.html" ]; then
    echo "$releasePath/index.html ==> 文件不存在 已跳过删除步骤"
else 
    rm  $releasePath/index.html
fi

if [ ! -d "$srcPath/static" ]; then
    echo "$srcPath/static ==> 文件夹不存在 复制失败"
else
    echo "成功复制 $srcPath/static ==> $releasePath/"
    cp -r $srcPath/static $releasePath/
fi

if [ ! -f "$srcPath/index.html" ]; then
    echo "$srcPath/index.html ==> 文件不存在 复制失败"
else
    echo "成功复制 $srcPath/index.html ==> $releasePath/"
    cp $srcPath/index.html $releasePath/
fi
