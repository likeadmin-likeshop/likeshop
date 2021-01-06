<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace think\worker;

use think\Session as BaseSession;
use Workerman\Protocols\Http;

/**
 * Workerman Cookie类
 */
class Session extends BaseSession
{
    /**
     * session初始化
     * @access public
     * @param  array $config
     * @return void
     * @throws \think\Exception
     */
    public function init(array $config = [])
    {
        $config = $config ?: $this->config;

        $isDoStart = false;
        if (isset($config['use_trans_sid'])) {
            ini_set('session.use_trans_sid', $config['use_trans_sid'] ? 1 : 0);
        }

        // 启动session
        if (!empty($config['auto_start']) && PHP_SESSION_ACTIVE != session_status()) {
            ini_set('session.auto_start', 0);
            $isDoStart = true;
        }

        if (isset($config['prefix'])) {
            $this->prefix = $config['prefix'];
        }

        if (isset($config['use_lock'])) {
            $this->lock = $config['use_lock'];
        }

        if (isset($config['var_session_id']) && isset($_REQUEST[$config['var_session_id']])) {
            session_id($_REQUEST[$config['var_session_id']]);
        } elseif (isset($config['id']) && !empty($config['id'])) {
            session_id($config['id']);
        } else {
            session_id(Http::sessionId());
        }

        if (isset($config['name'])) {
            Http::sessionName($config['name']);
        }

        if (isset($config['path'])) {
            Http::sessionSavePath($config['path']);
        }

        if (isset($config['domain'])) {
            ini_set('session.cookie_domain', $config['domain']);
        }

        if (isset($config['expire'])) {
            ini_set('session.gc_maxlifetime', $config['expire']);
            ini_set('session.cookie_lifetime', $config['expire']);
        }

        if (isset($config['secure'])) {
            ini_set('session.cookie_secure', $config['secure']);
        }

        if (isset($config['httponly'])) {
            ini_set('session.cookie_httponly', $config['httponly']);
        }

        if (isset($config['use_cookies'])) {
            ini_set('session.use_cookies', $config['use_cookies'] ? 1 : 0);
        }

        if (isset($config['cache_limiter'])) {
            session_cache_limiter($config['cache_limiter']);
        }

        if (isset($config['cache_expire'])) {
            session_cache_expire($config['cache_expire']);
        }

        if (!empty($config['type'])) {
            // 读取session驱动
            $class = false !== strpos($config['type'], '\\') ? $config['type'] : '\\think\\session\\driver\\' . ucwords($config['type']);

            // 检查驱动类
            if (!class_exists($class) || !session_set_save_handler(new $class($config))) {
                throw new ClassNotFoundException('error session handler:' . $class, $class);
            }
        }

        if ($isDoStart) {
            $this->start();
        } else {
            $this->init = false;
        }

        return $this;
    }

    /**
     * session自动启动或者初始化
     * @access public
     * @return void
     */
    public function boot()
    {
        if (is_null($this->init)) {
            $this->init();
        }

        if (false === $this->init) {
            if (PHP_SESSION_ACTIVE != session_status()) {
                $this->start();
            }
            $this->init = true;
        }
    }

    /**
     * 启动session
     * @access public
     * @return void
     */
    public function start()
    {
        Http::sessionStart();

        $this->init = true;
    }

    /**
     * 暂停session
     * @access public
     * @return void
     */
    public function pause()
    {
        // 暂停session
        Http::sessionWriteClose();
        $this->init = false;
    }
}
