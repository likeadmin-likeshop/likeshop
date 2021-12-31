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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRoleWithSAML请求参数结构体
 *
 * @method string getSAMLAssertion() 获取base64 编码的 SAML 断言信息
 * @method void setSAMLAssertion(string $SAMLAssertion) 设置base64 编码的 SAML 断言信息
 * @method string getPrincipalArn() 获取扮演者访问描述名
 * @method void setPrincipalArn(string $PrincipalArn) 设置扮演者访问描述名
 * @method string getRoleArn() 获取角色访问描述名
 * @method void setRoleArn(string $RoleArn) 设置角色访问描述名
 * @method string getRoleSessionName() 获取会话名称
 * @method void setRoleSessionName(string $RoleSessionName) 设置会话名称
 * @method integer getDurationSeconds() 获取指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
 * @method void setDurationSeconds(integer $DurationSeconds) 设置指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
 */
class AssumeRoleWithSAMLRequest extends AbstractModel
{
    /**
     * @var string base64 编码的 SAML 断言信息
     */
    public $SAMLAssertion;

    /**
     * @var string 扮演者访问描述名
     */
    public $PrincipalArn;

    /**
     * @var string 角色访问描述名
     */
    public $RoleArn;

    /**
     * @var string 会话名称
     */
    public $RoleSessionName;

    /**
     * @var integer 指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
     */
    public $DurationSeconds;

    /**
     * @param string $SAMLAssertion base64 编码的 SAML 断言信息
     * @param string $PrincipalArn 扮演者访问描述名
     * @param string $RoleArn 角色访问描述名
     * @param string $RoleSessionName 会话名称
     * @param integer $DurationSeconds 指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
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
        if (array_key_exists("SAMLAssertion",$param) and $param["SAMLAssertion"] !== null) {
            $this->SAMLAssertion = $param["SAMLAssertion"];
        }

        if (array_key_exists("PrincipalArn",$param) and $param["PrincipalArn"] !== null) {
            $this->PrincipalArn = $param["PrincipalArn"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("RoleSessionName",$param) and $param["RoleSessionName"] !== null) {
            $this->RoleSessionName = $param["RoleSessionName"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
