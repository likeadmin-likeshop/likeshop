<?php
// error_reporting(0);
include "model.php";
include "YxEnv.php";

define('install', true);
define('INSTALL_ROOT', __DIR__);
define('TESTING_TABLE', 'config');

$step = $_GET['step'] ?? 1;

$installDir = "install";
$modelInstall = new installModel();

// Env设置
$yxEnv = new YxEnv();

// 检查是否有安装过
$envFilePath = $modelInstall->getAppRoot() . '/.env';
if ($modelInstall->appIsInstalled() && in_array($step, [1, 2, 3, 4])) {
    die('可能已经安装过本系统了，请删除配置目录下面的install.lock文件再尝试');
}

// 加载Example文件
$yxEnv->load($modelInstall->getAppRoot() . '/.example.env');

//尝试生成.env
$yxEnv->makeEnv($modelInstall->getAppRoot() . '/.env');

$post = [
    'host' => $_POST['host'] ?? 'localhost',
    'port' => $_POST['port'] ?? '3306',
    'user' => $_POST['user'] ?? 'root',
    'password' => $_POST['password'] ?? '',
    'name' => $_POST['name'] ?? 'likeshop',
    'admin_user' => $_POST['admin_user'] ?? '',
    'admin_password' => $_POST['admin_password'] ?? '',
    'admin_confirm_password' => $_POST['admin_confirm_password'] ?? '',
    'prefix' => $_POST['prefix'] ?? 'ls_',
    'import_test_data' => $_POST['import_test_data'] ?? 'off',
    'clear_db' => $_POST['clear_db'] ?? 'off',
];

$message = '';

// 检查数据库正确性
if ($step == 4) {
    $canNext = true;
    if (empty($post['prefix'])) {
        $canNext = false;
        $message = '数据表前缀不能为空';
    } elseif ($post['admin_user'] == '') {
        $canNext = false;
        $message = '请填写管理员用户名';
    } elseif (empty(trim($post['admin_password']))) {
        $canNext = false;
        $message = '管理员密码不能为空';
    } elseif ($post['admin_password'] != $post['admin_confirm_password']) {
        $canNext = false;
        $message = '两次密码不一致';
    } else {
        // 检查 数据库信息
        $result = $modelInstall->checkConfig($post['name'], $post);
        if ($result->result == 'fail') {
            $canNext = false;
            $message = $result->error;
        }

        // 导入测试数据
        if ($canNext == true && $post['import_test_data'] == 'on') {
            if (!$modelInstall->importDemoData()) {
                $canNext = false;
                $message = '导入测试数据错误';
            }
        }

        // 写配置文件
        if ($canNext) {
            $yxEnv->putEnv($envFilePath, $post);
            $modelInstall->mkLockFile();
        }
    }

    if (!$canNext)
        $step = 3;
}

// 取得安装成功的表
$successTables = $modelInstall->getSuccessTable();

$nextStep = $step + 1;
include __DIR__ . "/template/main.php";