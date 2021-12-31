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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubscribe请求参数结构体
 *
 * @method string getProduct() 获取订阅的数据库类型，目前支持的有 mysql
 * @method void setProduct(string $Product) 设置订阅的数据库类型，目前支持的有 mysql
 * @method integer getPayType() 获取实例付费类型，1小时计费，0包年包月
 * @method void setPayType(integer $PayType) 设置实例付费类型，1小时计费，0包年包月
 * @method integer getDuration() 获取购买时长。PayType为0时必填。单位为月，最大支持120
 * @method void setDuration(integer $Duration) 设置购买时长。PayType为0时必填。单位为月，最大支持120
 * @method integer getCount() 获取购买数量,默认为1，最大为10
 * @method void setCount(integer $Count) 设置购买数量,默认为1，最大为10
 * @method integer getAutoRenew() 获取是否自动续费，默认为0，1表示自动续费。小时计费实例设置该标识无效。
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费，默认为0，1表示自动续费。小时计费实例设置该标识无效。
 * @method array getTags() 获取实例资源标签
 * @method void setTags(array $Tags) 设置实例资源标签
 */
class CreateSubscribeRequest extends AbstractModel
{
    /**
     * @var string 订阅的数据库类型，目前支持的有 mysql
     */
    public $Product;

    /**
     * @var integer 实例付费类型，1小时计费，0包年包月
     */
    public $PayType;

    /**
     * @var integer 购买时长。PayType为0时必填。单位为月，最大支持120
     */
    public $Duration;

    /**
     * @var integer 购买数量,默认为1，最大为10
     */
    public $Count;

    /**
     * @var integer 是否自动续费，默认为0，1表示自动续费。小时计费实例设置该标识无效。
     */
    public $AutoRenew;

    /**
     * @var array 实例资源标签
     */
    public $Tags;

    /**
     * @param string $Product 订阅的数据库类型，目前支持的有 mysql
     * @param integer $PayType 实例付费类型，1小时计费，0包年包月
     * @param integer $Duration 购买时长。PayType为0时必填。单位为月，最大支持120
     * @param integer $Count 购买数量,默认为1，最大为10
     * @param integer $AutoRenew 是否自动续费，默认为0，1表示自动续费。小时计费实例设置该标识无效。
     * @param array $Tags 实例资源标签
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
