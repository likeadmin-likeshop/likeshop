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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源位置描述
 *
 * @method integer getStorageType() 获取资源位置的存储类型，目前只支持COS
 * @method void setStorageType(integer $StorageType) 设置资源位置的存储类型，目前只支持COS
 * @method ResourceLocParam getParam() 获取描述资源位置的json
 * @method void setParam(ResourceLocParam $Param) 设置描述资源位置的json
 */
class ResourceLoc extends AbstractModel
{
    /**
     * @var integer 资源位置的存储类型，目前只支持COS
     */
    public $StorageType;

    /**
     * @var ResourceLocParam 描述资源位置的json
     */
    public $Param;

    /**
     * @param integer $StorageType 资源位置的存储类型，目前只支持COS
     * @param ResourceLocParam $Param 描述资源位置的json
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = new ResourceLocParam();
            $this->Param->deserialize($param["Param"]);
        }
    }
}
