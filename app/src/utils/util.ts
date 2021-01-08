//节流
export const trottle = (func: () => void, time = 1000, context?: any) => {
	let previous = new Date(0).getTime()
	return function (...args: any) {
		let now = new Date().getTime()
		if (now - previous > time) {
			func.apply(context, args)
			previous = now
		}
	}
}
//防抖
export const debounce = (func: () => void, time = 1000, context: any) => {
	let timer: any = null
	return function (...args: any) {
		if (timer) {
			clearTimeout(timer)
		}
		timer = setTimeout(() => {
			func.apply(context, args)
		}, time)
	}
}

export function getUrlparams (url: string) {
    let urlparams = url.split('?')
    if (urlparams.length === 1) {
        return ''
    }
	var newparams: any = {}
    for (let item of urlparams[1].split('&')) {
        newparams[item.split('=')[0]] = item.split('=')[1]
    }
    return newparams
}
