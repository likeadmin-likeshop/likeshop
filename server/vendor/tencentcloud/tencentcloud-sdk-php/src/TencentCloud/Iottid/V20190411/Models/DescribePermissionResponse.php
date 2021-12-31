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
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePermission返回参数结构体
 *
 * @method boolean getEnterpriseUser() 获取企业用户
 * @method void setEnterpriseUser(boolean $EnterpriseUser) 设置企业用户
 * @method string getDownloadPermission() 获取下载控制台权限
 * @method void setDownloadPermission(string $DownloadPermission) 设置下载控制台权限
 * @method string getUsePermission() 获取使用控制台权限
 * @method void setUsePermission(string $UsePermission) 设置使用控制台权限
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePermissionResponse extends AbstractModel
{
    /**
     * @var boolean 企业用户
     */
    public $EnterpriseUser;

    /**
     * @var string 下载控制台权限
     */
    public $DownloadPermission;

    /**
     * @var string 使用控制台权限
     */
    public $UsePermission;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnterpriseUser 企业用户
     * @param string $DownloadPermission 下载控制台权限
     * @param string $UsePermission 使用控制台权限
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("EnterpriseUser",$param) and $param["EnterpriseUser"] !== null) {
            $this->EnterpriseUser = $param["EnterpriseUser"];
        }

        if (array_key_exists("DownloadPermission",$param) and $param["DownloadPermission"] !== null) {
            $this->DownloadPermission = $param["DownloadPermission"];
        }

        if (array_key_exists("UsePermission",$param) and $param["UsePermission"] !== null) {
            $this->UsePermission = $param["UsePermission"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
