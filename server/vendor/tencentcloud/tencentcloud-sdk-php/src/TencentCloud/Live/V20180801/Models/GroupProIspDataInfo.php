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
 * 某省份某运营商在某段时间内的带宽，流量，请求数和并发数
 *
 * @method string getProvinceName() 获取省份。
 * @method void setProvinceName(string $ProvinceName) 设置省份。
 * @method string getIspName() 获取运营商。
 * @method void setIspName(string $IspName) 设置运营商。
 * @method array getDetailInfoList() 获取分钟维度的明细数据。
 * @method void setDetailInfoList(array $DetailInfoList) 设置分钟维度的明细数据。
 */
class GroupProIspDataInfo extends AbstractModel
{
    /**
     * @var string 省份。
     */
    public $ProvinceName;

    /**
     * @var string 运营商。
     */
    public $IspName;

    /**
     * @var array 分钟维度的明细数据。
     */
    public $DetailInfoList;

    /**
     * @param string $ProvinceName 省份。
     * @param string $IspName 运营商。
     * @param array $DetailInfoList 分钟维度的明细数据。
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
        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("DetailInfoList",$param) and $param["DetailInfoList"] !== null) {
            $this->DetailInfoList = [];
            foreach ($param["DetailInfoList"] as $key => $value){
                $obj = new CdnPlayStatData();
                $obj->deserialize($value);
                array_push($this->DetailInfoList, $obj);
            }
        }
    }
}
