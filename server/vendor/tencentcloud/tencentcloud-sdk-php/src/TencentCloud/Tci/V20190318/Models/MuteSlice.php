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
 * 所有静音片段。
 *
 * @method integer getMuteBtm() 获取起始时间。
 * @method void setMuteBtm(integer $MuteBtm) 设置起始时间。
 * @method integer getMuteEtm() 获取终止时间。
 * @method void setMuteEtm(integer $MuteEtm) 设置终止时间。
 */
class MuteSlice extends AbstractModel
{
    /**
     * @var integer 起始时间。
     */
    public $MuteBtm;

    /**
     * @var integer 终止时间。
     */
    public $MuteEtm;

    /**
     * @param integer $MuteBtm 起始时间。
     * @param integer $MuteEtm 终止时间。
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
        if (array_key_exists("MuteBtm",$param) and $param["MuteBtm"] !== null) {
            $this->MuteBtm = $param["MuteBtm"];
        }

        if (array_key_exists("MuteEtm",$param) and $param["MuteEtm"] !== null) {
            $this->MuteEtm = $param["MuteEtm"];
        }
    }
}
