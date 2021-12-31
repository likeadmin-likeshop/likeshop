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
 * DescribePlayErrorCodeSumInfoList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
 * @method void setEndTime(string $EndTime) 设置结束时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
 * @method array getPlayDomains() 获取播放域名列表，不填表示总体数据。
 * @method void setPlayDomains(array $PlayDomains) 设置播放域名列表，不填表示总体数据。
 * @method integer getPageNum() 获取页数，范围[1,1000]，默认值是1。
 * @method void setPageNum(integer $PageNum) 设置页数，范围[1,1000]，默认值是1。
 * @method integer getPageSize() 获取每页个数，范围：[1,1000]，默认值是20。
 * @method void setPageSize(integer $PageSize) 设置每页个数，范围：[1,1000]，默认值是20。
 * @method string getMainlandOrOversea() 获取地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
 * @method string getGroupType() 获取分组参数，可选值：CountryProIsp（默认值），Country（国家），默认是按照国家+省份+运营商来进行分组；目前国外的省份和运营商暂时无法识别。
 * @method void setGroupType(string $GroupType) 设置分组参数，可选值：CountryProIsp（默认值），Country（国家），默认是按照国家+省份+运营商来进行分组；目前国外的省份和运营商暂时无法识别。
 * @method string getOutLanguage() 获取输出字段使用的语言，可选值：Chinese（默认值），English，目前国家，省份和运营商支持多语言。
 * @method void setOutLanguage(string $OutLanguage) 设置输出字段使用的语言，可选值：Chinese（默认值），English，目前国家，省份和运营商支持多语言。
 */
class DescribePlayErrorCodeSumInfoListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
     */
    public $EndTime;

    /**
     * @var array 播放域名列表，不填表示总体数据。
     */
    public $PlayDomains;

    /**
     * @var integer 页数，范围[1,1000]，默认值是1。
     */
    public $PageNum;

    /**
     * @var integer 每页个数，范围：[1,1000]，默认值是20。
     */
    public $PageSize;

    /**
     * @var string 地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
     */
    public $MainlandOrOversea;

    /**
     * @var string 分组参数，可选值：CountryProIsp（默认值），Country（国家），默认是按照国家+省份+运营商来进行分组；目前国外的省份和运营商暂时无法识别。
     */
    public $GroupType;

    /**
     * @var string 输出字段使用的语言，可选值：Chinese（默认值），English，目前国家，省份和运营商支持多语言。
     */
    public $OutLanguage;

    /**
     * @param string $StartTime 起始时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间点，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
     * @param array $PlayDomains 播放域名列表，不填表示总体数据。
     * @param integer $PageNum 页数，范围[1,1000]，默认值是1。
     * @param integer $PageSize 每页个数，范围：[1,1000]，默认值是20。
     * @param string $MainlandOrOversea 地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
     * @param string $GroupType 分组参数，可选值：CountryProIsp（默认值），Country（国家），默认是按照国家+省份+运营商来进行分组；目前国外的省份和运营商暂时无法识别。
     * @param string $OutLanguage 输出字段使用的语言，可选值：Chinese（默认值），English，目前国家，省份和运营商支持多语言。
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

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("OutLanguage",$param) and $param["OutLanguage"] !== null) {
            $this->OutLanguage = $param["OutLanguage"];
        }
    }
}
