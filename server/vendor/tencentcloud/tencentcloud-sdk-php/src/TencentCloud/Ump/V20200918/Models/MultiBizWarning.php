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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多经点位告警
 *
 * @method integer getId() 获取编号
 * @method void setId(integer $Id) 设置编号
 * @method array getMonitoringArea() 获取监控区域
 * @method void setMonitoringArea(array $MonitoringArea) 设置监控区域
 * @method array getWarningInfos() 获取告警列表
 * @method void setWarningInfos(array $WarningInfos) 设置告警列表
 */
class MultiBizWarning extends AbstractModel
{
    /**
     * @var integer 编号
     */
    public $Id;

    /**
     * @var array 监控区域
     */
    public $MonitoringArea;

    /**
     * @var array 告警列表
     */
    public $WarningInfos;

    /**
     * @param integer $Id 编号
     * @param array $MonitoringArea 监控区域
     * @param array $WarningInfos 告警列表
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MonitoringArea",$param) and $param["MonitoringArea"] !== null) {
            $this->MonitoringArea = [];
            foreach ($param["MonitoringArea"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->MonitoringArea, $obj);
            }
        }

        if (array_key_exists("WarningInfos",$param) and $param["WarningInfos"] !== null) {
            $this->WarningInfos = [];
            foreach ($param["WarningInfos"] as $key => $value){
                $obj = new MultiBizWarningInfo();
                $obj->deserialize($value);
                array_push($this->WarningInfos, $obj);
            }
        }
    }
}
