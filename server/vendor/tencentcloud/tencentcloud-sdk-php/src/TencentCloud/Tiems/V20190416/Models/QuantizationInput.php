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
 * 量化输入
 *
 * @method string getInputPath() 获取量化输入路径
 * @method void setInputPath(string $InputPath) 设置量化输入路径
 * @method string getOutputPath() 获取量化输出路径
 * @method void setOutputPath(string $OutputPath) 设置量化输出路径
 * @method integer getBatchSize() 获取量化批大小
 * @method void setBatchSize(integer $BatchSize) 设置量化批大小
 * @method string getPrecision() 获取量化精度，支持：FP32，FP16，INT8
 * @method void setPrecision(string $Precision) 设置量化精度，支持：FP32，FP16，INT8
 * @method string getConvertType() 获取转换类型
 * @method void setConvertType(string $ConvertType) 设置转换类型
 */
class QuantizationInput extends AbstractModel
{
    /**
     * @var string 量化输入路径
     */
    public $InputPath;

    /**
     * @var string 量化输出路径
     */
    public $OutputPath;

    /**
     * @var integer 量化批大小
     */
    public $BatchSize;

    /**
     * @var string 量化精度，支持：FP32，FP16，INT8
     */
    public $Precision;

    /**
     * @var string 转换类型
     */
    public $ConvertType;

    /**
     * @param string $InputPath 量化输入路径
     * @param string $OutputPath 量化输出路径
     * @param integer $BatchSize 量化批大小
     * @param string $Precision 量化精度，支持：FP32，FP16，INT8
     * @param string $ConvertType 转换类型
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

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("ConvertType",$param) and $param["ConvertType"] !== null) {
            $this->ConvertType = $param["ConvertType"];
        }
    }
}
