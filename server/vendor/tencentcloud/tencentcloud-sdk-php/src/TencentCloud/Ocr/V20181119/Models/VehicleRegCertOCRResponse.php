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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VehicleRegCertOCR返回参数结构体
 *
 * @method array getVehicleRegCertInfos() 获取机动车登记证书识别结果，具体内容请点击左侧链接。
 * @method void setVehicleRegCertInfos(array $VehicleRegCertInfos) 设置机动车登记证书识别结果，具体内容请点击左侧链接。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VehicleRegCertOCRResponse extends AbstractModel
{
    /**
     * @var array 机动车登记证书识别结果，具体内容请点击左侧链接。
     */
    public $VehicleRegCertInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $VehicleRegCertInfos 机动车登记证书识别结果，具体内容请点击左侧链接。
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
        if (array_key_exists("VehicleRegCertInfos",$param) and $param["VehicleRegCertInfos"] !== null) {
            $this->VehicleRegCertInfos = [];
            foreach ($param["VehicleRegCertInfos"] as $key => $value){
                $obj = new VehicleRegCertInfo();
                $obj->deserialize($value);
                array_push($this->VehicleRegCertInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
