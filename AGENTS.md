# AGENTS.md

## 文档定位

本文件适用于整个仓库，是 AI 编码代理和开发者理解本项目时的首要架构说明。`CLAUDE.md` 是面向 Claude 类工具的同步摘要；如果目录、技术栈、接口约定、构建发布方式或强约束发生变化，必须同时更新这两个文件。

事实优先级：实际代码与配置 > 本文件 > `AI_GUIDE.md` / `README.md`。后两者包含历史版本和商业版说明，若与当前仓库不一致，以实际代码为准。

## 项目定位与当前基线

Likeshop 是单商户 B2C 商城。当前仓库是免费企业版 `v3.0.3`，包含一个 ThinkPHP 单体服务端、服务端渲染的 PC 管理后台，以及一个 Vue 2 uni-app 移动商城源码。

- 服务端：PHP `>= 7.0`、ThinkPHP `5.1.*`、MySQL，Composer 管理依赖。
- 管理后台：admin 模块服务端渲染，Think 模板 + Layui/Layui Admin + jQuery；不是 Vue/React 独立工程。
- 移动商城：Vue 2 + uni-app + Vuex + 本地 uView 组件，JavaScript 项目；主要通过 HBuilderX 构建。
- PC 商城：最新 `php-b2c` Nuxt 2/Vue 2 源码已迁入 `pc/`；构建产物按发布步骤输出到 `server/public/pc/`，该目录未必存在于源码工作区。
- 基础设施：Nginx、PHP-FPM、MySQL、Redis；`docker/` 提供旧版 Compose 开发配置。
- 自动化测试：当前业务代码没有可用的 PHPUnit/Jest/Vitest 测试套件，也没有统一 lint/type-check 脚本。

不要把参考项目 `php-amdj` 的 Vue 3、TypeScript、Vite、ThinkPHP 8 或多 uni-app 目录约定套用到本仓库。

## 仓库目录职责

- `server/`：唯一服务端工程，同时包含 API、管理后台源码和已部署静态资源。
- `server/application/admin/`：PC 管理后台的 controller、logic、validate、model、server、view、middleware 等。
- `server/application/api/`：移动商城 JSON API 的 controller、logic、validate、cache、middleware 等。
- `server/application/common/`：跨 admin/api 共用的 model、logic、server、cache、validate、middleware。
- `server/application/index/`：站点根入口；按设备尝试返回 PC 或 mobile 的 `index.html`。
- `server/config/`：ThinkPHP 全局配置。
- `server/route/route.php`：H5、PC、定时任务等显式路由。
- `server/public/`：Nginx Web Root、PHP 入口、静态资源及安装资源。
- `server/public/static/`：后台 Layui、插件和公共前端资源。
- `server/public/mobile/`：uni-app H5 的已编译产物，属于发布结果，不是移动端源码。
- `server/public/install/db/like.sql`：新安装环境的数据库结构和初始化数据，默认表前缀为 `ls_`。
- `server/extend/`：非 Composer 扩展代码。
- `server/thinkphp/`、`server/vendor/`：框架和第三方依赖，除非任务明确要求依赖升级，否则不要直接修改。
- `server/runtime/`：运行缓存和日志；不要把运行产物纳入功能修改。
- `server/public/uploads/`：用户上传数据；不要清理、覆盖或提交真实业务文件。
- `uniapp/`：mobile/H5/微信小程序/App 的唯一可编辑源码。
- `uniapp/pages/`：主包页面。
- `uniapp/bundle/pages/`：分包业务页面。
- `uniapp/components/`：业务组件和仓库内置的 `uview-ui`。
- `uniapp/api/`：按业务域拆分的 API 调用封装。
- `uniapp/utils/request.js`：统一请求、token 注入和响应处理。
- `uniapp/store/`：Vuex store。
- `uniapp/config/`：API 地址、版本号和缓存键等运行配置。
- `uniapp/manifest.json`、`uniapp/pages.json`：平台能力、H5 路由、页面与分包注册的权威配置。
- `uniapp/unpackage/`：HBuilderX 构建输出；如本地生成，视为临时产物。
- `docker/`：旧版容器编排和 Nginx/PHP/MySQL 配置。
- `doc/`：安装相关补充资料。

