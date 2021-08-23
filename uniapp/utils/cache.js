const Cache = {
	//设置缓存(expire为缓存时效)
	set(key, value, expire) {
		
		let data = {
			expire: expire ? (this.time() + expire) : "",
			value
		}
		
		if (typeof data === 'object')
			data = JSON.stringify(data);
		try {
			uni.setStorageSync(key, data)
		} catch (e) {
			return false;
		}
	},
	get(key) {
		try {
			let data = uni.getStorageSync(key)
			const {value, expire} = JSON.parse(data)
			if(expire && expire < this.time()) {
				uni.removeStorageSync(key)
				return false;
			}else {
				return value
			}
		} catch (e) {
			return false;
		}
	},
	//获取当前时间
	time() {
		return Math.round(new Date() / 1000);
	},
	remove(key) {
		if(key) uni.removeStorageSync(key)
	}
}

export default Cache;
