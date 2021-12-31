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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义配置参数
 *
 * @method string getClassification() 获取配置文件名，支持SPARK、HIVE、HDFS、YARN的部分配置文件自定义。
 * @method void setClassification(string $Classification) 设置配置文件名，支持SPARK、HIVE、HDFS、YARN的部分配置文件自定义。
 * @method string getProperties() 获取配置参数通过KV的形式传入，部分文件支持自定义，可以通过特殊的键"content"传入所有内容。
 * @method void setProperties(string $Properties) 设置配置参数通过KV的形式传入，部分文件支持自定义，可以通过特殊的键"content"传入所有内容。
 */
class Configuration extends AbstractModel
{
    /**
     * @var string 配置文件名，支持SPARK、HIVE、HDFS、YARN的部分配置文件自定义。
     */
    public $Classification;

    /**
     * @var string 配置参数通过KV的形式传入，部分文件支持自定义，可以通过特殊的键"content"传入所有内容。
     */
    public $Properties;

    /**
     * @param string $Classification 配置文件名，支持SPARK、HIVE、HDFS、YARN的部分配置文件自定义。
     * @param string $Properties 配置参数通过KV的形式传入，部分文件支持自定义，可以通过特殊的键"content"传入所有内容。
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
        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }
    }
}
