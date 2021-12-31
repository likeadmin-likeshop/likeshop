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
 * 自定义服务域名展示
 *
 * @method integer getTotalCount() 获取服务下的自定义域名数量。
 * @method void setTotalCount(integer $TotalCount) 设置服务下的自定义域名数量。
 * @method array getDomainSet() 获取自定义服务域名列表。
 * @method void setDomainSet(array $DomainSet) 设置自定义服务域名列表。
 */
class DomainSets extends AbstractModel
{
    /**
     * @var integer 服务下的自定义域名数量。
     */
    public $TotalCount;

    /**
     * @var array 自定义服务域名列表。
     */
    public $DomainSet;

    /**
     * @param integer $TotalCount 服务下的自定义域名数量。
     * @param array $DomainSet 自定义服务域名列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DomainSet",$param) and $param["DomainSet"] !== null) {
            $this->DomainSet = [];
            foreach ($param["DomainSet"] as $key => $value){
                $obj = new DomainSetList();
                $obj->deserialize($value);
                array_push($this->DomainSet, $obj);
            }
        }
    }
}
