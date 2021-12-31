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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyCreditAudit请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Credit
 * @method void setModule(string $Module) 设置模块名，本接口取值：Credit
 * @method string getOperation() 获取操作名，本接口取值：Apply
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：Apply
 * @method string getInstId() 获取实例ID
 * @method void setInstId(string $InstId) 设置实例ID
 * @method string getProductId() 获取产品ID，形如P******。
 * @method void setProductId(string $ProductId) 设置产品ID，形如P******。
 * @method string getCaseId() 获取信审任务ID，同一天内，同一InstId下，同一CaseId只能调用一次。
 * @method void setCaseId(string $CaseId) 设置信审任务ID，同一天内，同一InstId下，同一CaseId只能调用一次。
 * @method string getCallbackUrl() 获取回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址
 * @method string getData() 获取JSON格式的业务字段。
 * @method void setData(string $Data) 设置JSON格式的业务字段。
 */
class ApplyCreditAuditRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Credit
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：Apply
     */
    public $Operation;

    /**
     * @var string 实例ID
     */
    public $InstId;

    /**
     * @var string 产品ID，形如P******。
     */
    public $ProductId;

    /**
     * @var string 信审任务ID，同一天内，同一InstId下，同一CaseId只能调用一次。
     */
    public $CaseId;

    /**
     * @var string 回调地址
     */
    public $CallbackUrl;

    /**
     * @var string JSON格式的业务字段。
     */
    public $Data;

    /**
     * @param string $Module 模块名，本接口取值：Credit
     * @param string $Operation 操作名，本接口取值：Apply
     * @param string $InstId 实例ID
     * @param string $ProductId 产品ID，形如P******。
     * @param string $CaseId 信审任务ID，同一天内，同一InstId下，同一CaseId只能调用一次。
     * @param string $CallbackUrl 回调地址
     * @param string $Data JSON格式的业务字段。
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstId",$param) and $param["InstId"] !== null) {
            $this->InstId = $param["InstId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
