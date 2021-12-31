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
namespace TencentCloud\Aa\V20200224\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 诈骗信息。
 *
 * @method string getContentLabel() 获取内容标签。
 * @method void setContentLabel(string $ContentLabel) 设置内容标签。
 * @method integer getContentRiskLevel() 获取内容风险等级：
0：正常。
1：可疑。
 * @method void setContentRiskLevel(integer $ContentRiskLevel) 设置内容风险等级：
0：正常。
1：可疑。
 * @method integer getContentType() 获取内容产生形式：
0：对话。
1：广播。
 * @method void setContentType(integer $ContentType) 设置内容产生形式：
0：对话。
1：广播。
 * @method integer getFraudType() 获取诈骗账号类型：
1：11位手机号。
2：QQ账号。
 * @method void setFraudType(integer $FraudType) 设置诈骗账号类型：
1：11位手机号。
2：QQ账号。
 * @method string getFraudAccount() 获取诈骗账号，手机号或QQ账号。
 * @method void setFraudAccount(string $FraudAccount) 设置诈骗账号，手机号或QQ账号。
 */
class OnlineScamInfo extends AbstractModel
{
    /**
     * @var string 内容标签。
     */
    public $ContentLabel;

    /**
     * @var integer 内容风险等级：
0：正常。
1：可疑。
     */
    public $ContentRiskLevel;

    /**
     * @var integer 内容产生形式：
0：对话。
1：广播。
     */
    public $ContentType;

    /**
     * @var integer 诈骗账号类型：
1：11位手机号。
2：QQ账号。
     */
    public $FraudType;

    /**
     * @var string 诈骗账号，手机号或QQ账号。
     */
    public $FraudAccount;

    /**
     * @param string $ContentLabel 内容标签。
     * @param integer $ContentRiskLevel 内容风险等级：
0：正常。
1：可疑。
     * @param integer $ContentType 内容产生形式：
0：对话。
1：广播。
     * @param integer $FraudType 诈骗账号类型：
1：11位手机号。
2：QQ账号。
     * @param string $FraudAccount 诈骗账号，手机号或QQ账号。
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
        if (array_key_exists("ContentLabel",$param) and $param["ContentLabel"] !== null) {
            $this->ContentLabel = $param["ContentLabel"];
        }

        if (array_key_exists("ContentRiskLevel",$param) and $param["ContentRiskLevel"] !== null) {
            $this->ContentRiskLevel = $param["ContentRiskLevel"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("FraudType",$param) and $param["FraudType"] !== null) {
            $this->FraudType = $param["FraudType"];
        }

        if (array_key_exists("FraudAccount",$param) and $param["FraudAccount"] !== null) {
            $this->FraudAccount = $param["FraudAccount"];
        }
    }
}
