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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间信息
 *
 * @method string getEnvironmentId() 获取命名空间名称
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间名称
 * @method string getRemark() 获取说明
 * @method void setRemark(string $Remark) 设置说明
 * @method integer getMsgTTL() 获取未消费消息过期时间，单位：秒，最大1296000（15天）
 * @method void setMsgTTL(integer $MsgTTL) 设置未消费消息过期时间，单位：秒，最大1296000（15天）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取最近修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近修改时间
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 */
class Environment extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $EnvironmentId;

    /**
     * @var string 说明
     */
    public $Remark;

    /**
     * @var integer 未消费消息过期时间，单位：秒，最大1296000（15天）
     */
    public $MsgTTL;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间
     */
    public $UpdateTime;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @param string $EnvironmentId 命名空间名称
     * @param string $Remark 说明
     * @param integer $MsgTTL 未消费消息过期时间，单位：秒，最大1296000（15天）
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 最近修改时间
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间名称
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }
    }
}
