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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryInstantData请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Data
 * @method void setModule(string $Module) 设置模块名，本接口取值：Data
 * @method string getOperation() 获取操作名，本接口取值：Query
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：Query
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getInstanceId() 获取实例ID，不传默认为系统分配的初始实例
 * @method void setInstanceId(string $InstanceId) 设置实例ID，不传默认为系统分配的初始实例
 * @method string getQueryModel() 获取查询类型：callRecord 通话记录
 * @method void setQueryModel(string $QueryModel) 设置查询类型：callRecord 通话记录
 * @method string getData() 获取查询参数
 * @method void setData(string $Data) 设置查询参数
 */
class QueryInstantDataRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Data
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：Query
     */
    public $Operation;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 实例ID，不传默认为系统分配的初始实例
     */
    public $InstanceId;

    /**
     * @var string 查询类型：callRecord 通话记录
     */
    public $QueryModel;

    /**
     * @var string 查询参数
     */
    public $Data;

    /**
     * @param string $Module 模块名，本接口取值：Data
     * @param string $Operation 操作名，本接口取值：Query
     * @param string $ProductId 产品ID
     * @param string $InstanceId 实例ID，不传默认为系统分配的初始实例
     * @param string $QueryModel 查询类型：callRecord 通话记录
     * @param string $Data 查询参数
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("QueryModel",$param) and $param["QueryModel"] !== null) {
            $this->QueryModel = $param["QueryModel"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
