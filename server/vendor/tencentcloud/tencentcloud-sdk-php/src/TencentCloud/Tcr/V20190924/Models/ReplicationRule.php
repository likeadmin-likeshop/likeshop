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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步规则
 *
 * @method string getName() 获取同步规则名称
 * @method void setName(string $Name) 设置同步规则名称
 * @method string getDestNamespace() 获取目标命名空间
 * @method void setDestNamespace(string $DestNamespace) 设置目标命名空间
 * @method boolean getOverride() 获取是否覆盖
 * @method void setOverride(boolean $Override) 设置是否覆盖
 * @method array getFilters() 获取同步过滤条件
 * @method void setFilters(array $Filters) 设置同步过滤条件
 */
class ReplicationRule extends AbstractModel
{
    /**
     * @var string 同步规则名称
     */
    public $Name;

    /**
     * @var string 目标命名空间
     */
    public $DestNamespace;

    /**
     * @var boolean 是否覆盖
     */
    public $Override;

    /**
     * @var array 同步过滤条件
     */
    public $Filters;

    /**
     * @param string $Name 同步规则名称
     * @param string $DestNamespace 目标命名空间
     * @param boolean $Override 是否覆盖
     * @param array $Filters 同步过滤条件
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DestNamespace",$param) and $param["DestNamespace"] !== null) {
            $this->DestNamespace = $param["DestNamespace"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ReplicationFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
