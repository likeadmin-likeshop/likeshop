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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音视频任务结构
 *
 * @method string getDataId() 获取数据ID
 * @method void setDataId(string $DataId) 设置数据ID
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method StorageInfo getInput() 获取任务输入
 * @method void setInput(StorageInfo $Input) 设置任务输入
 */
class TaskInput extends AbstractModel
{
    /**
     * @var string 数据ID
     */
    public $DataId;

    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var StorageInfo 任务输入
     */
    public $Input;

    /**
     * @param string $DataId 数据ID
     * @param string $Name 任务名
     * @param StorageInfo $Input 任务输入
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new StorageInfo();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
