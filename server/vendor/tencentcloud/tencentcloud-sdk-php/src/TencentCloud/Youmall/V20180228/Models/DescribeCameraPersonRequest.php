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
 * DescribeCameraPerson请求参数结构体
 *
 * @method string getCompanyId() 获取优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setCompanyId(string $CompanyId) 设置优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method integer getShopId() 获取优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setShopId(integer $ShopId) 设置优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
 * @method integer getCameraId() 获取摄像头id
 * @method void setCameraId(integer $CameraId) 设置摄像头id
 * @method integer getStartTime() 获取拉取开始时间戳，单位秒
 * @method void setStartTime(integer $StartTime) 设置拉取开始时间戳，单位秒
 * @method integer getEndTime() 获取拉取结束时间戳，单位秒，不超过StartTime+10秒，超过默认为StartTime+10
 * @method void setEndTime(integer $EndTime) 设置拉取结束时间戳，单位秒，不超过StartTime+10秒，超过默认为StartTime+10
 * @method string getPosId() 获取pos机id
 * @method void setPosId(string $PosId) 设置pos机id
 * @method integer getNum() 获取拉取图片数，默认为1，最大为3
 * @method void setNum(integer $Num) 设置拉取图片数，默认为1，最大为3
 * @method integer getIsNeedPic() 获取是否需要base64的图片，0-不需要，1-需要，默认0
 * @method void setIsNeedPic(integer $IsNeedPic) 设置是否需要base64的图片，0-不需要，1-需要，默认0
 */
class DescribeCameraPersonRequest extends AbstractModel
{
    /**
     * @var string 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     */
    public $CompanyId;

    /**
     * @var integer 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
     */
    public $ShopId;

    /**
     * @var integer 摄像头id
     */
    public $CameraId;

    /**
     * @var integer 拉取开始时间戳，单位秒
     */
    public $StartTime;

    /**
     * @var integer 拉取结束时间戳，单位秒，不超过StartTime+10秒，超过默认为StartTime+10
     */
    public $EndTime;

    /**
     * @var string pos机id
     */
    public $PosId;

    /**
     * @var integer 拉取图片数，默认为1，最大为3
     */
    public $Num;

    /**
     * @var integer 是否需要base64的图片，0-不需要，1-需要，默认0
     */
    public $IsNeedPic;

    /**
     * @param string $CompanyId 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     * @param integer $ShopId 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
     * @param integer $CameraId 摄像头id
     * @param integer $StartTime 拉取开始时间戳，单位秒
     * @param integer $EndTime 拉取结束时间戳，单位秒，不超过StartTime+10秒，超过默认为StartTime+10
     * @param string $PosId pos机id
     * @param integer $Num 拉取图片数，默认为1，最大为3
     * @param integer $IsNeedPic 是否需要base64的图片，0-不需要，1-需要，默认0
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PosId",$param) and $param["PosId"] !== null) {
            $this->PosId = $param["PosId"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("IsNeedPic",$param) and $param["IsNeedPic"] !== null) {
            $this->IsNeedPic = $param["IsNeedPic"];
        }
    }
}
