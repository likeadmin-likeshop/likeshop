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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流封装信息
 *
 * @method string getDeleteStream() 获取删除流，可选项：video,audio。
 * @method void setDeleteStream(string $DeleteStream) 设置删除流，可选项：video,audio。
 * @method string getFlvFlags() 获取Flv 参数，目前支持add_keyframe_index
 * @method void setFlvFlags(string $FlvFlags) 设置Flv 参数，目前支持add_keyframe_index
 */
class MuxInfo extends AbstractModel
{
    /**
     * @var string 删除流，可选项：video,audio。
     */
    public $DeleteStream;

    /**
     * @var string Flv 参数，目前支持add_keyframe_index
     */
    public $FlvFlags;

    /**
     * @param string $DeleteStream 删除流，可选项：video,audio。
     * @param string $FlvFlags Flv 参数，目前支持add_keyframe_index
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
        if (array_key_exists("DeleteStream",$param) and $param["DeleteStream"] !== null) {
            $this->DeleteStream = $param["DeleteStream"];
        }

        if (array_key_exists("FlvFlags",$param) and $param["FlvFlags"] !== null) {
            $this->FlvFlags = $param["FlvFlags"];
        }
    }
}
