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
 * 对视频截图做封面任务输入参数类型
 *
 * @method integer getDefinition() 获取指定时间点截图模板 ID。
 * @method void setDefinition(integer $Definition) 设置指定时间点截图模板 ID。
 * @method string getPositionType() 获取截图方式。包含：
<li>Time：依照时间点截图</li>
<li>Percent：依照百分比截图</li>
 * @method void setPositionType(string $PositionType) 设置截图方式。包含：
<li>Time：依照时间点截图</li>
<li>Percent：依照百分比截图</li>
 * @method float getPositionValue() 获取截图位置：
<li>对于依照时间点截图，该值表示指定视频第几秒的截图作为封面</li>
<li>对于依照百分比截图，该值表示使用视频百分之多少的截图作为封面</li>
 * @method void setPositionValue(float $PositionValue) 设置截图位置：
<li>对于依照时间点截图，该值表示指定视频第几秒的截图作为封面</li>
<li>对于依照百分比截图，该值表示使用视频百分之多少的截图作为封面</li>
 * @method array getWatermarkSet() 获取水印列表，支持多张图片或文字水印，最大可支持 10 张。
 * @method void setWatermarkSet(array $WatermarkSet) 设置水印列表，支持多张图片或文字水印，最大可支持 10 张。
 */
class CoverBySnapshotTaskInput extends AbstractModel
{
    /**
     * @var integer 指定时间点截图模板 ID。
     */
    public $Definition;

    /**
     * @var string 截图方式。包含：
<li>Time：依照时间点截图</li>
<li>Percent：依照百分比截图</li>
     */
    public $PositionType;

    /**
     * @var float 截图位置：
<li>对于依照时间点截图，该值表示指定视频第几秒的截图作为封面</li>
<li>对于依照百分比截图，该值表示使用视频百分之多少的截图作为封面</li>
     */
    public $PositionValue;

    /**
     * @var array 水印列表，支持多张图片或文字水印，最大可支持 10 张。
     */
    public $WatermarkSet;

    /**
     * @param integer $Definition 指定时间点截图模板 ID。
     * @param string $PositionType 截图方式。包含：
<li>Time：依照时间点截图</li>
<li>Percent：依照百分比截图</li>
     * @param float $PositionValue 截图位置：
<li>对于依照时间点截图，该值表示指定视频第几秒的截图作为封面</li>
<li>对于依照百分比截图，该值表示使用视频百分之多少的截图作为封面</li>
     * @param array $WatermarkSet 水印列表，支持多张图片或文字水印，最大可支持 10 张。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("PositionType",$param) and $param["PositionType"] !== null) {
            $this->PositionType = $param["PositionType"];
        }

        if (array_key_exists("PositionValue",$param) and $param["PositionValue"] !== null) {
            $this->PositionValue = $param["PositionValue"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }
    }
}
