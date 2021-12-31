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
 * DescribeLiveStreamEventList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间。 
UTC 格式，例如：2018-12-29T19:00:00Z。
支持查询60天内的历史记录。
 * @method void setStartTime(string $StartTime) 设置起始时间。 
UTC 格式，例如：2018-12-29T19:00:00Z。
支持查询60天内的历史记录。
 * @method string getEndTime() 获取结束时间。
UTC 格式，例如：2018-12-29T20:00:00Z。
不超过当前时间，且和起始时间相差不得超过30天。
 * @method void setEndTime(string $EndTime) 设置结束时间。
UTC 格式，例如：2018-12-29T20:00:00Z。
不超过当前时间，且和起始时间相差不得超过30天。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getStreamName() 获取流名称，不支持通配符（*）查询，默认模糊匹配。
可使用IsStrict字段改为精确查询。
 * @method void setStreamName(string $StreamName) 设置流名称，不支持通配符（*）查询，默认模糊匹配。
可使用IsStrict字段改为精确查询。
 * @method integer getPageNum() 获取取得第几页。
默认值：1。
注： 目前只支持10000条内的查询。
 * @method void setPageNum(integer $PageNum) 设置取得第几页。
默认值：1。
注： 目前只支持10000条内的查询。
 * @method integer getPageSize() 获取分页大小。
最大值：100。
取值范围：1~100 之间的任意整数。
默认值：10。
注： 目前只支持10000条内的查询。
 * @method void setPageSize(integer $PageSize) 设置分页大小。
最大值：100。
取值范围：1~100 之间的任意整数。
默认值：10。
注： 目前只支持10000条内的查询。
 * @method integer getIsFilter() 获取是否过滤，默认不过滤。
0：不进行任何过滤。
1：过滤掉开播失败的，只返回开播成功的。
 * @method void setIsFilter(integer $IsFilter) 设置是否过滤，默认不过滤。
0：不进行任何过滤。
1：过滤掉开播失败的，只返回开播成功的。
 * @method integer getIsStrict() 获取是否精确查询，默认模糊匹配。
0：模糊匹配。
1：精确查询。
注：使用StreamName时该参数生效。
 * @method void setIsStrict(integer $IsStrict) 设置是否精确查询，默认模糊匹配。
0：模糊匹配。
1：精确查询。
注：使用StreamName时该参数生效。
 * @method integer getIsAsc() 获取是否按结束时间正序显示，默认逆序。
0：逆序。
1：正序。
 * @method void setIsAsc(integer $IsAsc) 设置是否按结束时间正序显示，默认逆序。
0：逆序。
1：正序。
 */
class DescribeLiveStreamEventListRequest extends AbstractModel
{
    /**
     * @var string 起始时间。 
UTC 格式，例如：2018-12-29T19:00:00Z。
支持查询60天内的历史记录。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
UTC 格式，例如：2018-12-29T20:00:00Z。
不超过当前时间，且和起始时间相差不得超过30天。
     */
    public $EndTime;

    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 流名称，不支持通配符（*）查询，默认模糊匹配。
可使用IsStrict字段改为精确查询。
     */
    public $StreamName;

    /**
     * @var integer 取得第几页。
默认值：1。
注： 目前只支持10000条内的查询。
     */
    public $PageNum;

    /**
     * @var integer 分页大小。
最大值：100。
取值范围：1~100 之间的任意整数。
默认值：10。
注： 目前只支持10000条内的查询。
     */
    public $PageSize;

    /**
     * @var integer 是否过滤，默认不过滤。
0：不进行任何过滤。
1：过滤掉开播失败的，只返回开播成功的。
     */
    public $IsFilter;

    /**
     * @var integer 是否精确查询，默认模糊匹配。
0：模糊匹配。
1：精确查询。
注：使用StreamName时该参数生效。
     */
    public $IsStrict;

    /**
     * @var integer 是否按结束时间正序显示，默认逆序。
0：逆序。
1：正序。
     */
    public $IsAsc;

    /**
     * @param string $StartTime 起始时间。 
UTC 格式，例如：2018-12-29T19:00:00Z。
支持查询60天内的历史记录。
     * @param string $EndTime 结束时间。
UTC 格式，例如：2018-12-29T20:00:00Z。
不超过当前时间，且和起始时间相差不得超过30天。
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     * @param string $DomainName 推流域名。
     * @param string $StreamName 流名称，不支持通配符（*）查询，默认模糊匹配。
可使用IsStrict字段改为精确查询。
     * @param integer $PageNum 取得第几页。
默认值：1。
注： 目前只支持10000条内的查询。
     * @param integer $PageSize 分页大小。
最大值：100。
取值范围：1~100 之间的任意整数。
默认值：10。
注： 目前只支持10000条内的查询。
     * @param integer $IsFilter 是否过滤，默认不过滤。
0：不进行任何过滤。
1：过滤掉开播失败的，只返回开播成功的。
     * @param integer $IsStrict 是否精确查询，默认模糊匹配。
0：模糊匹配。
1：精确查询。
注：使用StreamName时该参数生效。
     * @param integer $IsAsc 是否按结束时间正序显示，默认逆序。
0：逆序。
1：正序。
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("IsFilter",$param) and $param["IsFilter"] !== null) {
            $this->IsFilter = $param["IsFilter"];
        }

        if (array_key_exists("IsStrict",$param) and $param["IsStrict"] !== null) {
            $this->IsStrict = $param["IsStrict"];
        }

        if (array_key_exists("IsAsc",$param) and $param["IsAsc"] !== null) {
            $this->IsAsc = $param["IsAsc"];
        }
    }
}
