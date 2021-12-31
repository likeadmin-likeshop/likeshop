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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 区域性别平均停留时间子结构
 *
 * @method float getMaleAvrStayTime() 获取男性平均停留时间
 * @method void setMaleAvrStayTime(float $MaleAvrStayTime) 设置男性平均停留时间
 * @method float getFemaleAvrStayTime() 获取女性平均停留时间
 * @method void setFemaleAvrStayTime(float $FemaleAvrStayTime) 设置女性平均停留时间
 */
class ZoneAgeGroupAvrStayTime extends AbstractModel
{
    /**
     * @var float 男性平均停留时间
     */
    public $MaleAvrStayTime;

    /**
     * @var float 女性平均停留时间
     */
    public $FemaleAvrStayTime;

    /**
     * @param float $MaleAvrStayTime 男性平均停留时间
     * @param float $FemaleAvrStayTime 女性平均停留时间
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
        if (array_key_exists("MaleAvrStayTime",$param) and $param["MaleAvrStayTime"] !== null) {
            $this->MaleAvrStayTime = $param["MaleAvrStayTime"];
        }

        if (array_key_exists("FemaleAvrStayTime",$param) and $param["FemaleAvrStayTime"] !== null) {
            $this->FemaleAvrStayTime = $param["FemaleAvrStayTime"];
        }
    }
}
