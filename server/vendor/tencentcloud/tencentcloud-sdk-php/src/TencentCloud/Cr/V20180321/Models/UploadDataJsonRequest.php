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
 * UploadDataJson请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Data
 * @method void setModule(string $Module) 设置模块名，本接口取值：Data
 * @method string getOperation() 获取操作名，本接口取值：UploadJson
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：UploadJson
 * @method string getData() 获取报文信息
 * @method void setData(string $Data) 设置报文信息
 * @method string getUploadModel() 获取<p>上传类型，不填默认到期/逾期提醒数据，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒数据</li><li>repay：到期/逾期提醒停拨数据</li></ul>
 * @method void setUploadModel(string $UploadModel) 设置<p>上传类型，不填默认到期/逾期提醒数据，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒数据</li><li>repay：到期/逾期提醒停拨数据</li></ul>
 * @method string getInstanceId() 获取实例ID，不传默认为系统分配的初始实例。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，不传默认为系统分配的初始实例。
 */
class UploadDataJsonRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Data
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：UploadJson
     */
    public $Operation;

    /**
     * @var string 报文信息
     */
    public $Data;

    /**
     * @var string <p>上传类型，不填默认到期/逾期提醒数据，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒数据</li><li>repay：到期/逾期提醒停拨数据</li></ul>
     */
    public $UploadModel;

    /**
     * @var string 实例ID，不传默认为系统分配的初始实例。
     */
    public $InstanceId;

    /**
     * @param string $Module 模块名，本接口取值：Data
     * @param string $Operation 操作名，本接口取值：UploadJson
     * @param string $Data 报文信息
     * @param string $UploadModel <p>上传类型，不填默认到期/逾期提醒数据，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒数据</li><li>repay：到期/逾期提醒停拨数据</li></ul>
     * @param string $InstanceId 实例ID，不传默认为系统分配的初始实例。
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("UploadModel",$param) and $param["UploadModel"] !== null) {
            $this->UploadModel = $param["UploadModel"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
