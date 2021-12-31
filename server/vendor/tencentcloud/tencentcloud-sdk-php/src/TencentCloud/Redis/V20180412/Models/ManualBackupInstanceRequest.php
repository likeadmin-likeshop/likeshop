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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManualBackupInstance请求参数结构体
 *
 * @method string getInstanceId() 获取待操作的实例ID，可通过 DescribeInstance接口返回值中的 InstanceId 获取。
 * @method void setInstanceId(string $InstanceId) 设置待操作的实例ID，可通过 DescribeInstance接口返回值中的 InstanceId 获取。
 * @method string getRemark() 获取备份的备注信息
 * @method void setRemark(string $Remark) 设置备份的备注信息
 */
class ManualBackupInstanceRequest extends AbstractModel
{
    /**
     * @var string 待操作的实例ID，可通过 DescribeInstance接口返回值中的 InstanceId 获取。
     */
    public $InstanceId;

    /**
     * @var string 备份的备注信息
     */
    public $Remark;

    /**
     * @param string $InstanceId 待操作的实例ID，可通过 DescribeInstance接口返回值中的 InstanceId 获取。
     * @param string $Remark 备份的备注信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
