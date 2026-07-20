
//节流
export const trottle = (func, time = 1000, context) => {
	let previous = new Date(0).getTime()
	return function(...args) {
		let now = new Date().getTime()
		if (now - previous > time) {
			func.apply(context, args)
			previous = now
		}
	}
}


//获取url后的参数  以对象返回
export function strToParams(str) {
	var newparams = {}
	for (let item of str.split('&')) {
		newparams[item.split('=')[0]] = item.split('=')[1]
	}
	return newparams
}

//对象参数转为以？&拼接的字符
export function paramsToStr(params) {
	let p = '';
	if (typeof params == 'object') {
		p = '?'
		for (let props in params) {
			p += `${props}=${params[props]}&`
		}
		p = p.slice(0, -1)
	}
	return p
}

/**
 * @description 复制到剪切板
 * @param value { String } 复制内容
 * @return { Promise } resolve | reject
 */
 export const copyClipboard = (value) => {
    const elInput = document.createElement('input')

    elInput.setAttribute('value', value)
    document.body.appendChild(elInput)
    elInput.select()

    try{
        if(document.execCommand('copy'))
            return Promise.resolve()
        else
            throw new Error()
    } catch(err) {
        return Promise.reject(err)
    } finally {
        document.body.removeChild(elInput)
    }
}

/**
 * 导入第三方CDN
 * 缺陷：由于没有做调用栈，目前仅支持调用一次，多次调用将会产生异步不确定性。
 * 改良：改造成调用栈的方式
 * @param uri { String } CDN链接
 * @return { Promise }
 */

 export const importCDN = (uri) => {
    return new Promise((resolve, reject) => {
        /* 如果已经存在则直接退出 */
        const hasScriptEl = document.getElementById(uri)
        if (hasScriptEl) return resolve(hasScriptEl)

        try {
            const scriptEl = document.createElement('script')
            scriptEl.setAttribute('id', uri)
            scriptEl.setAttribute('src', uri)
            document.body.append(scriptEl)

            const handler = 'onload' in scriptEl ? stdOnEnd : ieOnEnd
            handler(scriptEl).then(() => resolve(scriptEl)).catch(() => reject())
        } catch (err) {
            reject(err)
        }

        function stdOnEnd (scriptEl) {
            return new Promise((resolve, reject) => {
                scriptEl.onload = function() {
                    this.onerror = this.onload = null
                    resolve(scriptEl)
                }

                scriptEl.onerror = function() {
                    this.onerror = this.onload = null
                    reject()
                }
            })
        }

        function ieOnEnd (scriptEl) {
            return new Promise((resolve, reject) => {
                scriptEl.onreadystatechange = function() {
                    if (this.readyState === 'loaded' || this.readyState === 'complete') {
                        this.onreadystatechange = null
                        resolve(scriptEl)
                    }
                }
            })
        }
    })
}