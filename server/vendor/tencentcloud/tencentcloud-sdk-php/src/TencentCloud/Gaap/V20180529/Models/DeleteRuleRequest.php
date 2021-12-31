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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRule请求参数结构体
 *
 * @method string getListenerId() 获取7层监听器ID
 * @method void setListenerId(string $ListenerId) 设置7层监听器ID
 * @method string getRuleId() 获取转发规则ID
 * @method void setRuleId(string $RuleId) 设置转发规则ID
 * @method integer getForce() 获取是否可以强制删除已绑定源站的转发规则，0非强制，1强制
 * @method void setForce(integer $Force) 设置是否可以强制删除已绑定源站的转发规则，0非强制，1强制
 */
class DeleteRuleRequest extends AbstractModel
{
    /**
     * @var string 7层监听器ID
     */
    public $ListenerId;

    /**
     * @var string 转发规则ID
     */
    public $RuleId;

    /**
     * @var integer 是否可以强制删除已绑定源站的转发规则，0非强制，1强制
     */
    public $Force;

    /**
     * @param string $ListenerId 7层监听器ID
     * @param string $RuleId 转发规则ID
     * @param integer $Force 是否可以强制删除已绑定源站的转发规则，0非强制，1强制
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
