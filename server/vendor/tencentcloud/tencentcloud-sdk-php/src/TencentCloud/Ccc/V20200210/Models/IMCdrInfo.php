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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全媒体服务记录信息
 *
 * @method string getId() 获取服务记录ID
 * @method void setId(string $Id) 设置服务记录ID
 * @method integer getDuration() 获取服务时长秒数
 * @method void setDuration(integer $Duration) 设置服务时长秒数
 * @method integer getEndStatus() 获取结束状态
 * @method void setEndStatus(integer $EndStatus) 设置结束状态
 * @method string getNickname() 获取用户昵称
 * @method void setNickname(string $Nickname) 设置用户昵称
 * @method integer getType() 获取服务类型 1为全媒体，2为文本客服
 * @method void setType(integer $Type) 设置服务类型 1为全媒体，2为文本客服
 * @method string getStaffId() 获取客服ID
 * @method void setStaffId(string $StaffId) 设置客服ID
 * @method integer getTimestamp() 获取服务时间戳
 * @method void setTimestamp(integer $Timestamp) 设置服务时间戳
 */
class IMCdrInfo extends AbstractModel
{
    /**
     * @var string 服务记录ID
     */
    public $Id;

    /**
     * @var integer 服务时长秒数
     */
    public $Duration;

    /**
     * @var integer 结束状态
     */
    public $EndStatus;

    /**
     * @var string 用户昵称
     */
    public $Nickname;

    /**
     * @var integer 服务类型 1为全媒体，2为文本客服
     */
    public $Type;

    /**
     * @var string 客服ID
     */
    public $StaffId;

    /**
     * @var integer 服务时间戳
     */
    public $Timestamp;

    /**
     * @param string $Id 服务记录ID
     * @param integer $Duration 服务时长秒数
     * @param integer $EndStatus 结束状态
     * @param string $Nickname 用户昵称
     * @param integer $Type 服务类型 1为全媒体，2为文本客服
     * @param string $StaffId 客服ID
     * @param integer $Timestamp 服务时间戳
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EndStatus",$param) and $param["EndStatus"] !== null) {
            $this->EndStatus = $param["EndStatus"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StaffId",$param) and $param["StaffId"] !== null) {
            $this->StaffId = $param["StaffId"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
