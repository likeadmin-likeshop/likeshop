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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放错误码信息
 *
 * @method string getHttpStatus() 获取播放HTTP状态码。
 * @method void setHttpStatus(string $HttpStatus) 设置播放HTTP状态码。
 * @method integer getNum() 获取个数。
 * @method void setNum(integer $Num) 设置个数。
 */
class HttpStatusInfo extends AbstractModel
{
    /**
     * @var string 播放HTTP状态码。
     */
    public $HttpStatus;

    /**
     * @var integer 个数。
     */
    public $Num;

    /**
     * @param string $HttpStatus 播放HTTP状态码。
     * @param integer $Num 个数。
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
        if (array_key_exists("HttpStatus",$param) and $param["HttpStatus"] !== null) {
            $this->HttpStatus = $param["HttpStatus"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
