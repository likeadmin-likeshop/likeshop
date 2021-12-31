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
 * 各状态码的总次数，支持大多数的 HTTP 协议返回码。
 *
 * @method string getCode() 获取HTTP code，可选值包括:
400，403，404，500，502，503，504。
 * @method void setCode(string $Code) 设置HTTP code，可选值包括:
400，403，404，500，502，503，504。
 * @method integer getNum() 获取总次数。
 * @method void setNum(integer $Num) 设置总次数。
 */
class PlayCodeTotalInfo extends AbstractModel
{
    /**
     * @var string HTTP code，可选值包括:
400，403，404，500，502，503，504。
     */
    public $Code;

    /**
     * @var integer 总次数。
     */
    public $Num;

    /**
     * @param string $Code HTTP code，可选值包括:
400，403，404，500，502，503，504。
     * @param integer $Num 总次数。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
