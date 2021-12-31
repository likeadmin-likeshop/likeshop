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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityTrends返回参数结构体
 *
 * @method array getMalwares() 获取木马事件统计数据数组。
 * @method void setMalwares(array $Malwares) 设置木马事件统计数据数组。
 * @method array getNonLocalLoginPlaces() 获取异地登录事件统计数据数组。
 * @method void setNonLocalLoginPlaces(array $NonLocalLoginPlaces) 设置异地登录事件统计数据数组。
 * @method array getBruteAttacks() 获取密码破解事件统计数据数组。
 * @method void setBruteAttacks(array $BruteAttacks) 设置密码破解事件统计数据数组。
 * @method array getVuls() 获取漏洞统计数据数组。
 * @method void setVuls(array $Vuls) 设置漏洞统计数据数组。
 * @method array getBaseLines() 获取基线统计数据数组。
 * @method void setBaseLines(array $BaseLines) 设置基线统计数据数组。
 * @method array getMaliciousRequests() 获取恶意请求统计数据数组。
 * @method void setMaliciousRequests(array $MaliciousRequests) 设置恶意请求统计数据数组。
 * @method array getHighRiskBashs() 获取高危命令统计数据数组。
 * @method void setHighRiskBashs(array $HighRiskBashs) 设置高危命令统计数据数组。
 * @method array getReverseShells() 获取反弹shell统计数据数组。
 * @method void setReverseShells(array $ReverseShells) 设置反弹shell统计数据数组。
 * @method array getPrivilegeEscalations() 获取本地提权统计数据数组。
 * @method void setPrivilegeEscalations(array $PrivilegeEscalations) 设置本地提权统计数据数组。
 * @method array getCyberAttacks() 获取网络攻击统计数据数组。
 * @method void setCyberAttacks(array $CyberAttacks) 设置网络攻击统计数据数组。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityTrendsResponse extends AbstractModel
{
    /**
     * @var array 木马事件统计数据数组。
     */
    public $Malwares;

    /**
     * @var array 异地登录事件统计数据数组。
     */
    public $NonLocalLoginPlaces;

    /**
     * @var array 密码破解事件统计数据数组。
     */
    public $BruteAttacks;

    /**
     * @var array 漏洞统计数据数组。
     */
    public $Vuls;

    /**
     * @var array 基线统计数据数组。
     */
    public $BaseLines;

    /**
     * @var array 恶意请求统计数据数组。
     */
    public $MaliciousRequests;

    /**
     * @var array 高危命令统计数据数组。
     */
    public $HighRiskBashs;

    /**
     * @var array 反弹shell统计数据数组。
     */
    public $ReverseShells;

    /**
     * @var array 本地提权统计数据数组。
     */
    public $PrivilegeEscalations;

    /**
     * @var array 网络攻击统计数据数组。
     */
    public $CyberAttacks;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Malwares 木马事件统计数据数组。
     * @param array $NonLocalLoginPlaces 异地登录事件统计数据数组。
     * @param array $BruteAttacks 密码破解事件统计数据数组。
     * @param array $Vuls 漏洞统计数据数组。
     * @param array $BaseLines 基线统计数据数组。
     * @param array $MaliciousRequests 恶意请求统计数据数组。
     * @param array $HighRiskBashs 高危命令统计数据数组。
     * @param array $ReverseShells 反弹shell统计数据数组。
     * @param array $PrivilegeEscalations 本地提权统计数据数组。
     * @param array $CyberAttacks 网络攻击统计数据数组。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Malwares",$param) and $param["Malwares"] !== null) {
            $this->Malwares = [];
            foreach ($param["Malwares"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->Malwares, $obj);
            }
        }

        if (array_key_exists("NonLocalLoginPlaces",$param) and $param["NonLocalLoginPlaces"] !== null) {
            $this->NonLocalLoginPlaces = [];
            foreach ($param["NonLocalLoginPlaces"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->NonLocalLoginPlaces, $obj);
            }
        }

        if (array_key_exists("BruteAttacks",$param) and $param["BruteAttacks"] !== null) {
            $this->BruteAttacks = [];
            foreach ($param["BruteAttacks"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->BruteAttacks, $obj);
            }
        }

        if (array_key_exists("Vuls",$param) and $param["Vuls"] !== null) {
            $this->Vuls = [];
            foreach ($param["Vuls"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->Vuls, $obj);
            }
        }

        if (array_key_exists("BaseLines",$param) and $param["BaseLines"] !== null) {
            $this->BaseLines = [];
            foreach ($param["BaseLines"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->BaseLines, $obj);
            }
        }

        if (array_key_exists("MaliciousRequests",$param) and $param["MaliciousRequests"] !== null) {
            $this->MaliciousRequests = [];
            foreach ($param["MaliciousRequests"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->MaliciousRequests, $obj);
            }
        }

        if (array_key_exists("HighRiskBashs",$param) and $param["HighRiskBashs"] !== null) {
            $this->HighRiskBashs = [];
            foreach ($param["HighRiskBashs"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->HighRiskBashs, $obj);
            }
        }

        if (array_key_exists("ReverseShells",$param) and $param["ReverseShells"] !== null) {
            $this->ReverseShells = [];
            foreach ($param["ReverseShells"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->ReverseShells, $obj);
            }
        }

        if (array_key_exists("PrivilegeEscalations",$param) and $param["PrivilegeEscalations"] !== null) {
            $this->PrivilegeEscalations = [];
            foreach ($param["PrivilegeEscalations"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->PrivilegeEscalations, $obj);
            }
        }

        if (array_key_exists("CyberAttacks",$param) and $param["CyberAttacks"] !== null) {
            $this->CyberAttacks = [];
            foreach ($param["CyberAttacks"] as $key => $value){
                $obj = new SecurityTrend();
                $obj->deserialize($value);
                array_push($this->CyberAttacks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
