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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID，请填写 查询集群列表 接口中返回的 clusterId 字段
 * @method void setClusterId(string $ClusterId) 设置集群 ID，请填写 查询集群列表 接口中返回的 clusterId 字段
 * @method string getRunInstancePara() 获取CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
 * @method void setRunInstancePara(string $RunInstancePara) 设置CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取实例额外需要设置参数信息
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置实例额外需要设置参数信息
 * @method array getSkipValidateOptions() 获取校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）
 * @method void setSkipValidateOptions(array $SkipValidateOptions) 设置校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）
 */
class CreateClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群 ID，请填写 查询集群列表 接口中返回的 clusterId 字段
     */
    public $ClusterId;

    /**
     * @var string CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
     */
    public $RunInstancePara;

    /**
     * @var InstanceAdvancedSettings 实例额外需要设置参数信息
     */
    public $InstanceAdvancedSettings;

    /**
     * @var array 校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）
     */
    public $SkipValidateOptions;

    /**
     * @param string $ClusterId 集群 ID，请填写 查询集群列表 接口中返回的 clusterId 字段
     * @param string $RunInstancePara CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 实例额外需要设置参数信息
     * @param array $SkipValidateOptions 校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RunInstancePara",$param) and $param["RunInstancePara"] !== null) {
            $this->RunInstancePara = $param["RunInstancePara"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("SkipValidateOptions",$param) and $param["SkipValidateOptions"] !== null) {
            $this->SkipValidateOptions = $param["SkipValidateOptions"];
        }
    }
}
