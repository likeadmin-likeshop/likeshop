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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控域名列表
 *
 * @method array getResult() 获取列表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(array $Result) 设置列表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSearchTotal() 获取搜索出来的数量
 * @method void setSearchTotal(integer $SearchTotal) 设置搜索出来的数量
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method integer getAllowMonitoringCount() 获取允许的监控数量
 * @method void setAllowMonitoringCount(integer $AllowMonitoringCount) 设置允许的监控数量
 * @method integer getCurrentMonitoringCount() 获取当前监控的数量
 * @method void setCurrentMonitoringCount(integer $CurrentMonitoringCount) 设置当前监控的数量
 * @method integer getAllowMaxAddDomain() 获取允许添加域名总数
 * @method void setAllowMaxAddDomain(integer $AllowMaxAddDomain) 设置允许添加域名总数
 */
class DescribeDomains extends AbstractModel
{
    /**
     * @var array 列表数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 搜索出来的数量
     */
    public $SearchTotal;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var integer 允许的监控数量
     */
    public $AllowMonitoringCount;

    /**
     * @var integer 当前监控的数量
     */
    public $CurrentMonitoringCount;

    /**
     * @var integer 允许添加域名总数
     */
    public $AllowMaxAddDomain;

    /**
     * @param array $Result 列表数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SearchTotal 搜索出来的数量
     * @param integer $Total 总数
     * @param integer $AllowMonitoringCount 允许的监控数量
     * @param integer $CurrentMonitoringCount 当前监控的数量
     * @param integer $AllowMaxAddDomain 允许添加域名总数
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new DomainSiteInfo();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }

        if (array_key_exists("SearchTotal",$param) and $param["SearchTotal"] !== null) {
            $this->SearchTotal = $param["SearchTotal"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AllowMonitoringCount",$param) and $param["AllowMonitoringCount"] !== null) {
            $this->AllowMonitoringCount = $param["AllowMonitoringCount"];
        }

        if (array_key_exists("CurrentMonitoringCount",$param) and $param["CurrentMonitoringCount"] !== null) {
            $this->CurrentMonitoringCount = $param["CurrentMonitoringCount"];
        }

        if (array_key_exists("AllowMaxAddDomain",$param) and $param["AllowMaxAddDomain"] !== null) {
            $this->AllowMaxAddDomain = $param["AllowMaxAddDomain"];
        }
    }
}
