<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySiteAttribute请求参数结构体
 *
 * @method integer getSiteId() 获取站点ID
 * @method void setSiteId(integer $SiteId) 设置站点ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method integer getNeedLogin() 获取网站是否需要登录扫描：0-未知；-1-不需要；1-需要
 * @method void setNeedLogin(integer $NeedLogin) 设置网站是否需要登录扫描：0-未知；-1-不需要；1-需要
 * @method string getLoginCookie() 获取登录后的cookie
 * @method void setLoginCookie(string $LoginCookie) 设置登录后的cookie
 * @method string getLoginCheckUrl() 获取用于测试cookie是否有效的URL
 * @method void setLoginCheckUrl(string $LoginCheckUrl) 设置用于测试cookie是否有效的URL
 * @method string getLoginCheckKw() 获取用于测试cookie是否有效的关键字
 * @method void setLoginCheckKw(string $LoginCheckKw) 设置用于测试cookie是否有效的关键字
 * @method string getScanDisallow() 获取禁止扫描器扫描的目录关键字
 * @method void setScanDisallow(string $ScanDisallow) 设置禁止扫描器扫描的目录关键字
 */
class ModifySiteAttributeRequest extends AbstractModel
{
    /**
     * @var integer 站点ID
     */
    public $SiteId;

    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var integer 网站是否需要登录扫描：0-未知；-1-不需要；1-需要
     */
    public $NeedLogin;

    /**
     * @var string 登录后的cookie
     */
    public $LoginCookie;

    /**
     * @var string 用于测试cookie是否有效的URL
     */
    public $LoginCheckUrl;

    /**
     * @var string 用于测试cookie是否有效的关键字
     */
    public $LoginCheckKw;

    /**
     * @var string 禁止扫描器扫描的目录关键字
     */
    public $ScanDisallow;

    /**
     * @param integer $SiteId 站点ID
     * @param string $Name 站点名称
     * @param integer $NeedLogin 网站是否需要登录扫描：0-未知；-1-不需要；1-需要
     * @param string $LoginCookie 登录后的cookie
     * @param string $LoginCheckUrl 用于测试cookie是否有效的URL
     * @param string $LoginCheckKw 用于测试cookie是否有效的关键字
     * @param string $ScanDisallow 禁止扫描器扫描的目录关键字
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NeedLogin",$param) and $param["NeedLogin"] !== null) {
            $this->NeedLogin = $param["NeedLogin"];
        }

        if (array_key_exists("LoginCookie",$param) and $param["LoginCookie"] !== null) {
            $this->LoginCookie = $param["LoginCookie"];
        }

        if (array_key_exists("LoginCheckUrl",$param) and $param["LoginCheckUrl"] !== null) {
            $this->LoginCheckUrl = $param["LoginCheckUrl"];
        }

        if (array_key_exists("LoginCheckKw",$param) and $param["LoginCheckKw"] !== null) {
            $this->LoginCheckKw = $param["LoginCheckKw"];
        }

        if (array_key_exists("ScanDisallow",$param) and $param["ScanDisallow"] !== null) {
            $this->ScanDisallow = $param["ScanDisallow"];
        }
    }
}
