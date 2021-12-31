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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回购车意向评级
 *
 * @method integer getRank() 获取线索评级（取值：0、1、2、3分别代表无、低、中、高意愿）
 * @method void setRank(integer $Rank) 设置线索评级（取值：0、1、2、3分别代表无、低、中、高意愿）
 */
class RatingData extends AbstractModel
{
    /**
     * @var integer 线索评级（取值：0、1、2、3分别代表无、低、中、高意愿）
     */
    public $Rank;

    /**
     * @param integer $Rank 线索评级（取值：0、1、2、3分别代表无、低、中、高意愿）
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
        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }
    }
}
