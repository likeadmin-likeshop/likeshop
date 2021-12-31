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
namespace TencentCloud\Bizlive\V20190313\Models;
use TencentCloud\Common\AbstractModel;

/**
 * worker的区域信息
 *
 * @method integer getIdle() 获取该区域空闲机器数量
 * @method void setIdle(integer $Idle) 设置该区域空闲机器数量
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 */
class WorkerRegionInfo extends AbstractModel
{
    /**
     * @var integer 该区域空闲机器数量
     */
    public $Idle;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @param integer $Idle 该区域空闲机器数量
     * @param string $Region 区域
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
        if (array_key_exists("Idle",$param) and $param["Idle"] !== null) {
            $this->Idle = $param["Idle"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
