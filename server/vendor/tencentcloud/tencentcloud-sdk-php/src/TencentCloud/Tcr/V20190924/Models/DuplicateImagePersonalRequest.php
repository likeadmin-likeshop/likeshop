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
 * DuplicateImagePersonal请求参数结构体
 *
 * @method string getSrcImage() 获取源镜像名称，不包含domain。例如： tencentyun/foo:v1
 * @method void setSrcImage(string $SrcImage) 设置源镜像名称，不包含domain。例如： tencentyun/foo:v1
 * @method string getDestImage() 获取目的镜像名称，不包含domain。例如： tencentyun/foo:latest
 * @method void setDestImage(string $DestImage) 设置目的镜像名称，不包含domain。例如： tencentyun/foo:latest
 */
class DuplicateImagePersonalRequest extends AbstractModel
{
    /**
     * @var string 源镜像名称，不包含domain。例如： tencentyun/foo:v1
     */
    public $SrcImage;

    /**
     * @var string 目的镜像名称，不包含domain。例如： tencentyun/foo:latest
     */
    public $DestImage;

    /**
     * @param string $SrcImage 源镜像名称，不包含domain。例如： tencentyun/foo:v1
     * @param string $DestImage 目的镜像名称，不包含domain。例如： tencentyun/foo:latest
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
        if (array_key_exists("SrcImage",$param) and $param["SrcImage"] !== null) {
            $this->SrcImage = $param["SrcImage"];
        }

        if (array_key_exists("DestImage",$param) and $param["DestImage"] !== null) {
            $this->DestImage = $param["DestImage"];
        }
    }
}
