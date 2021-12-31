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
 * 协议端口模板集合
 *
 * @method string getServiceTemplateGroupId() 获取协议端口模板集合实例ID，例如：ppmg-2klmrefu。
 * @method void setServiceTemplateGroupId(string $ServiceTemplateGroupId) 设置协议端口模板集合实例ID，例如：ppmg-2klmrefu。
 * @method string getServiceTemplateGroupName() 获取协议端口模板集合名称。
 * @method void setServiceTemplateGroupName(string $ServiceTemplateGroupName) 设置协议端口模板集合名称。
 * @method array getServiceTemplateIdSet() 获取协议端口模板实例ID。
 * @method void setServiceTemplateIdSet(array $ServiceTemplateIdSet) 设置协议端口模板实例ID。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getServiceTemplateSet() 获取协议端口模板实例信息。
 * @method void setServiceTemplateSet(array $ServiceTemplateSet) 设置协议端口模板实例信息。
 */
class ServiceTemplateGroup extends AbstractModel
{
    /**
     * @var string 协议端口模板集合实例ID，例如：ppmg-2klmrefu。
     */
    public $ServiceTemplateGroupId;

    /**
     * @var string 协议端口模板集合名称。
     */
    public $ServiceTemplateGroupName;

    /**
     * @var array 协议端口模板实例ID。
     */
    public $ServiceTemplateIdSet;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var array 协议端口模板实例信息。
     */
    public $ServiceTemplateSet;

    /**
     * @param string $ServiceTemplateGroupId 协议端口模板集合实例ID，例如：ppmg-2klmrefu。
     * @param string $ServiceTemplateGroupName 协议端口模板集合名称。
     * @param array $ServiceTemplateIdSet 协议端口模板实例ID。
     * @param string $CreatedTime 创建时间。
     * @param array $ServiceTemplateSet 协议端口模板实例信息。
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
        if (array_key_exists("ServiceTemplateGroupId",$param) and $param["ServiceTemplateGroupId"] !== null) {
            $this->ServiceTemplateGroupId = $param["ServiceTemplateGroupId"];
        }

        if (array_key_exists("ServiceTemplateGroupName",$param) and $param["ServiceTemplateGroupName"] !== null) {
            $this->ServiceTemplateGroupName = $param["ServiceTemplateGroupName"];
        }

        if (array_key_exists("ServiceTemplateIdSet",$param) and $param["ServiceTemplateIdSet"] !== null) {
            $this->ServiceTemplateIdSet = $param["ServiceTemplateIdSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ServiceTemplateSet",$param) and $param["ServiceTemplateSet"] !== null) {
            $this->ServiceTemplateSet = [];
            foreach ($param["ServiceTemplateSet"] as $key => $value){
                $obj = new ServiceTemplate();
                $obj->deserialize($value);
                array_push($this->ServiceTemplateSet, $obj);
            }
        }
    }
}
