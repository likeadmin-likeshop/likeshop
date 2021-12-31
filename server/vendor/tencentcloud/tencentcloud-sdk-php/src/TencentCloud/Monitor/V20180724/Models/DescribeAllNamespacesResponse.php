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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllNamespaces返回参数结构体
 *
 * @method CommonNamespace getQceNamespaces() 获取云产品的告警策略类型，已废弃
 * @method void setQceNamespaces(CommonNamespace $QceNamespaces) 设置云产品的告警策略类型，已废弃
 * @method CommonNamespace getCustomNamespaces() 获取其他告警策略类型，已废弃
 * @method void setCustomNamespaces(CommonNamespace $CustomNamespaces) 设置其他告警策略类型，已废弃
 * @method array getQceNamespacesNew() 获取云产品的告警策略类型
 * @method void setQceNamespacesNew(array $QceNamespacesNew) 设置云产品的告警策略类型
 * @method array getCustomNamespacesNew() 获取其他告警策略类型，暂不支持
 * @method void setCustomNamespacesNew(array $CustomNamespacesNew) 设置其他告警策略类型，暂不支持
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllNamespacesResponse extends AbstractModel
{
    /**
     * @var CommonNamespace 云产品的告警策略类型，已废弃
     */
    public $QceNamespaces;

    /**
     * @var CommonNamespace 其他告警策略类型，已废弃
     */
    public $CustomNamespaces;

    /**
     * @var array 云产品的告警策略类型
     */
    public $QceNamespacesNew;

    /**
     * @var array 其他告警策略类型，暂不支持
     */
    public $CustomNamespacesNew;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CommonNamespace $QceNamespaces 云产品的告警策略类型，已废弃
     * @param CommonNamespace $CustomNamespaces 其他告警策略类型，已废弃
     * @param array $QceNamespacesNew 云产品的告警策略类型
     * @param array $CustomNamespacesNew 其他告警策略类型，暂不支持
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
        if (array_key_exists("QceNamespaces",$param) and $param["QceNamespaces"] !== null) {
            $this->QceNamespaces = new CommonNamespace();
            $this->QceNamespaces->deserialize($param["QceNamespaces"]);
        }

        if (array_key_exists("CustomNamespaces",$param) and $param["CustomNamespaces"] !== null) {
            $this->CustomNamespaces = new CommonNamespace();
            $this->CustomNamespaces->deserialize($param["CustomNamespaces"]);
        }

        if (array_key_exists("QceNamespacesNew",$param) and $param["QceNamespacesNew"] !== null) {
            $this->QceNamespacesNew = [];
            foreach ($param["QceNamespacesNew"] as $key => $value){
                $obj = new CommonNamespace();
                $obj->deserialize($value);
                array_push($this->QceNamespacesNew, $obj);
            }
        }

        if (array_key_exists("CustomNamespacesNew",$param) and $param["CustomNamespacesNew"] !== null) {
            $this->CustomNamespacesNew = [];
            foreach ($param["CustomNamespacesNew"] as $key => $value){
                $obj = new CommonNamespace();
                $obj->deserialize($value);
                array_push($this->CustomNamespacesNew, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
