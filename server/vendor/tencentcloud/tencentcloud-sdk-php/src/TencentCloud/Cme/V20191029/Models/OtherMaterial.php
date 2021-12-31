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
 * 其他类型素材
 *
 * @method string getMaterialUrl() 获取素材媒体文件的播放 URL 地址。
 * @method void setMaterialUrl(string $MaterialUrl) 设置素材媒体文件的播放 URL 地址。
 * @method string getVodFileId() 获取云点播媒资 FileId。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资 FileId。
 */
class OtherMaterial extends AbstractModel
{
    /**
     * @var string 素材媒体文件的播放 URL 地址。
     */
    public $MaterialUrl;

    /**
     * @var string 云点播媒资 FileId。
     */
    public $VodFileId;

    /**
     * @param string $MaterialUrl 素材媒体文件的播放 URL 地址。
     * @param string $VodFileId 云点播媒资 FileId。
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
        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }
    }
}
