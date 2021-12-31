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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrace返回参数结构体
 *
 * @method string getTraceId() 获取人员轨迹唯一标识。
 * @method void setTraceId(string $TraceId) 设置人员轨迹唯一标识。
 * @method string getBodyModelVersion() 获取人体识别所用的算法模型版本。
 * @method void setBodyModelVersion(string $BodyModelVersion) 设置人体识别所用的算法模型版本。
 * @method integer getInputRetCode() 获取输入的人体轨迹图片中的合法性校验结果。
只有为0时结果才有意义。
-1001: 输入图片不合法。-1002: 输入图片不能构成轨迹。
 * @method void setInputRetCode(integer $InputRetCode) 设置输入的人体轨迹图片中的合法性校验结果。
只有为0时结果才有意义。
-1001: 输入图片不合法。-1002: 输入图片不能构成轨迹。
 * @method array getInputRetCodeDetails() 获取输入的人体轨迹图片中的合法性校验结果详情。 
-1101:图片无效，-1102:url不合法。-1103:图片过大。-1104:图片下载失败。-1105:图片解码失败。-1109:图片分辨率过高。-2023:轨迹中有非同人图片。-2024: 轨迹提取失败。-2025: 人体检测失败。
 * @method void setInputRetCodeDetails(array $InputRetCodeDetails) 设置输入的人体轨迹图片中的合法性校验结果详情。 
-1101:图片无效，-1102:url不合法。-1103:图片过大。-1104:图片下载失败。-1105:图片解码失败。-1109:图片分辨率过高。-2023:轨迹中有非同人图片。-2024: 轨迹提取失败。-2025: 人体检测失败。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateTraceResponse extends AbstractModel
{
    /**
     * @var string 人员轨迹唯一标识。
     */
    public $TraceId;

    /**
     * @var string 人体识别所用的算法模型版本。
     */
    public $BodyModelVersion;

    /**
     * @var integer 输入的人体轨迹图片中的合法性校验结果。
只有为0时结果才有意义。
-1001: 输入图片不合法。-1002: 输入图片不能构成轨迹。
     */
    public $InputRetCode;

    /**
     * @var array 输入的人体轨迹图片中的合法性校验结果详情。 
-1101:图片无效，-1102:url不合法。-1103:图片过大。-1104:图片下载失败。-1105:图片解码失败。-1109:图片分辨率过高。-2023:轨迹中有非同人图片。-2024: 轨迹提取失败。-2025: 人体检测失败。
     */
    public $InputRetCodeDetails;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TraceId 人员轨迹唯一标识。
     * @param string $BodyModelVersion 人体识别所用的算法模型版本。
     * @param integer $InputRetCode 输入的人体轨迹图片中的合法性校验结果。
只有为0时结果才有意义。
-1001: 输入图片不合法。-1002: 输入图片不能构成轨迹。
     * @param array $InputRetCodeDetails 输入的人体轨迹图片中的合法性校验结果详情。 
-1101:图片无效，-1102:url不合法。-1103:图片过大。-1104:图片下载失败。-1105:图片解码失败。-1109:图片分辨率过高。-2023:轨迹中有非同人图片。-2024: 轨迹提取失败。-2025: 人体检测失败。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("BodyModelVersion",$param) and $param["BodyModelVersion"] !== null) {
            $this->BodyModelVersion = $param["BodyModelVersion"];
        }

        if (array_key_exists("InputRetCode",$param) and $param["InputRetCode"] !== null) {
            $this->InputRetCode = $param["InputRetCode"];
        }

        if (array_key_exists("InputRetCodeDetails",$param) and $param["InputRetCodeDetails"] !== null) {
            $this->InputRetCodeDetails = $param["InputRetCodeDetails"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
