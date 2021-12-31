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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyAccountPrivileges请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：dcdbt-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：dcdbt-ow728lmc。
 * @method string getSrcUserName() 获取源用户名
 * @method void setSrcUserName(string $SrcUserName) 设置源用户名
 * @method string getSrcHost() 获取源用户允许的访问 host
 * @method void setSrcHost(string $SrcHost) 设置源用户允许的访问 host
 * @method string getDstUserName() 获取目的用户名
 * @method void setDstUserName(string $DstUserName) 设置目的用户名
 * @method string getDstHost() 获取目的用户允许的访问 host
 * @method void setDstHost(string $DstHost) 设置目的用户允许的访问 host
 * @method string getSrcReadOnly() 获取源账号的 ReadOnly 属性
 * @method void setSrcReadOnly(string $SrcReadOnly) 设置源账号的 ReadOnly 属性
 * @method string getDstReadOnly() 获取目的账号的 ReadOnly 属性
 * @method void setDstReadOnly(string $DstReadOnly) 设置目的账号的 ReadOnly 属性
 */
class CopyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：dcdbt-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var string 源用户名
     */
    public $SrcUserName;

    /**
     * @var string 源用户允许的访问 host
     */
    public $SrcHost;

    /**
     * @var string 目的用户名
     */
    public $DstUserName;

    /**
     * @var string 目的用户允许的访问 host
     */
    public $DstHost;

    /**
     * @var string 源账号的 ReadOnly 属性
     */
    public $SrcReadOnly;

    /**
     * @var string 目的账号的 ReadOnly 属性
     */
    public $DstReadOnly;

    /**
     * @param string $InstanceId 实例 ID，形如：dcdbt-ow728lmc。
     * @param string $SrcUserName 源用户名
     * @param string $SrcHost 源用户允许的访问 host
     * @param string $DstUserName 目的用户名
     * @param string $DstHost 目的用户允许的访问 host
     * @param string $SrcReadOnly 源账号的 ReadOnly 属性
     * @param string $DstReadOnly 目的账号的 ReadOnly 属性
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

        if (array_key_exists("SrcUserName",$param) and $param["SrcUserName"] !== null) {
            $this->SrcUserName = $param["SrcUserName"];
        }

        if (array_key_exists("SrcHost",$param) and $param["SrcHost"] !== null) {
            $this->SrcHost = $param["SrcHost"];
        }

        if (array_key_exists("DstUserName",$param) and $param["DstUserName"] !== null) {
            $this->DstUserName = $param["DstUserName"];
        }

        if (array_key_exists("DstHost",$param) and $param["DstHost"] !== null) {
            $this->DstHost = $param["DstHost"];
        }

        if (array_key_exists("SrcReadOnly",$param) and $param["SrcReadOnly"] !== null) {
            $this->SrcReadOnly = $param["SrcReadOnly"];
        }

        if (array_key_exists("DstReadOnly",$param) and $param["DstReadOnly"] !== null) {
            $this->DstReadOnly = $param["DstReadOnly"];
        }
    }
}
