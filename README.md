 <a href="https://www.likeshop.cn">![likeshop全开源商城](https://server.likeshop.cn/uploads/gitad/likeshop.png?aa=1)</a><br>
<a href="https://www.buildingai.cc">![BuildingAI](https://server.likeshop.cn/uploads/gitad/fastbuildAI.png)</a><br>
 <h1 align="center">likeshop全开源商城系统</h1>
 <h4 align="center">🚀快速开发  🛠️代码易懂  ✅方便二开  🧑‍💻源码全开源</h4> 
 <p align="center">
<a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7-8892bf"></a> <a href="https://www.tslang.cn/"> <a href="#"><img src="https://img.shields.io/badge/ThinkPHP-5.1-6fb737"></a> <a href="#"><img src="https://img.shields.io/badge/Vue.js-2-4eb883"></a> <a href="#"> <a href="#"><img src="https://img.shields.io/badge/Layui-2.7-118675"></a> <a href="https://uniapp.dcloud.io/"><img src="https://img.shields.io/badge/uniapp--d85806"></a> <a href="https://www.nuxtjs.cn/"><img src="https://img.shields.io/badge/Nuxt.js--18bc78"></a>
</p>
<div align="center">
  <img src="/server/public/readme/likeshop.png" /><br>
  <center class="half">
<img  width="19%"  src="/server/public/readme/mobile-1.png" />
<img  width="19%"  src="/server/public/readme/mobile-2.png" />
<img  width="19%"  src="/server/public/readme/mobile-3.png" />
<img  width="19%"  src="/server/public/readme/mobile-4.png" />
<img  width="19%"  src="/server/public/readme/mobile-5.png" />
</center> <br>
</div>
 
## 🚀🚀🚀docker本地一句命令快速部署体验
### 🐳快速部署
安装启动 [docker](https://www.docker.com/) 之后，在终端运行以下命令即可体验。<br>
  ```shell
   docker run -d --name likeshop  -p 20208:80 -e MYSQL_ROOT_PASSWORD=root  registry.cn-guangzhou.aliyuncs.com/likeshop/php-b2c:latest
  ```
如果需要自定义参数永久挂载数据，在终端运行以下命令，其中"[]"改成自定义参数。
```shell
docker run -d --name likeshop\
-v 【主机存储数据库路径】:/var/lib/mysql\
-v 【主机存储项目代码文件路径】:/var/www/html/likeshop\
-p 【访问端口】:80\
-e MYSQL_ROOT_PASSWORD=【Mysql密码】\
registry.cn-guangzhou.aliyuncs.com/likeshop/php-b2c:latest
```
### ⚠️注意
1.如果出现无法访问，请等待1分钟，docker部署每次会下载最新源码。<br>
2.安装的时候，数据默认帐号为root，默认密码为root。<br>
3.不熟悉docker请勿用于生产环境，可能造成数据丢失等问题。

### 🛜访问
访问安装程序：http://127.0.0.1:20208
<br>PC端管理后台：http://127.0.0.1:20208/admin/login
<br>PC端前台：http://127.0.0.1:20208/pc/
<br>手机端前台：http://127.0.0.1:20208/mobile/


## likeshop单商户标准版商城演示
### 移动端商城
![移动端演示.png](/server/public/readme/gitee/yszx.png)

### PC管理后台
PC管理后台演示： [https://php-b2c-demo.likeshop.cn/admin](https://php-b2c-demo.likeshop.cn/admin)
账号：admin 密码：123456

### PC商城
PC端访问链接：[https://php-b2c.likeshop.cn/pc](https://php-b2c.likeshop.cn/pc)


更多产品介绍，欢迎访问likeshop官方网站:[www.likeshop.cn](https://www.likeshop.cn)
<br><br><br>






## likeshop「开源精神」
![gitee头图 –0817.png](/server/public/readme/gitee/toutu.png)<br>

### LikeShop 开源商城系统介绍
<br>

LikeShop 开源团队专注于电商交易领域，致力于打造易部署、易运营、易扩展的新一代开源商城系统。我们重点解决以下核心问题：

 <br>

### 一、降低部署门槛，提升上线效率
<br>

系统提供标准化安装流程与清晰的引导界面，支持多种运行环境（Linux / Windows），并提供完整的部署文档与一键安装方案，帮助用户快速完成环境搭建与系统上线。

 <br>

### 二、简化运营配置，快速进入业务状态


后台设计以“开箱即用”为原则，核心配置路径清晰，包括：

+ 微信公众号 / 小程序配置
+ 微信支付 / 支付宝支付接入
+ 短信服务（阿里云 / 腾讯云）
+ 对象存储（七牛云 / 阿里云 OSS / 腾讯云 COS）

同时提供系统化运营文档，帮助用户快速完成从配置到实际运营的转化。

 <br>

### 三、强调代码可读性与可扩展性


LikeShop 坚持开源初心，注重代码结构清晰与开发友好：

+ 代码逻辑清晰，降低理解成本
+ 避免过度封装，提升二次开发效率
+ 提供完整开发文档（目录结构 / 数据字典 / API / 开发规范）

适用于二开项目、定制开发及长期维护场景。

 <br>

### 四、提供高效沟通与技术支持机制


相比传统社区问答模式，LikeShop 提供更直接的技术沟通渠道，提升问题反馈与解决效率，帮助开发者与团队更快推进项目。

 <br>

### 五、合理开源与可持续发展模式


LikeShop 采用“开源 + 商业支持”模式：

+ 免费版本满足完整基础业务需求
+ 付费版本提供持续更新与增强能力
+ 收费策略透明，确保项目长期稳定迭代

目标是在保障开源生态的同时，实现产品持续发展。

 <br>

### 免费版与付费版区别说明
#### 免费企业版（当前仓库版本）

+ 版本：v3.0.3
+ 完整开源，支持商用（需保留版权信息）
+ 功能完整：分销 / 拼团 / 砍价 / 抽奖 / 支付等均可使用
+ 包含端：H5、小程序、APP、后台管理
+ 不包含：PC 商城端
+ 不支持：在线升级与自动更新

 <br>

### 付费企业版


+ 持续更新版本（领先免费版）
+ 支持在线升级与更新服务
+ 包含完整端口：H5、小程序、APP、PC商城、后台
+ 可移除版权标识
+ 提供更完善的技术支持与服务体系

 <br>

### 为什么开放完整企业版能力？


LikeShop 选择开放完整能力的核心原因是：

让更多用户能够真正落地电商项目，而不是被工具限制。

相比功能限制型开源策略，我们更倾向于：

+ 提供完整能力 → 提升用户成功率
+ 降低试错成本 → 提升实际转化价值
+ 通过服务与增值能力实现商业闭环

 <br>

### 使用建议


LikeShop 适用于以下用户群体：

+ 电商企业：搭建私域商城，实现用户沉淀与转化
+ 软件公司：作为稳定的电商解决方案基础进行交付
+ 开发者：学习与实践企业级电商系统开发
+ 教学与学生：用于课程实践或毕业设计项目

 <br>

### 核心总结


+ LikeShop 是一个完整开源、支持商用、易二开、低门槛部署的电商商城系统
+ 提供完整业务功能 + 清晰开发文档 + 可持续更新机制
+ 适用于电商落地、系统开发等多种场景

<br>

### likeshop 「多沟通交流」
我们喜欢直接的沟通交流，请加群或者客服吧。

<br>

### 联系微信客服（专业解答、获取功能清单）
![联系微信客服.png](/server/public/readme/gitee/lxwm.png)

小提示：当你预算购买付费企业版时，联系微信客服是有优惠的，请添加她们吧。

<br>

### 加入微信群 | QQ群
![qun.jpg](/server/public/readme/gitee/qun.jpg)

QQ群：192683602



## 项目技术栈
### 📡服务端
<a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7.2-8892bf"></a> <a href="https://www.thinkphp.cn/"><img src="https://img.shields.io/badge/ThinkPHP-5.1-6fb737"></a><a href="https://www.mysql.com/"> <img src="https://img.shields.io/badge/Mysql-5.7-315a80"></a><a href="https://redis.io/"> <img src="https://img.shields.io/badge/Redis-6-d12222"></a><a href="https://redis.io/"> <img src="https://img.shields.io/badge/Docker--139cff"></a>

<br>

### 💻PC端管理后台
<a href="https://www.mysql.com/"> <img src="https://img.shields.io/badge/Layui-2.7-118675"></a>
服务端渲染

<br>

### 📱移动端前台
<a href="https://uniapp.dcloud.io/"><img src="https://img.shields.io/badge/uniapp--d85806"></a> <a href="https://cn.vuejs.org/"><img src="https://img.shields.io/badge/Vue.js-2-4eb883"></a>
前后端分离、已适配微信小程序、手机h5页面、安卓app、苹果app。

<br>

### 💻PC端前台
<a href="https://cn.vuejs.org/"><img src="https://img.shields.io/badge/Vue.js-2-4eb883"></a> <a href="https://www.nuxtjs.cn/"><img src="https://img.shields.io/badge/Nuxt.js--18bc78"></a>
前后端分离

<br>

### 功能特性
    代码逻辑注释清晰，非常方便二次开发。
    支持PHP7，执行效率翻倍，遵循PSR-4开发规范。
    支持composer，内置优秀php开发sdk，方便二次开发。
    支持docker部署，内置docker-compose容器编排，一句命令自动配置项目运行环境。
    支持管理后台配置定时任务，并记录定时任务运行日志。
    支持七牛云、阿里云、腾讯云多种OSS对象存储，提升项目访问速度，降低服务器成本。
    支持CDN配置，加快各地方访问速度。
    支持商城多种场景的足迹气泡，让商城跟用户有更强的互动性。
    支持商城首页、商城分类页、用户个人中心页、底部导航装修。
    支持广告位，可在商城多个地方编辑添加广告。
    支持5种佣金提现方式，更有微信零钱到账，零钱可直接到用户微信钱包。
    下载体验更多功能！

<br>
    
### 开发文档
https://www.likeshop.cn/doc/2
运营文档、开发文档、API文档一应俱全。

<br>

### 官方网站
https://www.likeshop.cn/

<br>


## likeshop单商户商城系统「产品说明」
### 产品定位
likeshop单商户商城系统，产品定位为B2C模式，类似京东自营商城。免费企业版和付费企业版功能基本相同，不再赘述之间的区别。

<br>

### 产品终端
![产品终端.png](/server/public/readme/gitee/cpzd.png?v=2)
### 产品功能
likeshop单商户商城系统具备PC商城、H5商城、微信小程序商城、APP商城，各商城终端数据打通，使用PC管理后台进行统一的数据管理。

<br>

likeshop单商户商城系统包含分销裂变，限时秒杀，拼团活动，砍价活动，优惠券，大转盘抽奖，每日签到，小票打印，积分商城，会员价，微信零钱到账，系统通知/短信通知/APP推送/微信模板消息/小程序消息提醒等常用丰富的营销模块。


<br>

联系客服获取完整PDF、Excel版本产品功能对照表。

<br>


## likeshop单商户 「界面预览」

### 《移动端商城界面》
![step01.png](/server/public/readme/gitee/m1.png?v=2)
![step02.png](/server/public/readme/gitee/m2.png)
![step03.png](/server/public/readme/gitee/m3.png)
![step04.png](/server/public/readme/gitee/m4.png)
![step05.png](/server/public/readme/gitee/m5.png)
![step06.png](/server/public/readme/gitee/m6.png)
![step07png](/server/public/readme/gitee/m7.png)
![step08png](/server/public/readme/gitee/m8.png)
![step09.png](/server/public/readme/gitee/m9.png)
![step10.png](/server/public/readme/gitee/m10.png)
![step11.png](/server/public/readme/gitee/m11.png)
### 《PC端商城界面》
![pc_step01.png](/server/public/readme/gitee/pc1.png)
![pc_step03.png](/server/public/readme/gitee/pc2.png)
![pc_step04.png](/server/public/readme/gitee/pc3.png)
### 《PC端管理后台》
![ht_step01.png](/server/public/readme/gitee/admin1.png)
![ht_step02.png](/server/public/readme/gitee/admin2.png)
![ht_step03.png](/server/public/readme/gitee/admin3.png)
![ht_step04.png](/server/public/readme/gitee/admin4.png)
![ht_step05.png](/server/public/readme/gitee/admin5.png)
![ht_step07.png](/server/public/readme/gitee/admin6.png)

<br>

### **LikeShop 单商户版｜特别说明**
付费企业版在版本迭代上持续领先免费企业版，主要体现在功能优化、稳定性提升以及新特性的优先发布。

免费企业版提供完整功能能力，支持商用，但需保留官方版权标识，用于维护开源项目的品牌传播与生态发展。

---

LikeShop 单商户商城系统经过长期持续研发与迭代，投入了稳定的技术资源与团队支持。为了保障项目能够持续更新与提供可靠服务，我们采用“开源 + 商业支持”的模式：

+ 免费版本用于降低使用门槛，支持项目快速落地
+ 付费版本用于提供持续更新、升级能力与增值服务

版权标识与授权机制是开源项目健康发展的重要组成部分。若有去除版权或使用更高版本的需求，建议通过官方授权方式获取对应服务与支持。

---

我们将持续专注于产品研发与体验优化，同时通过规范化机制保护项目成果，确保 LikeShop 能够长期稳定发展。

<br>

## likeshop单商户 「版权证书」
![版权.png](/server/public/readme/gitee/csbq.png)

<br>

本项目包含的第三方源码和二进制文件之版权信息另行标注。

likeshop系列产品版权归likeshop团队所有且原创研发。本文档最终解释权归likeshop团队所有。


<br>
<br>








