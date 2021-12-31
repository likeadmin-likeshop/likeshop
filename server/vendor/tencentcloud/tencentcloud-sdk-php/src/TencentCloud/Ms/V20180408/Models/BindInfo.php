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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户绑定app的基本信息
 *
 * @method string getAppIconUrl() 获取app的icon的url
 * @method void setAppIconUrl(string $AppIconUrl) 设置app的icon的url
 * @method string getAppName() 获取app的名称
 * @method void setAppName(string $AppName) 设置app的名称
 * @method string getAppPkgName() 获取app的包名
 * @method void setAppPkgName(string $AppPkgName) 设置app的包名
 */
class BindInfo extends AbstractModel
{
    /**
     * @var string app的icon的url
     */
    public $AppIconUrl;

    /**
     * @var string app的名称
     */
    public $AppName;

    /**
     * @var string app的包名
     */
    public $AppPkgName;

    /**
     * @param string $AppIconUrl app的icon的url
     * @param string $AppName app的名称
     * @param string $AppPkgName app的包名
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
        if (array_key_exists("AppIconUrl",$param) and $param["AppIconUrl"] !== null) {
            $this->AppIconUrl = $param["AppIconUrl"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }
    }
}
