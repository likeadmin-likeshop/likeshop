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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFairPlayPem请求参数结构体
 *
 * @method integer getBailorId() 获取委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
 * @method void setBailorId(integer $BailorId) 设置委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
 * @method integer getFairPlayPemId() 获取要删除的pem id。
当未传入该值时，将删除所有的私钥。
 * @method void setFairPlayPemId(integer $FairPlayPemId) 设置要删除的pem id。
当未传入该值时，将删除所有的私钥。
 */
class DeleteFairPlayPemRequest extends AbstractModel
{
    /**
     * @var integer 委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
     */
    public $BailorId;

    /**
     * @var integer 要删除的pem id。
当未传入该值时，将删除所有的私钥。
     */
    public $FairPlayPemId;

    /**
     * @param integer $BailorId 委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
     * @param integer $FairPlayPemId 要删除的pem id。
当未传入该值时，将删除所有的私钥。
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
        if (array_key_exists("BailorId",$param) and $param["BailorId"] !== null) {
            $this->BailorId = $param["BailorId"];
        }

        if (array_key_exists("FairPlayPemId",$param) and $param["FairPlayPemId"] !== null) {
            $this->FairPlayPemId = $param["FairPlayPemId"];
        }
    }
}
