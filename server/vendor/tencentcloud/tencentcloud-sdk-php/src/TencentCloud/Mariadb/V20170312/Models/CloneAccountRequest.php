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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneAccount请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getSrcUser() 获取源用户账户名
 * @method void setSrcUser(string $SrcUser) 设置源用户账户名
 * @method string getSrcHost() 获取源用户HOST
 * @method void setSrcHost(string $SrcHost) 设置源用户HOST
 * @method string getDstUser() 获取目的用户账户名
 * @method void setDstUser(string $DstUser) 设置目的用户账户名
 * @method string getDstHost() 获取目的用户HOST
 * @method void setDstHost(string $DstHost) 设置目的用户HOST
 * @method string getDstDesc() 获取目的用户账户描述
 * @method void setDstDesc(string $DstDesc) 设置目的用户账户描述
 */
class CloneAccountRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 源用户账户名
     */
    public $SrcUser;

    /**
     * @var string 源用户HOST
     */
    public $SrcHost;

    /**
     * @var string 目的用户账户名
     */
    public $DstUser;

    /**
     * @var string 目的用户HOST
     */
    public $DstHost;

    /**
     * @var string 目的用户账户描述
     */
    public $DstDesc;

    /**
     * @param string $InstanceId 实例ID
     * @param string $SrcUser 源用户账户名
     * @param string $SrcHost 源用户HOST
     * @param string $DstUser 目的用户账户名
     * @param string $DstHost 目的用户HOST
     * @param string $DstDesc 目的用户账户描述
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SrcUser",$param) and $param["SrcUser"] !== null) {
            $this->SrcUser = $param["SrcUser"];
        }

        if (array_key_exists("SrcHost",$param) and $param["SrcHost"] !== null) {
            $this->SrcHost = $param["SrcHost"];
        }

        if (array_key_exists("DstUser",$param) and $param["DstUser"] !== null) {
            $this->DstUser = $param["DstUser"];
        }

        if (array_key_exists("DstHost",$param) and $param["DstHost"] !== null) {
            $this->DstHost = $param["DstHost"];
        }

        if (array_key_exists("DstDesc",$param) and $param["DstDesc"] !== null) {
            $this->DstDesc = $param["DstDesc"];
        }
    }
}
