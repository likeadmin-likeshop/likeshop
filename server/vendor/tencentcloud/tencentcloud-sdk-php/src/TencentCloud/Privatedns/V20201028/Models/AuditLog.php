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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作日志
 *
 * @method string getResource() 获取日志类型
 * @method void setResource(string $Resource) 设置日志类型
 * @method string getMetric() 获取日志表名
 * @method void setMetric(string $Metric) 设置日志表名
 * @method integer getTotalCount() 获取日志总数
 * @method void setTotalCount(integer $TotalCount) 设置日志总数
 * @method array getDataSet() 获取日志列表
 * @method void setDataSet(array $DataSet) 设置日志列表
 */
class AuditLog extends AbstractModel
{
    /**
     * @var string 日志类型
     */
    public $Resource;

    /**
     * @var string 日志表名
     */
    public $Metric;

    /**
     * @var integer 日志总数
     */
    public $TotalCount;

    /**
     * @var array 日志列表
     */
    public $DataSet;

    /**
     * @param string $Resource 日志类型
     * @param string $Metric 日志表名
     * @param integer $TotalCount 日志总数
     * @param array $DataSet 日志列表
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = [];
            foreach ($param["DataSet"] as $key => $value){
                $obj = new AuditLogInfo();
                $obj->deserialize($value);
                array_push($this->DataSet, $obj);
            }
        }
    }
}