## 整体请求架构

### 公共入口

Nginx 的站点根目录应指向 `server/public/`。请求经 `server/public/index.php` 进入 ThinkPHP；未检测到 `server/config/install.lock` 时会跳转安装程序。

ThinkPHP 开启多模块但未强制路由，因此主要 URL 由“模块/控制器/操作”自动解析：

- `/admin/...`：管理后台 HTML 或同路由 AJAX。
- `/api/<controller>/<action>`：移动端 JSON API。
- `/mobile/...`：返回 `server/public/mobile/index.html`，供 H5 history 路由使用。
- `/pc/...`：返回 `server/public/pc/index.html`；深层 history 路由由 `route/route.php` 的 `.*` 规则兜底。
- `/crontab`：触发 ThinkPHP 的 `crontab` 控制台命令。

根路径由 `application/index/controller/Index.php` 按终端类型选择 PC 或 mobile 构建产物。改入口、伪静态、H5 history 或站点子目录时，要一起检查 Nginx、`route/route.php`、`manifest.json` 和 `config/app.js`。

### 移动端到后端的数据流

1. 页面或组件调用 `uniapp/api/*.js` 的业务函数。
2. API 封装通过 `uniapp/utils/request.js` 请求 `${baseURL}/api/`。
3. 请求拦截器清理 `null`、`undefined`、空字符串，并在 `token` header 中注入登录令牌。
4. `application/api/http/middleware/Login.php` 处理跨域、免登录方法和 token 校验，将用户信息写入 request。
5. API controller 继承 `ApiBase`，读取参数和分页信息，调用 validate/logic。
6. logic 调用 `application/common` 下的模型、公共 logic/server 或第三方集成。
7. controller 用 `_success()` / `_error()` 返回统一 JSON。

统一响应字段为 `code`、`msg`、`data`、`show`、`time`：`code = 1` 表示成功，`code = 0` 通常表示业务失败，`code = -1` 表示登录态失效。修改该契约会同时影响所有移动端页面，不能在单个接口随意另造格式。

分页参数统一沿用 `page_no`、`page_size`，基类默认每页 15 条并将最大值限制为 100。

## 服务端架构与开发约定

### 技术与分层

