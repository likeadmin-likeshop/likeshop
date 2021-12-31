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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业四要素核验结果
 *
 * @method integer getResult() 获取企业四要素核验结果状态码
 * @method void setResult(integer $Result) 设置企业四要素核验结果状态码
 * @method string getDesc() 获取企业四要素核验结果描述
 * @method void setDesc(string $Desc) 设置企业四要素核验结果描述
 */
class Detail extends AbstractModel
{
    /**
     * @var integer 企业四要素核验结果状态码
     */
    public $Result;

    /**
     * @var string 企业四要素核验结果描述
     */
    public $Desc;

    /**
     * @param integer $Result 企业四要素核验结果状态码
     * @param string $Desc 企业四要素核验结果描述
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
