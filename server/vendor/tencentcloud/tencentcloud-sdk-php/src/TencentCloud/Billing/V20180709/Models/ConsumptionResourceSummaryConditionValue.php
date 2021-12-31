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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消耗按资源汇总过滤条件
 *
 * @method array getBusiness() 获取产品列表
 * @method void setBusiness(array $Business) 设置产品列表
 * @method array getProject() 获取项目列表
 * @method void setProject(array $Project) 设置项目列表
 * @method array getRegion() 获取地域列表
 * @method void setRegion(array $Region) 设置地域列表
 * @method array getPayMode() 获取付费模式列表
 * @method void setPayMode(array $PayMode) 设置付费模式列表
 */
class ConsumptionResourceSummaryConditionValue extends AbstractModel
{
    /**
     * @var array 产品列表
     */
    public $Business;

    /**
     * @var array 项目列表
     */
    public $Project;

    /**
     * @var array 地域列表
     */
    public $Region;

    /**
     * @var array 付费模式列表
     */
    public $PayMode;

    /**
     * @param array $Business 产品列表
     * @param array $Project 项目列表
     * @param array $Region 地域列表
     * @param array $PayMode 付费模式列表
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new ConditionBusiness();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = [];
            foreach ($param["Project"] as $key => $value){
                $obj = new ConditionProject();
                $obj->deserialize($value);
                array_push($this->Project, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = [];
            foreach ($param["Region"] as $key => $value){
                $obj = new ConditionRegion();
                $obj->deserialize($value);
                array_push($this->Region, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = [];
            foreach ($param["PayMode"] as $key => $value){
                $obj = new ConditionPayMode();
                $obj->deserialize($value);
                array_push($this->PayMode, $obj);
            }
        }
    }
}
