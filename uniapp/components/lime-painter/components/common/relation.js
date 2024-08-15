import {base64ToPath} from '../l-painter/utils.js'

const styles = (v = '') => v.split(';').filter(v => v && !/^[\n\s]+$/.test(v)).map(v => {
	const item = v.split(':');
	return {
		[item[0]
			.replace(/-([a-z])/g, function() {
				return arguments[1].toUpperCase()
			})
			.replace(/\s+/g, '')
		]: item?. [1]?.replace(/^\s+/, '')?.replace(/\s+$/, '') || ''
	}
})
export function parent(parent) {
	return {
		provide() {
			return {
				[parent]: this
			}
		},
		data() {
			return {
				el: {
					css: {},
					views: []
				},
			}
		},
		watch: {
			css: {
				handler(v) {
					if (this.canvasId) {
						this.el.css = typeof v == 'object' ? v : v && Object.assign(...styles(v)) || {}
						this.canvasWidth = this.el.css?.width || this.canvasWidth
						this.canvasHeight = this.el.css?.height || this.canvasHeight
					}
				},
				immediate: true
			}
		}
	}
}
export function children(parent, options = {}) {
	const indexKey = options.indexKey || 'index'
	return {
		inject: {
			[parent]: {
				default: null
			}
		},
		watch: {
			el: {
				handler(v, o) {
					if (JSON.stringify(v) != JSON.stringify(o))
						this.bindRelation()
				},
				deep: true,
				immediate: true
			},
			src: {
				handler(v, o) {
					if (v != o)
						this.bindRelation()
				},
				immediate: true
			},
			text: {
				handler(v, o) {
					if (v != o) this.bindRelation()
				},
				immediate: true
			},
			css: {
				handler(v, o) {
					if (v != o)
						this.el.css = typeof v == 'object' ? v : v && Object.assign(...styles(v)) || {}
				},
				immediate: true
			},
			replace: {
				handler(v, o) {
					if (JSON.stringify(v) != JSON.stringify(o))
						this.bindRelation()
				},
				deep: true,
				immediate: true
			},
		},
		created() {
			Object.defineProperty(this, 'parent', {
				get: () => {
					return this[parent]
				},
			})
			Object.defineProperty(this, 'index', {
				get: () => {
					this.bindRelation();
					return this.parent?.el.views?.indexOf(this.el)
				},
			});
			this.el.type = this.type
		},
		beforeDestroy() {
			if (this.parent) {
				this.parent.el.views = this.parent.el.views.filter(
					(item) => item._uid !== this._uid
				);
			}
		},
		methods: {
			bindRelation() {
				if (!this.el._uid) {
					this.el._uid = this._uid
				}
				if (['text', 'qrcode'].includes(this.type)) {
					this.el.text = this.$slots?.default?. [0]?.text || this.text?.replace(/\\n/g, '\n')
				}
				if (this.type == 'text' && this.replace) {
					this.el.replace = this.replace
				}
				if (this.type == 'image') {
					this.el.src = this.src
				}
				//  || this.parent.el.views.indexOf(this.el) !== -1
				if (!this.parent) {
					return;
				}
				
				let views = this.parent.el.views || [];
				if (views.indexOf(this.el) !== -1) {
					this.parent.el.views = views.map(v => v._uid == this._uid ? this.el : v)
				} else {
					this.parent.el.views = [...views, this.el];
				}
			}
		},
		mounted() {
			this.bindRelation()
		},
	}
}
