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
 * DescribePersonInfoByFacePicture请求参数结构体
 *
 * @method string getCompanyId() 获取优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setCompanyId(string $CompanyId) 设置优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method integer getShopId() 获取优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setShopId(integer $ShopId) 设置优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
 * @method string getPicture() 获取人脸图片BASE编码
 * @method void setPicture(string $Picture) 设置人脸图片BASE编码
 */
class DescribePersonInfoByFacePictureRequest extends AbstractModel
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
     * @var string 人脸图片BASE编码
     */
    public $Picture;

    /**
     * @param string $CompanyId 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     * @param integer $ShopId 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取
     * @param string $Picture 人脸图片BASE编码
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

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }
    }
}
