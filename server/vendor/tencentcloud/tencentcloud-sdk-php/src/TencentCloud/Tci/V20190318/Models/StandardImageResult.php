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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准化接口图像分析结果
 *
 * @method array getResultSet() 获取详细结果
 * @method void setResultSet(array $ResultSet) 设置详细结果
 * @method ImageTaskStatistic getStatistic() 获取分析完成后的统计结果
 * @method void setStatistic(ImageTaskStatistic $Statistic) 设置分析完成后的统计结果
 * @method string getMessage() 获取状态描述
 * @method void setMessage(string $Message) 设置状态描述
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method integer getTotalCount() 获取结果总数
 * @method void setTotalCount(integer $TotalCount) 设置结果总数
 */
class StandardImageResult extends AbstractModel
{
    /**
     * @var array 详细结果
     */
    public $ResultSet;

    /**
     * @var ImageTaskStatistic 分析完成后的统计结果
     */
    public $Statistic;

    /**
     * @var string 状态描述
     */
    public $Message;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var integer 结果总数
     */
    public $TotalCount;

    /**
     * @param array $ResultSet 详细结果
     * @param ImageTaskStatistic $Statistic 分析完成后的统计结果
     * @param string $Message 状态描述
     * @param string $Status 任务状态
     * @param integer $TotalCount 结果总数
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
        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = [];
            foreach ($param["ResultSet"] as $key => $value){
                $obj = new ImageTaskResult();
                $obj->deserialize($value);
                array_push($this->ResultSet, $obj);
            }
        }

        if (array_key_exists("Statistic",$param) and $param["Statistic"] !== null) {
            $this->Statistic = new ImageTaskStatistic();
            $this->Statistic->deserialize($param["Statistic"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
