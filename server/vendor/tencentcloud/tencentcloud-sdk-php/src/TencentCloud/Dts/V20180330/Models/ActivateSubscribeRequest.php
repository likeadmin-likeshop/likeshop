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
 * ActivateSubscribe请求参数结构体
 *
 * @method string getSubscribeId() 获取订阅实例ID。
 * @method void setSubscribeId(string $SubscribeId) 设置订阅实例ID。
 * @method string getInstanceId() 获取数据库实例ID
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID
 * @method integer getSubscribeObjectType() 获取数据订阅类型0-全实例订阅，1数据订阅，2结构订阅，3数据订阅与结构订阅
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) 设置数据订阅类型0-全实例订阅，1数据订阅，2结构订阅，3数据订阅与结构订阅
 * @method SubscribeObject getObjects() 获取订阅对象
 * @method void setObjects(SubscribeObject $Objects) 设置订阅对象
 * @method string getUniqSubnetId() 获取数据订阅服务所在子网。默认为数据库实例所在的子网内。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置数据订阅服务所在子网。默认为数据库实例所在的子网内。
 * @method integer getVport() 获取订阅服务端口；默认为7507
 * @method void setVport(integer $Vport) 设置订阅服务端口；默认为7507
 */
class ActivateSubscribeRequest extends AbstractModel
{
    /**
     * @var string 订阅实例ID。
     */
    public $SubscribeId;

    /**
     * @var string 数据库实例ID
     */
    public $InstanceId;

    /**
     * @var integer 数据订阅类型0-全实例订阅，1数据订阅，2结构订阅，3数据订阅与结构订阅
     */
    public $SubscribeObjectType;

    /**
     * @var SubscribeObject 订阅对象
     */
    public $Objects;

    /**
     * @var string 数据订阅服务所在子网。默认为数据库实例所在的子网内。
     */
    public $UniqSubnetId;

    /**
     * @var integer 订阅服务端口；默认为7507
     */
    public $Vport;

    /**
     * @param string $SubscribeId 订阅实例ID。
     * @param string $InstanceId 数据库实例ID
     * @param integer $SubscribeObjectType 数据订阅类型0-全实例订阅，1数据订阅，2结构订阅，3数据订阅与结构订阅
     * @param SubscribeObject $Objects 订阅对象
     * @param string $UniqSubnetId 数据订阅服务所在子网。默认为数据库实例所在的子网内。
     * @param integer $Vport 订阅服务端口；默认为7507
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new SubscribeObject();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
