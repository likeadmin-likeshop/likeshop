# CLAUDE.md

## 使用方式

开始任何任务前先阅读根目录 `AGENTS.md`。它是完整架构与开发规范的事实源，本文件是同一规则的执行摘要；二者冲突时先以实际代码核实，再修正文档。架构、接口契约或构建发布方式变化时，必须同步更新两个文件。

## 项目记忆

这是 Likeshop 单商户 B2C 商城免费企业版 `v3.0.3`，不是参考项目 `php-amdj` 的新技术栈：

- `server/`：PHP 7.x + ThinkPHP 5.1 单体工程。
- admin：`server/application/admin/` 中的服务端渲染后台，使用 Think 模板、Layui/Layui Admin、jQuery；没有独立 admin 前端工程。
- mobile：`uniapp/` 中的 Vue 2 + uni-app + Vuex + uView JavaScript 工程，面向 H5、微信小程序和 App。
- PC 商城：最新 `php-b2c` Nuxt 2/Vue 2 源码位于 `pc/`；`server/public/pc/` 是生成部署目录。
- `server/public/mobile/`：H5 编译产物，不是源码。
- 当前业务代码没有可用自动化测试套件，也没有完整的前端 CLI 开发、lint 或 type-check 流程。

不要引入 Vue 3、TypeScript、Vite、Element Plus、Pinia、ThinkPHP 8 等参考项目约定，除非用户明确批准独立升级任务。

## 目录速记

- `server/application/admin/controller|logic|validate|view/`：后台 HTTP、业务、校验和页面。
- `server/application/api/controller|logic|validate|http/`：移动端 API 与 token 中间件。
- `server/application/common/model|logic|server|cache/`：跨端公共能力。
- `server/application/index/`：站点根路径的 PC/mobile 选择。
- `server/config/`、`server/route/`：全局配置和显式路由。
- `server/public/static/`：后台与公共静态资源。
- `server/public/install/db/like.sql`：新安装数据库基线，默认表前缀 `ls_`。
- `uniapp/pages/`：主包页面；`uniapp/bundle/pages/`：分包页面。
- `uniapp/api/`：业务接口封装；`uniapp/utils/request.js`：统一请求和响应拦截。
- `uniapp/store/`：Vuex；`uniapp/components/`：业务组件和本地 uView。
- `uniapp/pages.json`、`uniapp/manifest.json`：页面/分包与平台配置。
- `docker/`：旧版开发容器配置，仅作为环境参考。

禁止把功能实现写进 `server/vendor/`、`server/thinkphp/`、`server/runtime/`、真实 uploads、`uniapp/unpackage/` 或压缩后的 `server/public/mobile/`。

## 请求链路

### Mobile API

`uniapp 页面 -> uniapp/api/*.js -> utils/request.js -> /api/<controller>/<action> -> API Login middleware -> ApiBase controller -> validate/logic -> common model/server`

- token 使用 `token` header。
- controller 继承 `ApiBase`。
- 免登录 action 配置在 `$like_not_need_login`。
- 统一返回 `code/msg/data/show/time`。
- `code = 1` 成功，`code = 0` 业务失败，`code = -1` 登录失效。
- 分页沿用 `page_no/page_size`，默认 15，最大 100。
- 新接口先添加/修改 `uniapp/api/` 封装，页面不要直接拼完整 URL。
- `GET /api/account/captcha` 提供一次性图形验证码；发送短信的 `sms/send`、`user/send` 及账号密码登录 `account/login` 必须同时提交 `captcha_key` 与 `captcha`。
- admin 登录使用 `admin/account/captcha` 获取一次性验证码，后台登录请求同样必须提交 `captcha_key` 与 `captcha`。

### Admin

`Layui 模板 -> 同 action AJAX/表单 -> AdminBase controller -> validate/logic -> model/server -> _success/_error`

- admin 使用 Session 登录，Login/Auth 中间件负责登录和角色权限。
- action 常同时处理 GET 渲染和 AJAX；沿用邻近 controller 的 `isAjax()` + `fetch()` 模式。
- 页面在 `application/admin/view/<controller>/<action>.html`，静态资源在 `public/static/`。
- 交互优先复用 Layui table/form/layer 和 `like.ajax`，不要为单页引入新 SPA 框架。
- 新增菜单或受控 action 时同步角色权限、缓存逻辑和安装 SQL 中的菜单/权限数据。

## PC 商城边界

管理后台不是 PC 商城。PC 前台源码位于 `pc/`，后端接入位于以下位置：

- `server/route/route.php` 的 `/pc/:any`。
- `server/application/index/controller/Index.php` 的桌面模板选择。
- admin 的 PC 配置入口和数据库开关；PC 构建使用 Nuxt 2 的 `npm run generate`，发布脚本会将 `dist/` 复制到 `server/public/pc/`。

PC 页面需求直接在 `pc/` 源码中实现，必须保持现有 API、账号、支付、SEO 和 `/pc/` history 部署约定；不要修改生成后的 `server/public/pc/` 代替源码。

PC 本地构建/启动约定：

