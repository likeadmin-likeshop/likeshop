## 1.8.5.5（2021-08-17）
- chore: 更新文档，删除 replace
- fix: 修复 text 值为 number时报错
## 1.8.5.4（2021-08-16）
- fix: 字节小程序兼容
## 1.8.5.3（2021-08-15）
- fix: 修复线性渐变与css现实效果不一致的问题
- chore: 更新文档
## 1.8.5.2（2021-08-13）
- chore: 增加`background-image`、`background-repeat` 能力，主要用于背景纹理的绘制，并不是代替`image`。例如：大面积的重复平铺的水印
- 注意：这个功能H5暂时无法使用，因为[官方的API有BUG](https://ask.dcloud.net.cn/question/128793)，待官方修复！！！
## 1.8.5.1（2021-08-10）
- fix: 修复因`margin`报错问题
## 1.8.5（2021-08-09）
- chore: 增加margin支持`auto`,以达到居中效果
## 1.8.4（2021-08-06）
- chore: 增加判断缓存文件条件
- fix: 修复css 多余空格报错问题
## 1.8.3（2021-08-04）
- tips: 1.6.x 以下的版本升级到1.8.x后要为每个元素都加上定位：position: 'absolute'
- fix: 修复只有一个view子元素时不计算高度的问题
## 1.8.2（2021-08-03）
- fix: 修复 path-type 为 `url` 无效问题
- fix: 修复 qrcode `text` 为空时报错问题
- fix: 修复 image `src` 动态设置时不生效问题
- feat: 增加 css 属性 `min-width` `max-width`
## 1.8.1（2021-08-02）
- fix: 修复无法加载本地图片
## 1.8.0（2021-08-02）
- chore 文档更新
- 使用旧版的同学不要升级！
## 1.8.0-beta（2021-07-30）
- ## 全新布局方式 不兼容旧版！
- chore: 布局方式变更
- tips: 微信canvas 2d 不支持真机调试
## 1.6.6（2021-07-09）
- chore: 统一命名规范，无须主动引入组件
## 1.6.5（2021-06-08）
- chore: 去掉console
## 1.6.4（2021-06-07）
- fix: 修复 数字 为纯字符串时不转换的BUG
## 1.6.3（2021-06-06）
- fix: 修复 PC 端放大的BUG
## 1.6.2（2021-05-31）
- fix: 修复 报`adaptor is not a function`错误
- fix: 修复 text 多行高度
- fix: 优化 默认文字的基准线
- feat: `@progress`事件，监听绘制进度
## 1.6.1（2021-02-28）
- 删除多余节点
## 1.6.0（2021-02-26）
- 调整为uni_modules目录规范
- 修复：transform的rotate不能为负数问题
- 新增：`pathType` 指定生成图片返回的路径类型,可选值有 `base64`、`url`
