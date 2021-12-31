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
namespace TencentCloud\Tics\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * { "source": "inergj_ai_predict", "stamp": "msraminer", "time": 1531994023 }
 *
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getStamp() 获取标记
 * @method void setStamp(string $Stamp) 设置标记
 * @method integer getTime() 获取时间
 * @method void setTime(integer $Time) 设置时间
 */
class IntelligenceType extends AbstractModel
{
    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 标记
     */
    public $Stamp;

    /**
     * @var integer 时间
     */
    public $Time;

    /**
     * @param string $Source 来源
     * @param string $Stamp 标记
     * @param integer $Time 时间
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Stamp",$param) and $param["Stamp"] !== null) {
            $this->Stamp = $param["Stamp"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
