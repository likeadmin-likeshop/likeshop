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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCameraPerson返回参数结构体
 *
 * @method string getCompanyId() 获取集团id
 * @method void setCompanyId(string $CompanyId) 设置集团id
 * @method integer getShopId() 获取店铺id
 * @method void setShopId(integer $ShopId) 设置店铺id
 * @method integer getCameraId() 获取摄像机id
 * @method void setCameraId(integer $CameraId) 设置摄像机id
 * @method string getPosId() 获取pos机id
 * @method void setPosId(string $PosId) 设置pos机id
 * @method array getInfos() 获取抓取的顾客信息
 * @method void setInfos(array $Infos) 设置抓取的顾客信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCameraPersonResponse extends AbstractModel
{
    /**
     * @var string 集团id
     */
    public $CompanyId;

    /**
     * @var integer 店铺id
     */
    public $ShopId;

    /**
     * @var integer 摄像机id
     */
    public $CameraId;

    /**
     * @var string pos机id
     */
    public $PosId;

    /**
     * @var array 抓取的顾客信息
     */
    public $Infos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyId 集团id
     * @param integer $ShopId 店铺id
     * @param integer $CameraId 摄像机id
     * @param string $PosId pos机id
     * @param array $Infos 抓取的顾客信息
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("CameraId",$param) and $param["CameraId"] !== null) {
            $this->CameraId = $param["CameraId"];
        }

        if (array_key_exists("PosId",$param) and $param["PosId"] !== null) {
            $this->PosId = $param["PosId"];
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new CameraPersonInfo();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
