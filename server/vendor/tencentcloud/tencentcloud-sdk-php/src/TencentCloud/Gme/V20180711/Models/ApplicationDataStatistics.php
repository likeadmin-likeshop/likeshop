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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用统计数据
 *
 * @method integer getBizId() 获取应用ID
 * @method void setBizId(integer $BizId) 设置应用ID
 * @method integer getDauDataNum() 获取Dau统计项数目
 * @method void setDauDataNum(integer $DauDataNum) 设置Dau统计项数目
 * @method array getDauDataMainland() 获取大陆地区Dau统计数据，单位人
 * @method void setDauDataMainland(array $DauDataMainland) 设置大陆地区Dau统计数据，单位人
 * @method array getDauDataOversea() 获取海外地区Dau统计数据，单位人
 * @method void setDauDataOversea(array $DauDataOversea) 设置海外地区Dau统计数据，单位人
 * @method array getDauDataSum() 获取大陆和海外地区Dau统计数据汇总，单位人
 * @method void setDauDataSum(array $DauDataSum) 设置大陆和海外地区Dau统计数据汇总，单位人
 * @method integer getDurationDataNum() 获取实时语音时长统计项数目
 * @method void setDurationDataNum(integer $DurationDataNum) 设置实时语音时长统计项数目
 * @method array getDurationDataMainland() 获取大陆地区实时语音时长统计数据，单位分钟
 * @method void setDurationDataMainland(array $DurationDataMainland) 设置大陆地区实时语音时长统计数据，单位分钟
 * @method array getDurationDataOversea() 获取海外地区实时语音时长统计数据，单位分钟
 * @method void setDurationDataOversea(array $DurationDataOversea) 设置海外地区实时语音时长统计数据，单位分钟
 * @method array getDurationDataSum() 获取大陆和海外地区实时语音时长统计数据汇总，单位分钟
 * @method void setDurationDataSum(array $DurationDataSum) 设置大陆和海外地区实时语音时长统计数据汇总，单位分钟
 * @method integer getPcuDataNum() 获取Pcu统计项数目
 * @method void setPcuDataNum(integer $PcuDataNum) 设置Pcu统计项数目
 * @method array getPcuDataMainland() 获取大陆地区Pcu统计数据，单位人
 * @method void setPcuDataMainland(array $PcuDataMainland) 设置大陆地区Pcu统计数据，单位人
 * @method array getPcuDataOversea() 获取海外地区Pcu统计数据，单位人
 * @method void setPcuDataOversea(array $PcuDataOversea) 设置海外地区Pcu统计数据，单位人
 * @method array getPcuDataSum() 获取大陆和海外地区Pcu统计数据汇总，单位人
 * @method void setPcuDataSum(array $PcuDataSum) 设置大陆和海外地区Pcu统计数据汇总，单位人
 */
