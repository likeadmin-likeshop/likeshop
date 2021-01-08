#!/bin/bash
cd ./resources/
function syncImage(){
    cat /dev/null > ../src/constraint/Image.ts
    echo "/**********************************************/" >> ../src/constraint/Image.ts
    echo "/* 此处文件由脚本 build_image.sh 生成,请勿手动更改*/">> ../src/constraint/Image.ts
    echo "/**********************************************/">> ../src/constraint/Image.ts
    for element in `ls`
    do
        if [ -f $element ]
        then
            echo "export const ${element%.*} = require('../../resources/$element');" >> ../src/constraint/Image.ts
        fi
    done
    echo '所有图片都已经写入Image.ts'
}

syncImage