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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务自定义域名路径映射
 *
 * @method boolean getIsDefaultMapping() 获取是否使用默认路径映射，为 True 表示使用默认路径映射；为 False 的话，表示使用自定义路径映射，此时 PathMappingSet 不为空。
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) 设置是否使用默认路径映射，为 True 表示使用默认路径映射；为 False 的话，表示使用自定义路径映射，此时 PathMappingSet 不为空。
 * @method array getPathMappingSet() 获取自定义路径映射列表。
 * @method void setPathMappingSet(array $PathMappingSet) 设置自定义路径映射列表。
 */
class ServiceSubDomainMappings extends AbstractModel
{
    /**
     * @var boolean 是否使用默认路径映射，为 True 表示使用默认路径映射；为 False 的话，表示使用自定义路径映射，此时 PathMappingSet 不为空。
     */
    public $IsDefaultMapping;

    /**
     * @var array 自定义路径映射列表。
     */
    public $PathMappingSet;

    /**
     * @param boolean $IsDefaultMapping 是否使用默认路径映射，为 True 表示使用默认路径映射；为 False 的话，表示使用自定义路径映射，此时 PathMappingSet 不为空。
     * @param array $PathMappingSet 自定义路径映射列表。
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
        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("PathMappingSet",$param) and $param["PathMappingSet"] !== null) {
            $this->PathMappingSet = [];
            foreach ($param["PathMappingSet"] as $key => $value){
                $obj = new PathMapping();
                $obj->deserialize($value);
                array_push($this->PathMappingSet, $obj);
            }
        }
    }
}
