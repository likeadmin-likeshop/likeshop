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
 * 客户轨迹点
 *
 * @method integer getMallAreaId() 获取卖场区域编码
 * @method void setMallAreaId(integer $MallAreaId) 设置卖场区域编码
 * @method integer getShopId() 获取门店编码
 * @method void setShopId(integer $ShopId) 设置门店编码
 * @method integer getMallAreaType() 获取卖场区域类型
 * @method void setMallAreaType(integer $MallAreaType) 设置卖场区域类型
 * @method integer getTraceEventType() 获取轨迹事件
 * @method void setTraceEventType(integer $TraceEventType) 设置轨迹事件
 * @method string getTraceEventTime() 获取轨迹事件发生时间点
 * @method void setTraceEventTime(string $TraceEventTime) 设置轨迹事件发生时间点
 * @method string getCapPic() 获取抓拍图片
 * @method void setCapPic(string $CapPic) 设置抓拍图片
 * @method integer getShoppingBagType() 获取购物袋类型
 * @method void setShoppingBagType(integer $ShoppingBagType) 设置购物袋类型
 * @method integer getShoppingBagCount() 获取购物袋数量
 * @method void setShoppingBagCount(integer $ShoppingBagCount) 设置购物袋数量
 */
class PersonTracePoint extends AbstractModel
{
    /**
     * @var integer 卖场区域编码
     */
    public $MallAreaId;

    /**
     * @var integer 门店编码
     */
    public $ShopId;

    /**
     * @var integer 卖场区域类型
     */
    public $MallAreaType;

    /**
     * @var integer 轨迹事件
     */
    public $TraceEventType;

    /**
     * @var string 轨迹事件发生时间点
     */
    public $TraceEventTime;

    /**
     * @var string 抓拍图片
     */
    public $CapPic;

    /**
     * @var integer 购物袋类型
     */
    public $ShoppingBagType;

    /**
     * @var integer 购物袋数量
     */
    public $ShoppingBagCount;

    /**
     * @param integer $MallAreaId 卖场区域编码
     * @param integer $ShopId 门店编码
     * @param integer $MallAreaType 卖场区域类型
     * @param integer $TraceEventType 轨迹事件
     * @param string $TraceEventTime 轨迹事件发生时间点
     * @param string $CapPic 抓拍图片
     * @param integer $ShoppingBagType 购物袋类型
     * @param integer $ShoppingBagCount 购物袋数量
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
        if (array_key_exists("MallAreaId",$param) and $param["MallAreaId"] !== null) {
            $this->MallAreaId = $param["MallAreaId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("MallAreaType",$param) and $param["MallAreaType"] !== null) {
            $this->MallAreaType = $param["MallAreaType"];
        }

        if (array_key_exists("TraceEventType",$param) and $param["TraceEventType"] !== null) {
            $this->TraceEventType = $param["TraceEventType"];
        }

        if (array_key_exists("TraceEventTime",$param) and $param["TraceEventTime"] !== null) {
            $this->TraceEventTime = $param["TraceEventTime"];
        }

        if (array_key_exists("CapPic",$param) and $param["CapPic"] !== null) {
            $this->CapPic = $param["CapPic"];
        }

        if (array_key_exists("ShoppingBagType",$param) and $param["ShoppingBagType"] !== null) {
            $this->ShoppingBagType = $param["ShoppingBagType"];
        }

        if (array_key_exists("ShoppingBagCount",$param) and $param["ShoppingBagCount"] !== null) {
            $this->ShoppingBagCount = $param["ShoppingBagCount"];
        }
    }
}
