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
 * 音频素材信息
 *
 * @method MediaMetaData getMetaData() 获取素材元信息。
 * @method void setMetaData(MediaMetaData $MetaData) 设置素材元信息。
 * @method string getMaterialUrl() 获取素材媒体文件的播放 URL 地址。
 * @method void setMaterialUrl(string $MaterialUrl) 设置素材媒体文件的播放 URL 地址。
 * @method string getCoverUrl() 获取素材媒体文件的封面图片地址。
 * @method void setCoverUrl(string $CoverUrl) 设置素材媒体文件的封面图片地址。
 * @method MaterialStatus getMaterialStatus() 获取素材状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialStatus(MaterialStatus $MaterialStatus) 设置素材状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalUrl() 获取素材媒体文件的原始 URL 地址。
 * @method void setOriginalUrl(string $OriginalUrl) 设置素材媒体文件的原始 URL 地址。
 * @method string getVodFileId() 获取云点播媒资 FileId。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资 FileId。
 */
class AudioMaterial extends AbstractModel
{
    /**
     * @var MediaMetaData 素材元信息。
     */
    public $MetaData;

    /**
     * @var string 素材媒体文件的播放 URL 地址。
     */
    public $MaterialUrl;

    /**
     * @var string 素材媒体文件的封面图片地址。
     */
    public $CoverUrl;

    /**
     * @var MaterialStatus 素材状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialStatus;

    /**
     * @var string 素材媒体文件的原始 URL 地址。
     */
    public $OriginalUrl;

    /**
     * @var string 云点播媒资 FileId。
     */
    public $VodFileId;

    /**
     * @param MediaMetaData $MetaData 素材元信息。
     * @param string $MaterialUrl 素材媒体文件的播放 URL 地址。
     * @param string $CoverUrl 素材媒体文件的封面图片地址。
     * @param MaterialStatus $MaterialStatus 素材状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalUrl 素材媒体文件的原始 URL 地址。
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
        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("MaterialStatus",$param) and $param["MaterialStatus"] !== null) {
            $this->MaterialStatus = new MaterialStatus();
            $this->MaterialStatus->deserialize($param["MaterialStatus"]);
        }

        if (array_key_exists("OriginalUrl",$param) and $param["OriginalUrl"] !== null) {
            $this->OriginalUrl = $param["OriginalUrl"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }
    }
}