- PHP 目标基线以 Composer 和 Docker 配置为准：PHP 7.x，ThinkPHP 5.1。不要在普通功能开发中使用 PHP 8 专属语法。
- PSR-4 根命名空间是 `app\`，对应 `server/application/`。
- 现有业务分层通常为 `controller -> validate/logic -> model/server`。
- `controller` 负责 HTTP 参数、登录上下文、校验调用和响应，不应堆积复杂业务规则。
- `logic` 负责业务编排、查询组装和事务边界。
- `model` 负责持久化及模型关联。跨端共享模型优先放 `application/common/model/`。
- 本项目历史命名使用 `server` 表示公共服务类，例如支付、微信、短信、文件和配置服务；新增代码应先沿用邻近模块的命名，不要擅自批量改成 `service`。
- 全局通用函数位于 `server/application/common.php`。新增前先检索 `common.php`、common logic/server 和现有模型，避免重复实现。

### API 模块

- controller 继承 `app\api\controller\ApiBase`。
- 免登录 action 写入 controller 的 `$like_not_need_login`，值按 action 名小写比较。
- 登录态通过 `token` header 传递；不要另加不兼容的认证头而不更新统一请求层。
- 输入校验优先复用/新增 `application/api/validate/` 中的 Validate 类。
- 返回必须使用基类 `_success()` / `_error()`，保持 `code/msg/data/show/time` 结构。
- API controller/action 名就是前端调用路径的一部分。重命名时必须同步搜索 `uniapp/api/` 和页面调用方。
- `GET /api/account/captcha` 返回一次性图形验证码；`sms/send`、`user/send` 以及账号密码 `account/login` 都必须携带 `captcha_key` 和 `captcha`，验证码由 `application/common/server/CaptchaService.php` 消费且只能使用一次。
- admin 登录页通过 `admin/account/captcha` 获取同一类一次性图形验证码；后台账号登录也必须提交 `captcha_key` 和 `captcha`。

### Admin 模块

- controller 继承 `app\admin\controller\AdminBase`。
- 登录态保存在 Session；`admin/http/middleware/Login.php` 负责登录检查，`Auth.php` 负责角色权限检查。
- 同一个 action 常同时承担 GET 页面渲染和 AJAX 数据/写操作：先判断 `$this->request->isAjax()`，否则 `fetch()` 对应模板。
- 输入校验优先使用 `application/admin/validate/`；业务操作放入 `application/admin/logic/`。
- AJAX 返回沿用 `_success()` / `_error()`；页面数据使用 `assign()` / `assignJs()`。
- 新增后台菜单或受控 action 时，要同步检查角色权限缓存、菜单/权限初始化数据和 `server/public/install/db/like.sql`，否则超级管理员以外的角色可能无法访问。

### 数据库与配置

- 数据库访问既有 ThinkPHP Model，也有 `think\Db`；遵循所在模块现有模式，表名不要手写 `ls_` 前缀，优先让框架前缀配置处理。
- 业务配置主要通过 `application/common/server/ConfigServer.php` 读写 `config` 表并缓存，不要把后台可配置项重新硬编码进 PHP。
- 多表写操作要沿用邻近 logic 的事务和异常处理方式，确保失败时完整回滚。
- 当前没有正式 migration 框架。结构变更至少要同步新安装 SQL，并明确现有环境的升级 SQL/操作步骤；不能只改 `like.sql` 后假设老库会自动升级。
- `.env` 只保存本地/部署环境值。不要提交数据库、Redis、支付、短信、微信、对象存储或地图等密钥。

## Admin 架构

admin 是 `server/` 内的服务端渲染模块，不存在独立安装或前端构建步骤。

- 页面模板：`server/application/admin/view/<controller>/<action>.html`。
- 控制器：`server/application/admin/controller/`。
- 业务逻辑：`server/application/admin/logic/`。
- 表单校验：`server/application/admin/validate/`。
- 样式和脚本：`server/public/static/admin/`、`server/public/static/plug/layui-admin/`、模板内联脚本。
- UI 和交互：Layui 表格/表单/弹层、Layui Admin、jQuery、项目 `like.ajax` 封装。
- URL 使用 Think 模板的 `{:url("controller/action")}` 或邻近代码的同类写法。

开发后台页面时，优先复制同业务形态的现有页面结构，而不是引入 Vue、React、TypeScript 或新的打包器。列表页通常由 Layui `table.render` 请求同一 action；新增/编辑常使用 iframe 弹层和隐藏 submit 按钮。保持主题变量、弹层尺寸、返回码处理和刷新方式一致。

## PC 商城架构边界

必须区分“PC 管理后台”和“PC 商城前台”：

- PC 管理后台源码完整，位于 `server/application/admin/`。
- PC 商城前台源码位于根目录 `pc/`，是 Nuxt 2.14/Vue 2 + Element UI 工程；`server/route/route.php`、`application/index/controller/Index.php` 和配置表负责接入与开关。
- `server/public/pc/` 是 PC 的生成部署目录，不是编辑源码目录。在 `pc/` 下运行 `npm run generate` 生成后，再按发布确认执行 `autoRelease.sh`；该脚本会删除并重建目标目录。

PC 页面修改应优先复用 `pc/` 现有 API、路由、Nuxt 插件和 Element UI 约定；涉及后端新字段时同步检查移动端兼容响应、登录/支付、SEO 与部署路径。不要把 admin 当作 PC 商城，也不要直接在 `server/public/pc/` 的构建产物中手写源码。

## Mobile / uni-app 架构

### 技术栈与入口

- Vue 2 Options API，入口为 `uniapp/main.js`，根生命周期位于 `uniapp/App.vue`。
- Vuex store 位于 `uniapp/store/`。
- uView 以源码形式放在 `uniapp/components/uview-ui/`，通过 `main.js` 注册，并在 `pages.json` 的 easycom 中映射 `u-*` 组件。
- 页面采用主包 `pages/` + 分包 `bundle/pages/`；新增页面必须同步 `pages.json`。
- 全局样式入口在 `App.vue`，主要引入 `styles/base.scss` 和 uView 样式；公共变量位于 `uni.scss`。
- 平台差异使用 uni-app 条件编译，如 `#ifdef H5`、`#ifdef MP-WEIXIN`、`#ifdef APP-PLUS`。

