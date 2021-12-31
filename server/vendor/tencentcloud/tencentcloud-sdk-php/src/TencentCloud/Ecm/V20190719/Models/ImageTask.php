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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像任务
 *
 * @method string getState() 获取镜像导入状态， PENDING, PROCESSING, SUCCESS, FAILED
 * @method void setState(string $State) 设置镜像导入状态， PENDING, PROCESSING, SUCCESS, FAILED
 * @method string getMessage() 获取导入失败(FAILED)时， 说明失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置导入失败(FAILED)时， 说明失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class ImageTask extends AbstractModel
{
    /**
     * @var string 镜像导入状态， PENDING, PROCESSING, SUCCESS, FAILED
     */
    public $State;

    /**
     * @var string 导入失败(FAILED)时， 说明失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $State 镜像导入状态， PENDING, PROCESSING, SUCCESS, FAILED
     * @param string $Message 导入失败(FAILED)时， 说明失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
