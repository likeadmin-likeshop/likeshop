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
 * CreateSubnets请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。形如：`vpc-6v2ht8q5`
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。形如：`vpc-6v2ht8q5`
 * @method array getSubnets() 获取子网对象列表。
 * @method void setSubnets(array $Subnets) 设置子网对象列表。
 * @method array getTags() 获取指定绑定的标签列表，注意这里的标签集合为列表中所有子网对象所共享，不能为每个子网对象单独指定标签，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，注意这里的标签集合为列表中所有子网对象所共享，不能为每个子网对象单独指定标签，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method string getCdcId() 获取需要增加到的CDC实例ID。
 * @method void setCdcId(string $CdcId) 设置需要增加到的CDC实例ID。
 */
class CreateSubnetsRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。形如：`vpc-6v2ht8q5`
     */
    public $VpcId;

    /**
     * @var array 子网对象列表。
     */
    public $Subnets;

    /**
     * @var array 指定绑定的标签列表，注意这里的标签集合为列表中所有子网对象所共享，不能为每个子网对象单独指定标签，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string 需要增加到的CDC实例ID。
     */
    public $CdcId;

    /**
     * @param string $VpcId `VPC`实例`ID`。形如：`vpc-6v2ht8q5`
     * @param array $Subnets 子网对象列表。
     * @param array $Tags 指定绑定的标签列表，注意这里的标签集合为列表中所有子网对象所共享，不能为每个子网对象单独指定标签，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param string $CdcId 需要增加到的CDC实例ID。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = [];
            foreach ($param["Subnets"] as $key => $value){
                $obj = new SubnetInput();
                $obj->deserialize($value);
                array_push($this->Subnets, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
