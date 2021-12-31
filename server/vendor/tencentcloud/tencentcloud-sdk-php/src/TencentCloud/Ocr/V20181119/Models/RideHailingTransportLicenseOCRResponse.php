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
 * RideHailingTransportLicenseOCR返回参数结构体
 *
 * @method string getOperationLicenseNumber() 获取交运管许可字号。
 * @method void setOperationLicenseNumber(string $OperationLicenseNumber) 设置交运管许可字号。
 * @method string getVehicleOwner() 获取车辆所有人，对应网约车运输证字段：车辆所有人/车主名称/业户名称。
 * @method void setVehicleOwner(string $VehicleOwner) 设置车辆所有人，对应网约车运输证字段：车辆所有人/车主名称/业户名称。
 * @method string getVehicleNumber() 获取车牌号码，对应网约车运输证字段：车牌号码/车辆号牌。
 * @method void setVehicleNumber(string $VehicleNumber) 设置车牌号码，对应网约车运输证字段：车牌号码/车辆号牌。
 * @method string getStartDate() 获取有效起始日期。
 * @method void setStartDate(string $StartDate) 设置有效起始日期。
 * @method string getEndDate() 获取有效期截止时间，对应网约车运输证字段：有效期至/营运期限止。
 * @method void setEndDate(string $EndDate) 设置有效期截止时间，对应网约车运输证字段：有效期至/营运期限止。
 * @method string getReleaseDate() 获取初始发证日期，对应网约车运输证字段：初始领证日期/发证日期。
 * @method void setReleaseDate(string $ReleaseDate) 设置初始发证日期，对应网约车运输证字段：初始领证日期/发证日期。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RideHailingTransportLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string 交运管许可字号。
     */
    public $OperationLicenseNumber;

    /**
     * @var string 车辆所有人，对应网约车运输证字段：车辆所有人/车主名称/业户名称。
     */
    public $VehicleOwner;

    /**
     * @var string 车牌号码，对应网约车运输证字段：车牌号码/车辆号牌。
     */
    public $VehicleNumber;

    /**
     * @var string 有效起始日期。
     */
    public $StartDate;

    /**
     * @var string 有效期截止时间，对应网约车运输证字段：有效期至/营运期限止。
     */
    public $EndDate;

    /**
     * @var string 初始发证日期，对应网约车运输证字段：初始领证日期/发证日期。
     */
    public $ReleaseDate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OperationLicenseNumber 交运管许可字号。
     * @param string $VehicleOwner 车辆所有人，对应网约车运输证字段：车辆所有人/车主名称/业户名称。
     * @param string $VehicleNumber 车牌号码，对应网约车运输证字段：车牌号码/车辆号牌。
     * @param string $StartDate 有效起始日期。
     * @param string $EndDate 有效期截止时间，对应网约车运输证字段：有效期至/营运期限止。
     * @param string $ReleaseDate 初始发证日期，对应网约车运输证字段：初始领证日期/发证日期。
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
        if (array_key_exists("OperationLicenseNumber",$param) and $param["OperationLicenseNumber"] !== null) {
            $this->OperationLicenseNumber = $param["OperationLicenseNumber"];
        }

        if (array_key_exists("VehicleOwner",$param) and $param["VehicleOwner"] !== null) {
            $this->VehicleOwner = $param["VehicleOwner"];
        }

        if (array_key_exists("VehicleNumber",$param) and $param["VehicleNumber"] !== null) {
            $this->VehicleNumber = $param["VehicleNumber"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ReleaseDate",$param) and $param["ReleaseDate"] !== null) {
            $this->ReleaseDate = $param["ReleaseDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
