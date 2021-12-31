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
 * 内部接口使用，返回可以查询统计数据的通道和对应的监听器信息
 *
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 * @method string getProxyName() 获取通道名称
 * @method void setProxyName(string $ProxyName) 设置通道名称
 * @method array getListenerList() 获取监听器列表
 * @method void setListenerList(array $ListenerList) 设置监听器列表
 */
class ProxySimpleInfo extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ProxyId;

    /**
     * @var string 通道名称
     */
    public $ProxyName;

    /**
     * @var array 监听器列表
     */
    public $ListenerList;

    /**
     * @param string $ProxyId 通道ID
     * @param string $ProxyName 通道名称
     * @param array $ListenerList 监听器列表
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

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("ListenerList",$param) and $param["ListenerList"] !== null) {
            $this->ListenerList = [];
            foreach ($param["ListenerList"] as $key => $value){
                $obj = new ListenerInfo();
                $obj->deserialize($value);
                array_push($this->ListenerList, $obj);
            }
        }
    }
}