### 状态、API 与页面约定

- 页面只通过 `uniapp/api/` 的业务函数访问后端，不要在页面散落完整 API URL。
- 新接口应先加入对应业务 API 文件，再由页面调用。
- 登录 token、回跳和平台登录逻辑集中在 `utils/request.js`、`utils/login.js`、`config/cachekey.js`，修改认证流程时必须一起追踪。
- 复用 `utils/tools.js`、`utils/cache.js`、现有 mixin 和组件，不要重复实现 toast、复制、缓存、路由参数等公共能力。
- 业务状态值先在后端模型/logic 和前端现有用法中确认，不要仅凭数字猜语义。
- 尺寸和移动布局优先沿用现有 `rpx`、uView 和 uni-app 原生组件风格。

### H5、微信小程序与 App

- H5 使用 history 路由，base/publicPath 为 `/mobile/`；改部署子路径要同步后端路由和 Nginx 重写。
- H5 生产环境默认使用当前域名作为 `baseURL`；非 H5 平台的 API 域名需要按实际发布环境配置。
- 微信小程序、H5、App 的登录、支付、分享、定位和 WebView 能力不同，涉及这些功能时必须分别检查条件编译分支。
- `manifest.json` 中的平台 ID、权限和 SDK 配置属于环境/发布配置；不要在文档、日志或新代码中复制真实凭据。

### 构建产物边界

- 推荐使用与项目版本匹配的 HBuilderX 打开 `uniapp/`，进行 H5、微信小程序和 App 构建/发行。
- `uniapp/package.json` 没有标准 uni-app CLI 依赖，也没有 `dev`、`lint`、`test` 脚本。
- `npm run build` **不是编译命令**；它只运行 Bash 脚本 `autoRelease.sh`，删除 `server/public/mobile/` 后，把已存在的 `unpackage/dist/build/web/` 复制过去。
- 只有在 HBuilderX 已成功生成 web 构建、任务明确要求更新发布产物、并确认删除目标目录可接受时，才能运行发布脚本。
- 普通 mobile 源码修改不要顺手改 `server/public/mobile/` 的压缩 JS/CSS；发布产物更新应作为独立、可核验的步骤。

## 跨端功能开发工作流

开始编码前按以下顺序建立影响面：

1. 明确需求属于 admin、mobile、API、PC 接入点、数据库还是部署配置。
2. 从用户入口反向追踪完整链路：模板/uni-app 页面 -> JS/API 封装 -> controller -> validate/logic -> model/server -> 表/配置。
3. 先确认现有接口路径、参数、返回结构、状态码和权限，再决定是否需要改契约。
4. 搜索同类功能并沿用命名、目录、交互和事务方式，避免为单个需求引入新架构。
5. 如果改数据结构，规划新安装和存量升级两条路径；如果改 admin 权限，同步菜单和角色授权数据。
6. 如果改 mobile，多平台检查 H5、微信小程序、App 条件分支，并确认是否需要更新 `pages.json`/`manifest.json`。
7. 按风险运行最小但充分的校验，并在交付说明中写明没有执行的验证。

规划跨端功能时，至少列出：用户入口、后端接口、权限/登录要求、数据表或配置、兼容性影响、验证方式、是否更新编译产物。PC 商城需求还必须先列出源码来源和技术栈决策。

## 代码修改强约束

