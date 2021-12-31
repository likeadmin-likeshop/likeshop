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
 * 面板数据
 *
 * @method array getSecurityLevelPie() 获取安全等级图表
 * @method void setSecurityLevelPie(array $SecurityLevelPie) 设置安全等级图表
 * @method array getCertBrandsPie() 获取证书品牌图表
 * @method void setCertBrandsPie(array $CertBrandsPie) 设置证书品牌图表
 * @method array getCertValidTimePie() 获取证书有效时间图表
 * @method void setCertValidTimePie(array $CertValidTimePie) 设置证书有效时间图表
 * @method array getCertTypePie() 获取证书类型图表
 * @method void setCertTypePie(array $CertTypePie) 设置证书类型图表
 * @method array getSSLBugsLoopholeHistogram() 获取ssl bugs图表
 * @method void setSSLBugsLoopholeHistogram(array $SSLBugsLoopholeHistogram) 设置ssl bugs图表
 * @method array getComplianceHistogram() 获取合规图表
 * @method void setComplianceHistogram(array $ComplianceHistogram) 设置合规图表
 */
class DashboardResult extends AbstractModel
{
    /**
     * @var array 安全等级图表
     */
    public $SecurityLevelPie;

    /**
     * @var array 证书品牌图表
     */
    public $CertBrandsPie;

    /**
     * @var array 证书有效时间图表
     */
    public $CertValidTimePie;

    /**
     * @var array 证书类型图表
     */
    public $CertTypePie;

    /**
     * @var array ssl bugs图表
     */
    public $SSLBugsLoopholeHistogram;

    /**
     * @var array 合规图表
     */
    public $ComplianceHistogram;

    /**
     * @param array $SecurityLevelPie 安全等级图表
     * @param array $CertBrandsPie 证书品牌图表
     * @param array $CertValidTimePie 证书有效时间图表
     * @param array $CertTypePie 证书类型图表
     * @param array $SSLBugsLoopholeHistogram ssl bugs图表
     * @param array $ComplianceHistogram 合规图表
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
        if (array_key_exists("SecurityLevelPie",$param) and $param["SecurityLevelPie"] !== null) {
            $this->SecurityLevelPie = [];
            foreach ($param["SecurityLevelPie"] as $key => $value){
                $obj = new ChartNameValue();
                $obj->deserialize($value);
                array_push($this->SecurityLevelPie, $obj);
            }
        }

        if (array_key_exists("CertBrandsPie",$param) and $param["CertBrandsPie"] !== null) {
            $this->CertBrandsPie = [];
            foreach ($param["CertBrandsPie"] as $key => $value){
                $obj = new ChartNameValue();
                $obj->deserialize($value);
                array_push($this->CertBrandsPie, $obj);
            }
        }

        if (array_key_exists("CertValidTimePie",$param) and $param["CertValidTimePie"] !== null) {
            $this->CertValidTimePie = [];
            foreach ($param["CertValidTimePie"] as $key => $value){
                $obj = new ChartNameValue();
                $obj->deserialize($value);
                array_push($this->CertValidTimePie, $obj);
            }
        }

        if (array_key_exists("CertTypePie",$param) and $param["CertTypePie"] !== null) {
            $this->CertTypePie = [];
            foreach ($param["CertTypePie"] as $key => $value){
                $obj = new ChartNameValue();
                $obj->deserialize($value);
                array_push($this->CertTypePie, $obj);
            }
        }

        if (array_key_exists("SSLBugsLoopholeHistogram",$param) and $param["SSLBugsLoopholeHistogram"] !== null) {
            $this->SSLBugsLoopholeHistogram = [];
            foreach ($param["SSLBugsLoopholeHistogram"] as $key => $value){
                $obj = new ChartHistogram();
                $obj->deserialize($value);
                array_push($this->SSLBugsLoopholeHistogram, $obj);
            }
        }

        if (array_key_exists("ComplianceHistogram",$param) and $param["ComplianceHistogram"] !== null) {
            $this->ComplianceHistogram = [];
            foreach ($param["ComplianceHistogram"] as $key => $value){
                $obj = new ChartHistogram();
                $obj->deserialize($value);
                array_push($this->ComplianceHistogram, $obj);
            }
        }
    }
}