class ApplicationDataStatistics extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $BizId;

    /**
     * @var integer Dau统计项数目
     */
    public $DauDataNum;

    /**
     * @var array 大陆地区Dau统计数据，单位人
     */
    public $DauDataMainland;

    /**
     * @var array 海外地区Dau统计数据，单位人
     */
    public $DauDataOversea;

    /**
     * @var array 大陆和海外地区Dau统计数据汇总，单位人
     */
    public $DauDataSum;

    /**
     * @var integer 实时语音时长统计项数目
     */
    public $DurationDataNum;

    /**
     * @var array 大陆地区实时语音时长统计数据，单位分钟
     */
    public $DurationDataMainland;

    /**
     * @var array 海外地区实时语音时长统计数据，单位分钟
     */
    public $DurationDataOversea;

    /**
     * @var array 大陆和海外地区实时语音时长统计数据汇总，单位分钟
     */
    public $DurationDataSum;

    /**
     * @var integer Pcu统计项数目
     */
    public $PcuDataNum;

    /**
     * @var array 大陆地区Pcu统计数据，单位人
     */
    public $PcuDataMainland;

    /**
     * @var array 海外地区Pcu统计数据，单位人
     */
    public $PcuDataOversea;

    /**
     * @var array 大陆和海外地区Pcu统计数据汇总，单位人
     */
    public $PcuDataSum;

    /**
     * @param integer $BizId 应用ID
     * @param integer $DauDataNum Dau统计项数目
     * @param array $DauDataMainland 大陆地区Dau统计数据，单位人
     * @param array $DauDataOversea 海外地区Dau统计数据，单位人
     * @param array $DauDataSum 大陆和海外地区Dau统计数据汇总，单位人
     * @param integer $DurationDataNum 实时语音时长统计项数目
     * @param array $DurationDataMainland 大陆地区实时语音时长统计数据，单位分钟
     * @param array $DurationDataOversea 海外地区实时语音时长统计数据，单位分钟
     * @param array $DurationDataSum 大陆和海外地区实时语音时长统计数据汇总，单位分钟
     * @param integer $PcuDataNum Pcu统计项数目
     * @param array $PcuDataMainland 大陆地区Pcu统计数据，单位人
     * @param array $PcuDataOversea 海外地区Pcu统计数据，单位人
     * @param array $PcuDataSum 大陆和海外地区Pcu统计数据汇总，单位人
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("DauDataNum",$param) and $param["DauDataNum"] !== null) {
            $this->DauDataNum = $param["DauDataNum"];
        }

        if (array_key_exists("DauDataMainland",$param) and $param["DauDataMainland"] !== null) {
            $this->DauDataMainland = [];
            foreach ($param["DauDataMainland"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DauDataMainland, $obj);
            }
        }

        if (array_key_exists("DauDataOversea",$param) and $param["DauDataOversea"] !== null) {
            $this->DauDataOversea = [];
            foreach ($param["DauDataOversea"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DauDataOversea, $obj);
            }
        }

        if (array_key_exists("DauDataSum",$param) and $param["DauDataSum"] !== null) {
            $this->DauDataSum = [];
            foreach ($param["DauDataSum"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DauDataSum, $obj);
            }
        }

        if (array_key_exists("DurationDataNum",$param) and $param["DurationDataNum"] !== null) {
            $this->DurationDataNum = $param["DurationDataNum"];
        }

        if (array_key_exists("DurationDataMainland",$param) and $param["DurationDataMainland"] !== null) {
            $this->DurationDataMainland = [];
            foreach ($param["DurationDataMainland"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DurationDataMainland, $obj);
            }
        }

        if (array_key_exists("DurationDataOversea",$param) and $param["DurationDataOversea"] !== null) {
            $this->DurationDataOversea = [];
            foreach ($param["DurationDataOversea"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DurationDataOversea, $obj);
            }
        }

        if (array_key_exists("DurationDataSum",$param) and $param["DurationDataSum"] !== null) {
            $this->DurationDataSum = [];
            foreach ($param["DurationDataSum"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->DurationDataSum, $obj);
            }
        }

        if (array_key_exists("PcuDataNum",$param) and $param["PcuDataNum"] !== null) {
            $this->PcuDataNum = $param["PcuDataNum"];
        }

        if (array_key_exists("PcuDataMainland",$param) and $param["PcuDataMainland"] !== null) {
            $this->PcuDataMainland = [];
            foreach ($param["PcuDataMainland"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->PcuDataMainland, $obj);
            }
        }

        if (array_key_exists("PcuDataOversea",$param) and $param["PcuDataOversea"] !== null) {
            $this->PcuDataOversea = [];
            foreach ($param["PcuDataOversea"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->PcuDataOversea, $obj);
            }
        }

        if (array_key_exists("PcuDataSum",$param) and $param["PcuDataSum"] !== null) {
            $this->PcuDataSum = [];
            foreach ($param["PcuDataSum"] as $key => $value){
                $obj = new StatisticsItem();
                $obj->deserialize($value);
                array_push($this->PcuDataSum, $obj);
            }
        }
    }
}
