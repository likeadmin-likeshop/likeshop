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
 * DescribeGroupProIspPlayInfoList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在（0,3小时]，支持最近1个月数据查询。
 * @method void setEndTime(string $EndTime) 设置结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在（0,3小时]，支持最近1个月数据查询。
 * @method array getPlayDomains() 获取播放域名，默认为不填，表示求总体数据。
 * @method void setPlayDomains(array $PlayDomains) 设置播放域名，默认为不填，表示求总体数据。
 * @method array getProvinceNames() 获取省份列表，默认不填，则返回各省份的数据。
 * @method void setProvinceNames(array $ProvinceNames) 设置省份列表，默认不填，则返回各省份的数据。
 * @method array getIspNames() 获取运营商列表，默认不填，则返回整个运营商的数据。
 * @method void setIspNames(array $IspNames) 设置运营商列表，默认不填，则返回整个运营商的数据。
 * @method string getMainlandOrOversea() 获取国内还是国外，如果为空，查询所有地区数据；如果为“Mainland”，查询国内数据；如果为“Oversea”，则查询国外数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置国内还是国外，如果为空，查询所有地区数据；如果为“Mainland”，查询国内数据；如果为“Oversea”，则查询国外数据。
 */
class DescribeGroupProIspPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在（0,3小时]，支持最近1个月数据查询。
     */
    public $EndTime;

    /**
     * @var array 播放域名，默认为不填，表示求总体数据。
     */
    public $PlayDomains;

    /**
     * @var array 省份列表，默认不填，则返回各省份的数据。
     */
    public $ProvinceNames;

    /**
     * @var array 运营商列表，默认不填，则返回整个运营商的数据。
     */
    public $IspNames;

    /**
     * @var string 国内还是国外，如果为空，查询所有地区数据；如果为“Mainland”，查询国内数据；如果为“Oversea”，则查询国外数据。
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在（0,3小时]，支持最近1个月数据查询。
     * @param array $PlayDomains 播放域名，默认为不填，表示求总体数据。
     * @param array $ProvinceNames 省份列表，默认不填，则返回各省份的数据。
     * @param array $IspNames 运营商列表，默认不填，则返回整个运营商的数据。
     * @param string $MainlandOrOversea 国内还是国外，如果为空，查询所有地区数据；如果为“Mainland”，查询国内数据；如果为“Oversea”，则查询国外数据。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("ProvinceNames",$param) and $param["ProvinceNames"] !== null) {
            $this->ProvinceNames = $param["ProvinceNames"];
        }

        if (array_key_exists("IspNames",$param) and $param["IspNames"] !== null) {
            $this->IspNames = $param["IspNames"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
