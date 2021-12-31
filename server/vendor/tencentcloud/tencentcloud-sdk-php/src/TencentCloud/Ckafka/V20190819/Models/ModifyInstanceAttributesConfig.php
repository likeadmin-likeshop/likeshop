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
 * 修改实例属性的配置对象
 *
 * @method boolean getAutoCreateTopicEnable() 获取自动创建 true 表示开启，false 表示不开启
 * @method void setAutoCreateTopicEnable(boolean $AutoCreateTopicEnable) 设置自动创建 true 表示开启，false 表示不开启
 * @method integer getDefaultNumPartitions() 获取可选，如果auto.create.topic.enable设置为true没有设置该值时，默认设置为3
 * @method void setDefaultNumPartitions(integer $DefaultNumPartitions) 设置可选，如果auto.create.topic.enable设置为true没有设置该值时，默认设置为3
 * @method integer getDefaultReplicationFactor() 获取如歌auto.create.topic.enable设置为true没有指定该值时默认设置为2
 * @method void setDefaultReplicationFactor(integer $DefaultReplicationFactor) 设置如歌auto.create.topic.enable设置为true没有指定该值时默认设置为2
 */
class ModifyInstanceAttributesConfig extends AbstractModel
{
    /**
     * @var boolean 自动创建 true 表示开启，false 表示不开启
     */
    public $AutoCreateTopicEnable;

    /**
     * @var integer 可选，如果auto.create.topic.enable设置为true没有设置该值时，默认设置为3
     */
    public $DefaultNumPartitions;

    /**
     * @var integer 如歌auto.create.topic.enable设置为true没有指定该值时默认设置为2
     */
    public $DefaultReplicationFactor;

    /**
     * @param boolean $AutoCreateTopicEnable 自动创建 true 表示开启，false 表示不开启
     * @param integer $DefaultNumPartitions 可选，如果auto.create.topic.enable设置为true没有设置该值时，默认设置为3
     * @param integer $DefaultReplicationFactor 如歌auto.create.topic.enable设置为true没有指定该值时默认设置为2
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
        if (array_key_exists("AutoCreateTopicEnable",$param) and $param["AutoCreateTopicEnable"] !== null) {
            $this->AutoCreateTopicEnable = $param["AutoCreateTopicEnable"];
        }

        if (array_key_exists("DefaultNumPartitions",$param) and $param["DefaultNumPartitions"] !== null) {
            $this->DefaultNumPartitions = $param["DefaultNumPartitions"];
        }

        if (array_key_exists("DefaultReplicationFactor",$param) and $param["DefaultReplicationFactor"] !== null) {
            $this->DefaultReplicationFactor = $param["DefaultReplicationFactor"];
        }
    }
}
