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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体替换信息。
 *
 * @method string getMaterialId() 获取素材 ID。
 * @method void setMaterialId(string $MaterialId) 设置素材 ID。
 * @method float getStartTimeOffset() 获取替换媒体选取的开始时间，单位为秒，默认为 0。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置替换媒体选取的开始时间，单位为秒，默认为 0。
 */
class MediaReplacementInfo extends AbstractModel
{
    /**
     * @var string 素材 ID。
     */
    public $MaterialId;

    /**
     * @var float 替换媒体选取的开始时间，单位为秒，默认为 0。
     */
    public $StartTimeOffset;

    /**
     * @param string $MaterialId 素材 ID。
     * @param float $StartTimeOffset 替换媒体选取的开始时间，单位为秒，默认为 0。
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }
    }
}
