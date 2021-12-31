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
namespace TencentCloud\Cii\V20201210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结构化对比指标（准确率/召回率）数据
 *
 * @method string getShortStructAccuracy() 获取短文准确率
 * @method void setShortStructAccuracy(string $ShortStructAccuracy) 设置短文准确率
 * @method string getShortStructRecall() 获取短文召回率
 * @method void setShortStructRecall(string $ShortStructRecall) 设置短文召回率
 * @method string getLongStructAccuracy() 获取长文结构化准确率
 * @method void setLongStructAccuracy(string $LongStructAccuracy) 设置长文结构化准确率
 * @method string getLongStructRecall() 获取长文结构化召回率
 * @method void setLongStructRecall(string $LongStructRecall) 设置长文结构化召回率
 * @method string getLongContentAccuracy() 获取长文提取准确率
 * @method void setLongContentAccuracy(string $LongContentAccuracy) 设置长文提取准确率
 * @method string getLongContentRecall() 获取长文提取召回率
 * @method void setLongContentRecall(string $LongContentRecall) 设置长文提取召回率
 */
class CompareMetricsData extends AbstractModel
{
    /**
     * @var string 短文准确率
     */
    public $ShortStructAccuracy;

    /**
     * @var string 短文召回率
     */
    public $ShortStructRecall;

    /**
     * @var string 长文结构化准确率
     */
    public $LongStructAccuracy;

    /**
     * @var string 长文结构化召回率
     */
    public $LongStructRecall;

    /**
     * @var string 长文提取准确率
     */
    public $LongContentAccuracy;

    /**
     * @var string 长文提取召回率
     */
    public $LongContentRecall;

    /**
     * @param string $ShortStructAccuracy 短文准确率
     * @param string $ShortStructRecall 短文召回率
     * @param string $LongStructAccuracy 长文结构化准确率
     * @param string $LongStructRecall 长文结构化召回率
     * @param string $LongContentAccuracy 长文提取准确率
     * @param string $LongContentRecall 长文提取召回率
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
        if (array_key_exists("ShortStructAccuracy",$param) and $param["ShortStructAccuracy"] !== null) {
            $this->ShortStructAccuracy = $param["ShortStructAccuracy"];
        }

        if (array_key_exists("ShortStructRecall",$param) and $param["ShortStructRecall"] !== null) {
            $this->ShortStructRecall = $param["ShortStructRecall"];
        }

        if (array_key_exists("LongStructAccuracy",$param) and $param["LongStructAccuracy"] !== null) {
            $this->LongStructAccuracy = $param["LongStructAccuracy"];
        }

        if (array_key_exists("LongStructRecall",$param) and $param["LongStructRecall"] !== null) {
            $this->LongStructRecall = $param["LongStructRecall"];
        }

        if (array_key_exists("LongContentAccuracy",$param) and $param["LongContentAccuracy"] !== null) {
            $this->LongContentAccuracy = $param["LongContentAccuracy"];
        }

        if (array_key_exists("LongContentRecall",$param) and $param["LongContentRecall"] !== null) {
            $this->LongContentRecall = $param["LongContentRecall"];
        }
    }
}
