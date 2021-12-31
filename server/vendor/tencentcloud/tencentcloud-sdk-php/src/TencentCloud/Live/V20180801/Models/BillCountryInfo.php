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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 海外分区直播带宽出参国家带宽信息
 *
 * @method string getName() 获取国家名称
 * @method void setName(string $Name) 设置国家名称
 * @method array getBandInfoList() 获取带宽明细数据信息。
 * @method void setBandInfoList(array $BandInfoList) 设置带宽明细数据信息。
 */
class BillCountryInfo extends AbstractModel
{
    /**
     * @var string 国家名称
     */
    public $Name;

    /**
     * @var array 带宽明细数据信息。
     */
    public $BandInfoList;

    /**
     * @param string $Name 国家名称
     * @param array $BandInfoList 带宽明细数据信息。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BandInfoList",$param) and $param["BandInfoList"] !== null) {
            $this->BandInfoList = [];
            foreach ($param["BandInfoList"] as $key => $value){
                $obj = new BillDataInfo();
                $obj->deserialize($value);
                array_push($this->BandInfoList, $obj);
            }
        }
    }
}
