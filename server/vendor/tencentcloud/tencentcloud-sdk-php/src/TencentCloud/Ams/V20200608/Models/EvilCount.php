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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 违规数据分布
 *
 * @method string getEvilType() 获取----非必选，该参数功能暂未对外开放
 * @method void setEvilType(string $EvilType) 设置----非必选，该参数功能暂未对外开放
 * @method integer getCount() 获取分布类型总量
 * @method void setCount(integer $Count) 设置分布类型总量
 */
class EvilCount extends AbstractModel
{
    /**
     * @var string ----非必选，该参数功能暂未对外开放
     */
    public $EvilType;

    /**
     * @var integer 分布类型总量
     */
    public $Count;

    /**
     * @param string $EvilType ----非必选，该参数功能暂未对外开放
     * @param integer $Count 分布类型总量
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
        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
