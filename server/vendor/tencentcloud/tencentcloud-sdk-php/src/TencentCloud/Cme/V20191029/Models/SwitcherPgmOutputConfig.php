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
 * 导播台主监输出配置信息
 *
 * @method integer getTemplateId() 获取导播台输出模板 ID，可取值：
<li>10001：分辨率为1080 P；</li>
<li>10002：分辨率为720 P；</li>
<li>10003：分辨率为480 P。</li>
 * @method void setTemplateId(integer $TemplateId) 设置导播台输出模板 ID，可取值：
<li>10001：分辨率为1080 P；</li>
<li>10002：分辨率为720 P；</li>
<li>10003：分辨率为480 P。</li>
 * @method integer getWidth() 获取导播台输出宽，单位：像素。
 * @method void setWidth(integer $Width) 设置导播台输出宽，单位：像素。
 * @method integer getHeight() 获取导播台输出高，单位：像素。
 * @method void setHeight(integer $Height) 设置导播台输出高，单位：像素。
 * @method integer getFps() 获取导播台输出帧率，单位：帧/秒
 * @method void setFps(integer $Fps) 设置导播台输出帧率，单位：帧/秒
 * @method integer getBitRate() 获取导播台输出码率， 单位：bit/s。
 * @method void setBitRate(integer $BitRate) 设置导播台输出码率， 单位：bit/s。
 */
class SwitcherPgmOutputConfig extends AbstractModel
{
    /**
     * @var integer 导播台输出模板 ID，可取值：
<li>10001：分辨率为1080 P；</li>
<li>10002：分辨率为720 P；</li>
<li>10003：分辨率为480 P。</li>
     */
    public $TemplateId;

    /**
     * @var integer 导播台输出宽，单位：像素。
     */
    public $Width;

    /**
     * @var integer 导播台输出高，单位：像素。
     */
    public $Height;

    /**
     * @var integer 导播台输出帧率，单位：帧/秒
     */
    public $Fps;

    /**
     * @var integer 导播台输出码率， 单位：bit/s。
     */
    public $BitRate;

    /**
     * @param integer $TemplateId 导播台输出模板 ID，可取值：
<li>10001：分辨率为1080 P；</li>
<li>10002：分辨率为720 P；</li>
<li>10003：分辨率为480 P。</li>
     * @param integer $Width 导播台输出宽，单位：像素。
     * @param integer $Height 导播台输出高，单位：像素。
     * @param integer $Fps 导播台输出帧率，单位：帧/秒
     * @param integer $BitRate 导播台输出码率， 单位：bit/s。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }
    }
}
