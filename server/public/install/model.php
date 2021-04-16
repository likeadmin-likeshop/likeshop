<?php
/** 安装界面需要的各种模块 */

class installModel
{
    private $host;
    private $name;
    private $user;
    private $encoding;
    private $password;
    private $port;
    private $prefix;
    private $successTable = [];
    /**
     * @var bool
     */
    private $allowNext = true;
    /**
     * @var PDO|string
     */
    private $dbh = null;
    /**
     * @var bool
     */
    private $clearDB = false;


    /**
     * Notes: php版本
     * @author luzg(2020/8/25 9:56)
     * @return string
     */
    public function getPhpVersion()
    {
        return PHP_VERSION;
    }

    /**
     * Notes: 当前版本是否符合
     * @author luzg(2020/8/25 9:57)
     * @return string
     */
    public function checkPHP()
    {
        return $result = version_compare(PHP_VERSION, '7.2.0') >= 0 ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否有PDO
     * @author luzg(2020/8/25 9:57)
     * @return string
     */
    public function checkPDO()
    {
        return $result = extension_loaded('pdo') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否有PDO::MySQL
     * @author luzg(2020/8/25 9:58)
     * @return string
     */
    public function checkPDOMySQL()
    {
        return $result = extension_loaded('pdo_mysql') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持JSON
     * @author luzg(2020/8/25 9:58)
     * @return string
     */
    public function checkJSON()
    {
        return $result = extension_loaded('json') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持openssl
     * @author luzg(2020/8/25 9:58)
     * @return string
     */
    public function checkOpenssl()
    {
        return $result = extension_loaded('openssl') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持mbstring
     * @author luzg(2020/8/25 9:58)
     * @return string
     */
    public function checkMbstring()
    {
        return $result = extension_loaded('mbstring') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持zlib
     * @author luzg(2020/8/25 9:59)
     * @return string
     */
    public function checkZlib()
    {
        return $result = extension_loaded('zlib') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持curl
     * @author luzg(2020/8/25 9:59)
     * @return string
     */
    public function checkCurl()
    {
        return $result = extension_loaded('curl') ? 'ok' : 'fail';
    }

    /**
     * Notes: 检查GD2扩展
     * @author luzg(2020/8/26 9:59)
     * @return string
     */
    public function checkGd2()
    {
        return $result = extension_loaded('gd') ? 'ok' : 'fail';
    }

    /**
     * Notes: 检查Dom扩展
     * @author luzg(2020/8/26 9:59)
     * @return string
     */
    public function checkDom()
    {
        return $result = extension_loaded('dom') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持filter
     * @author luzg(2020/8/25 9:59)
     * @return string
     */
    public function checkFilter()
    {
        return $result = extension_loaded('filter') ? 'ok' : 'fail';
    }

    /**
     * Notes: 是否支持iconv
     * @author luzg(2020/8/25 9:59)
     * @return string
     */
    public function checkIconv()
    {
        return $result = extension_loaded('iconv') ? 'ok' : 'fail';
    }

    /**
     * Notes: 取得临时目录路径
     * @author luzg(2020/8/25 10:05)
     * @return array
     */
    public function getTmpRoot()
    {
        $path = $this->getAppRoot() . '/runtime';
        return [
            'path'     => $path,
            'exists'   => is_dir($path),
            'writable' => is_writable($path),
        ];
    }

    /**
     * Notes: 检查临时路径
     * @author luzg(2020/8/25 10:06)
     * @return string
     */
    public function checkTmpRoot()
    {
        $tmpRoot = $this->getTmpRoot()['path'];
        return $result = (is_dir($tmpRoot) and is_writable($tmpRoot)) ? 'ok' : 'fail';
    }

    /**
     * Notes: SESSION路径是否可写
     * @author luzg(2020/8/25 10:06)
     * @return mixed
     */
    public function getSessionSavePath()
    {
        $sessionSavePath = preg_replace("/\d;/", '', session_save_path());

        return [
            'path'     => $sessionSavePath,
            'exists'   => is_dir($sessionSavePath),
            'writable' => is_writable($sessionSavePath),
        ];
    }

    /**
     * Notes: 检查session路径可写状态
     * @author luzg(2020/8/25 10:13)
     * @return string
     */
    public function checkSessionSavePath()
    {
        $sessionSavePath = preg_replace("/\d;/", '', session_save_path());
        $result = (is_dir($sessionSavePath) and is_writable($sessionSavePath)) ? 'ok' : 'fail';
        if ($result == 'fail') return $result;

        file_put_contents($sessionSavePath . '/zentaotest', 'zentao');
        $sessionContent = file_get_contents($sessionSavePath . '/zentaotest');
        if ($sessionContent == 'zentao') {
            unlink($sessionSavePath . '/zentaotest');
            return 'ok';
        }
        return 'fail';
    }

    /**
     * Notes: 取得data目录是否可选
     * @author luzg(2020/8/25 10:58)
     * @return array
     */
    public function getDataRoot()
    {
        $path = $this->getAppRoot();
        return [
            'path'     => $path . 'www' . DS . 'data',
            'exists'   => is_dir($path),
            'writable' => is_writable($path),
        ];
    }

    /**
     * Notes: 取得root路径
     * @author luzg(2020/8/25 11:02)
     * @return string
     */
    public function checkDataRoot()
    {
        $dataRoot = $this->getAppRoot() . 'www' . DS . 'data';
        return $result = (is_dir($dataRoot) and is_writable($dataRoot)) ? 'ok' : 'fail';
    }

    /**
     * Notes: 取得php.ini信息
     * @author luzg(2020/8/25 11:03)
     * @return string
     */
    public function getIniInfo()
    {
        $iniInfo = '';
        ob_start();
        phpinfo(1);
        $lines = explode("\n", strip_tags(ob_get_contents()));
        ob_end_clean();
        foreach ($lines as $line) if (strpos($line, 'ini') !== false) $iniInfo .= $line . "\n";
        return $iniInfo;
    }


    /**
     * Notes: 创建安装锁定文件
     * @author luzg(2020/8/28 11:32)
     * @return bool
     */
    public function mkLockFile()
    {
        return touch($this->getAppRoot() . '/config/install.lock');
    }

    /**
     * Notes: 检查之前是否有安装
     * @author luzg(2020/8/28 11:36)
     */
    public function appIsInstalled()
    {
        return file_exists($this->getAppRoot() . '/config/install.lock');
    }

    /**
     * Notes: 取得配置信息
     * @author luzg(2020/8/25 11:05)
     * @param string $dbName 数据库名称
     * @param array $connectionInfo 连接信息
     * @return stdclass
     * @throws Exception
     */
    public function checkConfig($dbName, $connectionInfo)
    {
        $return = new stdclass();
        $return->result = 'ok';

        /* Connect to database. */
        $this->setDBParam($connectionInfo);
        $this->dbh = $this->connectDB();
        if (strpos($dbName, '.') !== false) {
            $return->result = 'fail';
            $return->error = '没有发现数据库信息';
            return $return;
        }
        if ( !is_object($this->dbh)) {
            $return->result = 'fail';
            $return->error = '安装错误，请检查连接信息:'.mb_strcut($this->dbh,0,30).'...';
            echo $this->dbh;
            return $return;
        }

        /* Get mysql version. */
        $version = $this->getMysqlVersion();

        /* If database no exits, try create it. */
        if ( !$this->dbExists()) {
            if ( !$this->createDB($version)) {
                $return->result = 'fail';
                $return->error = '创建数据库错误';
                return $return;
            }
        } elseif ($this->tableExits() and $this->clearDB == false) {
            $return->result = 'fail';
            $return->error = '数据表已经存在，您之前应该有安装过本系统，继续安装请选择清空现有数据';
            return $return;
        } elseif ($this->dbExists() and $this->clearDB == true) {
            if (!$this->dropDb($connectionInfo['name'])) {
                $return->result = 'fail';
                $return->error = '数据表已经存在，删除已存在库错误,请手动清除';
                return $return;
            } else {
                if ( !$this->createDB($version)) {
                    $return->result = 'fail';
                    $return->error = '创建数据库错误!';
                    return $return;
                }
            }
        }

        /* Create tables. */
        if ( !$this->createTable($version, $connectionInfo)) {
            $return->result = 'fail';
            $return->error = '创建表格失败';
            return $return;
        }

        return $return;
    }

    /**
     * Notes: 设置数据库相关信息
     * @author luzg(2020/8/25 11:17)
     * @param $post
     */
    public function setDBParam($post)
    {
        $this->host = $post['host'];
        $this->name = $post['name'];
        $this->user = $post['user'];
        $this->encoding = 'utf8mb4';
        $this->password = $post['password'];
        $this->port = $post['port'];
        $this->prefix = $post['prefix'];
        $this->clearDB = $post['clear_db'] == 'on';
    }

    /**
     * Notes: 连接数据库
     * @author luzg(2020/8/25 11:56)
     * @return PDO|string
     */
    public function connectDB()
    {
        $dsn = "mysql:host={$this->host}; port={$this->port}";
        try {
            $dbh = new PDO($dsn, $this->user, $this->password);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->exec("SET NAMES {$this->encoding}");
            $dbh->exec("SET NAMES {$this->encoding}");
            try{
                $dbh->exec("SET GLOBAL sql_mode='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';");
            }catch (Exception $e){

            }
            return $dbh;
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Notes: 检查数据库是否存在
     * @author luzg(2020/8/25 11:56)
     * @return mixed
     */
    public function dbExists()
    {
        $sql = "SHOW DATABASES like '{$this->name}'";
        return $this->dbh->query($sql)->fetch();
    }

    /**
     * Notes: 检查表是否存在
     * @author luzg(2020/8/25 11:56)
     * @return mixed
     */
    public function tableExits()
    {
        $configTable = sprintf("'%s'", $this->prefix . TESTING_TABLE);
        $sql = "SHOW TABLES FROM {$this->name} like $configTable";
        return $this->dbh->query($sql)->fetch();
    }

    /**
     * Notes: 获取mysql版本号
     * @author luzg(2020/8/25 11:56)
     * @return false|string
     */
    public function getMysqlVersion()
    {
        $sql = "SELECT VERSION() AS version";
        $result = $this->dbh->query($sql)->fetch();
        return substr($result->version, 0, 3);
    }

    /**
     * Notes: 创建数据库
     * @author luzg(2020/8/25 11:57)
     * @param $version
     * @return mixed
     */
    public function createDB($version)
    {
        $sql = "CREATE DATABASE `{$this->name}`";
        if ($version > 4.1) $sql .= " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
        return $this->dbh->query($sql);
    }

    /**
     * Notes: 创建表
     * @author luzg(2020/8/25 11:57)
     * @param $version
     * @param $post
     * @return bool
     * @throws Exception
     */
    public function createTable($version, $post)
    {
        $dbFile = $this->getInstallRoot() . '/db/like.sql';
        //file_put_contents($dbFile, $this->initAccount($post), FILE_APPEND);
        $content = str_replace(";\r\n", ";\n", file_get_contents($dbFile));
        $tables = explode(";\n", $content);
        $tables[] = $this->initAccount($post);
        $installTime = microtime(true) * 10000;

        foreach ($tables as $table) {
            $table = trim($table);
            if (empty($table)) continue;

            if (strpos($table, 'CREATE') !== false and $version <= 4.1) {
                $table = str_replace('DEFAULT CHARSET=utf8', '', $table);
            }
//            elseif (strpos($table, 'DROP') !== false and $this->clearDB != false) {
//                $table = str_replace('--', '', $table);
//            }

            /* Skip sql that is note. */
            if (strpos($table, '--') === 0) continue;

            $table = str_replace('`ls_', $this->name . '.`ls_', $table);
            $table = str_replace('`ls_', '`' . $this->prefix, $table);

            if (strpos($table, 'CREATE') !== false) {
                $tableName = explode('`', $table)[1];
                $installTime += random_int(3000, 7000);
                $this->successTable[] = [$tableName, date('Y-m-d H:i:s', $installTime / 10000)];
            }

//            if (strpos($table, "INSERT INTO ") !== false) {
//                $table = str_replace('INSERT INTO ', 'INSERT INTO ' .$this->name .'.', $table);
//            }

            try {
                if ( !$this->dbh->query($table)) return false;
            } catch (Exception $e) {
                echo 'error sql: ' . $table . "<br>";
                echo $e->getMessage() . "<br>";
                return false;
            }
        }
        return true;
    }

    /**
     * Notes: 删除数据库
     * @param $db
     * @return false|PDOStatement
     */
    public function dropDb($db)
    {
        $sql = "drop database {$db};";
        return $this->dbh->query($sql);
    }

    /**
     * Notes: 取得安装成功的表列表
     * @author luzg(2020/8/26 18:28)
     * @return array
     */
    public function getSuccessTable()
    {
        return $this->successTable;
    }

    /**
     * Notes: 创建演示数据
     * @author luzg(2020/8/25 11:58)
     * @return bool
     */
    public function importDemoData()
    {
        $demoDataFile = 'ys.sql';
        $demoDataFile = $this->getInstallRoot() . '/db/' . $demoDataFile;
        if (!is_file($demoDataFile)) {
            echo "<br>";
            echo 'no file:' .$demoDataFile;
            return false;
        }
        $content = str_replace(";\r\n", ";\n", file_get_contents($demoDataFile));
        $insertTables = explode(";\n", $content);
        foreach ($insertTables as $table) {
            $table = trim($table);
            if (empty($table)) continue;

            $table = str_replace('`ls_', $this->name . '.`ls_', $table);
            $table = str_replace('`ls_', '`' .$this->prefix, $table);
            if ( !$this->dbh->query($table)) return false;
        }

        // 移动图片资源
        $this->cpFiles($this->getInstallRoot().'/uploads', $this->getAppRoot().'/public/uploads');

        return true;
    }

    /**
     * 将一个文件夹下的所有文件及文件夹
     * 复制到另一个文件夹里（保持原有结构）
     *
     * @param <string> $rootFrom 源文件夹地址（最好为绝对路径）
     * @param <string> $rootTo 目的文件夹地址（最好为绝对路径）
     */
    function cpFiles($rootFrom, $rootTo){

            $handle = opendir($rootFrom);
            while (false !== ($file = readdir($handle))) {
                //DIRECTORY_SEPARATOR 为系统的文件夹名称的分隔符 例如：windos为'/'; linux为'/'
                $fileFrom = $rootFrom . DIRECTORY_SEPARATOR . $file;
                $fileTo = $rootTo . DIRECTORY_SEPARATOR . $file;
                if ($file == '.' || $file == '..') {
                    continue;
                }

                    if (is_dir($fileFrom)) {
                        if (!is_dir($fileTo)) { //目标目录不存在则创建
                            mkdir($fileTo, 0777);
                        }
                        $this->cpFiles($fileFrom, $fileTo);
                    } else {
                        if (!file_exists($fileTo)) {
                            @copy($fileFrom, $fileTo);
                            if (strstr($fileTo, "access_token.txt")) {
                                chmod($fileTo, 0777);
                            }
                        }
                    }

            }
    }

    /**
     * Notes: 当前应用程序的相对路径
     * @author luzg(2020/8/25 10:55)
     * @return string
     */
    public function getAppRoot()
    {
        return realpath($this->getInstallRoot() . '/../../');
    }

    /**
     * Notes: 获取安装目录
     * @author luzg(2020/8/26 16:15)
     * @return string
     */
    public function getInstallRoot()
    {
        return INSTALL_ROOT;
    }

    /**
     * Notes: 目录的容量
     * @author luzg(2020/8/25 15:21)
     * @param $dir
     * @return string
     */
    public function freeDiskSpace($dir)
    {
        // M
        $freeDiskSpace = disk_free_space(realpath(__DIR__)) / 1024 / 1024;

        // G
        if ($freeDiskSpace > 1024) {
            return number_format($freeDiskSpace / 1024, 2) . 'G';
        }

        return number_format($freeDiskSpace, 2) . 'M';
    }

    /**
     * Notes: 获取状态标志
     * @author luzg(2020/8/25 16:10)
     * @param $statusSingle
     * @return string
     */
    public function correctOrFail($statusSingle)
    {
        if ($statusSingle == 'ok')
            return '<td class="layui-icon green">&#xe605;</td>';

        $this->allowNext = false;
        return '<td class="layui-icon wrong">&#x1006;</td>';
    }

    /**
     * Notes: 是否允许下一步
     * @author luzg(2020/8/25 17:29)
     * @return bool
     */
    public function getAllowNext()
    {
        return $this->allowNext;
    }

    /**
     * Notes: 检查session auto start
     * @author luzg(2020/8/25 16:55)
     * @return string
     */
    public function checkSessionAutoStart()
    {
        return $result = ini_get('session.auto_start') == '0' ? 'ok' : 'fail';
    }

    /**
     * Notes: 检查auto tags
     * @author luzg(2020/8/25 16:55)
     * @return string
     */
    public function checkAutoTags()
    {
        return $result = ini_get('session.auto_start') == '0' ? 'ok' : 'fail';
    }

    /**
     * Notes: 检查目录是否可写
     * @param $dir
     * @return string
     */
    public function checkDirWrite($dir='')
    {
        $route = $this->getAppRoot().'/'.$dir;
        return $result = is_writable($route) ? 'ok' : 'fail';
    }

    /**
     * Notes: 检查目录是否可写
     * @param $dir
     * @return string
     */
    public function checkSuperiorDirWrite($dir='')
    {
        $route = $this->getAppRoot().'/'.$dir;
        return $result = is_writable($route) ? 'ok' : 'fail';
    }


    /**
     * Notes: 初始化管理账号
     * @param $post
     * @return string
     */
    public function initAccount($post)
    {
        $time = time();
        $salt = substr(md5($time . $post['admin_user']), 0, 4);//随机4位密码盐
        $password = $this->createPassword($post['admin_password'], $salt);

        $sql = "INSERT INTO `ls_admin` VALUES (1, 1, '{$post['admin_user']}', NULL, '{$post['admin_user']}', 
                '{$password}', '{$salt}', 0, '{$time}', '{$time}', '{$time}', '', 0, 0);";

        return $sql;
    }

    /**
     * Notes: 生成密码密文
     * @param $pwd
     * @param $salt
     * @return string
     */
    public function createPassword($pwd, $salt)
    {
        $salt = md5('y' . $salt . 'x');
        $salt .= '2020';
        return md5($pwd . $salt);
    }
}
