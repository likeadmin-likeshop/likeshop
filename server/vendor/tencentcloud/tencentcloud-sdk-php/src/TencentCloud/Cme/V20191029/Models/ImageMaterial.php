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
 * 图片素材信息
 *
 * @method integer getHeight() 获取图片高度，单位：px。
 * @method void setHeight(integer $Height) 设置图片高度，单位：px。
 * @method integer getWidth() 获取图片宽度，单位：px。
 * @method void setWidth(integer $Width) 设置图片宽度，单位：px。
 * @method string getMaterialUrl() 获取素材媒体文件的展示 URL 地址。
 * @method void setMaterialUrl(string $MaterialUrl) 设置素材媒体文件的展示 URL 地址。
 * @method integer getSize() 获取图片大小，单位：字节。
 * @method void setSize(integer $Size) 设置图片大小，单位：字节。
 * @method string getOriginalUrl() 获取素材媒体文件的原始 URL 地址。
 * @method void setOriginalUrl(string $OriginalUrl) 设置素材媒体文件的原始 URL 地址。
 * @method string getVodFileId() 获取云点播媒资 FileId。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资 FileId。
 */
class ImageMaterial extends AbstractModel
{
    /**
     * @var integer 图片高度，单位：px。
     */
    public $Height;

    /**
     * @var integer 图片宽度，单位：px。
     */
    public $Width;

    /**
     * @var string 素材媒体文件的展示 URL 地址。
     */
    public $MaterialUrl;

    /**
     * @var integer 图片大小，单位：字节。
     */
    public $Size;

    /**
     * @var string 素材媒体文件的原始 URL 地址。
     */
    public $OriginalUrl;

    /**
     * @var string 云点播媒资 FileId。
     */
    public $VodFileId;

    /**
     * @param integer $Height 图片高度，单位：px。
     * @param integer $Width 图片宽度，单位：px。
     * @param string $MaterialUrl 素材媒体文件的展示 URL 地址。
     * @param integer $Size 图片大小，单位：字节。
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
        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("OriginalUrl",$param) and $param["OriginalUrl"] !== null) {
            $this->OriginalUrl = $param["OriginalUrl"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }
    }
}
