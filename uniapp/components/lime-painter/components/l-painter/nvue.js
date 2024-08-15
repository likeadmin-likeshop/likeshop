const painterContent = `
	var cache = [];
	var painter = null;
	var canvas = null;
	var context = null;
	var timer = null;
	var pixelRatio = 1;
	console.log = function(...args) {
		postMessage(args);
	};
	function stringify(key, value) {
		if (typeof value === 'object' && value !== null) {
			if (cache.indexOf(value) !== -1) {
				return;
			}
			cache.push(value);
		}
		return value;
	};
	function emit(event, data) {
		let dataStr = typeof data !== 'object' && data !== null ? data : JSON.stringify(data, stringify);
		postMessage({
			event,
			data: dataStr
		});
		cache = [];
	};
	function postMessage(data) {
		uni.postMessage({
			data
		});
	};
	function init() {
		canvas = document.querySelector('#lime-painter');
		context = canvas.getContext('2d');
		pixelRatio = window.devicePixelRatio;
		painter = new Painter({
		      id: 'lime-painter',
		      context,
		      canvas,
		      pixelRatio,
		      width: canvas.offsetWidth,
		      height: canvas.offsetHeight
		});
		emit('inited', true);
		painter.listen('progressChange', (v) => {
			emit('progressChange', v);
		});
	};
	function save(args) {
		delete args.success;
		delete args.fail;
		clearTimeout(timer);
		timer = setTimeout(() => {
			const path = painter.save(args);
			if(typeof path == 'string') {
				const index = Math.ceil(path.length / 8);
				for (var i = 0; i < 8; i++) {
					if(i == 7) {
						emit('success', path.substr(i * index, index));
					} else {
						emit('file', path.substr(i * index, index));
					}
				};
			} else {
				emit('fail', '');
			};
		}, 30);
	};
	async function source(args) {
		let res = await painter.source(args);
		emit('layoutChange', res);
		await painter.render();
	};
`
export default `
	document.write("<canvas id='lime-painter'>不支持cavnas</canvas>");
	let meta = document.createElement('meta');
	meta.name = 'viewport';
	meta.content = 'width=device-width, initial-scale=1.0';
	document.head.appendChild(meta);
	let styleEl = document.createElement('style');
	styleEl.setAttribute('type', 'text/css');
	styleEl.textContent='html,body,#lime-painter{padding: 0; margin: 0; width:100%;height:100%}';
	document.head.appendChild(styleEl);
	
	var script = document.createElement("script");
	script.language = "javascript";
	script.src = "https://js.cdn.aliyun.dcloud.net.cn/dev/uni-app/uni.webview.1.5.2.js";
	script.onload = function() {
		var script = document.createElement("script");
		script.language = "javascript";
		script.src = "https://cdn.jsdelivr.net/gh/liangei/image@latest/lime-ui/lime-painter/painter.js";
		script.onload = function() {init()};
		document.head.appendChild(script);
	};
	document.head.appendChild(script);
	
	var script = document.createElement("script");
	script.language = "javascript";
	script.text = "${painterContent}";
	document.body.appendChild(script);
`
