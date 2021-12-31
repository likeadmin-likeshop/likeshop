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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAcRules请求参数结构体
 *
 * @method array getData() 获取创建规则数据
 * @method void setData(array $Data) 设置创建规则数据
 * @method integer getType() 获取0：添加（默认），1：插入
 * @method void setType(integer $Type) 设置0：添加（默认），1：插入
 * @method string getEdgeId() 获取边id
 * @method void setEdgeId(string $EdgeId) 设置边id
 * @method integer getEnable() 获取访问控制规则状态
 * @method void setEnable(integer $Enable) 设置访问控制规则状态
 * @method integer getOverwrite() 获取0：添加，1：覆盖
 * @method void setOverwrite(integer $Overwrite) 设置0：添加，1：覆盖
 * @method string getInstanceId() 获取NAT实例ID, 参数Area存在的时候这个必传
 * @method void setInstanceId(string $InstanceId) 设置NAT实例ID, 参数Area存在的时候这个必传
 * @method string getFrom() 获取portScan: 来自于端口扫描, patchImport: 来自于批量导入
 * @method void setFrom(string $From) 设置portScan: 来自于端口扫描, patchImport: 来自于批量导入
 * @method string getArea() 获取NAT地域
 * @method void setArea(string $Area) 设置NAT地域
 */
class CreateAcRulesRequest extends AbstractModel
{
    /**
     * @var array 创建规则数据
     */
    public $Data;

    /**
     * @var integer 0：添加（默认），1：插入
     */
    public $Type;

    /**
     * @var string 边id
     */
    public $EdgeId;

    /**
     * @var integer 访问控制规则状态
     */
    public $Enable;

    /**
     * @var integer 0：添加，1：覆盖
     */
    public $Overwrite;

    /**
     * @var string NAT实例ID, 参数Area存在的时候这个必传
     */
    public $InstanceId;

    /**
     * @var string portScan: 来自于端口扫描, patchImport: 来自于批量导入
     */
    public $From;

    /**
     * @var string NAT地域
     */
    public $Area;

    /**
     * @param array $Data 创建规则数据
     * @param integer $Type 0：添加（默认），1：插入
     * @param string $EdgeId 边id
     * @param integer $Enable 访问控制规则状态
     * @param integer $Overwrite 0：添加，1：覆盖
     * @param string $InstanceId NAT实例ID, 参数Area存在的时候这个必传
     * @param string $From portScan: 来自于端口扫描, patchImport: 来自于批量导入
     * @param string $Area NAT地域
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new RuleInfoData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Overwrite",$param) and $param["Overwrite"] !== null) {
            $this->Overwrite = $param["Overwrite"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
