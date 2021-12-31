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
 * DescribeFaceIdByTempId请求参数结构体
 *
 * @method string getCompanyId() 获取优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setCompanyId(string $CompanyId) 设置优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method integer getShopId() 获取优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setShopId(integer $ShopId) 设置优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
 * @method string getTempId() 获取临时id
 * @method void setTempId(string $TempId) 设置临时id
 * @method integer getCameraId() 获取摄像头id
 * @method void setCameraId(integer $CameraId) 设置摄像头id
 * @method string getPosId() 获取pos机id
 * @method void setPosId(string $PosId) 设置pos机id
 * @method integer getPictureExpires() 获取图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
 * @method void setPictureExpires(integer $PictureExpires) 设置图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
 */
class DescribeFaceIdByTempIdRequest extends AbstractModel
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
     * @var string 临时id
     */
    public $TempId;

    /**
     * @var integer 摄像头id
     */
    public $CameraId;

    /**
     * @var string pos机id
     */
    public $PosId;

    /**
     * @var integer 图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
     */
    public $PictureExpires;

    /**
     * @param string $CompanyId 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     * @param integer $ShopId 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
     * @param string $TempId 临时id
     * @param integer $CameraId 摄像头id
     * @param string $PosId pos机id
     * @param integer $PictureExpires 图片url过期时间：在当前时间+PictureExpires秒后，图片url无法继续正常访问；单位s；默认值1*24*60*60（1天）
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

        if (array_key_exists("TempId",$param) and $param["TempId"] !== null) {
            $this->TempId = $param["TempId"];
        }

        if (array_key_exists("CameraId",$param) and $param["CameraId"] !== null) {
            $this->CameraId = $param["CameraId"];
        }

        if (array_key_exists("PosId",$param) and $param["PosId"] !== null) {
            $this->PosId = $param["PosId"];
        }

        if (array_key_exists("PictureExpires",$param) and $param["PictureExpires"] !== null) {
            $this->PictureExpires = $param["PictureExpires"];
        }
    }
}
