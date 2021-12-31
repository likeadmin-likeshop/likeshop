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
 * 轨迹点坐标
 *
 * @method float getCADX() 获取CAD图X坐标
 * @method void setCADX(float $CADX) 设置CAD图X坐标
 * @method float getCADY() 获取CAD图Y坐标
 * @method void setCADY(float $CADY) 设置CAD图Y坐标
 * @method string getCapTime() 获取抓拍时间点
 * @method void setCapTime(string $CapTime) 设置抓拍时间点
 * @method string getCapPic() 获取抓拍图片
 * @method void setCapPic(string $CapPic) 设置抓拍图片
 * @method integer getMallAreaType() 获取卖场区域类型
 * @method void setMallAreaType(integer $MallAreaType) 设置卖场区域类型
 * @method integer getPosId() 获取坐标编号
 * @method void setPosId(integer $PosId) 设置坐标编号
 * @method integer getShopId() 获取门店编号
 * @method void setShopId(integer $ShopId) 设置门店编号
 * @method string getEvent() 获取事件
 * @method void setEvent(string $Event) 设置事件
 */
class PersonCoordinate extends AbstractModel
{
    /**
     * @var float CAD图X坐标
     */
    public $CADX;

    /**
     * @var float CAD图Y坐标
     */
    public $CADY;

    /**
     * @var string 抓拍时间点
     */
    public $CapTime;

    /**
     * @var string 抓拍图片
     */
    public $CapPic;

    /**
     * @var integer 卖场区域类型
     */
    public $MallAreaType;

    /**
     * @var integer 坐标编号
     */
    public $PosId;

    /**
     * @var integer 门店编号
     */
    public $ShopId;

    /**
     * @var string 事件
     */
    public $Event;

    /**
     * @param float $CADX CAD图X坐标
     * @param float $CADY CAD图Y坐标
     * @param string $CapTime 抓拍时间点
     * @param string $CapPic 抓拍图片
     * @param integer $MallAreaType 卖场区域类型
     * @param integer $PosId 坐标编号
     * @param integer $ShopId 门店编号
     * @param string $Event 事件
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
        if (array_key_exists("CADX",$param) and $param["CADX"] !== null) {
            $this->CADX = $param["CADX"];
        }

        if (array_key_exists("CADY",$param) and $param["CADY"] !== null) {
            $this->CADY = $param["CADY"];
        }

        if (array_key_exists("CapTime",$param) and $param["CapTime"] !== null) {
            $this->CapTime = $param["CapTime"];
        }

        if (array_key_exists("CapPic",$param) and $param["CapPic"] !== null) {
            $this->CapPic = $param["CapPic"];
        }

        if (array_key_exists("MallAreaType",$param) and $param["MallAreaType"] !== null) {
            $this->MallAreaType = $param["MallAreaType"];
        }

        if (array_key_exists("PosId",$param) and $param["PosId"] !== null) {
            $this->PosId = $param["PosId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }
    }
}
