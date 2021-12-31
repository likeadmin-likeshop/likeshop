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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getMsgRetentionTime() 获取实例日志的最长保留时间，单位分钟，最大30天，0代表不开启日志保留时间回收策略
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置实例日志的最长保留时间，单位分钟，最大30天，0代表不开启日志保留时间回收策略
 * @method string getInstanceName() 获取实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setInstanceName(string $InstanceName) 设置实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method ModifyInstanceAttributesConfig getConfig() 获取实例配置
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) 设置实例配置
 * @method DynamicRetentionTime getDynamicRetentionConfig() 获取动态消息保留策略配置
 * @method void setDynamicRetentionConfig(DynamicRetentionTime $DynamicRetentionConfig) 设置动态消息保留策略配置
 * @method integer getRebalanceTime() 获取修改升配置rebalance时间
 * @method void setRebalanceTime(integer $RebalanceTime) 设置修改升配置rebalance时间
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 实例日志的最长保留时间，单位分钟，最大30天，0代表不开启日志保留时间回收策略
     */
    public $MsgRetentionTime;

    /**
     * @var string 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $InstanceName;

    /**
     * @var ModifyInstanceAttributesConfig 实例配置
     */
    public $Config;

    /**
     * @var DynamicRetentionTime 动态消息保留策略配置
     */
    public $DynamicRetentionConfig;

    /**
     * @var integer 修改升配置rebalance时间
     */
    public $RebalanceTime;

    /**
     * @param string $InstanceId 实例id
     * @param integer $MsgRetentionTime 实例日志的最长保留时间，单位分钟，最大30天，0代表不开启日志保留时间回收策略
     * @param string $InstanceName 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param ModifyInstanceAttributesConfig $Config 实例配置
     * @param DynamicRetentionTime $DynamicRetentionConfig 动态消息保留策略配置
     * @param integer $RebalanceTime 修改升配置rebalance时间
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

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ModifyInstanceAttributesConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("DynamicRetentionConfig",$param) and $param["DynamicRetentionConfig"] !== null) {
            $this->DynamicRetentionConfig = new DynamicRetentionTime();
            $this->DynamicRetentionConfig->deserialize($param["DynamicRetentionConfig"]);
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }
    }
}
