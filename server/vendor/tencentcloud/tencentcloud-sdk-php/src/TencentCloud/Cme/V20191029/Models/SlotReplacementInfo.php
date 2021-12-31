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
 * 卡槽替换信息。
 *
 * @method integer getId() 获取卡槽 Id。
 * @method void setId(integer $Id) 设置卡槽 Id。
 * @method string getReplacementType() 获取替换类型，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
注意：这里必须保证替换的素材类型与模板轨道数据的素材类型一致。
 * @method void setReplacementType(string $ReplacementType) 设置替换类型，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
注意：这里必须保证替换的素材类型与模板轨道数据的素材类型一致。
 * @method MediaReplacementInfo getMediaReplacementInfo() 获取媒体替换信息，仅当要替换的媒体类型为音频、视频、图片时有效。
 * @method void setMediaReplacementInfo(MediaReplacementInfo $MediaReplacementInfo) 设置媒体替换信息，仅当要替换的媒体类型为音频、视频、图片时有效。
 */
class SlotReplacementInfo extends AbstractModel
{
    /**
     * @var integer 卡槽 Id。
     */
    public $Id;

    /**
     * @var string 替换类型，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
注意：这里必须保证替换的素材类型与模板轨道数据的素材类型一致。
     */
    public $ReplacementType;

    /**
     * @var MediaReplacementInfo 媒体替换信息，仅当要替换的媒体类型为音频、视频、图片时有效。
     */
    public $MediaReplacementInfo;

    /**
     * @param integer $Id 卡槽 Id。
     * @param string $ReplacementType 替换类型，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
注意：这里必须保证替换的素材类型与模板轨道数据的素材类型一致。
     * @param MediaReplacementInfo $MediaReplacementInfo 媒体替换信息，仅当要替换的媒体类型为音频、视频、图片时有效。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ReplacementType",$param) and $param["ReplacementType"] !== null) {
            $this->ReplacementType = $param["ReplacementType"];
        }

        if (array_key_exists("MediaReplacementInfo",$param) and $param["MediaReplacementInfo"] !== null) {
            $this->MediaReplacementInfo = new MediaReplacementInfo();
            $this->MediaReplacementInfo->deserialize($param["MediaReplacementInfo"]);
        }
    }
}
