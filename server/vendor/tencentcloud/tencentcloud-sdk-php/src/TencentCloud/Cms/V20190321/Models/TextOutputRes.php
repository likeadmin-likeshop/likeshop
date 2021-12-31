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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息类输出结果参数
 *
 * @method string getOperator() 获取操作人,信安处理人企业微信ID
 * @method void setOperator(string $Operator) 设置操作人,信安处理人企业微信ID
 * @method integer getResultCode() 获取恶意操作码，
删除（1）， 通过（2）， 先审后发（100012）
 * @method void setResultCode(integer $ResultCode) 设置恶意操作码，
删除（1）， 通过（2）， 先审后发（100012）
 * @method string getResultMsg() 获取操作结果备注说明
 * @method void setResultMsg(string $ResultMsg) 设置操作结果备注说明
 * @method integer getResultType() 获取恶意类型，广告（10001）， 政治（20001）， 色情（20002）， 社会事件（20004）， 暴力（20011）， 低俗（20012）， 违法犯罪（20006）， 欺诈（20008）， 版权（20013）， 谣言（20104）， 其他（21000）
 * @method void setResultType(integer $ResultType) 设置恶意类型，广告（10001）， 政治（20001）， 色情（20002）， 社会事件（20004）， 暴力（20011）， 低俗（20012）， 违法犯罪（20006）， 欺诈（20008）， 版权（20013）， 谣言（20104）， 其他（21000）
 */
class TextOutputRes extends AbstractModel
{
    /**
     * @var string 操作人,信安处理人企业微信ID
     */
    public $Operator;

    /**
     * @var integer 恶意操作码，
删除（1）， 通过（2）， 先审后发（100012）
     */
    public $ResultCode;

    /**
     * @var string 操作结果备注说明
     */
    public $ResultMsg;

    /**
     * @var integer 恶意类型，广告（10001）， 政治（20001）， 色情（20002）， 社会事件（20004）， 暴力（20011）， 低俗（20012）， 违法犯罪（20006）， 欺诈（20008）， 版权（20013）， 谣言（20104）， 其他（21000）
     */
    public $ResultType;

    /**
     * @param string $Operator 操作人,信安处理人企业微信ID
     * @param integer $ResultCode 恶意操作码，
删除（1）， 通过（2）， 先审后发（100012）
     * @param string $ResultMsg 操作结果备注说明
     * @param integer $ResultType 恶意类型，广告（10001）， 政治（20001）， 色情（20002）， 社会事件（20004）， 暴力（20011）， 低俗（20012）， 违法犯罪（20006）， 欺诈（20008）， 版权（20013）， 谣言（20104）， 其他（21000）
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("ResultMsg",$param) and $param["ResultMsg"] !== null) {
            $this->ResultMsg = $param["ResultMsg"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }
    }
}
