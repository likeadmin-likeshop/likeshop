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
 * DescribeApiUseDetail请求参数结构体
 *
 * @method string getGatewayDeployGroupId() 获取网关部署组ID
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置网关部署组ID
 * @method string getApiId() 获取网关分组Api ID
 * @method void setApiId(string $ApiId) 设置网关分组Api ID
 * @method string getStartTime() 获取查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取查询的日期,格式：yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置查询的日期,格式：yyyy-MM-dd HH:mm:ss
 */
class DescribeApiUseDetailRequest extends AbstractModel
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
     * @param string $GatewayDeployGroupId 网关部署组ID
     * @param string $ApiId 网关分组Api ID
     * @param string $StartTime 查询的日期,格式：yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 查询的日期,格式：yyyy-MM-dd HH:mm:ss
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
    }
}