- 已验证 Node `16.20.2` + npm `8.19.4`；Nuxt 2/webpack 4 不要优先使用 Node 24/npm 11。
- 在 `pc/` 使用 `npm ci --legacy-peer-deps --no-audit --no-fund` 安装。不要混用 npm 与 pnpm；pnpm 的 `node_modules/.pnpm/` 会使 npm 产生错误的 `ERESOLVE` 依赖树。
- `npm run dev` 启动开发服务，默认访问 `http://localhost:1800/pc/`。
- `npm run generate` 生成静态产物到 `pc/dist/`；确认发布后再运行 `bash autoRelease.sh` 复制到 `server/public/pc/`。
- `npm run build` + `npm run start` 是 Nuxt Node 生产运行方式，不替代静态发布。旧 `package-lock.json` 如含 `registry.nlark.com`/旧淘宝源，需先修复锁文件下载地址。

## 后端开发规则

- 保持 PHP 7.x / ThinkPHP 5.1 兼容，不使用 PHP 8 专属语法。
- 遵循当前 `controller -> validate/logic -> model/server` 分层。
- controller 只处理 HTTP 上下文、校验和响应，复杂业务进入 logic。
- 公共模型/逻辑/第三方能力优先放 `application/common/`；新增前搜索已有实现。
- 项目历史上公共服务目录名是 `server/`，不要在普通任务中批量改名。
- API 用 `ApiBase::_success/_error`，admin 用 `AdminBase::_success/_error`，不要自造返回结构。
- 业务配置优先通过 `ConfigServer` 和配置表，不硬编码环境值。
- 多表写入遵循邻近 logic 的事务模式。
- 数据表名不手写 `ls_`，让 ThinkPHP 的 prefix 配置处理。
- 当前无 migration 框架。表结构变更要同时考虑 `like.sql` 新安装基线和存量环境升级步骤。

## Mobile 开发规则

- 使用现有 Vue 2 Options API、Vuex、uView 和 JavaScript 风格。
- 新页面注册到 `pages.json`；按体积和业务归入主包或 `bundle` 分包。
- 复用 `api/`、`utils/`、Vuex、mixin 和现有组件，避免页面内重复基础能力。
- 使用 uni-app 条件编译处理 H5、`MP-WEIXIN`、`APP-PLUS` 差异。
- 登录、支付、分享、定位、WebView 变更必须逐平台检查。
- H5 history base 是 `/mobile/`；修改它时同步 `manifest.json`、后端路由和 Nginx。
- 平台 AppID、SDK key、支付/微信/短信配置不得写入文档、输出或新硬编码。

`uniapp/package.json` 没有标准 uni-app CLI 工具链。编译使用匹配版本的 HBuilderX：

- H5 输出：`uniapp/unpackage/dist/build/web/`。
- 微信小程序/App：在 HBuilderX 对应发行入口构建并用目标平台工具验证。
- `npm run build` 只是执行 `autoRelease.sh`：它会删除 `server/public/mobile/`，再复制已有 web 构建。它不是编译命令，普通源码任务禁止顺手运行。

## 任务执行流程

1. 识别改动端：admin、mobile、API、PC 接入、数据库或部署。
2. 阅读入口及邻近实现，追踪到 controller、logic、model/server 和表/配置。
3. 确认接口参数、返回码、登录/权限和调用端，再开始修改。
4. 用最小范围实现，并同步所有真实调用方；不做无关升级或格式化。
5. 表结构变更同时规划新装与存量升级；权限变更同步菜单/角色数据。
6. mobile 变更检查页面注册与多平台分支；发布产物仅在明确发布任务中更新。
7. 执行可用验证，明确报告无法运行的检查。

跨端开发计划至少写明：用户入口、API、权限、数据/配置、兼容性、验证方式、是否交付编译产物。当前 PC 迁入已完成首轮，后续架构演进应先固化环境和关键业务基线，再补测试、拆分非破坏性 build/deploy，之后才做公共逻辑收敛和 PHP/ThinkPHP 升级。该路线不是自动授权。

## 安全与变更边界

- 不提交或复述 `.env`、数据库密码、token、证书、keystore、AppID、地图/支付/短信/微信/存储密钥。
- 仓库已有敏感资产也不要擅自删除、轮换或打印；需要处理时先确认影响。
- 不修改版权/授权逻辑，不移除版权标识。
- 不执行 `composer update`、数据库安装/写入、线上发布、清缓存、删除构建目录或 Git 提交，除非用户明确要求。
- 不覆盖用户已有修改，不回退无关文件。
- `server/public/mobile/`、`server/runtime/`、uploads 和 `uniapp/unpackage/` 都不是常规源码修改目标。

## 验证速记

服务端可用时：

- `composer install`
- `composer validate --no-check-publish`
- `php think list`
- `php -l path/to/changed.php`

Admin 至少手测相关登录/权限、列表、提交、弹层和刷新；API 至少覆盖相关的未登录、已登录、参数错误、成功分支；mobile 至少在目标平台运行，涉及平台能力时补测 H5/微信小程序/App。

当前桌面环境可能没有 PHP、Composer 或 HBuilderX CLI。工具不可用时如实说明，不能声称测试通过。Docker Compose 锁定旧版依赖且包含历史路径，启动前必须检查，不默认用于生产。

## 文档同步

新增顶级工程、引入 PC 源码、升级框架、改变统一 API/认证/分页、移动端构建目录或部署路径时，同一个任务中更新 `AGENTS.md` 与本文件。只写实际仓库可验证的信息，不把商业版或规划能力描述为当前实现。
