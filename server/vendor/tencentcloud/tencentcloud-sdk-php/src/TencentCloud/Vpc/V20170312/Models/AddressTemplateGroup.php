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
 * IP地址模板集合
 *
 * @method string getAddressTemplateGroupName() 获取IP地址模板集合名称。
 * @method void setAddressTemplateGroupName(string $AddressTemplateGroupName) 设置IP地址模板集合名称。
 * @method string getAddressTemplateGroupId() 获取IP地址模板集合实例ID，例如：ipmg-dih8xdbq。
 * @method void setAddressTemplateGroupId(string $AddressTemplateGroupId) 设置IP地址模板集合实例ID，例如：ipmg-dih8xdbq。
 * @method array getAddressTemplateIdSet() 获取IP地址模板ID。
 * @method void setAddressTemplateIdSet(array $AddressTemplateIdSet) 设置IP地址模板ID。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getAddressTemplateSet() 获取IP地址模板实例。
 * @method void setAddressTemplateSet(array $AddressTemplateSet) 设置IP地址模板实例。
 */
class AddressTemplateGroup extends AbstractModel
{
    /**
     * @var string IP地址模板集合名称。
     */
    public $AddressTemplateGroupName;

    /**
     * @var string IP地址模板集合实例ID，例如：ipmg-dih8xdbq。
     */
    public $AddressTemplateGroupId;

    /**
     * @var array IP地址模板ID。
     */
    public $AddressTemplateIdSet;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var array IP地址模板实例。
     */
    public $AddressTemplateSet;

    /**
     * @param string $AddressTemplateGroupName IP地址模板集合名称。
     * @param string $AddressTemplateGroupId IP地址模板集合实例ID，例如：ipmg-dih8xdbq。
     * @param array $AddressTemplateIdSet IP地址模板ID。
     * @param string $CreatedTime 创建时间。
     * @param array $AddressTemplateSet IP地址模板实例。
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
        if (array_key_exists("AddressTemplateGroupName",$param) and $param["AddressTemplateGroupName"] !== null) {
            $this->AddressTemplateGroupName = $param["AddressTemplateGroupName"];
        }

        if (array_key_exists("AddressTemplateGroupId",$param) and $param["AddressTemplateGroupId"] !== null) {
            $this->AddressTemplateGroupId = $param["AddressTemplateGroupId"];
        }

        if (array_key_exists("AddressTemplateIdSet",$param) and $param["AddressTemplateIdSet"] !== null) {
            $this->AddressTemplateIdSet = $param["AddressTemplateIdSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AddressTemplateSet",$param) and $param["AddressTemplateSet"] !== null) {
            $this->AddressTemplateSet = [];
            foreach ($param["AddressTemplateSet"] as $key => $value){
                $obj = new AddressTemplateItem();
                $obj->deserialize($value);
                array_push($this->AddressTemplateSet, $obj);
            }
        }
    }
}
