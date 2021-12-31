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
 * UnbindApiGroup请求参数结构体
 *
 * @method array getGroupGatewayList() 获取分组网关id列表
 * @method void setGroupGatewayList(array $GroupGatewayList) 设置分组网关id列表
 */
class UnbindApiGroupRequest extends AbstractModel
{
    /**
     * @var array 分组网关id列表
     */
    public $GroupGatewayList;

    /**
     * @param array $GroupGatewayList 分组网关id列表
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
        if (array_key_exists("GroupGatewayList",$param) and $param["GroupGatewayList"] !== null) {
            $this->GroupGatewayList = [];
            foreach ($param["GroupGatewayList"] as $key => $value){
                $obj = new GatewayGroupIds();
                $obj->deserialize($value);
                array_push($this->GroupGatewayList, $obj);
            }
        }
    }
}
