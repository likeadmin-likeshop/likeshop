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
 * 获取命名空间信息返回
 *
 * @method integer getNamespaceCount() 获取命名空间数量
 * @method void setNamespaceCount(integer $NamespaceCount) 设置命名空间数量
 * @method array getNamespaceInfo() 获取命名空间信息
 * @method void setNamespaceInfo(array $NamespaceInfo) 设置命名空间信息
 */
class NamespaceInfoResp extends AbstractModel
{
    /**
     * @var integer 命名空间数量
     */
    public $NamespaceCount;

    /**
     * @var array 命名空间信息
     */
    public $NamespaceInfo;

    /**
     * @param integer $NamespaceCount 命名空间数量
     * @param array $NamespaceInfo 命名空间信息
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
        if (array_key_exists("NamespaceCount",$param) and $param["NamespaceCount"] !== null) {
            $this->NamespaceCount = $param["NamespaceCount"];
        }

        if (array_key_exists("NamespaceInfo",$param) and $param["NamespaceInfo"] !== null) {
            $this->NamespaceInfo = [];
            foreach ($param["NamespaceInfo"] as $key => $value){
                $obj = new NamespaceInfo();
                $obj->deserialize($value);
                array_push($this->NamespaceInfo, $obj);
            }
        }
    }
}
