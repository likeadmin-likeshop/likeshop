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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频转动图结果信息
 *
 * @method string getUrl() 获取转动图的文件地址。
 * @method void setUrl(string $Url) 设置转动图的文件地址。
 * @method integer getDefinition() 获取转动图模板 ID，参见[转动图参数模板](https://cloud.tencent.com/document/product/266/33481#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method void setDefinition(integer $Definition) 设置转动图模板 ID，参见[转动图参数模板](https://cloud.tencent.com/document/product/266/33481#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method string getContainer() 获取动图格式，如 gif。
 * @method void setContainer(string $Container) 设置动图格式，如 gif。
 * @method integer getHeight() 获取动图的高度，单位：px。
 * @method void setHeight(integer $Height) 设置动图的高度，单位：px。
 * @method integer getWidth() 获取动图的宽度，单位：px。
 * @method void setWidth(integer $Width) 设置动图的宽度，单位：px。
 * @method integer getBitrate() 获取动图码率，单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置动图码率，单位：bps。
 * @method integer getSize() 获取动图大小，单位：字节。
 * @method void setSize(integer $Size) 设置动图大小，单位：字节。
 * @method string getMd5() 获取动图的md5值。
 * @method void setMd5(string $Md5) 设置动图的md5值。
 * @method float getStartTimeOffset() 获取动图在视频中的起始时间偏移，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置动图在视频中的起始时间偏移，单位：秒。
 * @method float getEndTimeOffset() 获取动图在视频中的结束时间偏移，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置动图在视频中的结束时间偏移，单位：秒。
 */
class MediaAnimatedGraphicsItem extends AbstractModel
{
    /**
     * @var string 转动图的文件地址。
     */
    public $Url;

    /**
     * @var integer 转动图模板 ID，参见[转动图参数模板](https://cloud.tencent.com/document/product/266/33481#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     */
    public $Definition;

    /**
     * @var string 动图格式，如 gif。
     */
    public $Container;

    /**
     * @var integer 动图的高度，单位：px。
     */
    public $Height;

    /**
     * @var integer 动图的宽度，单位：px。
     */
    public $Width;

    /**
     * @var integer 动图码率，单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 动图大小，单位：字节。
     */
    public $Size;

    /**
     * @var string 动图的md5值。
     */
    public $Md5;

    /**
     * @var float 动图在视频中的起始时间偏移，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 动图在视频中的结束时间偏移，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @param string $Url 转动图的文件地址。
     * @param integer $Definition 转动图模板 ID，参见[转动图参数模板](https://cloud.tencent.com/document/product/266/33481#.3Cspan-id-.3D-.22zdt.22.3E.3C.2Fspan.3E.E8.BD.AC.E5.8A.A8.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     * @param string $Container 动图格式，如 gif。
     * @param integer $Height 动图的高度，单位：px。
     * @param integer $Width 动图的宽度，单位：px。
     * @param integer $Bitrate 动图码率，单位：bps。
     * @param integer $Size 动图大小，单位：字节。
     * @param string $Md5 动图的md5值。
     * @param float $StartTimeOffset 动图在视频中的起始时间偏移，单位：秒。
     * @param float $EndTimeOffset 动图在视频中的结束时间偏移，单位：秒。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
