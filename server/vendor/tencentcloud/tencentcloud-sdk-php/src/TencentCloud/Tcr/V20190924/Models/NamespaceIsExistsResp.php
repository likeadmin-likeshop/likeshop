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
 * NamespaceIsExists返回类型
 *
 * @method boolean getIsExist() 获取命名空间是否存在
 * @method void setIsExist(boolean $IsExist) 设置命名空间是否存在
 * @method boolean getIsPreserved() 获取是否为保留命名空间
 * @method void setIsPreserved(boolean $IsPreserved) 设置是否为保留命名空间
 */
class NamespaceIsExistsResp extends AbstractModel
{
    /**
     * @var boolean 命名空间是否存在
     */
    public $IsExist;

    /**
     * @var boolean 是否为保留命名空间
     */
    public $IsPreserved;

    /**
     * @param boolean $IsExist 命名空间是否存在
     * @param boolean $IsPreserved 是否为保留命名空间
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
        if (array_key_exists("IsExist",$param) and $param["IsExist"] !== null) {
            $this->IsExist = $param["IsExist"];
        }

        if (array_key_exists("IsPreserved",$param) and $param["IsPreserved"] !== null) {
            $this->IsPreserved = $param["IsPreserved"];
        }
    }
}
