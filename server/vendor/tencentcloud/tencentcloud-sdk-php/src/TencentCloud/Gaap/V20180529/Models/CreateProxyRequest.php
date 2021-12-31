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
 * CreateProxy请求参数结构体
 *
 * @method integer getProjectId() 获取通道的项目ID。
 * @method void setProjectId(integer $ProjectId) 设置通道的项目ID。
 * @method string getProxyName() 获取通道名称。
 * @method void setProxyName(string $ProxyName) 设置通道名称。
 * @method string getAccessRegion() 获取接入地域。
 * @method void setAccessRegion(string $AccessRegion) 设置接入地域。
 * @method integer getBandwidth() 获取通道带宽上限，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置通道带宽上限，单位：Mbps。
 * @method integer getConcurrent() 获取通道并发量上限，表示同时在线的连接数，单位：万。
 * @method void setConcurrent(integer $Concurrent) 设置通道并发量上限，表示同时在线的连接数，单位：万。
 * @method string getRealServerRegion() 获取源站地域。当GroupId存在时，源站地域为通道组的源站地域,此时可不填该字段。当GroupId不存在时，需要填写该字段
 * @method void setRealServerRegion(string $RealServerRegion) 设置源站地域。当GroupId存在时，源站地域为通道组的源站地域,此时可不填该字段。当GroupId不存在时，需要填写该字段
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
 * @method string getGroupId() 获取通道所在的通道组ID，当在通道组中创建通道时必带，否则忽略该字段。
 * @method void setGroupId(string $GroupId) 设置通道所在的通道组ID，当在通道组中创建通道时必带，否则忽略该字段。
 * @method array getTagSet() 获取通道需要添加的标签列表。
 * @method void setTagSet(array $TagSet) 设置通道需要添加的标签列表。
 * @method string getClonedProxyId() 获取被复制的通道ID。只有处于运行中状态的通道可以被复制。
当设置该参数时，表示复制该通道。
 * @method void setClonedProxyId(string $ClonedProxyId) 设置被复制的通道ID。只有处于运行中状态的通道可以被复制。
当设置该参数时，表示复制该通道。
 * @method integer getBillingType() 获取计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）
 * @method void setBillingType(integer $BillingType) 设置计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）
 */
class CreateProxyRequest extends AbstractModel
{
    /**
     * @var integer 通道的项目ID。
     */
    public $ProjectId;

    /**
     * @var string 通道名称。
     */
    public $ProxyName;

    /**
     * @var string 接入地域。
     */
    public $AccessRegion;

    /**
     * @var integer 通道带宽上限，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 通道并发量上限，表示同时在线的连接数，单位：万。
     */
    public $Concurrent;

    /**
     * @var string 源站地域。当GroupId存在时，源站地域为通道组的源站地域,此时可不填该字段。当GroupId不存在时，需要填写该字段
     */
    public $RealServerRegion;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
     */
    public $ClientToken;

    /**
     * @var string 通道所在的通道组ID，当在通道组中创建通道时必带，否则忽略该字段。
     */
    public $GroupId;

    /**
     * @var array 通道需要添加的标签列表。
     */
    public $TagSet;

    /**
     * @var string 被复制的通道ID。只有处于运行中状态的通道可以被复制。
当设置该参数时，表示复制该通道。
     */
    public $ClonedProxyId;

    /**
     * @var integer 计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）
     */
    public $BillingType;

    /**
     * @param integer $ProjectId 通道的项目ID。
     * @param string $ProxyName 通道名称。
     * @param string $AccessRegion 接入地域。
     * @param integer $Bandwidth 通道带宽上限，单位：Mbps。
     * @param integer $Concurrent 通道并发量上限，表示同时在线的连接数，单位：万。
     * @param string $RealServerRegion 源站地域。当GroupId存在时，源站地域为通道组的源站地域,此时可不填该字段。当GroupId不存在时，需要填写该字段
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
     * @param string $GroupId 通道所在的通道组ID，当在通道组中创建通道时必带，否则忽略该字段。
     * @param array $TagSet 通道需要添加的标签列表。
     * @param string $ClonedProxyId 被复制的通道ID。只有处于运行中状态的通道可以被复制。
当设置该参数时，表示复制该通道。
     * @param integer $BillingType 计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("ClonedProxyId",$param) and $param["ClonedProxyId"] !== null) {
            $this->ClonedProxyId = $param["ClonedProxyId"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}
