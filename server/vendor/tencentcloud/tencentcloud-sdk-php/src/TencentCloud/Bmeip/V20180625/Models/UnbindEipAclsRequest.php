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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindEipAcls请求参数结构体
 *
 * @method array getEipIdAclIdList() 获取待解关联的 EIP 与 ACL列表
 * @method void setEipIdAclIdList(array $EipIdAclIdList) 设置待解关联的 EIP 与 ACL列表
 */
class UnbindEipAclsRequest extends AbstractModel
{
    /**
     * @var array 待解关联的 EIP 与 ACL列表
     */
    public $EipIdAclIdList;

    /**
     * @param array $EipIdAclIdList 待解关联的 EIP 与 ACL列表
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
        if (array_key_exists("EipIdAclIdList",$param) and $param["EipIdAclIdList"] !== null) {
            $this->EipIdAclIdList = [];
            foreach ($param["EipIdAclIdList"] as $key => $value){
                $obj = new EipAclMap();
                $obj->deserialize($value);
                array_push($this->EipIdAclIdList, $obj);
            }
        }
    }
}
