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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS日志搜索对象
 *
 * @method string getTopicId() 获取主题ID
 * @method void setTopicId(string $TopicId) 设置主题ID
 * @method string getTopicName() 获取主题名字
 * @method void setTopicName(string $TopicName) 设置主题名字
 * @method string getTimestamp() 获取日志时间
 * @method void setTimestamp(string $Timestamp) 设置日志时间
 * @method string getContent() 获取日志内容
 * @method void setContent(string $Content) 设置日志内容
 * @method string getFilename() 获取采集路径
 * @method void setFilename(string $Filename) 设置采集路径
 * @method string getSource() 获取日志来源设备
 * @method void setSource(string $Source) 设置日志来源设备
 */
class ClsLogObject extends AbstractModel
{
    /**
     * @var string 主题ID
     */
    public $TopicId;

    /**
     * @var string 主题名字
     */
    public $TopicName;

    /**
     * @var string 日志时间
     */
    public $Timestamp;

    /**
     * @var string 日志内容
     */
    public $Content;

    /**
     * @var string 采集路径
     */
    public $Filename;

    /**
     * @var string 日志来源设备
     */
    public $Source;

    /**
     * @param string $TopicId 主题ID
     * @param string $TopicName 主题名字
     * @param string $Timestamp 日志时间
     * @param string $Content 日志内容
     * @param string $Filename 采集路径
     * @param string $Source 日志来源设备
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
