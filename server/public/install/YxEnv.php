<?php

class YxEnv
{
    /**
     * 环境变量数据
     * @var array
     */
    protected $data = [];
    protected $filePath = '';

    public function __construct()
    {
        //$this->data = $_ENV;
    }

    /**
     * 读取环境变量定义文件
     * @access public
     * @param string $file 环境变量定义文件
     * @return void
     */
    public function load($file)
    {
        $this->filePath = $file;
        $env = parse_ini_file($file, true);
        $this->set($env);
    }

    public function makeEnv($file){
        if(!file_exists($file)){
            try{
                touch($file);
            }catch (Exception $e){
                return;
            }
        }
    }

    /**
     * 获取环境变量值
     * @access public
     * @param string $name 环境变量名
     * @param mixed $default 默认值
     * @return mixed
     */
    public function get($name = null, $default = null, $php_prefix = true)
    {
        if (is_null($name)) {
            return $this->data;
        }

        if (isset($this->data[$name])) {
            return $this->data[$name];
        }

        return $this->getEnv($name, $default, $php_prefix);
    }

    protected function getEnv($name, $default = null, $php_prefix = true)
    {
        if ($php_prefix) {
            $name = 'PHP_' . $name;
        }

        $result = getenv($name);

        if (false === $result) {
            return $default;
        }

        if ('false' === $result) {
            $result = false;
        } elseif ('true' === $result) {
            $result = true;
        }

        if ( !isset($this->data[$name])) {
            $this->data[$name] = $result;
        }

        return $result;
    }

    /**
     * Notes: 写入Env文件
     * @author luzg(2020/8/27 18:12)
     * @param $envFilePath
     * @param array $databaseEnv
     */
    public function putEnv($envFilePath, array $databaseEnv)
    {
        $applyDbEnv = [
            'database.hostname' => $databaseEnv['host'],
            'database.database' => $databaseEnv['name'],
            'database.username' => $databaseEnv['user'],
            'database.password' => $databaseEnv['password'],
            'database.hostport' => $databaseEnv['port'],
            'database.prefix' => $databaseEnv['prefix'],
            'project.file_domain' => $_SERVER['HTTP_HOST'],
        ];

        $envLine = array_merge($this->data, $applyDbEnv);
        ksort($envLine);

        $content = '';
        $lastPrefix = '';
        foreach ($envLine as $index => $value) {
            list($prefix, $key) = explode('.', $index);

            if ($prefix != $lastPrefix) {
                if ($lastPrefix != '')
                    $content .= "\n";

                $content .= "[$prefix]\n";
                $lastPrefix = $prefix;
            }

            $content .= "$key = \"$value\"\n";
        }

        if ( !empty($content)) {
            file_put_contents($envFilePath, $content);
        }
    }


    /**
     * 设置环境变量值
     * @access public
     * @param string|array $env 环境变量
     * @param mixed $value 值
     * @return void
     */
    public function set($env, $value = null)
    {
        if (is_array($env)) {

            foreach ($env as $key => $val) {
                if (is_array($val)) {
                    foreach ($val as $k => $v) {
                        $this->data[$key . '.' . $k] = $v;
                    }
                } else {
                    $this->data[$key] = $val;
                }
            }
        } else {
            $name = strtoupper(str_replace('.', '_', $env));

            $this->data[$name] = $value;
        }
    }
}
