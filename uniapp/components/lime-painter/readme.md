# Painter 画板 测试版
> uniapp 海报画板，更优雅的海报生成方案  
> [查看更多 站点1](https://limeui.qcoon.cn/#/painter)  
> [查看更多 站点2](http://liangei.gitee.io/limeui/#/painter)   
> Q群：806744170   

## 平台兼容
| H5  | 微信小程序 | 支付宝小程序 | 百度小程序 | 头条小程序 | QQ 小程序 | App |
| --- | ---------- | ------------ | ---------- | ---------- | --------- | --- |
| √   | √          | √         | 未测       | √          | √      | √   |


## 代码演示
### 基本用法
- 插件提供JSON及HTML的方式绘制海报
- 插件参考了 css 块状流布局模拟css schema方式，放弃了之前使用的绝对定位布局。

#### 方式一 HTML 
- 插件提供了`l-painter-view`、`l-painter-text`、`l-painter-image`、`l-painter-qrcode`四种类型组件
- 通过 `css` 属性绘制样式，与style使用方式保持一致。 因为style是保留字段，所以命名为`css`,如果有大佬知道如何破解请告之。


```html
<l-painter >
	<l-painter-view css="background: #07c160; height: 120rpx; width: 120rpx; display: inline-block"></l-painter-view>
	<l-painter-view css="background: #1989fa; height: 120rpx; width: 120rpx; border-top-right-radius: 60rpx; border-bottom-left-radius: 60rpx; display: inline-block; margin: 0 30rpx;"></l-painter-view>
	<l-painter-view css="background: #ff9d00; height: 120rpx; width: 120rpx; border-radius: 50%; display: inline-block"></l-painter-view>
</l-painter>
```

#### 方式二 JSON schema 
- 在json里四种类型组件的`type`为`view`、`text`、`image`、`qrcode`
- 通过 `board` 设置海报所需的 JSON schema 数据进行绘制
- 所有类型的schema都具有`css`字段，css的样式属性key值使用驼峰命名如：`lineHeight`


```html
<l-painter :board="poster" />
```
```js
data() {
	return {
		poster: {
			css: {
				// json 方式务必填写画板宽度
				width: '750rpx'
			},
			views: [
				{
					css: {
						background: "#07c160",
						height: "120rpx",
						width: "120rpx",
						display: "inline-block"
					},
					type: "view"
				}, 
				{
					css: {
						background: "#1989fa",
						height: "120rpx",
						width: "120rpx",
						borderTopRightRadius: "60rpx",
						borderBottomLeftRadius: "60rpx",
						display: "inline-block",
						margin: "0 30rpx"
					},
					views: [],
					type: "view"
				}, 
				{
					css: {
						background: "#ff9d00",
						height: "120rpx",
						width: "120rpx",
						borderRadius: "50%",
						display: "inline-block"
					},
					views: [],
					type: "view"
				},
			]
		}
	}
}
```

### View 容器
- 类似于 `div` 可以嵌套承载更多的 view、text、image，qrcode共同构建一颗完整的节点树
- 在JSON schema里具有 `views` 的数组字段，用于嵌套承载节点。


#### 方式一 HTML 


```html
<l-painter >
	<l-painter-view css="background: #f0f0f0; padding-top: 100rpx;">
		<l-painter-view css="background: #d9d9d9; width: 33.33%; height: 100rpx; display: inline-block"></l-painter-view>
		<l-painter-view css="background: #bfbfbf; width: 66.66%; height: 100rpx; display: inline-block"></l-painter-view>
	</l-painter-view>
</l-painter>
```
#### 方式二 JSON schema 


```js
{
	css: {
		width: '750rpx'
	},
	views: [
		{
			type: 'view',
			css: {
				background: '#f0f0f0',
				paddingTop: '100rpx'
			},
			views: [
				{
					type: 'view',
					css: {
						background: '#d9d9d9',
						width: '33.33%',
						height: '100rpx',
						display: 'inline-block'
					}
				}, 
				{
					type: 'view',
					css: {
						background: '#bfbfbf',
						width: '66.66%',
						height: '100rpx',
						display: 'inline-block'
					}
				}
			],
			
		}
	]
}
```

### Text 文本
- 通过 `text` 属性填写文本内容。
- 支持`\n`换行符
- 支持省略号，使用css的`line-clamp`设置行数，当文字内容超过会显示省略号。
- 支持`text-decoration`

#### 方式一 HTML
```html
<l-painter >
	<l-painter-view css="background: #e0e2db; padding: 30rpx; color: #222a29">
		<l-painter-text 
			text="登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼"/>
		<l-painter-text 
			text="登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼"
			css="text-align:center; padding-top: 20rpx; text-decoration: line-through "
			/>
		<l-painter-text
			text="登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼"
			css="text-align:right; padding-top: 20rpx"
			/>
		<l-painter-text
			text="水调歌头\n明月几时有？把酒问青天。不知天上宫阙，今夕是何年。我欲乘风归去，又恐琼楼玉宇，高处不胜寒。起舞弄清影，何似在人间。"
			css="line-clamp: 3; padding-top: 20rpx"
			/>
	</l-painter-view>
</l-painter>
```
#### 方式二 JSON schema
```js
// 基础用法
{
	type: 'text',
	text: '登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼',
},
{
	type: 'text',
	text: '登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼',
	css: {
		// 设置居中对齐
		textAlign: 'center',
		// 设置中划线
		textDecoration: 'line-through'
	}
},
{
	type: 'text',
	text: '登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼',
	css: {
		// 设置右对齐
		textAlign: 'right',
	}
},
{
	type: 'text',
	text: '登鹳雀楼\n白日依山尽，黄河入海流\n欲穷千里目，更上一层楼',
	css: {
		// 设置行数，超出显示省略号
		lineClamp: 3,
	}
}
```

### Image 图片
- 通过 `src` 属性填写图片路径。
- 图片路径支持：网络图片，本地static里的图片路径，缓存路径
- 通过 `css` 的 `object-fit`属性可以设置图片的填充方式，可选值见下方CSS表格。
- 通过 `css` 的 `object-position`配合 `object-fit` 可以设置图片的对齐方式，类似于`background-position`，详情见下方CSS表格。
- 使用网络图片时：小程序需要去公众平台配置 [downloadFile](https://mp.weixin.qq.com/) 域名
- 使用网络图片时：**H5需要决跨域问题**

#### 方式一 HTML
```html
<l-painter >
	<!-- 基础用法 -->
	<l-painter-image
		src="https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg"
		css="width: 200rpx; height: 200rpx"
		/>
	<!-- 填充方式 -->
	<!-- css object-fit 设置 填充方式 见下方表格-->
	<l-painter-image
		src="https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg"
		css="width: 200rpx; height: 200rpx; object-fit: contain; background: #eee"
			/>
	<!-- css object-position 设置 图片的对齐方式-->
	<l-painter-image
		src="https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg"
		css="width: 200rpx; height: 200rpx; object-fit: contain; object-position: 50% 50%; background: #eee"
			/>		
	
</l-painter>
```
#### 方式二 JSON schema
```js
// 基础用法
{
	type: 'image',
	src: 'https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg',
	css: {
		width: '200rpx',
		height: '200rpx'
	}
},
// 填充方式
// css objectFit 设置 填充方式 见下方表格
{
	type: 'image',
	src: 'https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg',
	css: {
		width: '200rpx',
		height: '200rpx',
		objectFit: 'contain'
	}
},
// css objectPosition 设置 图片的对齐方式
{
	type: 'image',
	src: 'https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg',
	css: {
		width: '200rpx',
		height: '200rpx',
		objectFit: 'contain',
		objectPosition: '50% 50%'
	}
}
```
### Qrcode 二维码
- 通过`text`属性填写需要生成二维码的文本。
- 通过 `css` 里的 `color` 可设置生成码点的颜色。
- 通过 `css` 里的 `background`可设置背景色。
- 通过 `css `里的 `width`、`height`设置尺寸。


#### 方式一 HTML
```html
<l-painter>
	<l-painter-qrcode 
		text="limeui.qcoon.cn"
		css="width: 200rpx; height: 200rpx"
	/>
</l-painter>
```
#### 方式二 JSON schema
```js
{
	type: 'qrcode',
	text: 'limeui.qcoon.cn',
	css: {
		width: '200rpx',
		height: '200rpx',
	}
}
```
### 生成图片
- 1、通过设置`isCanvasToTempFilePath`自动生成图片并在 `@success` 事件里接收海报临时路径
- 2、通过调用内部方法生成图片：


```html
<l-painter ref="painter">...code</l-painter>
```
```js
// 主动调用方式只能在绘制完成之后
// @done 事件表示绘制完成
this.$refs.painter.canvasToTempFilePath({
	// 在nvue里是jpeg
	fileType: 'jpg',
	quality: 1,
	success: (res) => {
		console.log(res.tempFilePath)
	}
})
```


### 海报示例
- 提供一份示例，只把插件当成生成图片的工具，弹窗之类的功能另外寻找。
- 通过设置`isCanvasToTempFilePath`主动生成图片，再由 `@success` 事件接收海报临时路径
- 使用`custom-style`样式把画板移到屏幕之外，因为可能canvas的层级比较高，无法覆盖。
- **注意**：海报画板不能隐藏 否则无法生成图片。

#### 方式一 HTML 
```html
<image :src="path" mode="widthFix"></image>
<l-painter isCanvasToTempFilePath @success="path = $event"
	custom-style="position: fixed; left: 200%"
	css="width: 750rpx; padding-bottom: 40rpx; background: linear-gradient(,#ff971b 0%, #ff5000 100%)">
	<l-painter-image src="https://cdn.jsdelivr.net/gh/liangei/image@latest/avatar-1.jpeg"  css="margin-left: 40rpx; margin-top: 40rpx; width: 84rpx;  height: 84rpx; border-radius: 50%;"/>
	<l-painter-view css="margin-top: 40rpx; padding-left: 20rpx; display: inline-block">
		<l-painter-text text="隔壁老王" css="display: block; padding-bottom: 10rpx; color: #fff; font-size: 32rpx; fontWeight: bold"/>
		<l-painter-text text="为您挑选了一个好物" css="color: rgba(255,255,255,.7); font-size: 24rpx"/>
	</l-painter-view>
	<l-painter-view css="margin-left: 40rpx; margin-top: 30rpx; padding: 32rpx; box-sizing: border-box; background: #fff; border-radius: 16rpx; width: 670rpx; box-shadow: 0 20rpx 58rpx rgba(0,0,0,.15)">
		<l-painter-image src="https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg"  css="object-fit: cover; object-position: 50% 50%; width: 606rpx; height: 606rpx; border-radius: 12rpx;"/>
		<l-painter-view css="margin-top: 32rpx; color: #FF0000; font-weight: bold; font-size: 28rpx; line-height: 1em;">
			<l-painter-text text="￥" css="vertical-align: bottom"/>
			<l-painter-text text="39" css="vertical-align: bottom; font-size: 58rpx"/>
			<l-painter-text text=".39" css="vertical-align: bottom"/>
			<l-painter-text text="￥59.99" css="vertical-align: bottom; padding-left: 10rpx; font-weight: normal; text-decoration: line-through; color: #999999"/>
		</l-painter-view>
		<l-painter-view css="margin-top: 32rpx; font-size: 26rpx; color: #8c5400">
			<l-painter-text text="自营" css="color: #212121; background: #ffb400;"/>
			<l-painter-text text="30天最低价" css="margin-left: 16rpx; background: #fff4d9; text-decoration: line-through;"/>
			<l-painter-text text="满减优惠" css="margin-left: 16rpx; background: #fff4d9"/>
			<l-painter-text text="超高好评" css="margin-left: 16rpx; background: #fff4d9"/>
		</l-painter-view>
		<l-painter-view css="margin-top: 30rpx">
			<l-painter-text css="line-clamp: 2; color: #333333; line-height: 1.8em; font-size: 36rpx; width: 478rpx; padding-right:32rpx; box-sizing: border-box"  text="360儿童电话手表9X 智能语音问答定位支付手表 4G全网通20米游泳级防水视频通话拍照手表男女孩星空蓝" :replace="{word: ['儿童', '9X'], color: 'red'}"></l-painter-text>
			<l-painter-qrcode css="width: 128rpx; height: 128rpx;" text="limeui.qcoon.cn"></l-painter-qrcode>
		</l-painter-view>
	</l-painter-view>
</l-painter>
```

```js
data() {
	return {
		path: ''
	}
}
```
#### 方式二 JSON schema
```html
<image :src="path" mode="widthFix"></image>
<l-painter 
	:board="poster" 
	isCanvasToTempFilePath 
	@success="path = $event"
	custom-style="position: fixed; left: 200%" 
/>
```
```js
data() {
	return {
		path: '',
		poster: {
		    css: {
		        width: "750rpx",
		        paddingBottom: "40rpx",
		        background: "linear-gradient(,#000 0%, #ff5000 100%)"
		    },
		    views: [
		        {
		            src: "https://cdn.jsdelivr.net/gh/liangei/image@latest/avatar-1.jpeg",
		            type: "image",
		            css: {
		                background: "#fff",
		                objectFit: "cover",
		                marginLeft: "40rpx",
		                marginTop: "40rpx",
		                width: "84rpx",
		                border: "2rpx solid #fff",
		                boxSizing: "border-box",
		                height: "84rpx",
		                borderRadius: "50%"
		            }
		        },
		        {
		            type: "view",
		            css: {
		                marginTop: "40rpx",
		                paddingLeft: "20rpx",
		                display: "inline-block"
		            },
		            views: [
		                {
		                    text: "隔壁老王",
		                    type: "text",
		                    css: {
		                        display: "block",
		                        paddingBottom: "10rpx",
		                        color: "#fff",
		                        fontSize: "32rpx",
		                        fontWeight: "bold"
		                    }
		                },
		                {
		                    text: "为您挑选了一个好物",
		                    type: "text",
		                    css: {
		                        color: "rgba(255,255,255,.7)",
		                        fontSize: "24rpx"
		                    },
		                }
		            ],
		        },
		        {
		            css: {
		                marginLeft: "40rpx",
		                marginTop: "30rpx",
		                padding: "32rpx",
		                boxSizing: "border-box",
		                background: "#fff",
		                borderRadius: "16rpx",
		                width: "670rpx",
		                boxShadow: "0 20rpx 58rpx rgba(0,0,0,.15)"
		            },
		            views: [
		                {
							src: "https://m.360buyimg.com/babel/jfs/t1/196317/32/13733/288158/60f4ea39E6fb378ed/d69205b1a8ed3c97.jpg",
							type: "image",
		                    css: {
		                        objectFit: "cover",
		                        objectPosition: "50% 50%",
		                        width: "606rpx",
		                        height: "606rpx"
		                    },
		                }, {
		                    css: {
		                        marginTop: "32rpx",
		                        color: "#FF0000",
		                        fontWeight: "bold",
		                        fontSize: "28rpx",
		                        lineHeight: "1em"
		                    },
		                    views: [{
								text: "￥",
								type: "text",
		                        css: {
		                            verticalAlign: "bottom"
		                        },
		                    }, {
								text: "39",
								type: "text",
		                        css: {
		                            verticalAlign: "bottom",
		                            fontSize: "58rpx"
		                        },
		                    }, {
								text: ".39",
								type: "text",
		                        css: {
		                            verticalAlign: "bottom"
		                        },
		                    }, {
								text: "￥59.99",
								type: "text",
		                        css: {
		                            verticalAlign: "bottom",
		                            paddingLeft: "10rpx",
		                            fontWeight: "normal",
		                            textDecoration: "line-through",
		                            color: "#999999"
		                        }
		                    }],
		
		                    type: "view"
		                }, {
		                    css: {
		                        marginTop: "32rpx",
		                        fontSize: "26rpx",
		                        color: "#8c5400"
		                    },
		                    views: [{
								text: "自营",
								type: "text",
		                        css: {
		                            color: "#212121",
		                            background: "#ffb400"
		                        },
		                    }, {
								text: "30天最低价",
								type: "text",
		                        css: {
		                            marginLeft: "16rpx",
		                            background: "#fff4d9",
		                            textDecoration: "line-through"
		                        },
		                    }, {
								text: "满减优惠",
								type: "text",
		                        css: {
		                            marginLeft: "16rpx",
		                            background: "#fff4d9"
		                        },
		                    }, {
								text: "超高好评",
								type: "text",
		                        css: {
		                            marginLeft: "16rpx",
		                            background: "#fff4d9"
		                        },
		                        
		                    }],
		
		                    type: "view"
		                }, {
		                    css: {
		                        marginTop: "30rpx"
		                    },
		                    views: [
								{
									text: "360儿童电话手表9X 智能语音问答定位支付手表 4G全网通20米游泳级防水视频通话拍照手表男女孩星空蓝",
									type: "text",	
									css: {
										paddingRight: "32rpx",
										boxSizing: "border-box",
										lineClamp: 2,
										color: "#333333",
										lineHeight: "1.8em",
										fontSize: "36rpx",
										width: "478rpx"
		                        },
		                    }, {
								text: "limeui.qcoon.cn",
								type: "qrcode",
		                        css: {
		                            width: "128rpx",
		                            height: "128rpx",
		                        },
		                        
		                    }],
		                    type: "view"
		                }],
		            type: "view"
		        }
		    ]
		}
	}
}
```

### 原生小程序
- 插件里的`painter.js`支持在原生小程序中使用
- new Painter之后在`source`里传入JSON schema
- 再调用`render`绘制海报
- 如需生成图片，请查看微信小程序cavnas的[canvasToTempFilePath](https://developers.weixin.qq.com/miniprogram/dev/api/canvas/wx.canvasToTempFilePath.html)

```html
<canvas type="2d" id="painter" style="width: 100%"></canvas>
```
```js
import {Painter} from './painter'
page({
	data: {
		poster: {
			css: {
				width: '750rpx'
			},
			views: [
				{
					type: 'view',
					css: {
						background: '#d2d4c8',
						paddingTop: '100rpx'
					},
					views: [
						{
							type: 'view',
							css: {
								background: '#5f7470',
								width: '33.33%',
								height: '100rpx',
								display: 'inline-block'
							}
						}, 
						{
							type: 'view',
							css: {
								background: '#889696',
								width: '33.33%',
								height: '100rpx',
								display: 'inline-block'
							}
						}, 
						{
							type: 'view',
							css: {
								background: '#b8bdb5',
								width: '33.33%',
								height: '100rpx',
								display: 'inline-block'
							}
						}
					],

				}
			]
		}
	},
	 async onLoad() {
		const res = await this.getCentext()
		const painter = new Painter(res)
		// 返回计算布局后的整个内容尺寸
		const {width, height} = await painter.source(this.data.poster)
		// 得到计算后的尺寸后 可给canvas尺寸赋值，达到动态响应效果
		// 渲染
		await painter.render()
	},
	// 获取canvas 2d
	// 非2d也可以使用这里只是举个例子
	getCentext() {
	    return new Promise(resolve => {
			wx.createSelectorQuery()
			.select(`#painter`)
			.node()
			.exec(res => {
				let { node: canvas } = res[0];
				resolve({
					canvas, 
					context: canvas.getContext('2d'),
					width: canvas.width,
					height: canvas.height,
					pixelRatio: 2
	          }) 
			})
	    })
	},
})
```
### Nvue
- 插件是通过 `web-view` 支持 `app-nvue`
- 默认是远端的文件，如果需要本地化，请按下方步骤：
- 1、去码云把[hybrid](https://gitee.com/liangei/lime-painter/tree/master/examples/uni/hybrid)目录的文件，放到自己项目的根目录。
- 2、给插件文件`l-painter.vue`里`web-view`的`src`加上根目录的`hybrid路径`并注释`this.webViewInit()`


```html
// 只加上路径 其它参数不要改
<web-view src="/hybrid/html/lime-ui/lime-painter/index.html" />
```
```js
// 153行 注释该方法
// this.webViewInit()
```

### 旧版更新(1.6.x)
- 由于1.8.x版放弃了以定位的方式，所以1.6.x版更新之后要每个样式都加上`position: absolute`
- 旧版的 `image` mode 模式被放弃，使用`object-fit`
- 旧版的 `isRenderImage` 改成 `is-canvas-to-temp-filePath`
- 旧版的 `maxLines` 改成 `line-clamp`

## API

### Props

| 参数          | 说明         | 类型             | 默认值       |
| ------------- | ------------ | ---------------- | ------------ |
| board         | JSON schema方式的海报元素对象集 | <em>object</em>  | - |
| css           | 海报最外层的样式，可以理解为`body`  | <em>object</em>  | 参数请向下看 |
| custom-style   | canvas自定义样式   | <em>string</em>  |              |
| is-canvas-to-temp-filePath | 是否生成图片，在`@success`事件接收图片地址 | <em>boolean</em> | `false`      |
| after-delay | 生成图片错乱，可延时生成图片 | <em>number</em> | `100`  |
| type | canvas 类型，对微信头条支付宝小程序可有效,可选值：`2d`、`` | <em>string</em> | `2d`  |
| file-type | 生成图片的后缀类型, 可选值：`png`、`jpg`，在nvue里是`jpeg` | <em>string</em> | `png`  |
| path-type | 生成图片路径类型，可选值`url`、`base64` | <em>string</em> | `-`  |
| pixel-ratio | 生成图片的像素密度，默认为对应手机的像素密度 | <em>number</em> | `-`  |

<!-- | width | 画板的宽度，一般只用于通过内部方法时加上 | <em>number</em> | ``  |
| height | 画板的高度  ，同上 | <em>number</em> | ``  | -->

### css
| 属性名          | 支持的值或类型         	| 默认值             |
| -------------   | ------------          | ----------------  |
| (min\max)width  |  支持`%`、`rpx`、`px`           | -    |
| height          |  同上              | -    |
| color           |  `string`         			| -    |
| position        | 定位，可选值：`absolute`、`fixed`     | -    |
| ↳ left、top、right、bottom |  配合`position`才生效，支持`%`、`rpx`、`px` | -    |
| margin          | 可简写或各方向分别写，如：`margin-top`，支持`auto`、`rpx`、`px` | -    |
| padding         | 可简写或各方向分别写，支持`rpx`、`px` | -    |
| border          | 可简写或各个值分开写：`border-width`、`border-style` 、`border-color`，简写请按顺序写| -   |
| line-clamp      | `number`，超过行数显示省略号 |  -   |
| background      | 支持渐变，但必须写百分比！如:`linear-gradient(,#ff971b 0%, #ff5000 100%)`、`radial-gradient(#0ff 15%, #f0f 60%)`,目前radial-gradient 渐变的圆心为元素中点，半径为最长边，不支持设置 | - |
| vertical-align  | 文字垂直对齐，可选值：`bottom`、`top`、`middle` | `middle` |
| line-height     | 文字行高，支持`rpx`、`px`、`em`| `1.4em` |
| font-weight     | 文字粗细，可选值：`normal`、`bold`| `normal` |
| font-size       | 文字大小，`string`，支持`rpx`、`px`  | `14px` |
| text-decoration | 文本修饰，可选值：`underline` 、`line-through`、`overline`| - |
| text-align | 文本水平对齐，可选值：`right` 、`center`| - |
| display         | 框类型，可选值：`block`、`inline-block`、`none`，当为`none`时是不渲染该段 | - |
| border-radius   | 圆角边框，支持`%`、`rpx`、`px` | - |
| box-sizing      | 可选值：`border-box` | -  |
| box-shadow      | 投影 | -  |
| background-image | view元素设置背景纹理，注意这里的背景纹理一般是用于纹理平铺，无法代替`image`元素。如：水印 | -  |
| background-repeat | 设置是否及如何重复背景纹理，可选值：`repeat`、`repeat-x`、`repeat-y`、`no-repeat` | `repeat`  |
| [object-fit](https://developer.mozilla.org/zh-CN/docs/Web/CSS/object-fit/)  | 图片元素适应容器方式,类似于`mode`,可选值：`cover`、 `contain`、 `fill`、 `none` | - |
| [object-position](https://developer.mozilla.org/zh-CN/docs/Web/CSS/object-position)  | 图片的对齐方式，配合`object-fit`使用 | - |

### 图片填充模式 object-fit
| 名称  | 含义         |
| ------- | ------------ |
| contain | 保持宽高缩放图片，使图片的长边能完全显示出来 |
| cover | 保持宽高缩放图片，使图片的短边能完全显示出来，裁剪长边 |
| fill | 拉伸图片，使图片填满元素 |
| none | 保持图片原有尺寸 |

### 事件 Events

| 事件名  | 说明         | 回调           |
| ------- | ------------ | -------------- |
| success | 生成图片成功,若使用了`is-canvas-to-temp-filePath` 可以接收图片地址 |	path      |
| fail    | 生成图片失败 | {error: error} |
| done    | 绘制成功 |  |
| progress | 绘制进度 |  number  |

## 常见问题
-  1、H5端使用网络图片需要解决跨域问题。
-  2、小程序使用网络图片需要去公众平台增加下载白名单！二级域名也需要配！
-  3、H5端生成图片是base64，有时显示只有一半可以使用原生标签`<IMG/>`
-  4、发生保存图片倾斜变形或提示native buffer exceed size limit时，使用pixel-ratio="2"参数，降分辨率。
-  5、h5保存图片不需要调接口，提示用户长按图片保存。
-  6、IOS APP 请勿使用HBX2.9.3.20201014的版本！这个版本无法生成图片。
-  7、组件不能隐藏，包含`v-if`，`v-show`、`display:none`、`opacity:0`
-  8、微信小程序 canvas 2d不支持真机调试，请使用真机预览方式。
-  9、华为手机APP上无法生成图片，请使用HBX2.9.11++
- 10、苹果微信7.0.20存在闪退和图片无法onload为微信bug,请到码云上升级本插件

## 打赏
如果你觉得本插件，解决了你的问题，赠人玫瑰，手留余香。  

![输入图片说明](https://cdn.jsdelivr.net/gh/liangei/image@latest/222521_bb543f96_518581.jpeg "微信图片编辑_20201122220352.jpg")