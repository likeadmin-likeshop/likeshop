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
 * DisassociateTargetGroups请求参数结构体
 *
 * @method array getAssociations() 获取待解绑的规则关系数组。
 * @method void setAssociations(array $Associations) 设置待解绑的规则关系数组。
 */
class DisassociateTargetGroupsRequest extends AbstractModel
{
    /**
     * @var array 待解绑的规则关系数组。
     */
    public $Associations;

    /**
     * @param array $Associations 待解绑的规则关系数组。
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
        if (array_key_exists("Associations",$param) and $param["Associations"] !== null) {
            $this->Associations = [];
            foreach ($param["Associations"] as $key => $value){
                $obj = new TargetGroupAssociation();
                $obj->deserialize($value);
                array_push($this->Associations, $obj);
            }
        }
    }
}
