# Likeshop 项目 AI 助手指南

本指南旨在帮助 AI 助手快速理解 Likeshop 项目结构、配置方式及发布流程，基于官方文档整理。

## 1. 项目概况
Likeshop 是一个开源的 B2C 电商系统。
- **服务端**: 基于 ThinkPHP 框架 (`server/`)
- **客户端**: 基于 Uni-app 框架 (`uniapp/`)，支持 H5、微信小程序、App 等多端发布。
- **运行环境**: PHP, MySQL, Redis, Nginx (Docker 配置见 `docker/`)

## 2. 目录结构说明

### 根目录
- `docker/`: Docker 容器配置 (MySQL, PHP, Nginx, Redis)
- `server/`: PHP 服务端代码 (后端)
- `uniapp/`: 前端 Uni-app 源码 (前端)

### 服务端 (`server/`)
- `application/`: 应用逻辑核心目录
  - `admin/`: 管理后台逻辑
  - `api/`: 商城 API 接口逻辑
  - `common/`: 公共模型与逻辑
- `config/`: 全局配置文件
- `public/`: Web 根目录 (对外访问入口)
  - `mobile/`: **H5 前端编译后的运行目录** (部署 H5 时替换此目录)
  - `uploads/`: 文件上传目录
  - `index.php`: 入口文件
- `.env`: 环境配置文件 (数据库账号密码、调试模式等，需从 `.example.env` 复制)

### 客户端 (`uniapp/`)
- `config/app.js`: **核心配置文件** (配置 API 接口地址、版本号)
- `manifest.json`: **平台配置文件** (配置 AppID, 小程序设置, H5 设置)
- `pages/`: 页面文件
- `api/`: 接口请求封装
- `utils/`: 工具函数

## 3. 关键配置指南

### 3.1 服务端配置
- **文件位置**: `server/.env`
- **操作**: 复制 `server/.example.env` 为 `server/.env` 并修改。
- **关键项**:
  - `[database]`: 修改 `hostname`, `database`, `username`, `password`。
  - `[app]`: `app_debug` (开发开启，上线关闭)。

### 3.2 客户端配置
- **文件位置**: `uniapp/config/app.js`
- **操作**: 修改 API 接口地址。
  ```javascript
  const baseURLMap = {
      // 开发环境接口地址
      development: 'https://your-dev-domain.com',
      // 生产环境接口地址 (H5模式下通常使用当前域名)
      production: IS_H5 ? location.origin : 'https://your-prod-domain.com'
  }
  ```
- **AppID 配置**: `uniapp/manifest.json` -> `mp-weixin` (微信小程序配置) -> `appid`。

## 4. 发布与部署流程

### 4.1 微信小程序发布
1. **准备工作**:
   - **微信后台**: 获取 AppID, AppSecret。
   - **商城后台**: `渠道` -> `小程序设置` 填入 AppID/Secret。
   - **域名配置**: 在微信后台 `开发管理` -> `开发设置` 配置服务器域名 (Request, Socket, Upload, Download, UDP, TCP)，需与商城服务器域名一致。
   - **业务域名**: 下载校验文件，放入 `server/public/` 目录 (文件名不可修改)。

2. **编译上传**:
   - 使用 **HBuilderX** 打开 `uniapp/` 目录。
   - 检查 `manifest.json` 中 AppID 是否正确。
   - 菜单栏: `发行` -> `小程序-微信 (仅适用于uni-app)`。
   - 填写小程序名称 & AppID -> 点击 `发行`。
   - 编译完成后会自动打开 **微信开发者工具**。
   - 在微信开发者工具中点击 `上传`。
   - **发布**: 登录微信小程序后台 -> `版本管理` -> 提交审核 -> 审核通过后发布。

### 4.2 H5 (手机网页) 发布
1. **编译**:
   - 使用 **HBuilderX** 打开 `uniapp/` 目录。
   - 菜单栏: `发行` -> `网站-PC Web或手机H5`。
   - 填写网站标题和域名 -> 点击 `发行`。

2. **部署**:
   - 编译成功后，控制台会输出路径 (通常在 `unpackage/dist/build/h5`)。
   - 将生成的 `h5` 文件夹重命名为 `mobile`。
   - **替换操作**: 
     1. 删除服务器 `server/public/mobile` 目录。
     2. 将新重命名的 `mobile` 目录上传到 `server/public/`。
   - **验证**: 打开手机 H5 页面刷新即可看到更新。

## 5. 常见问题与注意事项
- **校验文件**: 微信小程序的业务域名校验文件必须放在 `server/public/` 下，且文件名必须完全匹配，不能有 `(1)` 等后缀。
- **缓存**: H5 发布后如果未更新，尝试清除浏览器缓存。
- **API 跨域**: 如果 H5 前后端域名不同，需注意跨域配置或在 `manifest.json` 中配置代理 (开发环境)。
