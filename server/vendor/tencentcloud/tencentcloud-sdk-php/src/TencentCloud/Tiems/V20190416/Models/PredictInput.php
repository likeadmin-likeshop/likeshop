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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预测输入
 *
 * @method string getInputPath() 获取输入路径，支持 cos 格式路径文件夹或文件
 * @method void setInputPath(string $InputPath) 设置输入路径，支持 cos 格式路径文件夹或文件
 * @method string getOutputPath() 获取输出路径，支持 cos 格式路径
 * @method void setOutputPath(string $OutputPath) 设置输出路径，支持 cos 格式路径
 * @method string getInputDataFormat() 获取输入数据格式，目前支持：JSON
 * @method void setInputDataFormat(string $InputDataFormat) 设置输入数据格式，目前支持：JSON
 * @method string getOutputDataFormat() 获取输出数据格式，目前支持：JSON
 * @method void setOutputDataFormat(string $OutputDataFormat) 设置输出数据格式，目前支持：JSON
 * @method integer getBatchSize() 获取预测批大小，默认为 64
 * @method void setBatchSize(integer $BatchSize) 设置预测批大小，默认为 64
 * @method string getSignatureName() 获取模型签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignatureName(string $SignatureName) 设置模型签名
注意：此字段可能返回 null，表示取不到有效值。
 */
class PredictInput extends AbstractModel
{
    /**
     * @var string 输入路径，支持 cos 格式路径文件夹或文件
     */
    public $InputPath;

    /**
     * @var string 输出路径，支持 cos 格式路径
     */
    public $OutputPath;

    /**
     * @var string 输入数据格式，目前支持：JSON
     */
    public $InputDataFormat;

    /**
     * @var string 输出数据格式，目前支持：JSON
     */
    public $OutputDataFormat;

    /**
     * @var integer 预测批大小，默认为 64
     */
    public $BatchSize;

    /**
     * @var string 模型签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignatureName;

    /**
     * @param string $InputPath 输入路径，支持 cos 格式路径文件夹或文件
     * @param string $OutputPath 输出路径，支持 cos 格式路径
     * @param string $InputDataFormat 输入数据格式，目前支持：JSON
     * @param string $OutputDataFormat 输出数据格式，目前支持：JSON
     * @param integer $BatchSize 预测批大小，默认为 64
     * @param string $SignatureName 模型签名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }

        if (array_key_exists("InputDataFormat",$param) and $param["InputDataFormat"] !== null) {
            $this->InputDataFormat = $param["InputDataFormat"];
        }

        if (array_key_exists("OutputDataFormat",$param) and $param["OutputDataFormat"] !== null) {
            $this->OutputDataFormat = $param["OutputDataFormat"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("SignatureName",$param) and $param["SignatureName"] !== null) {
            $this->SignatureName = $param["SignatureName"];
        }
    }
}
