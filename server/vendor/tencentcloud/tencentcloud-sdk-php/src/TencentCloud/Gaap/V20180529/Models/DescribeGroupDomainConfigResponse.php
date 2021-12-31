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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupDomainConfig返回参数结构体
 *
 * @method array getAccessRegionList() 获取域名解析就近接入配置列表。
 * @method void setAccessRegionList(array $AccessRegionList) 设置域名解析就近接入配置列表。
 * @method string getDefaultDnsIp() 获取默认访问Ip。
 * @method void setDefaultDnsIp(string $DefaultDnsIp) 设置默认访问Ip。
 * @method string getGroupId() 获取通道组ID。
 * @method void setGroupId(string $GroupId) 设置通道组ID。
 * @method integer getAccessRegionCount() 获取接入地域的配置的总数。
 * @method void setAccessRegionCount(integer $AccessRegionCount) 设置接入地域的配置的总数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGroupDomainConfigResponse extends AbstractModel
{
    /**
     * @var array 域名解析就近接入配置列表。
     */
    public $AccessRegionList;

    /**
     * @var string 默认访问Ip。
     */
    public $DefaultDnsIp;

    /**
     * @var string 通道组ID。
     */
    public $GroupId;

    /**
     * @var integer 接入地域的配置的总数。
     */
    public $AccessRegionCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AccessRegionList 域名解析就近接入配置列表。
     * @param string $DefaultDnsIp 默认访问Ip。
     * @param string $GroupId 通道组ID。
     * @param integer $AccessRegionCount 接入地域的配置的总数。
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
        if (array_key_exists("AccessRegionList",$param) and $param["AccessRegionList"] !== null) {
            $this->AccessRegionList = [];
            foreach ($param["AccessRegionList"] as $key => $value){
                $obj = new DomainAccessRegionDict();
                $obj->deserialize($value);
                array_push($this->AccessRegionList, $obj);
            }
        }

        if (array_key_exists("DefaultDnsIp",$param) and $param["DefaultDnsIp"] !== null) {
            $this->DefaultDnsIp = $param["DefaultDnsIp"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AccessRegionCount",$param) and $param["AccessRegionCount"] !== null) {
            $this->AccessRegionCount = $param["AccessRegionCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
