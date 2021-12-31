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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportData返回参数结构体
 *
 * @method array getDomainReport() 获取域名维度数据详情
 * @method void setDomainReport(array $DomainReport) 设置域名维度数据详情
 * @method array getProjectReport() 获取项目维度数据详情
 * @method void setProjectReport(array $ProjectReport) 设置项目维度数据详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReportDataResponse extends AbstractModel
{
    /**
     * @var array 域名维度数据详情
     */
    public $DomainReport;

    /**
     * @var array 项目维度数据详情
     */
    public $ProjectReport;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DomainReport 域名维度数据详情
     * @param array $ProjectReport 项目维度数据详情
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DomainReport",$param) and $param["DomainReport"] !== null) {
            $this->DomainReport = [];
            foreach ($param["DomainReport"] as $key => $value){
                $obj = new ReportData();
                $obj->deserialize($value);
                array_push($this->DomainReport, $obj);
            }
        }

        if (array_key_exists("ProjectReport",$param) and $param["ProjectReport"] !== null) {
            $this->ProjectReport = [];
            foreach ($param["ProjectReport"] as $key => $value){
                $obj = new ReportData();
                $obj->deserialize($value);
                array_push($this->ProjectReport, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
