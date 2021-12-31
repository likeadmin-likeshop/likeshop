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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API密钥数据列表
 *
 * @method string getSecretId() 获取密钥ID
 * @method void setSecretId(string $SecretId) 设置密钥ID
 * @method integer getCreateTime() 获取创建时间(时间戳)
 * @method void setCreateTime(integer $CreateTime) 设置创建时间(时间戳)
 * @method integer getStatus() 获取状态(2:有效, 3:禁用, 4:已删除)
 * @method void setStatus(integer $Status) 设置状态(2:有效, 3:禁用, 4:已删除)
 */
class ApiKey extends AbstractModel
{
    /**
     * @var string 密钥ID
     */
    public $SecretId;

    /**
     * @var integer 创建时间(时间戳)
     */
    public $CreateTime;

    /**
     * @var integer 状态(2:有效, 3:禁用, 4:已删除)
     */
    public $Status;

    /**
     * @param string $SecretId 密钥ID
     * @param integer $CreateTime 创建时间(时间戳)
     * @param integer $Status 状态(2:有效, 3:禁用, 4:已删除)
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
