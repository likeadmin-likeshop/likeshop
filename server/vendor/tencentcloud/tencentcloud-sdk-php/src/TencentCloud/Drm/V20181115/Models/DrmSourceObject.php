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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于DRM加密的源对象
 *
 * @method string getBucketName() 获取输入的桶名称。
 * @method void setBucketName(string $BucketName) 设置输入的桶名称。
 * @method string getObjectName() 获取输入对象名称。
 * @method void setObjectName(string $ObjectName) 设置输入对象名称。
 */
class DrmSourceObject extends AbstractModel
{
    /**
     * @var string 输入的桶名称。
     */
    public $BucketName;

    /**
     * @var string 输入对象名称。
     */
    public $ObjectName;

    /**
     * @param string $BucketName 输入的桶名称。
     * @param string $ObjectName 输入对象名称。
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }
    }
}
