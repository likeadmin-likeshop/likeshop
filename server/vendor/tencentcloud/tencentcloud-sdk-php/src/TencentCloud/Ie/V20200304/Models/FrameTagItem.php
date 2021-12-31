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
 * 帧标签
 *
 * @method integer getStartPts() 获取标签起始时间戳PTS(ms)
 * @method void setStartPts(integer $StartPts) 设置标签起始时间戳PTS(ms)
 * @method integer getEndPts() 获取语句结束时间戳PTS(ms)
 * @method void setEndPts(integer $EndPts) 设置语句结束时间戳PTS(ms)
 * @method string getPeriod() 获取字符串形式的起始结束时间
 * @method void setPeriod(string $Period) 设置字符串形式的起始结束时间
 * @method array getTagItems() 获取标签数组
 * @method void setTagItems(array $TagItems) 设置标签数组
 */
class FrameTagItem extends AbstractModel
{
    /**
     * @var integer 标签起始时间戳PTS(ms)
     */
    public $StartPts;

    /**
     * @var integer 语句结束时间戳PTS(ms)
     */
    public $EndPts;

    /**
     * @var string 字符串形式的起始结束时间
     */
    public $Period;

    /**
     * @var array 标签数组
     */
    public $TagItems;

    /**
     * @param integer $StartPts 标签起始时间戳PTS(ms)
     * @param integer $EndPts 语句结束时间戳PTS(ms)
     * @param string $Period 字符串形式的起始结束时间
     * @param array $TagItems 标签数组
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
        if (array_key_exists("StartPts",$param) and $param["StartPts"] !== null) {
            $this->StartPts = $param["StartPts"];
        }

        if (array_key_exists("EndPts",$param) and $param["EndPts"] !== null) {
            $this->EndPts = $param["EndPts"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }
    }
}
