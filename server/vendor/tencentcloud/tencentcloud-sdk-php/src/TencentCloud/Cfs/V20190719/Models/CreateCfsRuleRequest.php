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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsRule请求参数结构体
 *
 * @method string getPGroupId() 获取权限组 ID
 * @method void setPGroupId(string $PGroupId) 设置权限组 ID
 * @method string getAuthClientIp() 获取可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
 * @method void setAuthClientIp(string $AuthClientIp) 设置可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
 * @method integer getPriority() 获取规则优先级，参数范围1-100。 其中 1 为最高，100为最低
 * @method void setPriority(integer $Priority) 设置规则优先级，参数范围1-100。 其中 1 为最高，100为最低
 * @method string getRWPermission() 获取读写权限, 值为 RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
 * @method void setRWPermission(string $RWPermission) 设置读写权限, 值为 RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
 * @method string getUserPermission() 获取用户权限，值为 all_squash、no_all_squash、root_squash、no_root_squash。其中all_squash为所有访问用户都会被映射为匿名用户或用户组；no_all_squash为访问用户会先与本机用户匹配，匹配失败后再映射为匿名用户或用户组；root_squash为将来访的root用户映射为匿名用户或用户组；no_root_squash为来访的root用户保持root帐号权限。不填默认为root_squash。
 * @method void setUserPermission(string $UserPermission) 设置用户权限，值为 all_squash、no_all_squash、root_squash、no_root_squash。其中all_squash为所有访问用户都会被映射为匿名用户或用户组；no_all_squash为访问用户会先与本机用户匹配，匹配失败后再映射为匿名用户或用户组；root_squash为将来访的root用户映射为匿名用户或用户组；no_root_squash为来访的root用户保持root帐号权限。不填默认为root_squash。
 */
class CreateCfsRuleRequest extends AbstractModel
{
    /**
     * @var string 权限组 ID
     */
    public $PGroupId;

    /**
     * @var string 可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
     */
    public $AuthClientIp;

    /**
     * @var integer 规则优先级，参数范围1-100。 其中 1 为最高，100为最低
     */
    public $Priority;

    /**
     * @var string 读写权限, 值为 RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
     */
    public $RWPermission;

    /**
     * @var string 用户权限，值为 all_squash、no_all_squash、root_squash、no_root_squash。其中all_squash为所有访问用户都会被映射为匿名用户或用户组；no_all_squash为访问用户会先与本机用户匹配，匹配失败后再映射为匿名用户或用户组；root_squash为将来访的root用户映射为匿名用户或用户组；no_root_squash为来访的root用户保持root帐号权限。不填默认为root_squash。
     */
    public $UserPermission;

    /**
     * @param string $PGroupId 权限组 ID
     * @param string $AuthClientIp 可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
     * @param integer $Priority 规则优先级，参数范围1-100。 其中 1 为最高，100为最低
     * @param string $RWPermission 读写权限, 值为 RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
     * @param string $UserPermission 用户权限，值为 all_squash、no_all_squash、root_squash、no_root_squash。其中all_squash为所有访问用户都会被映射为匿名用户或用户组；no_all_squash为访问用户会先与本机用户匹配，匹配失败后再映射为匿名用户或用户组；root_squash为将来访的root用户映射为匿名用户或用户组；no_root_squash为来访的root用户保持root帐号权限。不填默认为root_squash。
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("AuthClientIp",$param) and $param["AuthClientIp"] !== null) {
            $this->AuthClientIp = $param["AuthClientIp"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RWPermission",$param) and $param["RWPermission"] !== null) {
            $this->RWPermission = $param["RWPermission"];
        }

        if (array_key_exists("UserPermission",$param) and $param["UserPermission"] !== null) {
            $this->UserPermission = $param["UserPermission"];
        }
    }
}
