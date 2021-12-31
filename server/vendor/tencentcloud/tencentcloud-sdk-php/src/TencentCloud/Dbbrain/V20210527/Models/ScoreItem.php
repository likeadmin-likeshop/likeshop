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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 诊断扣分项。
 *
 * @method string getDiagItem() 获取异常诊断项名称。
 * @method void setDiagItem(string $DiagItem) 设置异常诊断项名称。
 * @method string getIssueType() 获取诊断项分类，取值包括：可用性、可维护性、性能及可靠性。
 * @method void setIssueType(string $IssueType) 设置诊断项分类，取值包括：可用性、可维护性、性能及可靠性。
 * @method string getTopSeverity() 获取健康等级，取值包括：信息、提示、告警、严重、致命。
 * @method void setTopSeverity(string $TopSeverity) 设置健康等级，取值包括：信息、提示、告警、严重、致命。
 * @method integer getCount() 获取该异常诊断项出现次数。
 * @method void setCount(integer $Count) 设置该异常诊断项出现次数。
 * @method integer getScoreLost() 获取扣分分数。
 * @method void setScoreLost(integer $ScoreLost) 设置扣分分数。
 */
class ScoreItem extends AbstractModel
{
    /**
     * @var string 异常诊断项名称。
     */
    public $DiagItem;

    /**
     * @var string 诊断项分类，取值包括：可用性、可维护性、性能及可靠性。
     */
    public $IssueType;

    /**
     * @var string 健康等级，取值包括：信息、提示、告警、严重、致命。
     */
    public $TopSeverity;

    /**
     * @var integer 该异常诊断项出现次数。
     */
    public $Count;

    /**
     * @var integer 扣分分数。
     */
    public $ScoreLost;

    /**
     * @param string $DiagItem 异常诊断项名称。
     * @param string $IssueType 诊断项分类，取值包括：可用性、可维护性、性能及可靠性。
     * @param string $TopSeverity 健康等级，取值包括：信息、提示、告警、严重、致命。
     * @param integer $Count 该异常诊断项出现次数。
     * @param integer $ScoreLost 扣分分数。
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
        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("TopSeverity",$param) and $param["TopSeverity"] !== null) {
            $this->TopSeverity = $param["TopSeverity"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }
    }
}
