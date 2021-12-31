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
 * DeleteInstance请求参数结构体
 *
 * @method string getRegistryId() 获取实例id
 * @method void setRegistryId(string $RegistryId) 设置实例id
 * @method boolean getDeleteBucket() 获取是否删除存储桶，默认为false
 * @method void setDeleteBucket(boolean $DeleteBucket) 设置是否删除存储桶，默认为false
 */
class DeleteInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $RegistryId;

    /**
     * @var boolean 是否删除存储桶，默认为false
     */
    public $DeleteBucket;

    /**
     * @param string $RegistryId 实例id
     * @param boolean $DeleteBucket 是否删除存储桶，默认为false
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("DeleteBucket",$param) and $param["DeleteBucket"] !== null) {
            $this->DeleteBucket = $param["DeleteBucket"];
        }
    }
}
