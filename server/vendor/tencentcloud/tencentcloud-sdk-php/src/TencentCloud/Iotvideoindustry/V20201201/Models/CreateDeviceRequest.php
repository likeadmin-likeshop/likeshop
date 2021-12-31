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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevice请求参数结构体
 *
 * @method string getNickName() 获取设备名称
 * @method void setNickName(string $NickName) 设置设备名称
 * @method string getPassWord() 获取设备密码
 * @method void setPassWord(string $PassWord) 设置设备密码
 * @method integer getDeviceType() 获取设备类型 2:国标IPC设备; 3:NVR设备
 * @method void setDeviceType(integer $DeviceType) 设置设备类型 2:国标IPC设备; 3:NVR设备
 * @method string getGroupId() 获取设备需要绑定的分组ID，参数为空则默认绑定到根分组
 * @method void setGroupId(string $GroupId) 设置设备需要绑定的分组ID，参数为空则默认绑定到根分组
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $NickName;

    /**
     * @var string 设备密码
     */
    public $PassWord;

    /**
     * @var integer 设备类型 2:国标IPC设备; 3:NVR设备
     */
    public $DeviceType;

    /**
     * @var string 设备需要绑定的分组ID，参数为空则默认绑定到根分组
     */
    public $GroupId;

    /**
     * @param string $NickName 设备名称
     * @param string $PassWord 设备密码
     * @param integer $DeviceType 设备类型 2:国标IPC设备; 3:NVR设备
     * @param string $GroupId 设备需要绑定的分组ID，参数为空则默认绑定到根分组
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
        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
