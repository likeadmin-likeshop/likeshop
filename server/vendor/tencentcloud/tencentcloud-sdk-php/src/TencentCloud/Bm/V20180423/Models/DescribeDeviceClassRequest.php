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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceClass请求参数结构体
 *
 * @method integer getOnSale() 获取是否仅查询在售标准机型配置信息。取值0：查询所有机型；1：查询在售机型。默认为1
 * @method void setOnSale(integer $OnSale) 设置是否仅查询在售标准机型配置信息。取值0：查询所有机型；1：查询在售机型。默认为1
 * @method integer getNeedPriceInfo() 获取是否返回价格信息。取值0：不返回价格信息，接口返回速度更快；1：返回价格信息。默认为1
 * @method void setNeedPriceInfo(integer $NeedPriceInfo) 设置是否返回价格信息。取值0：不返回价格信息，接口返回速度更快；1：返回价格信息。默认为1
 */
class DescribeDeviceClassRequest extends AbstractModel
{
    /**
     * @var integer 是否仅查询在售标准机型配置信息。取值0：查询所有机型；1：查询在售机型。默认为1
     */
    public $OnSale;

    /**
     * @var integer 是否返回价格信息。取值0：不返回价格信息，接口返回速度更快；1：返回价格信息。默认为1
     */
    public $NeedPriceInfo;

    /**
     * @param integer $OnSale 是否仅查询在售标准机型配置信息。取值0：查询所有机型；1：查询在售机型。默认为1
     * @param integer $NeedPriceInfo 是否返回价格信息。取值0：不返回价格信息，接口返回速度更快；1：返回价格信息。默认为1
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
        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("NeedPriceInfo",$param) and $param["NeedPriceInfo"] !== null) {
            $this->NeedPriceInfo = $param["NeedPriceInfo"];
        }
    }
}
