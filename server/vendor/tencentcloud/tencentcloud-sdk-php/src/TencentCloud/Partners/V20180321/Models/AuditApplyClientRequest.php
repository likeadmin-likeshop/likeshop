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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuditApplyClient请求参数结构体
 *
 * @method string getClientUin() 获取待审核客户账号ID
 * @method void setClientUin(string $ClientUin) 设置待审核客户账号ID
 * @method string getAuditResult() 获取审核结果，可能的取值：accept/reject
 * @method void setAuditResult(string $AuditResult) 设置审核结果，可能的取值：accept/reject
 * @method string getNote() 获取申请理由，B类客户审核通过时必须填写申请理由
 * @method void setNote(string $Note) 设置申请理由，B类客户审核通过时必须填写申请理由
 */
class AuditApplyClientRequest extends AbstractModel
{
    /**
     * @var string 待审核客户账号ID
     */
    public $ClientUin;

    /**
     * @var string 审核结果，可能的取值：accept/reject
     */
    public $AuditResult;

    /**
     * @var string 申请理由，B类客户审核通过时必须填写申请理由
     */
    public $Note;

    /**
     * @param string $ClientUin 待审核客户账号ID
     * @param string $AuditResult 审核结果，可能的取值：accept/reject
     * @param string $Note 申请理由，B类客户审核通过时必须填写申请理由
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("AuditResult",$param) and $param["AuditResult"] !== null) {
            $this->AuditResult = $param["AuditResult"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
