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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUnitApiUseDetail请求参数结构体
 *
 * @method string getGatewayDeployGroupId() 获取网关部署组ID
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置网关部署组ID
 * @method string getApiId() 获取网关分组Api ID
 * @method void setApiId(string $ApiId) 设置网关分组Api ID
 * @method string getStartTime() 获取查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method string getGatewayInstanceId() 获取网关实例ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实例ID
 * @method string getGroupId() 获取网关分组ID
 * @method void setGroupId(string $GroupId) 设置网关分组ID
 * @method integer getOffset() 获取翻页查询偏移量
 * @method void setOffset(integer $Offset) 设置翻页查询偏移量
 * @method integer getLimit() 获取翻页查询每页记录数
 * @method void setLimit(integer $Limit) 设置翻页查询每页记录数
 * @method integer getPeriod() 获取监控统计数据粒度
 * @method void setPeriod(integer $Period) 设置监控统计数据粒度
 */
class DescribeUnitApiUseDetailRequest extends AbstractModel
{
    /**
     * @var string 网关部署组ID
     */
    public $GatewayDeployGroupId;

    /**
     * @var string 网关分组Api ID
     */
    public $ApiId;

    /**
     * @var string 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string 网关实例ID
     */
    public $GatewayInstanceId;

    /**
     * @var string 网关分组ID
     */
    public $GroupId;

    /**
     * @var integer 翻页查询偏移量
     */
    public $Offset;

    /**
     * @var integer 翻页查询每页记录数
     */
    public $Limit;

    /**
     * @var integer 监控统计数据粒度
     */
    public $Period;

    /**
     * @param string $GatewayDeployGroupId 网关部署组ID
     * @param string $ApiId 网关分组Api ID
     * @param string $StartTime 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     * @param string $GatewayInstanceId 网关实例ID
     * @param string $GroupId 网关分组ID
     * @param integer $Offset 翻页查询偏移量
     * @param integer $Limit 翻页查询每页记录数
     * @param integer $Period 监控统计数据粒度
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
        if (array_key_exists("GatewayDeployGroupId",$param) and $param["GatewayDeployGroupId"] !== null) {
            $this->GatewayDeployGroupId = $param["GatewayDeployGroupId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
