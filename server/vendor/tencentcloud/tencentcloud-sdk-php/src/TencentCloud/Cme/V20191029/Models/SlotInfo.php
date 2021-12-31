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
 * 卡槽信息。
 *
 * @method integer getId() 获取卡槽 Id。
 * @method void setId(integer $Id) 设置卡槽 Id。
 * @method string getType() 获取素材类型，同素材素材，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
 * @method void setType(string $Type) 设置素材类型，同素材素材，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
 * @method string getDefaultMaterialId() 获取默认素材 Id。
 * @method void setDefaultMaterialId(string $DefaultMaterialId) 设置默认素材 Id。
 * @method float getDuration() 获取素材时长，单位秒。
 * @method void setDuration(float $Duration) 设置素材时长，单位秒。
 */
class SlotInfo extends AbstractModel
{
    /**
     * @var integer 卡槽 Id。
     */
    public $Id;

    /**
     * @var string 素材类型，同素材素材，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
     */
    public $Type;

    /**
     * @var string 默认素材 Id。
     */
    public $DefaultMaterialId;

    /**
     * @var float 素材时长，单位秒。
     */
    public $Duration;

    /**
     * @param integer $Id 卡槽 Id。
     * @param string $Type 素材类型，同素材素材，可取值有：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片。</li>
     * @param string $DefaultMaterialId 默认素材 Id。
     * @param float $Duration 素材时长，单位秒。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultMaterialId",$param) and $param["DefaultMaterialId"] !== null) {
            $this->DefaultMaterialId = $param["DefaultMaterialId"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
