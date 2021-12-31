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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceRoutes返回参数结构体
 *
 * @method array getOldRouteSet() 获取原路由策略信息。
 * @method void setOldRouteSet(array $OldRouteSet) 设置原路由策略信息。
 * @method array getNewRouteSet() 获取修改后的路由策略信息。
 * @method void setNewRouteSet(array $NewRouteSet) 设置修改后的路由策略信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ReplaceRoutesResponse extends AbstractModel
{
    /**
     * @var array 原路由策略信息。
     */
    public $OldRouteSet;

    /**
     * @var array 修改后的路由策略信息。
     */
    public $NewRouteSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $OldRouteSet 原路由策略信息。
     * @param array $NewRouteSet 修改后的路由策略信息。
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
        if (array_key_exists("OldRouteSet",$param) and $param["OldRouteSet"] !== null) {
            $this->OldRouteSet = [];
            foreach ($param["OldRouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->OldRouteSet, $obj);
            }
        }

        if (array_key_exists("NewRouteSet",$param) and $param["NewRouteSet"] !== null) {
            $this->NewRouteSet = [];
            foreach ($param["NewRouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->NewRouteSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
