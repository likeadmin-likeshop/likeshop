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
 * 表情比例统计
 *
 * @method integer getCount() 获取出现次数
 * @method void setCount(integer $Count) 设置出现次数
 * @method string getExpress() 获取表情
 * @method void setExpress(string $Express) 设置表情
 * @method float getRatio() 获取该表情时长占所有表情时长的比例
 * @method void setRatio(float $Ratio) 设置该表情时长占所有表情时长的比例
 * @method float getRatioUseDuration() 获取该表情时长占视频总时长的比例
 * @method void setRatioUseDuration(float $RatioUseDuration) 设置该表情时长占视频总时长的比例
 */
class ExpressRatioStatistic extends AbstractModel
{
    /**
     * @var integer 出现次数
     */
    public $Count;

    /**
     * @var string 表情
     */
    public $Express;

    /**
     * @var float 该表情时长占所有表情时长的比例
     */
    public $Ratio;

    /**
     * @var float 该表情时长占视频总时长的比例
     */
    public $RatioUseDuration;

    /**
     * @param integer $Count 出现次数
     * @param string $Express 表情
     * @param float $Ratio 该表情时长占所有表情时长的比例
     * @param float $RatioUseDuration 该表情时长占视频总时长的比例
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Express",$param) and $param["Express"] !== null) {
            $this->Express = $param["Express"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("RatioUseDuration",$param) and $param["RatioUseDuration"] !== null) {
            $this->RatioUseDuration = $param["RatioUseDuration"];
        }
    }
}
