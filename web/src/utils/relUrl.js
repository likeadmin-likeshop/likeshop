//获取url后的参数  以对象返回
export function getUrlparams (url) {
    let urlparams = url.split('?')
    if (urlparams.length === 1) {
        return ''
    }
    var newparams = {}
    for (let item of urlparams[1].split('&')) {
        newparams[item.split('=')[0]] = item.split('=')[1]
    }
    return newparams
}

//重写encodeURL函数
export function urlencode (str) {  
    str = (str + '').toString();   
    return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').  
    replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');  
}

//获取url后第二个问好后的参数  以对象返回
export function getUrl (url) {
    let urlparams = url.split('?')
    if (urlparams.length <= 2) {
        return ''
    }
    var newparams = {}
    for (let item of urlparams[2].split('&')) {
        newparams[item.split('=')[0]] = item.split('=')[1]
    }
    return newparams
}