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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点位包含店门标注
 *
 * @method integer getZoneId() 获取点位ID
 * @method void setZoneId(integer $ZoneId) 设置点位ID
 * @method array getShopArea() 获取店门标注
 * @method void setShopArea(array $ShopArea) 设置店门标注
 */
class ZoneArea extends AbstractModel
{
    /**
     * @var integer 点位ID
     */
    public $ZoneId;

    /**
     * @var array 店门标注
     */
    public $ShopArea;

    /**
     * @param integer $ZoneId 点位ID
     * @param array $ShopArea 店门标注
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ShopArea",$param) and $param["ShopArea"] !== null) {
            $this->ShopArea = [];
            foreach ($param["ShopArea"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->ShopArea, $obj);
            }
        }
    }
}
