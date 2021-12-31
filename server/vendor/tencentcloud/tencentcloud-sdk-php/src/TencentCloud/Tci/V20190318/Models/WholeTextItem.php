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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 含有语速的句子信息
 *
 * @method TextItem getTextItem() 获取当前句子的信息
 * @method void setTextItem(TextItem $TextItem) 设置当前句子的信息
 * @method float getAvgVolume() 获取Vad的平均音量
 * @method void setAvgVolume(float $AvgVolume) 设置Vad的平均音量
 * @method float getMaxVolume() 获取Vad的最大音量
 * @method void setMaxVolume(float $MaxVolume) 设置Vad的最大音量
 * @method float getMinVolume() 获取Vad的最小音量
 * @method void setMinVolume(float $MinVolume) 设置Vad的最小音量
 * @method float getSpeed() 获取当前句子的语速
 * @method void setSpeed(float $Speed) 设置当前句子的语速
 */
class WholeTextItem extends AbstractModel
{
    /**
     * @var TextItem 当前句子的信息
     */
    public $TextItem;

    /**
     * @var float Vad的平均音量
     */
    public $AvgVolume;

    /**
     * @var float Vad的最大音量
     */
    public $MaxVolume;

    /**
     * @var float Vad的最小音量
     */
    public $MinVolume;

    /**
     * @var float 当前句子的语速
     */
    public $Speed;

    /**
     * @param TextItem $TextItem 当前句子的信息
     * @param float $AvgVolume Vad的平均音量
     * @param float $MaxVolume Vad的最大音量
     * @param float $MinVolume Vad的最小音量
     * @param float $Speed 当前句子的语速
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
        if (array_key_exists("TextItem",$param) and $param["TextItem"] !== null) {
            $this->TextItem = new TextItem();
            $this->TextItem->deserialize($param["TextItem"]);
        }

        if (array_key_exists("AvgVolume",$param) and $param["AvgVolume"] !== null) {
            $this->AvgVolume = $param["AvgVolume"];
        }

        if (array_key_exists("MaxVolume",$param) and $param["MaxVolume"] !== null) {
            $this->MaxVolume = $param["MaxVolume"];
        }

        if (array_key_exists("MinVolume",$param) and $param["MinVolume"] !== null) {
            $this->MinVolume = $param["MinVolume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
