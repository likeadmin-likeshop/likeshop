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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEvents请求参数结构体
 *
 * @method integer getStartTime() 获取起始时间戳（单位秒，不超过当前时间 90 天）
 * @method void setStartTime(integer $StartTime) 设置起始时间戳（单位秒，不超过当前时间 90 天）
 * @method integer getEndTime() 获取结束时间戳（单位秒，查询时间跨度小于 30 天）
 * @method void setEndTime(integer $EndTime) 设置结束时间戳（单位秒，查询时间跨度小于 30 天）
 * @method integer getNextToken() 获取查看更多日志的凭证
 * @method void setNextToken(integer $NextToken) 设置查看更多日志的凭证
 * @method integer getMaxResults() 获取返回日志的最大条数（最大 50 条）
 * @method void setMaxResults(integer $MaxResults) 设置返回日志的最大条数（最大 50 条）
 * @method array getLookupAttributes() 获取检索条件（目前支持 RequestId：请求 ID、EventName：事件名称、ActionType：操作类型（Write：写；Read：读）、PrincipalId：子账号、ResourceType：资源类型、ResourceName：资源名称、AccessKeyId：密钥 ID、SensitiveAction：是否敏感操作、ApiErrorCode：API 错误码、CamErrorCode：CAM 错误码）
 * @method void setLookupAttributes(array $LookupAttributes) 设置检索条件（目前支持 RequestId：请求 ID、EventName：事件名称、ActionType：操作类型（Write：写；Read：读）、PrincipalId：子账号、ResourceType：资源类型、ResourceName：资源名称、AccessKeyId：密钥 ID、SensitiveAction：是否敏感操作、ApiErrorCode：API 错误码、CamErrorCode：CAM 错误码）
 * @method integer getIsReturnLocation() 获取是否返回 IP 归属地（1 返回，0 不返回）
 * @method void setIsReturnLocation(integer $IsReturnLocation) 设置是否返回 IP 归属地（1 返回，0 不返回）
 */
class DescribeEventsRequest extends AbstractModel
{
    /**
     * @var integer 起始时间戳（单位秒，不超过当前时间 90 天）
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳（单位秒，查询时间跨度小于 30 天）
     */
    public $EndTime;

    /**
     * @var integer 查看更多日志的凭证
     */
    public $NextToken;

    /**
     * @var integer 返回日志的最大条数（最大 50 条）
     */
    public $MaxResults;

    /**
     * @var array 检索条件（目前支持 RequestId：请求 ID、EventName：事件名称、ActionType：操作类型（Write：写；Read：读）、PrincipalId：子账号、ResourceType：资源类型、ResourceName：资源名称、AccessKeyId：密钥 ID、SensitiveAction：是否敏感操作、ApiErrorCode：API 错误码、CamErrorCode：CAM 错误码）
     */
    public $LookupAttributes;

    /**
     * @var integer 是否返回 IP 归属地（1 返回，0 不返回）
     */
    public $IsReturnLocation;

    /**
     * @param integer $StartTime 起始时间戳（单位秒，不超过当前时间 90 天）
     * @param integer $EndTime 结束时间戳（单位秒，查询时间跨度小于 30 天）
     * @param integer $NextToken 查看更多日志的凭证
     * @param integer $MaxResults 返回日志的最大条数（最大 50 条）
     * @param array $LookupAttributes 检索条件（目前支持 RequestId：请求 ID、EventName：事件名称、ActionType：操作类型（Write：写；Read：读）、PrincipalId：子账号、ResourceType：资源类型、ResourceName：资源名称、AccessKeyId：密钥 ID、SensitiveAction：是否敏感操作、ApiErrorCode：API 错误码、CamErrorCode：CAM 错误码）
     * @param integer $IsReturnLocation 是否返回 IP 归属地（1 返回，0 不返回）
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

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("LookupAttributes",$param) and $param["LookupAttributes"] !== null) {
            $this->LookupAttributes = [];
            foreach ($param["LookupAttributes"] as $key => $value){
                $obj = new LookupAttribute();
                $obj->deserialize($value);
                array_push($this->LookupAttributes, $obj);
            }
        }

        if (array_key_exists("IsReturnLocation",$param) and $param["IsReturnLocation"] !== null) {
            $this->IsReturnLocation = $param["IsReturnLocation"];
        }
    }
}
