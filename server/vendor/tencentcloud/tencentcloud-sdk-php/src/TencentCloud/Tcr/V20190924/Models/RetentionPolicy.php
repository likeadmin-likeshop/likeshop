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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本保留策略
 *
 * @method integer getRetentionId() 获取版本保留策略Id
 * @method void setRetentionId(integer $RetentionId) 设置版本保留策略Id
 * @method string getNamespaceName() 获取命名空间的名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间的名称
 * @method array getRetentionRuleList() 获取规则列表
 * @method void setRetentionRuleList(array $RetentionRuleList) 设置规则列表
 * @method string getCronSetting() 获取定期执行方式
 * @method void setCronSetting(string $CronSetting) 设置定期执行方式
 * @method boolean getDisabled() 获取是否启用规则
 * @method void setDisabled(boolean $Disabled) 设置是否启用规则
 * @method string getNextExecutionTime() 获取基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用
 * @method void setNextExecutionTime(string $NextExecutionTime) 设置基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用
 */
class RetentionPolicy extends AbstractModel
{
    /**
     * @var integer 版本保留策略Id
     */
    public $RetentionId;

    /**
     * @var string 命名空间的名称
     */
    public $NamespaceName;

    /**
     * @var array 规则列表
     */
    public $RetentionRuleList;

    /**
     * @var string 定期执行方式
     */
    public $CronSetting;

    /**
     * @var boolean 是否启用规则
     */
    public $Disabled;

    /**
     * @var string 基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用
     */
    public $NextExecutionTime;

    /**
     * @param integer $RetentionId 版本保留策略Id
     * @param string $NamespaceName 命名空间的名称
     * @param array $RetentionRuleList 规则列表
     * @param string $CronSetting 定期执行方式
     * @param boolean $Disabled 是否启用规则
     * @param string $NextExecutionTime 基于当前时间根据cronSetting后下一次任务要执行的时间，仅做参考使用
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
        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RetentionRuleList",$param) and $param["RetentionRuleList"] !== null) {
            $this->RetentionRuleList = [];
            foreach ($param["RetentionRuleList"] as $key => $value){
                $obj = new RetentionRule();
                $obj->deserialize($value);
                array_push($this->RetentionRuleList, $obj);
            }
        }

        if (array_key_exists("CronSetting",$param) and $param["CronSetting"] !== null) {
            $this->CronSetting = $param["CronSetting"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("NextExecutionTime",$param) and $param["NextExecutionTime"] !== null) {
            $this->NextExecutionTime = $param["NextExecutionTime"];
        }
    }
}
