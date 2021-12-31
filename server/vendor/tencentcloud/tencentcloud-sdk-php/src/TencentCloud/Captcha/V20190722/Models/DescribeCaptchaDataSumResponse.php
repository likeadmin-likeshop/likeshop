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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaDataSum返回参数结构体
 *
 * @method integer getGetSum() 获取请求总量
 * @method void setGetSum(integer $GetSum) 设置请求总量
 * @method integer getVfySuccSum() 获取请求验证成功量
 * @method void setVfySuccSum(integer $VfySuccSum) 设置请求验证成功量
 * @method integer getVfySum() 获取请求验证量
 * @method void setVfySum(integer $VfySum) 设置请求验证量
 * @method integer getAttackSum() 获取拦截攻击量
 * @method void setAttackSum(integer $AttackSum) 设置拦截攻击量
 * @method string getCaptchaMsg() 获取返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCaptchaCode() 获取成功返回0  其它失败
 * @method void setCaptchaCode(integer $CaptchaCode) 设置成功返回0  其它失败
 * @method integer getCheckTicketSum() 获取票据校验量
 * @method void setCheckTicketSum(integer $CheckTicketSum) 设置票据校验量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCaptchaDataSumResponse extends AbstractModel
{
    /**
     * @var integer 请求总量
     */
    public $GetSum;

    /**
     * @var integer 请求验证成功量
     */
    public $VfySuccSum;

    /**
     * @var integer 请求验证量
     */
    public $VfySum;

    /**
     * @var integer 拦截攻击量
     */
    public $AttackSum;

    /**
     * @var string 返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaptchaMsg;

    /**
     * @var integer 成功返回0  其它失败
     */
    public $CaptchaCode;

    /**
     * @var integer 票据校验量
     */
    public $CheckTicketSum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $GetSum 请求总量
     * @param integer $VfySuccSum 请求验证成功量
     * @param integer $VfySum 请求验证量
     * @param integer $AttackSum 拦截攻击量
     * @param string $CaptchaMsg 返回信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CaptchaCode 成功返回0  其它失败
     * @param integer $CheckTicketSum 票据校验量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("GetSum",$param) and $param["GetSum"] !== null) {
            $this->GetSum = $param["GetSum"];
        }

        if (array_key_exists("VfySuccSum",$param) and $param["VfySuccSum"] !== null) {
            $this->VfySuccSum = $param["VfySuccSum"];
        }

        if (array_key_exists("VfySum",$param) and $param["VfySum"] !== null) {
            $this->VfySum = $param["VfySum"];
        }

        if (array_key_exists("AttackSum",$param) and $param["AttackSum"] !== null) {
            $this->AttackSum = $param["AttackSum"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CheckTicketSum",$param) and $param["CheckTicketSum"] !== null) {
            $this->CheckTicketSum = $param["CheckTicketSum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
