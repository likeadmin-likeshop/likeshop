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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubscribeObjects请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的ID
 * @method integer getSubscribeObjectType() 获取数据订阅的类型，可选的值有：0 - 全实例订阅；1 - 数据订阅；2 - 结构订阅；3 - 数据订阅+结构订阅
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) 设置数据订阅的类型，可选的值有：0 - 全实例订阅；1 - 数据订阅；2 - 结构订阅；3 - 数据订阅+结构订阅
 * @method array getObjects() 获取订阅的数据库表信息
 * @method void setObjects(array $Objects) 设置订阅的数据库表信息
 */
class ModifySubscribeObjectsRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的ID
     */
    public $SubscribeId;

    /**
     * @var integer 数据订阅的类型，可选的值有：0 - 全实例订阅；1 - 数据订阅；2 - 结构订阅；3 - 数据订阅+结构订阅
     */
    public $SubscribeObjectType;

    /**
     * @var array 订阅的数据库表信息
     */
    public $Objects;

    /**
     * @param string $SubscribeId 数据订阅实例的ID
     * @param integer $SubscribeObjectType 数据订阅的类型，可选的值有：0 - 全实例订阅；1 - 数据订阅；2 - 结构订阅；3 - 数据订阅+结构订阅
     * @param array $Objects 订阅的数据库表信息
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = [];
            foreach ($param["Objects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->Objects, $obj);
            }
        }
    }
}
