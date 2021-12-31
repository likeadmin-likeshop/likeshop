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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttribute请求参数结构体
 *
 * @method string getTargetGroupId() 获取目标组的ID。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组的ID。
 * @method string getTargetGroupName() 获取目标组的新名称。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的新名称。
 * @method integer getPort() 获取目标组的新默认端口。
 * @method void setPort(integer $Port) 设置目标组的新默认端口。
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 目标组的ID。
     */
    public $TargetGroupId;

    /**
     * @var string 目标组的新名称。
     */
    public $TargetGroupName;

    /**
     * @var integer 目标组的新默认端口。
     */
    public $Port;

    /**
     * @param string $TargetGroupId 目标组的ID。
     * @param string $TargetGroupName 目标组的新名称。
     * @param integer $Port 目标组的新默认端口。
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
