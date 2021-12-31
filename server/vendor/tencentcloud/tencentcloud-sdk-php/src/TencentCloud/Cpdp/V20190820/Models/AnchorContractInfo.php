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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主播签约信息
 *
 * @method string getAnchorId() 获取主播ID
 * @method void setAnchorId(string $AnchorId) 设置主播ID
 * @method string getAnchorName() 获取主播名称
 * @method void setAnchorName(string $AnchorName) 设置主播名称
 * @method string getAgentId() 获取代理商ID
 * @method void setAgentId(string $AgentId) 设置代理商ID
 * @method string getAgentName() 获取代理商名称
 * @method void setAgentName(string $AgentName) 设置代理商名称
 * @method string getIdNo() 获取主播身份证号
 * @method void setIdNo(string $IdNo) 设置主播身份证号
 */
class AnchorContractInfo extends AbstractModel
{
    /**
     * @var string 主播ID
     */
    public $AnchorId;

    /**
     * @var string 主播名称
     */
    public $AnchorName;

    /**
     * @var string 代理商ID
     */
    public $AgentId;

    /**
     * @var string 代理商名称
     */
    public $AgentName;

    /**
     * @var string 主播身份证号
     */
    public $IdNo;

    /**
     * @param string $AnchorId 主播ID
     * @param string $AnchorName 主播名称
     * @param string $AgentId 代理商ID
     * @param string $AgentName 代理商名称
     * @param string $IdNo 主播身份证号
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
        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("AnchorName",$param) and $param["AnchorName"] !== null) {
            $this->AnchorName = $param["AnchorName"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }
    }
}
