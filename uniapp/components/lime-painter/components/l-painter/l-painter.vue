<template>
	<view v-if="canvasId && size" class="lime-painter" :style="size + customStyle">
	<!-- #ifndef APP-NVUE -->
	<canvas class="lime-painter__canvas" v-if="use2dCanvas" :id="canvasId" type="2d" :style="size"></canvas>
	<canvas class="lime-painter__canvas" v-else :canvas-id="canvasId" :style="size" :id="canvasId" :width="boardWidth * dpr" :height="boardHeight * dpr"></canvas>

	<!-- #endif -->
	<!-- #ifdef APP-NVUE -->
	<web-view 
		:style="size" 
		ref="webview" 
		class="lime-painter__canvas"
		@pagefinish="onPageFinish"
		@error="onError"
		@onPostMessage="onMessage"
		></web-view>
	<!-- #endif -->
		<slot/>
	</view>
</template>


<script>
import { toPx, compareVersion, sleep, base64ToPath, pathToBase64, getImageInfo, isBase64 } from './utils';
import {parent} from '../common/relation'
//  #ifndef APP-NVUE
import {Painter} from './painter'
//  #endif
//  #ifdef APP-NVUE
import painterScript from './nvue'
//  #endif
export default {
	name: 'lime-painter',
	mixins:[parent('painter')],
	props: {
		board: Object,
		pathType: {
			type: String,
			// default: 'url'
			// 'base64'、'url'
		},
		fileType: {
			type: String,
			default: 'png'
		},
		quality: {
			type: Number,
			default: 1
		},
		css: [String, Object],
		width: [Number, String],
		height: [Number, String],
		pixelRatio: Number,
		customStyle: String,
		isCanvasToTempFilePath: Boolean,
		sleep: {
			type: Number,
			default: 1000 / 30
		},
		beforeDelay: {
			type: Number,
			default: 100
		},
		afterDelay: {
			type: Number,
			default: 100
		},
		// #ifdef MP-WEIXIN || MP-TOUTIAO||MP-ALIPAY
		type: {
			type: String,
			default: '2d'
		},
		// #endif
	},
	data() {
		return {
			// #ifdef MP-WEIXIN || MP-TOUTIAO || MP-ALIPAY
			use2dCanvas: true,
			// #endif
			// #ifndef MP-WEIXIN || MP-TOUTIAO || MP-ALIPAY
			use2dCanvas: false,
			// #endif
			canvasHeight: 150,
			canvasWidth: null,
			isDrawIng: false,
			isPC: false,
			inited: false,
			name: 'view',
			progress: 0,
			// #ifdef APP-NVUE
			tempFilePath: [],
			// #endif
		};
	},
	computed: {
		canvasId() {
			return `l-painter${this._uid}`
		},
		size() {
			if(this.boardWidth && this.boardHeight) {
				return `width:${this.boardWidth}px; height: ${this.boardHeight}px;`;
			}
		},
		dpr() {
			return this.pixelRatio || uni.getSystemInfoSync().pixelRatio;
		},
		boardWidth() {
			const {width = 0, canvasWidth = 0} = this
			const {width: boardWidth = 0} = this.board?.css || this.board || {}
			return Math.max(toPx(width || boardWidth), toPx(canvasWidth));
		},
		boardHeight() {
			const {height= 0, canvasHeight =0} = this
			const {height: boardHeight = 0} =  this.board?.css || this.board || {}
			return Math.max(toPx(height || boardHeight), toPx(canvasHeight));
		}
	},
	watch: {
		canvasWidth(v) {
			if(this.el.css && !this.el.css?.width) {
				this.el.css.width = v
			}
		},
		size(v) {
			// #ifdef MP-WEIXIN
			if (this.use2dCanvas) {
				this.inited = false;
			}
			// #endif
			// #ifdef MP-ALIPAY
			this.inited = false;
			// #endif
		},
	},
	// #ifdef MP-WEIXIN || MP-TOUTIAO || MP-ALIPAY
	created() {
		const { SDKVersion, version, platform, environment } = uni.getSystemInfoSync();
		// #ifdef MP-WEIXIN
		// ios wx7.0.20 createImage bug
		this.isPC = /windows/i.test(platform)
		this.use2dCanvas = this.type === '2d' && compareVersion(SDKVersion, '2.9.2') >= 0 && !((/ios/i.test(platform) && /7.0.20/.test(version)) || /wxwork/i.test(environment)) && !this.isPC;
		// #endif
		// #ifdef MP-TOUTIAO
		this.use2dCanvas = this.type === '2d' && compareVersion(SDKVersion, '1.78.0') >= 0;
		// #endif
		// #ifdef MP-TOUTIAO
		this.use2dCanvas = this.type === '2d' && compareVersion(SDKVersion, '2.8.0') >= 0;
		// #endif
	},
		// #endif
	mounted() {
		// #ifdef APP-NVUE
		this.webViewInit()
		// #endif
		this.$nextTick(() => {
			setTimeout(() => {
				if(this.board) {
					this.$watch('board', this.watchRender, {deep: true,immediate: true});
				} else if(this.el.views.length) {
					this.$watch('el', this.watchRender, {deep: true,immediate: true});
				}
			},30)
		})
	},
	methods: {
		async watchRender(val) {
			this.progress = 0
			if (JSON.stringify(val) === '{}' || !val) return;
			clearTimeout(this.rendertimer)
			this.rendertimer = setTimeout(() => {
				this.render(val);
			}, this.beforeDelay)
		},
		async setFilePath(path, isEmit) {
			let filePath = path
			const {pathType} = this
			if(pathType == 'base64' && !isBase64(path)) {
				filePath = await pathToBase64(path)
			} else if(pathType == 'url' && isBase64(path)) {
				filePath = await base64ToPath(path)
			}
			if(isEmit) {
				this.$emit('success', filePath);
			}
			return filePath
		},
		// #ifdef APP-NVUE
		onError(e) {
			console.log('onError', e)
		},
		// onPagestart() {
		// 	console.log('onPagestart')
		// },
		// onPageFinish() {
		// 	this.$refs.webview.evalJS(`init()`) 
		// },
		// onReceivedTitle() {
		// 	console.log('onReceivedTitle')
		// },
		onMessage(e) {
			const res = e?.detail?.data[0] || null;
			if (res?.event) {
				if(res.event == 'inited') {
					this.inited = true
				}
				if(res.event == 'layoutChange') {
					const data = JSON.parse(res.data)
					this.canvasWidth = data.width;
					this.canvasHeight = data.height;
				}
				if(res.event == 'progressChange') {
					this.progress = res.data * 1
				}
				if(res.event == 'file') {
					this.tempFilePath.push(res.data)
					if(this.tempFilePath.length > 7) {
						this.tempFilePath.shift()
					}
					return
				}
				if(res.event == 'success') {
					if(res.data) {
						this.tempFilePath.push(res.data)
						if(this.tempFilePath.length > 8) {
							this.tempFilePath.shift()
						}
						if(this.isCanvasToTempFilePath) {
							this.setFilePath(this.tempFilePath.join(''), true)
						}
					} else {
						this.$emit('fail')
					}
					return
				}
				this.$emit(res.event, JSON.parse(res.data));
			} else if (res?.file) {
				this.file = res.data;
			} else {
				console.error(res);
			}
		},
		async webViewInit() {
			await sleep(30)
			// await this.getWebViewInited()
			const webview = this.$refs.webview;
			webview.evalJS(painterScript)
		},
		getWebViewInited() {
			if(this.inited) return Promise.resolve(this.inited);
			return new Promise((resolve) => {
				this.$watch(
					'inited',
					async val => {if(val) {resolve(val)}},
					{immediate: true}
				);
			})
		},
		getTempFilePath() {
			if(this.tempFilePath.length == 8) return Promise.resolve(this.tempFilePath)
			return new Promise((resolve) => {
				this.$watch(
					'tempFilePath',
					async val => {if(val.length == 8) {resolve(val.join(''))}}
				);
			})
		},
		getWebViewDone() {
			if(this.progress == 1) return Promise.resolve(this.progress);
			return new Promise((resolve) => {
				this.$watch(
					'progress',
					async val => {
						if(val == 1) {
							this.$emit('done')
							resolve(val)
					}},
					{immediate: true}
				);
			})
		},
		async render(args) {
			const newNode = await this.calcImage(args);
			await this.getWebViewInited()
			const webview = this.$refs.webview;
			webview.evalJS(`source(${JSON.stringify(newNode)})`) 
			if(this.isCanvasToTempFilePath) {
				await this.getWebViewDone()
				await sleep(this.afterDelay)
				const params = {fileType: this.fileType, quality: this.quality}
				webview.evalJS(`save(${JSON.stringify(params)})`) 
			}
		},
		async calcImage(args) {
			let node = JSON.parse(JSON.stringify(args))
			const url = node.url || node.src
			if(node.type === "image" && url && !isBase64(url)) {
				const suffix = url.match(/\.(\w+)$/)[1]
				const {width = 0, height = 0, path, naturalSrc} = await getImageInfo(url)
				const src = await pathToBase64(path)
				node.src = src.replace(/^data:application[\w\/]+;base64/,'data:image/'+suffix+';base64')
			} else if(node.views?.length) {
				for (let i = 0; i < node.views.length; i++) {
					node.views[i] = await this.calcImage(node.views[i])
				}
			}
			return node
		},
		async canvasToTempFilePath(args = {}){
			this.tempFilePath = []
			this.$refs.webview.evalJS(`save(${JSON.stringify(args)})`) 
			try{
				let tempFilePath = await this.getTempFilePath()
				tempFilePath = await this.setFilePath(tempFilePath)
				args.success({errMsg: "canvasToTempFilePath:ok", tempFilePath})
			}catch(e){
				args.fail({error: e})
			}
		}
		// #endif
		// #ifndef APP-NVUE
		getParentWeith() {
			uni.createSelectorQuery()
				.in(this)
				.select(`.lime-painter`)
				.boundingClientRect()
				.exec(res => {
					this.canvasWidth = Math.ceil(res[0].width)
					this.canvasHeight = res[0].height
				})
		},
		async update(args, single) {
			this.painter = null;
			// #ifdef MP-WEIXIN
			if (this.use2dCanvas) {
				this.ctx = null;
				this.inited = false;
			}
			// #endif
			// #ifdef MP-ALIPAY
			this.inited = false;
			// #endif
			this.isDrawIng = false;
			await new Promise(resolve => this.$nextTick(resolve));
			await sleep(200);
			return this.render(args, single);
		},
		async render(args = {}, single = false) {
			if (this.isDrawIng) {
				return this.update(args, single);
			}
			this.isDrawIng = true;
			const isArg = JSON.stringify(args) != '{}';
			const ctx = await this.getContext();
			let { use2dCanvas, boardWidth, boardHeight, canvas, afterDelay } = this;
			if (use2dCanvas && !canvas) {
				return Promise.reject(new Error('render: fail canvas has not been created'));
			}
			this.boundary = {
				top: 0,
				left: 0,
				width: boardWidth,
				height: boardHeight
			};
			// if (!single) {
			// 	ctx.clearRect(0, 0, boardWidth, boardHeight);
			// }
			if(!this.painter) {
				this.painter = new Painter({context: ctx, canvas, width: boardWidth, height: boardHeight, pixelRatio: this.dpr}, this)
			} 
			this.painter.listen('progressChange', (v) => {
				this.$emit('progress', v)
			})
			const {width, height} = await this.painter.source(args)
			this.canvasHeight = toPx(this.el.css?.height) || height
			this.canvasWidth = toPx(this.el.css?.width) || width
			this.boundary.height = this.canvasHeight
			this.boundary.width = this.canvasWidth
			await sleep(this.sleep);
			await this.painter.render()
			
			await new Promise(resolve => this.$nextTick(resolve));
			if (!use2dCanvas && !single) {
				await this.canvasDraw();
			}
			if (afterDelay && use2dCanvas) {
				await sleep(afterDelay);
			}
			this.$emit('done');
			if (this.isCanvasToTempFilePath && !single && this.isDrawIng) {
				this.canvasToTempFilePath()
					.then(async res => {
						this.$emit('success', res.tempFilePath)
					})
					.catch(err => {
						this.$emit('fail', new Error(JSON.stringify(err)));
					});
			}
			this.isDrawIng = false;
			return Promise.resolve({ ctx, draw: this.painter, node: this.node });
		},
		async custom(cb) {
			const { ctx, draw } = await this.render({}, true);
			ctx.save();
			await cb(ctx, draw);
			ctx.restore();
			return Promise.resolve(true);
		},
		async single(args = {}) {
			const res = await this.render(args, true);
			return Promise.resolve(res);
		},
		canvasDraw(flag = false) {
			return new Promise((resolve, reject) => this.ctx.draw(flag, () => setTimeout(() => resolve(), this.afterDelay)));
		},
		async getContext() {
			if (this.ctx && this.inited) {
				return Promise.resolve(this.ctx);
			}
			this.getParentWeith()
			const { type, use2dCanvas, dpr, boardWidth, boardHeight } = this;
			const _getContext = () => {
				return new Promise(resolve => {
					uni.createSelectorQuery()
						.in(this)
						.select(`#${this.canvasId}`)
						.boundingClientRect()
						.exec(res => {
							if (res) {
								const ctx = uni.createCanvasContext(this.canvasId, this);
								if (!this.inited) {
									this.inited = true;
									this.use2dCanvas = false;
									this.canvas = res;
								}
								if(this.isPC) {
									ctx.scale(1/dpr, 1/dpr);
								}
								// #ifdef MP-ALIPAY
								ctx.scale(dpr, dpr);
								// #endif
								this.ctx = ctx
								resolve(this.ctx);
							}
						});
				});
			};
			// #ifndef MP-WEIXIN
			return _getContext();
			// #endif

			if (!use2dCanvas) {
				return _getContext();
			}
			return new Promise(resolve => {
				uni.createSelectorQuery()
					.in(this)
					.select(`#${this.canvasId}`)
					.node()
					.exec(res => {
						let { node: canvas } = res[0];
						if (!canvas) {
							this.use2dCanvas = false;
							resolve(this.getContext());
						}
						const ctx = canvas.getContext(type);
						if (!this.inited) {
							this.inited = true;
							this.use2dCanvas = true;
							this.canvas = canvas;
						}
						this.ctx = ctx
						resolve(this.ctx);
					});
			});
		},
		canvasToTempFilePath(args = {}) {
			const { use2dCanvas, canvasId, dpr, fileType, quality } = this;
			return new Promise((resolve, reject) => {
				let { top: y = 0, left: x = 0, width, height } = this.boundary || this;
				let destWidth = width * dpr;
				let destHeight = height * dpr;
				// #ifdef MP-ALIPAY
				width = destWidth;
				height = destHeight;
				// #endif
				const success = async (res) => {
					const tempFilePath = await this.setFilePath(res.tempFilePath)
					resolve(Object.assign(res, {tempFilePath}))
				} 
				const copyArgs = Object.assign({
					x,
					y,
					width,
					height,
					destWidth,
					destHeight,
					canvasId,
					fileType,
					quality,
					success,
					fail: reject
				}, args);
				if (use2dCanvas) {
					delete copyArgs.canvasId;
					copyArgs.canvas = this.canvas;
				}
				uni.canvasToTempFilePath(copyArgs, this);
			});
		}
		// #endif
	}
};
</script>
<style>
	.lime-painter, .lime-painter__canvas {
		// #ifndef APP-NVUE
		width: 100%;
		// #endif
		// #ifdef APP-NVUE
		flex: 1;
		// #endif
	}
</style>