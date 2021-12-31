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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getClusterName() 获取集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
 * @method void setClusterName(string $ClusterName) 设置集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
 * @method integer getBindClusterId() 获取用户专享物理集群ID，如果不传，则默认在公共集群上创建用户集群资源。
 * @method void setBindClusterId(integer $BindClusterId) 设置用户专享物理集群ID，如果不传，则默认在公共集群上创建用户集群资源。
 * @method string getRemark() 获取说明，128个字符以内。
 * @method void setRemark(string $Remark) 设置说明，128个字符以内。
 * @method array getTags() 获取集群的标签列表
 * @method void setTags(array $Tags) 设置集群的标签列表
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string 集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
     */
    public $ClusterName;

    /**
     * @var integer 用户专享物理集群ID，如果不传，则默认在公共集群上创建用户集群资源。
     */
    public $BindClusterId;

    /**
     * @var string 说明，128个字符以内。
     */
    public $Remark;

    /**
     * @var array 集群的标签列表
     */
    public $Tags;

    /**
     * @param string $ClusterName 集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
     * @param integer $BindClusterId 用户专享物理集群ID，如果不传，则默认在公共集群上创建用户集群资源。
     * @param string $Remark 说明，128个字符以内。
     * @param array $Tags 集群的标签列表
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("BindClusterId",$param) and $param["BindClusterId"] !== null) {
            $this->BindClusterId = $param["BindClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
