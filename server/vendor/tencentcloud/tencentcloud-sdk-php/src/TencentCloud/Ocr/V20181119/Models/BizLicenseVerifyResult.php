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
 * 验真接口
 *
 * @method string getRegNum() 获取“0“：一致
“-1”：此号未查询到结果
 * @method void setRegNum(string $RegNum) 设置“0“：一致
“-1”：此号未查询到结果
 * @method string getName() 获取“0“：一致
“-1”：不一致
“”：不验真
 * @method void setName(string $Name) 设置“0“：一致
“-1”：不一致
“”：不验真
 * @method string getAddress() 获取“0“：一致
“-1”：不一致
“”：不验真
 * @method void setAddress(string $Address) 设置“0“：一致
“-1”：不一致
“”：不验真
 */
class BizLicenseVerifyResult extends AbstractModel
{
    /**
     * @var string “0“：一致
“-1”：此号未查询到结果
     */
    public $RegNum;

    /**
     * @var string “0“：一致
“-1”：不一致
“”：不验真
     */
    public $Name;

    /**
     * @var string “0“：一致
“-1”：不一致
“”：不验真
     */
    public $Address;

    /**
     * @param string $RegNum “0“：一致
“-1”：此号未查询到结果
     * @param string $Name “0“：一致
“-1”：不一致
“”：不验真
     * @param string $Address “0“：一致
“-1”：不一致
“”：不验真
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
        if (array_key_exists("RegNum",$param) and $param["RegNum"] !== null) {
            $this->RegNum = $param["RegNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
