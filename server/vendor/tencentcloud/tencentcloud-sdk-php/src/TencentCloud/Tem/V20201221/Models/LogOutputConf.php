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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志输出配置
 *
 * @method string getOutputType() 获取日志消费端类型
 * @method void setOutputType(string $OutputType) 设置日志消费端类型
 * @method string getClsLogsetName() 获取cls日志集
 * @method void setClsLogsetName(string $ClsLogsetName) 设置cls日志集
 * @method string getClsLogTopicId() 获取cls日志主题
 * @method void setClsLogTopicId(string $ClsLogTopicId) 设置cls日志主题
 * @method string getClsLogsetId() 获取cls日志集id
 * @method void setClsLogsetId(string $ClsLogsetId) 设置cls日志集id
 * @method string getClsLogTopicName() 获取cls日志名称
 * @method void setClsLogTopicName(string $ClsLogTopicName) 设置cls日志名称
 */
class LogOutputConf extends AbstractModel
{
    /**
     * @var string 日志消费端类型
     */
    public $OutputType;

    /**
     * @var string cls日志集
     */
    public $ClsLogsetName;

    /**
     * @var string cls日志主题
     */
    public $ClsLogTopicId;

    /**
     * @var string cls日志集id
     */
    public $ClsLogsetId;

    /**
     * @var string cls日志名称
     */
    public $ClsLogTopicName;

    /**
     * @param string $OutputType 日志消费端类型
     * @param string $ClsLogsetName cls日志集
     * @param string $ClsLogTopicId cls日志主题
     * @param string $ClsLogsetId cls日志集id
     * @param string $ClsLogTopicName cls日志名称
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
        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("ClsLogsetName",$param) and $param["ClsLogsetName"] !== null) {
            $this->ClsLogsetName = $param["ClsLogsetName"];
        }

        if (array_key_exists("ClsLogTopicId",$param) and $param["ClsLogTopicId"] !== null) {
            $this->ClsLogTopicId = $param["ClsLogTopicId"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsLogTopicName",$param) and $param["ClsLogTopicName"] !== null) {
            $this->ClsLogTopicName = $param["ClsLogTopicName"];
        }
    }
}
