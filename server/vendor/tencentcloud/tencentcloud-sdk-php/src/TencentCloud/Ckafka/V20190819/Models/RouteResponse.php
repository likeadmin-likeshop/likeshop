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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由信息返回对象
 *
 * @method array getRouters() 获取路由信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouters(array $Routers) 设置路由信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouteResponse extends AbstractModel
{
    /**
     * @var array 路由信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Routers;

    /**
     * @param array $Routers 路由信息列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Routers",$param) and $param["Routers"] !== null) {
            $this->Routers = [];
            foreach ($param["Routers"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->Routers, $obj);
            }
        }
    }
}
