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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTargetGroup请求参数结构体
 *
 * @method string getTargetGroupName() 获取目标组名称，限定50个字符
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称，限定50个字符
 * @method string getVpcId() 获取目标组的vpcid属性，不填则使用默认vpc
 * @method void setVpcId(string $VpcId) 设置目标组的vpcid属性，不填则使用默认vpc
 * @method integer getPort() 获取目标组的默认端口， 后续添加服务器时可使用该默认端口
 * @method void setPort(integer $Port) 设置目标组的默认端口， 后续添加服务器时可使用该默认端口
 * @method array getTargetGroupInstances() 获取目标组绑定的后端服务器
 * @method void setTargetGroupInstances(array $TargetGroupInstances) 设置目标组绑定的后端服务器
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string 目标组名称，限定50个字符
     */
    public $TargetGroupName;

    /**
     * @var string 目标组的vpcid属性，不填则使用默认vpc
     */
    public $VpcId;

    /**
     * @var integer 目标组的默认端口， 后续添加服务器时可使用该默认端口
     */
    public $Port;

    /**
     * @var array 目标组绑定的后端服务器
     */
    public $TargetGroupInstances;

    /**
     * @param string $TargetGroupName 目标组名称，限定50个字符
     * @param string $VpcId 目标组的vpcid属性，不填则使用默认vpc
     * @param integer $Port 目标组的默认端口， 后续添加服务器时可使用该默认端口
     * @param array $TargetGroupInstances 目标组绑定的后端服务器
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
        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }
    }
}
