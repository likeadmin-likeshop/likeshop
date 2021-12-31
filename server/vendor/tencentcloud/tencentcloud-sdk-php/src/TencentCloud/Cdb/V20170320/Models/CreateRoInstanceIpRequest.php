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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoInstanceIp请求参数结构体
 *
 * @method string getInstanceId() 获取只读实例ID，格式如：cdbro-3i70uj0k，与云数据库控制台页面中显示的只读实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置只读实例ID，格式如：cdbro-3i70uj0k，与云数据库控制台页面中显示的只读实例ID相同。
 * @method string getUniqSubnetId() 获取子网描述符，例如：subnet-1typ0s7d。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网描述符，例如：subnet-1typ0s7d。
 * @method string getUniqVpcId() 获取vpc描述符，例如：vpc-a23yt67j,如果传了该字段则UniqSubnetId必传
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc描述符，例如：vpc-a23yt67j,如果传了该字段则UniqSubnetId必传
 */
class CreateRoInstanceIpRequest extends AbstractModel
{
    /**
     * @var string 只读实例ID，格式如：cdbro-3i70uj0k，与云数据库控制台页面中显示的只读实例ID相同。
     */
    public $InstanceId;

    /**
     * @var string 子网描述符，例如：subnet-1typ0s7d。
     */
    public $UniqSubnetId;

    /**
     * @var string vpc描述符，例如：vpc-a23yt67j,如果传了该字段则UniqSubnetId必传
     */
    public $UniqVpcId;

    /**
     * @param string $InstanceId 只读实例ID，格式如：cdbro-3i70uj0k，与云数据库控制台页面中显示的只读实例ID相同。
     * @param string $UniqSubnetId 子网描述符，例如：subnet-1typ0s7d。
     * @param string $UniqVpcId vpc描述符，例如：vpc-a23yt67j,如果传了该字段则UniqSubnetId必传
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }
    }
}
