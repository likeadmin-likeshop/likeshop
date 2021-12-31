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
 * DescribeHTTPListeners请求参数结构体
 *
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 * @method string getListenerId() 获取过滤条件，按照监听器ID进行精确查询
 * @method void setListenerId(string $ListenerId) 设置过滤条件，按照监听器ID进行精确查询
 * @method string getListenerName() 获取过滤条件，按照监听器名称进行精确查询
 * @method void setListenerName(string $ListenerName) 设置过滤条件，按照监听器名称进行精确查询
 * @method integer getPort() 获取过滤条件，按照监听器端口进行精确查询
 * @method void setPort(integer $Port) 设置过滤条件，按照监听器端口进行精确查询
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取限制数量，默认为20个
 * @method void setLimit(integer $Limit) 设置限制数量，默认为20个
 * @method string getSearchValue() 获取过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用
 * @method void setSearchValue(string $SearchValue) 设置过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用
 * @method string getGroupId() 获取通道组ID
 * @method void setGroupId(string $GroupId) 设置通道组ID
 */
class DescribeHTTPListenersRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ProxyId;

    /**
     * @var string 过滤条件，按照监听器ID进行精确查询
     */
    public $ListenerId;

    /**
     * @var string 过滤条件，按照监听器名称进行精确查询
     */
    public $ListenerName;

    /**
     * @var integer 过滤条件，按照监听器端口进行精确查询
     */
    public $Port;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 限制数量，默认为20个
     */
    public $Limit;

    /**
     * @var string 过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用
     */
    public $SearchValue;

    /**
     * @var string 通道组ID
     */
    public $GroupId;

    /**
     * @param string $ProxyId 通道ID
     * @param string $ListenerId 过滤条件，按照监听器ID进行精确查询
     * @param string $ListenerName 过滤条件，按照监听器名称进行精确查询
     * @param integer $Port 过滤条件，按照监听器端口进行精确查询
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 限制数量，默认为20个
     * @param string $SearchValue 过滤条件，支持按照端口或监听器名称进行模糊查询，该参数不能与ListenerName和Port同时使用
     * @param string $GroupId 通道组ID
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
