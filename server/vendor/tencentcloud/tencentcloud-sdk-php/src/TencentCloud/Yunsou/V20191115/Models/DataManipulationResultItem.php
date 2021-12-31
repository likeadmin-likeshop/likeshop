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
namespace TencentCloud\Yunsou\V20191115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据操作结果明细
 *
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 * @method string getDocId() 获取文档ID
 * @method void setDocId(string $DocId) 设置文档ID
 * @method integer getErrno() 获取错误码
 * @method void setErrno(integer $Errno) 设置错误码
 */
class DataManipulationResultItem extends AbstractModel
{
    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @var string 文档ID
     */
    public $DocId;

    /**
     * @var integer 错误码
     */
    public $Errno;

    /**
     * @param string $Result 结果
     * @param string $DocId 文档ID
     * @param integer $Errno 错误码
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

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("Errno",$param) and $param["Errno"] !== null) {
            $this->Errno = $param["Errno"];
        }
    }
}
