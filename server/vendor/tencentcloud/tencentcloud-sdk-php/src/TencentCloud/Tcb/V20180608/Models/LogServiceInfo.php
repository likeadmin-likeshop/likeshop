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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云日志服务相关信息
 *
 * @method string getLogsetName() 获取log名
 * @method void setLogsetName(string $LogsetName) 设置log名
 * @method string getLogsetId() 获取log-id
 * @method void setLogsetId(string $LogsetId) 设置log-id
 * @method string getTopicName() 获取topic名
 * @method void setTopicName(string $TopicName) 设置topic名
 * @method string getTopicId() 获取topic-id
 * @method void setTopicId(string $TopicId) 设置topic-id
 * @method string getRegion() 获取cls日志所属地域
 * @method void setRegion(string $Region) 设置cls日志所属地域
 */
class LogServiceInfo extends AbstractModel
{
    /**
     * @var string log名
     */
    public $LogsetName;

    /**
     * @var string log-id
     */
    public $LogsetId;

    /**
     * @var string topic名
     */
    public $TopicName;

    /**
     * @var string topic-id
     */
    public $TopicId;

    /**
     * @var string cls日志所属地域
     */
    public $Region;

    /**
     * @param string $LogsetName log名
     * @param string $LogsetId log-id
     * @param string $TopicName topic名
     * @param string $TopicId topic-id
     * @param string $Region cls日志所属地域
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
        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
