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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateBucketAccelerateOpt请求参数结构体
 *
 * @method boolean getAllowed() 获取true为开启全球加速，false为关闭
 * @method void setAllowed(boolean $Allowed) 设置true为开启全球加速，false为关闭
 */
class UpdateBucketAccelerateOptRequest extends AbstractModel
{
    /**
     * @var boolean true为开启全球加速，false为关闭
     */
    public $Allowed;

    /**
     * @param boolean $Allowed true为开启全球加速，false为关闭
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
        if (array_key_exists("Allowed",$param) and $param["Allowed"] !== null) {
            $this->Allowed = $param["Allowed"];
        }
    }
}
