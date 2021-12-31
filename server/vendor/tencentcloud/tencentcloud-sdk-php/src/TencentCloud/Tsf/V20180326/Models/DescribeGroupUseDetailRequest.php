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
 * DescribeGroupUseDetail请求参数结构体
 *
 * @method string getGatewayDeployGroupId() 获取网关部署组ID
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置网关部署组ID
 * @method string getGroupId() 获取网关分组ID
 * @method void setGroupId(string $GroupId) 设置网关分组ID
 * @method string getStartTime() 获取查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method integer getCount() 获取指定top的条数,默认为10
 * @method void setCount(integer $Count) 设置指定top的条数,默认为10
 */
class DescribeGroupUseDetailRequest extends AbstractModel
{
    /**
     * @var string 网关部署组ID
     */
    public $GatewayDeployGroupId;

    /**
     * @var string 网关分组ID
     */
    public $GroupId;

    /**
     * @var string 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 指定top的条数,默认为10
     */
    public $Count;

    /**
     * @param string $GatewayDeployGroupId 网关部署组ID
     * @param string $GroupId 网关分组ID
     * @param string $StartTime 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     * @param integer $Count 指定top的条数,默认为10
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
