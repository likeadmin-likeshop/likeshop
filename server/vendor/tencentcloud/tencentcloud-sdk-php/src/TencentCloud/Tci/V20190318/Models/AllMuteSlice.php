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
 * 如果请求中开启了静音检测开关，则会返回所有的静音片段（静音时长超过阈值的片段）。
 *
 * @method array getMuteSlice() 获取所有静音片段。
 * @method void setMuteSlice(array $MuteSlice) 设置所有静音片段。
 * @method float getMuteRatio() 获取静音时长占比。
 * @method void setMuteRatio(float $MuteRatio) 设置静音时长占比。
 * @method integer getTotalMuteDuration() 获取静音总时长。
 * @method void setTotalMuteDuration(integer $TotalMuteDuration) 设置静音总时长。
 */
class AllMuteSlice extends AbstractModel
{
    /**
     * @var array 所有静音片段。
     */
    public $MuteSlice;

    /**
     * @var float 静音时长占比。
     */
    public $MuteRatio;

    /**
     * @var integer 静音总时长。
     */
    public $TotalMuteDuration;

    /**
     * @param array $MuteSlice 所有静音片段。
     * @param float $MuteRatio 静音时长占比。
     * @param integer $TotalMuteDuration 静音总时长。
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
        if (array_key_exists("MuteSlice",$param) and $param["MuteSlice"] !== null) {
            $this->MuteSlice = [];
            foreach ($param["MuteSlice"] as $key => $value){
                $obj = new MuteSlice();
                $obj->deserialize($value);
                array_push($this->MuteSlice, $obj);
            }
        }

        if (array_key_exists("MuteRatio",$param) and $param["MuteRatio"] !== null) {
            $this->MuteRatio = $param["MuteRatio"];
        }

        if (array_key_exists("TotalMuteDuration",$param) and $param["TotalMuteDuration"] !== null) {
            $this->TotalMuteDuration = $param["TotalMuteDuration"];
        }
    }
}
