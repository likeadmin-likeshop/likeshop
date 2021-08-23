function getImageWidth(url, callback) {
    var img = new Image();
    img.src = url;
    if (img.complete) {
        callback(img.width, img.height);
    } else {
        img.onload = function () {
            callback(img.width, img.height);
        }
    }
}
function in_array(search,array){
    for(var i in array){
        if(array[i]==search){
            return true;
        }
    }
    return false;
}
function uniq(array){
    var temp = [];
    for(var i = 0; i < array.length; i++){
        if(temp.indexOf(array[i]) == -1){
            temp.push(array[i]);
        }
    }
    return temp;
}
//判断字符串是否为空格
function isEmptyString(str) {
    str = str.replace(/(^\s*)|(\s*$)/g, "");
    if (str.length == 0) {
        return true;
    }
    return false;
}
//数组去重
function unique(arr){
    var hash=[];
    for (var i = 0; i < arr.length; i++) {
        if(hash.indexOf(arr[i])==-1){
            hash.push(arr[i]);
        }
    }
    return hash;
}

//元素交换
function swop(first, second) {
    html = first.html();
    first.html(second.html());
    second.html(html);
}
//笛卡尔积生成
function cartesianProduct(arr) {
    if (arr.length < 2) return arr[0] || [];
    return [].reduce.call(arr, function (col, set) {
        let res = [];
        col.forEach(c => {
            set.forEach(s => {
                let t = [].concat(Array.isArray(c) ? c : [c]);
                t.push(s);
                res.push(t);
            })
        });
        return res;
    });
}


//元素交换
function swop(first, second) {
    html = first.html();
    first.html(second.html());
    second.html(html);
}
//数组去重
function unique(arr){
    var hash=[];
    for (var i = 0; i < arr.length; i++) {
        if(hash.indexOf(arr[i])==-1){
            hash.push(arr[i]);
        }
    }
    return hash;
}


//转换数组格式
function array_column(data,key) {
    var result = [];
    for(var i in data){
        result[data[i][key]] = data[i];
    }
    return result;
}

function array_unique(arr){
    for(var i=0; i<arr.length; i++){
        for(var j=i+1; j<arr.length; j++){
            if(arr[i]==arr[j]){
                arr.splice(j,1);
                j--;
            }
        }
    }
    return arr;
}

/**
 * 判断是否为整数
 * @param obj
 * @returns {boolean}
 */
function isInteger(obj) {
    return obj % 1 === 0
}