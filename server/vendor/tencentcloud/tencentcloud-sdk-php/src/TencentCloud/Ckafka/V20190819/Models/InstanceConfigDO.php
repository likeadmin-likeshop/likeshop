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
 * 实例配置实体
 *
 * @method boolean getAutoCreateTopicsEnable() 获取是否自动创建主题
 * @method void setAutoCreateTopicsEnable(boolean $AutoCreateTopicsEnable) 设置是否自动创建主题
 * @method integer getDefaultNumPartitions() 获取分区数
 * @method void setDefaultNumPartitions(integer $DefaultNumPartitions) 设置分区数
 * @method integer getDefaultReplicationFactor() 获取默认的复制Factor
 * @method void setDefaultReplicationFactor(integer $DefaultReplicationFactor) 设置默认的复制Factor
 */
class InstanceConfigDO extends AbstractModel
{
    /**
     * @var boolean 是否自动创建主题
     */
    public $AutoCreateTopicsEnable;

    /**
     * @var integer 分区数
     */
    public $DefaultNumPartitions;

    /**
     * @var integer 默认的复制Factor
     */
    public $DefaultReplicationFactor;

    /**
     * @param boolean $AutoCreateTopicsEnable 是否自动创建主题
     * @param integer $DefaultNumPartitions 分区数
     * @param integer $DefaultReplicationFactor 默认的复制Factor
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
        if (array_key_exists("AutoCreateTopicsEnable",$param) and $param["AutoCreateTopicsEnable"] !== null) {
            $this->AutoCreateTopicsEnable = $param["AutoCreateTopicsEnable"];
        }

        if (array_key_exists("DefaultNumPartitions",$param) and $param["DefaultNumPartitions"] !== null) {
            $this->DefaultNumPartitions = $param["DefaultNumPartitions"];
        }

        if (array_key_exists("DefaultReplicationFactor",$param) and $param["DefaultReplicationFactor"] !== null) {
            $this->DefaultReplicationFactor = $param["DefaultReplicationFactor"];
        }
    }
}
