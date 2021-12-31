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
 * DeleteListeners请求参数结构体
 *
 * @method array getListenerIds() 获取待删除的监听器ID列表
 * @method void setListenerIds(array $ListenerIds) 设置待删除的监听器ID列表
 * @method integer getForce() 获取已绑定源站的监听器是否允许强制删除，1：允许， 0：不允许
 * @method void setForce(integer $Force) 设置已绑定源站的监听器是否允许强制删除，1：允许， 0：不允许
 * @method string getGroupId() 获取通道组ID，该参数和GroupId必须设置一个，但不能同时设置。
 * @method void setGroupId(string $GroupId) 设置通道组ID，该参数和GroupId必须设置一个，但不能同时设置。
 * @method string getProxyId() 获取通道ID，该参数和GroupId必须设置一个，但不能同时设置。
 * @method void setProxyId(string $ProxyId) 设置通道ID，该参数和GroupId必须设置一个，但不能同时设置。
 */
class DeleteListenersRequest extends AbstractModel
{
    /**
     * @var array 待删除的监听器ID列表
     */
    public $ListenerIds;

    /**
     * @var integer 已绑定源站的监听器是否允许强制删除，1：允许， 0：不允许
     */
    public $Force;

    /**
     * @var string 通道组ID，该参数和GroupId必须设置一个，但不能同时设置。
     */
    public $GroupId;

    /**
     * @var string 通道ID，该参数和GroupId必须设置一个，但不能同时设置。
     */
    public $ProxyId;

    /**
     * @param array $ListenerIds 待删除的监听器ID列表
     * @param integer $Force 已绑定源站的监听器是否允许强制删除，1：允许， 0：不允许
     * @param string $GroupId 通道组ID，该参数和GroupId必须设置一个，但不能同时设置。
     * @param string $ProxyId 通道ID，该参数和GroupId必须设置一个，但不能同时设置。
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
        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
