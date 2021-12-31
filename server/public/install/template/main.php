<?php !defined('install') && exit(); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LikeShop单商户安装</title>
        <link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css"/>
        <link rel="stylesheet" type="text/css" href="./css/mounted.css"/>
        <link rel="shortcut icon" href="./favicon.ico"/>
    </head>
    <body>
    <div class="header">
        <div class="logo" style="width: 220px;">
            <img src="./images/slogn.png?v=1"/>
        </div>
    </div>
    <div class="mounted" id="mounted">
        <div class="mounted-box">
            <form method="post" action="#" name="main_form">
                <div class="mounted-title">安装步骤</div>
                <div class="mounted-container" id="tab">
                    <ul class="mounted-nav" id="nav">
                        <li <?php if ($step == "1") { ?>class="active"<?php } ?>>许可协议</li>
                        <li <?php if ($step == "2") { ?>class="active"<?php } ?>>环境监测</li>
                        <li <?php if ($step == "3") { ?>class="active"<?php } ?>>参数配置</li>
                        <li <?php if ($step == "4" or $step == '5') { ?>class="active"<?php } ?>>安装</li>
                    </ul>

                    <!-- 阅读许可 -->
                    <?php if ($step == '1') { ?>
                        <div class="mounted-content-item show">
                            <div class="content-header">
                                LikeShop100%开源免费商用电商系统授权协议
                            </div>
                            <div class="content">
                                <h2>版权所有(c)2019-<?=date('Y')?>，LikeShop团队保留所有权利。</h2>
                                <p class="mt16">
                                    感谢你信任并选择LikeShop100%开源免费商用电商系统，LikeShop100%开源免费商用电商系统由广州好象科技有限公司（www.likeshop.cn）原创研发并取得软件著作权，100%开放源码，无加密，自主可控，方便二次开发。</p>
                                <p class="mt6">为了正确并合法的使用本软件，请你在使用前务必阅读清楚下面的协议条款：</p>
                                <h3 class="mt16">一、本授权协议适用且仅适用于LikeShop系列开源软件产品(以下简称LikeShop)任何版本，广州好象科技有限公司拥有本授权协议的最终解释权。</h3>
                                <h3 class="mt16">二、协议许可的权利</h3>
                                <p class="mt6">
                                    1．开源版本可以任意免费商用，可去除界面版权logo。付费版本需要取得商业授权方可使用，否则会被视为盗版行为并承担相应法律责任。
                                </p>
                                <p class="mt6">
                                    2．请尊重LikeShop开源团队劳动成果，严禁使用本系统转手、转卖、倒卖或二次开发后转手、转卖、倒卖等商业行为。
                                </p>
                                <p class="mt6">
                                    3．任何企业和个人不允许对LikeShop程序代码以任何形式任何目的再发布。
                                </p>
                                <p class="mt6">
                                    4．你可以在协议规定的约束和限制范围内修改LikeShop系列开源软件产品或界面风格以适应你的网站要求。
                                </p>
                                <p class="mt6">
                                    5．你拥有使用本软件构建的系统全部内容所有权，并独立承担与这些内容的相关法律义务。
                                </p>
                                <p class="mt6">
                                    6．获得商业授权之后，你可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。
                                </p>
                                <h3 class="mt6">三、协议规定的约束和限制</h3>
                                <p class="mt6">
                                    1．开源版本可以任意免费商用，可去除界面版权logo。付费版本需要取得商业授权方可使用，否则会被视为盗版行为并承担相应法律责任。
                                </p>
                                <p class="mt6">
                                    2．未经官方许可，不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。
                                </p>
                                <p class="mt6">
                                    3．未经官方许可，禁止在LikeShop开源商城的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。
                                </p>
                                <p class="mt6">
                                    4．如果你未能遵守本协议的条款，你的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。
                                </p>
                                <h3 class="mt6">四、有限担保和免责声明</h3>
                                <p class="mt6">
                                    1．本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。
                                </p>
                                <p class="mt6">
                                    2．用户出于自愿而使用本软件，你必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。
                                </p>
                                <p class="mt6">
                                    3．电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。你一旦开始确认本协议并安装本软件，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
                                </p>
                                <p class="mt6">
                                    4．如果本软件带有其它软件的整合API示范例子包，这些文件版权不属于本软件官方，并且这些文件是没经过授权发布的，请参考相关软件的使用许可合法的使用。
                                </p>
                                <br><br>
                                <p class="mt6">
                                    LikeShop开源地址：https://gitee.com/likeshop_gitee/likeshop
                                </p>
                                <p class="mt6">
                                    LikeShop官方网站：https://www.likeshop.cn
                                </p>
                                <p class="mt6">
                                    LikeShop知识社区：https://home.likeshop.cn
                                </p>
                                <p class="mt6">
                                    -----------------------------------------------------
                                </p>
                                <p class="mt6">
                                    电话: 400-8489-315 18925185700 钟先生
                                </p>
                                <p class="mt6">
                                    广州好象科技有限公司
                                </p>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- 检查信息 -->
                    <?php if ($step == '2') { ?>
                        <div class="mounted-content-item show">
                            <div class="mounted-env-container">
                                <div class="mounted-item">
                                    <div class="content-header">
                                        服务器信息
                                    </div>
                                    <div class="content-table">
                                        <table class="layui-table" lay-skin="line">
                                            <colgroup>
                                                <col width="210">
                                                <col width="730">
                                            </colgroup>
                                            <thead>
                                            <tr>
                                                <th>参数</th>
                                                <th>值</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>服务器操作系统</td>
                                                <td><?php echo PHP_OS ?></td>
                                            </tr>
                                            <tr>
                                                <td>web服务器环境</td>
                                                <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>PHP版本</td>
                                                <td><?php echo @phpversion(); ?></td>
                                            </tr>
                                            <tr>
                                                <td>程序安装目录</td>
                                                <td><?php echo realpath(__DIR__ . '../../../'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>磁盘空间</td>
                                                <td><?php echo $modelInstall->freeDiskSpace(realpath(__DIR__ . '../../../')) ?></td>
                                            </tr>
                                            <tr>
                                                <td>上传限制</td>
                                                <?php if (ini_get('file_uploads')): ?>
                                                    <td><?php echo ini_get('upload_max_filesize'); ?></td>
                                                <?php else: ?>
                                                    <td>禁止上传</td>
                                                <?php endif; ?>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="mounted-tips mt16">PHP环境要求必须满足下列所有条件，否则系统或系统部分功能将无法使用。</div>
                                <div class="mounted-item mt16">
                                    <div class="content-header">
                                        PHP环境要求
                                    </div>
                                    <div class="content-table">
                                        <table class="layui-table" lay-skin="line">
                                            <colgroup>
                                                <col width="210">
                                                <col width="210">
                                                <col width="120">
                                                <col width="400">
                                            </colgroup>
                                            <thead>
                                            <tr>
                                                <th>选项</th>
                                                <th>要求</th>
                                                <th>状态</th>
                                                <th>说明及帮助</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>PHP版本</td>
                                                <td>大于7.2</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkPHP()) ?>
                                                <td>建议使用PHP7.2.4版本</td>
                                            </tr>
                                            <tr>
                                                <td>PDO_MYSQL</td>
                                                <td>支持 (强烈建议支持)</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkPDOMySQL()) ?>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>allow_url_fopen</td>
                                                <td>支持 (建议支持cURL)</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkCurl()) ?>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>GD2</td>
                                                <td>支持</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkGd2()) ?>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>DOM</td>
                                                <td>支持</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkDom()) ?>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>session.auto_start</td>
                                                <td>关闭</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkSessionAutoStart()) ?>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="mounted-tips mt16">
                                    系统要求LikeShop开源商城安装目录下的runtime和upload必须可写，才能使用LikeShop开源商城的所有功能。
                                </div>
                                <div class="mounted-item mt16">
                                    <div class="content-header">
                                        目录权限监测
                                    </div>
                                    <div class="content-table">
                                        <table class="layui-table" lay-skin="line">
                                            <colgroup>
                                                <col width="210">
                                                <col width="210">
                                                <col width="120">
                                                <col width="400">
                                            </colgroup>
                                            <thead>
                                            <tr>
                                                <th>目录</th>
                                                <th>要求</th>
                                                <th>状态</th>
                                                <th>说明及帮助</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>/runtime</td>
                                                <td>runtime目录可写</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkDirWrite('runtime')) ?>
                                                <td><?php if($modelInstall->checkDirWrite('runtime') =='fail') echo'请给runtime目录权限，若目录不存在先新建';?></td>
                                            </tr>
                                            <tr>
                                                <td>/public/uploads</td>
                                                <td>uploads目录可写</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkDirWrite('public/uploads')) ?>
                                                <td><?php if($modelInstall->checkDirWrite('public/uploads')=='fail') echo'请给public/uploads目录权限，若目录不存在先新建';?></td>
                                            </tr>
                                            <tr>
                                                <td>../config</td>
                                                <td>config目录可写</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkDirWrite('config')) ?>
                                                <td><?php if($modelInstall->checkDirWrite('config')=='fail') echo'请给config目录权限，若目录不存在先新建';?></td>
                                            </tr>
                                            <tr>
                                                <td>../.env</td>
                                                <td>.env文件可写</td>
                                                <?php echo $modelInstall->correctOrFail($modelInstall->checkDirWrite('.env')) ?>
                                                <td><?php if($modelInstall->checkDirWrite('.env')=='fail') echo'请给.env文件权限，若文件不存在，注意文件名第1字符是" . "';?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- 数据库设置 -->
                    <?php if ($step == '3') { ?>
                        <div class="mounted-content-item show">
                            <div class="mounted-item">
                                <div class="content-header">
                                    数据库选项
                                </div>
                                <div class="content-form">

                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            数据库主机
                                        </div>
                                        <div>
                                            <input type="text" name="host" value="<?= $post['host'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            端口号
                                        </div>
                                        <div>
                                            <input type="text" name="port" value="<?= $post['port'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            数据库用户
                                        </div>
                                        <div>
                                            <input type="text" name="user" value="<?= $post['user'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            数据库密码
                                        </div>
                                        <div>
                                            <input type="text" name="password" value="<?= $post['password'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            数据库名称
                                        </div>
                                        <div>
                                            <input type="text" name="name" value="<?= $post['name'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            数据表前缀
                                        </div>
                                        <div>
                                            <input type="text" name="prefix" value="<?= $post['prefix'] ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mounted-item">
                                <div class="content-header mt16">
                                    管理选项
                                </div>
                                <div class="content-form">

                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            管理员账号
                                        </div>
                                        <div>
                                            <input type="text" name="admin_user" value="<?= $post['admin_user'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            管理员密码
                                        </div>
                                        <div>
                                            <input type="password" name="admin_password"
                                                   value="<?= $post['admin_password'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-item">
                                        <div class="form-desc">
                                            确认密码
                                        </div>
                                        <div>
                                            <input type="password" name="admin_confirm_password"
                                                   value="<?= $post['admin_confirm_password'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-box-check">
                                        <div class="form-desc"></div>
                                        <div style="display: flex;align-items: center;">
                                            <input type="checkbox" name="import_test_data"
                                                   <?php if ($post['import_test_data'] == 'on'): ?>checked<?php endif; ?>
                                                   title="导入测试数据"/>
                                            <div style="color: #666666;">&nbsp;导入测试数据</div>
                                        </div>
                                    </div>
                                    <div class="form-box-check">
                                        <div class="form-desc"></div>
                                        <div style="display: flex;align-items: center;">
                                            <input type="checkbox" name="clear_db"
                                                   <?php if ($post['clear_db'] == 'on'): ?>checked<?php endif; ?>
                                                   title="清空现有数据"/>
                                            <div style="color: #666666;">&nbsp;清空现有数据</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- 安装中 -->
                    <?php if ($step == '4' or $step == '5') { ?>
                        <div class="mounted-content-item show">
                            <?php if ($step == '4') { ?>
                                <div id="mounting">
                                    <div class="content-header">
                                        正在安装中
                                    </div>
                                    <div class="mounting-container " id="install_message">
                                        <?php if (count($successTables) > 0): ?>
                                            <p style="margin-bottom: 4px;">成功创建数据库：<?= $post['name'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($step == '5') { ?>
                                <div class="show" id="mounting-success">
                                    <div class="content-header">
                                        安装成功
                                    </div>
                                    <div class="success-content">
                                        <div style="width: 48px;height: 48px;">
                                            <img src="./images/icon_mountSuccess.png"/>
                                        </div>
                                        <div class="mt16 result">安装完成，进入管理后台</div>
                                        <div style="margin-top: 5px;font-size:14px;">版本号：2.5.7.20210811</div>
                                        <div class="tips">
                                            为了您站点的安全，安装完成后即可将网站根目录下的“install”文件夹删除，或者config/install.lock/目录下创建install.lock文件防止重复安装。
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn" href="/admin" style="margin-left: 20px;">进入管理平台</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </form>
            <?php if ($step == '1') { ?>
                <div class="item-btn-group show">
                    <button class="accept-btn" onclick="goStep(<?php echo $nextStep ?>)">我已阅读并同意</button>
                </div>
            <?php } elseif (in_array($step, ['2', "3"])) { ?>
                <div class="item-btn-group show">
                    <button class="cancel-btn" onclick="cancel()" style="padding: 7px 63px;margin-right: 16px">返回
                    </button>
                    <?php if ($modelInstall->getAllowNext()): ?>
                        <button class="accept-btn" onclick="goStep(<?php echo $nextStep ?>)" style="padding: 7px 63px;">
                            继续
                        </button>
                    <?php else: ?>
                        <button class="accept-btn" onclick="goStep(<?php echo $step ?>)" style="padding: 7px 63px;">重新检查
                        </button>
                    <?php endif; ?>
                </div>
            <?php } elseif ($step == "4") { ?>
                <div class="item-btn-group show">
                    <button class="disabled-btn" disabled="disabled">
                        <div class="layui-icon layui-icon-loading layui-anim layui-anim-rotate layui-anim-loop"></div>
                        <div style="font-size: 14px;margin-left: 7px;">正在安装中...</div>
                    </button>
                </div>
            <?php } ?>

        </div>
    </div>
    <footer>
        Copyright © 2019-<?=date('Y')?> 广州好象科技有限公司 粤ICP备16101670号-2
    </footer>
    <script src="https://www.layuicdn.com/layui/layui.js"></script>
    <?php if (count($successTables) > 0): ?>
        <script>var successTables = eval(<?=json_encode($successTables) ?>); </script>
    <?php endif; ?>
    <script src="./js/mounted.js"></script>
    </body>
    </html>
<?php if ($message != ''): ?>
    <script>alert('<?=$message; ?>');</script>
<?php endif; ?>