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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器资源描述。
 *
 * @method string getSpec() 获取机器类型描述。
 * @method void setSpec(string $Spec) 设置机器类型描述。
 * @method string getInstanceType() 获取机器类型描述，可参考CVM的该含义。
 * @method void setInstanceType(string $InstanceType) 设置机器类型描述，可参考CVM的该含义。
 * @method array getTags() 获取标签KV对。
 * @method void setTags(array $Tags) 设置标签KV对。
 * @method array getDiskGroups() 获取磁盘描述列表。
 * @method void setDiskGroups(array $DiskGroups) 设置磁盘描述列表。
 */
class JobFlowResource extends AbstractModel
{
    /**
     * @var string 机器类型描述。
     */
    public $Spec;

    /**
     * @var string 机器类型描述，可参考CVM的该含义。
     */
    public $InstanceType;

    /**
     * @var array 标签KV对。
     */
    public $Tags;

    /**
     * @var array 磁盘描述列表。
     */
    public $DiskGroups;

    /**
     * @param string $Spec 机器类型描述。
     * @param string $InstanceType 机器类型描述，可参考CVM的该含义。
     * @param array $Tags 标签KV对。
     * @param array $DiskGroups 磁盘描述列表。
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DiskGroups",$param) and $param["DiskGroups"] !== null) {
            $this->DiskGroups = [];
            foreach ($param["DiskGroups"] as $key => $value){
                $obj = new DiskGroup();
                $obj->deserialize($value);
                array_push($this->DiskGroups, $obj);
            }
        }
    }
}
