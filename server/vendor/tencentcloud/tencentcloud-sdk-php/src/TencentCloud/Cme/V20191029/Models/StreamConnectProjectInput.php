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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云转推项目输入信息。
 *
 * @method StreamInputInfo getMainInput() 获取云转推主输入源信息。
 * @method void setMainInput(StreamInputInfo $MainInput) 设置云转推主输入源信息。
 * @method StreamInputInfo getBackupInput() 获取云转推备输入源信息。
 * @method void setBackupInput(StreamInputInfo $BackupInput) 设置云转推备输入源信息。
 * @method array getOutputs() 获取云转推输出源信息。
 * @method void setOutputs(array $Outputs) 设置云转推输出源信息。
 */
class StreamConnectProjectInput extends AbstractModel
{
    /**
     * @var StreamInputInfo 云转推主输入源信息。
     */
    public $MainInput;

    /**
     * @var StreamInputInfo 云转推备输入源信息。
     */
    public $BackupInput;

    /**
     * @var array 云转推输出源信息。
     */
    public $Outputs;

    /**
     * @param StreamInputInfo $MainInput 云转推主输入源信息。
     * @param StreamInputInfo $BackupInput 云转推备输入源信息。
     * @param array $Outputs 云转推输出源信息。
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
        if (array_key_exists("MainInput",$param) and $param["MainInput"] !== null) {
            $this->MainInput = new StreamInputInfo();
            $this->MainInput->deserialize($param["MainInput"]);
        }

        if (array_key_exists("BackupInput",$param) and $param["BackupInput"] !== null) {
            $this->BackupInput = new StreamInputInfo();
            $this->BackupInput->deserialize($param["BackupInput"]);
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new StreamConnectOutput();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
