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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEcdnDomainLogs请求参数结构体
 *
 * @method string getDomain() 获取待查询域名。
 * @method void setDomain(string $Domain) 设置待查询域名。
 * @method string getStartTime() 获取日志起始时间。如：2019-10-01 00:00:00
 * @method void setStartTime(string $StartTime) 设置日志起始时间。如：2019-10-01 00:00:00
 * @method string getEndTime() 获取日志结束时间，只支持最近30天内日志查询。2019-10-02 00:00:00
 * @method void setEndTime(string $EndTime) 设置日志结束时间，只支持最近30天内日志查询。2019-10-02 00:00:00
 * @method integer getOffset() 获取日志链接列表分页起始地址，默认0。
 * @method void setOffset(integer $Offset) 设置日志链接列表分页起始地址，默认0。
 * @method integer getLimit() 获取日志链接列表分页记录条数，默认100，最大1000。
 * @method void setLimit(integer $Limit) 设置日志链接列表分页记录条数，默认100，最大1000。
 */
class DescribeEcdnDomainLogsRequest extends AbstractModel
{
    /**
     * @var string 待查询域名。
     */
    public $Domain;

    /**
     * @var string 日志起始时间。如：2019-10-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string 日志结束时间，只支持最近30天内日志查询。2019-10-02 00:00:00
     */
    public $EndTime;

    /**
     * @var integer 日志链接列表分页起始地址，默认0。
     */
    public $Offset;

    /**
     * @var integer 日志链接列表分页记录条数，默认100，最大1000。
     */
    public $Limit;

    /**
     * @param string $Domain 待查询域名。
     * @param string $StartTime 日志起始时间。如：2019-10-01 00:00:00
     * @param string $EndTime 日志结束时间，只支持最近30天内日志查询。2019-10-02 00:00:00
     * @param integer $Offset 日志链接列表分页起始地址，默认0。
     * @param integer $Limit 日志链接列表分页记录条数，默认100，最大1000。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