1. 不做无关的框架升级、依赖升级、目录重构或全局格式化。
2. 不直接修改 `server/vendor/`、`server/thinkphp/`、`server/runtime/`、真实 uploads 或压缩后的 mobile 构建文件来实现源码功能。
3. 不硬编码或提交密钥、密码、token、证书、keystore、AppID、支付回调密钥等敏感信息；仓库已有敏感资产也不要在输出中复述。
4. 不破坏现有 API 返回结构、分页字段、token header 和 `code` 语义，除非所有调用端同步修改并验证。
5. 不在普通需求中把旧 PHP 7/ThinkPHP 5.1 写法整体“现代化”。新增代码必须兼容项目运行基线。
6. 不主动删除版权标识或修改授权相关逻辑。
7. 不主动执行安装、数据库写入、线上发布、清缓存、删除构建目录或 Git 提交，除非任务明确要求且影响已确认。
8. 工作区可能已有用户修改；只处理任务相关文件，不覆盖或回退无关变更。

## 常用命令与验证

### 服务端

在 `server/` 下按环境需要使用：

- 安装锁定依赖：`composer install`
- 校验 Composer 配置：`composer validate --no-check-publish`
- 查看 ThinkPHP 命令：`php think list`
- 本地开发服务（以命令列表实际支持为准）：`php think run`
- PHP 语法检查：`php -l path/to/changed.php`

不要用 `composer update` 代替常规安装。当前桌面环境未必已配置 PHP/Composer，命令不可用时应明确说明，不得声称验证通过。

### 容器

仓库 Compose 配置可作为环境参考：`docker compose -f docker/docker-compose.yml up -d`。它锁定了较旧的 PHP/MySQL/Redis/Nginx，并包含历史 Node 服务和路径；启动前必须检查端口、镜像、卷路径与本地 `.env`，不要默认它适合生产。

### Mobile

- 在 HBuilderX 中运行到 H5/微信开发者工具/App，完成对应平台冒烟测试。
- H5 构建后检查 `uniapp/unpackage/dist/build/web/`。
- 仅发布任务才在支持 Bash 的环境运行 `npm run build`，并在运行前备份/确认 `server/public/mobile/` 的替换影响。

### 最低验证清单

- PHP：所有改动 PHP 文件通过 `php -l`；关键 controller/action 能走到预期返回。
- Admin：登录、权限、列表加载、表单提交、弹层关闭与表格刷新至少手工验证相关路径。
- API：验证未登录、已登录、参数错误、成功四类响应中与改动相关的分支。
- Mobile：至少验证目标平台；涉及平台 API 时补测 H5/微信小程序/App 的相关分支。
- 数据库：确认事务、表前缀、安装 SQL和存量升级步骤。
- 发布：确认源码和构建产物是否都需要交付，避免只改压缩产物或只替换部署目录。

## 建议演进规划

以下是维护路线建议，不是对 AI 代理的自动授权。只有用户明确安排对应阶段时才实施：

1. **P0 基线固化**：整理本地无密钥环境模板、安装数据、关键业务冒烟清单和 API 契约快照。
2. **P1 测试补齐**：先覆盖登录、商品、购物车、下单、支付回调、退款和后台权限，再扩大到营销模块。
3. **P2 前端构建可复现**：锁定 HBuilderX/uni-app 版本，增加非破坏性 build 与独立 deploy 脚本，把编译和覆盖 `public/mobile` 分开。
4. **P3 业务边界收敛**：在不改变接口的前提下，减少 controller 和重复 logic 中的公共逻辑，逐步补齐服务层和事务测试。
5. **P4 PC 商城迁入（当前已完成首轮）**：`pc/` 已采用最新 `php-b2c` Nuxt 2 前台；后续只需按兼容矩阵补齐业务测试、构建环境和发布流程。
6. **P5 基础设施升级**：PHP、ThinkPHP、数据库和前端框架升级必须独立立项，先有测试和兼容矩阵，再分阶段迁移，不能夹带在业务需求中。

## 文档维护

- 新增顶级工程、改变端职责、替换框架、修改统一 API 契约或发布流程时，同步更新 `AGENTS.md` 和 `CLAUDE.md`。
- 仅记录仓库可验证的事实。商业版、外部系统或尚未引入的源码应明确标注为外部依赖/规划，不得描述成当前能力。
- 架构说明不要写真实环境地址、账号、密钥或客户数据。
