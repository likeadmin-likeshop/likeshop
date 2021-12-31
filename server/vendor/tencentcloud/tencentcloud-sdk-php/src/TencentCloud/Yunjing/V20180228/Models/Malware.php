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
 * 木马相关信息
 *
 * @method integer getId() 获取事件ID。
 * @method void setId(integer $Id) 设置事件ID。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getStatus() 获取当前木马状态。
<li>UN_OPERATED：未处理</li><li>SEGREGATED：已隔离</li><li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li><li>RECOVERING：恢复中</li>
 * @method void setStatus(string $Status) 设置当前木马状态。
<li>UN_OPERATED：未处理</li><li>SEGREGATED：已隔离</li><li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li><li>RECOVERING：恢复中</li>
 * @method string getFilePath() 获取木马所在的路径。
 * @method void setFilePath(string $FilePath) 设置木马所在的路径。
 * @method string getDescription() 获取木马描述。
 * @method void setDescription(string $Description) 设置木马描述。
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getFileCreateTime() 获取木马文件创建时间。
 * @method void setFileCreateTime(string $FileCreateTime) 设置木马文件创建时间。
 * @method string getModifyTime() 获取木马文件修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置木马文件修改时间。
 * @method string getUuid() 获取云镜客户端唯一标识UUID。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一标识UUID。
 */
class Malware extends AbstractModel
{
    /**
     * @var integer 事件ID。
     */
    public $Id;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 当前木马状态。
<li>UN_OPERATED：未处理</li><li>SEGREGATED：已隔离</li><li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li><li>RECOVERING：恢复中</li>
     */
    public $Status;

    /**
     * @var string 木马所在的路径。
     */
    public $FilePath;

    /**
     * @var string 木马描述。
     */
    public $Description;

    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 木马文件创建时间。
     */
    public $FileCreateTime;

    /**
     * @var string 木马文件修改时间。
     */
    public $ModifyTime;

    /**
     * @var string 云镜客户端唯一标识UUID。
     */
    public $Uuid;

    /**
     * @param integer $Id 事件ID。
     * @param string $MachineIp 主机IP。
     * @param string $Status 当前木马状态。
<li>UN_OPERATED：未处理</li><li>SEGREGATED：已隔离</li><li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li><li>RECOVERING：恢复中</li>
     * @param string $FilePath 木马所在的路径。
     * @param string $Description 木马描述。
     * @param string $MachineName 主机名称。
     * @param string $FileCreateTime 木马文件创建时间。
     * @param string $ModifyTime 木马文件修改时间。
     * @param string $Uuid 云镜客户端唯一标识UUID。
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

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("FileCreateTime",$param) and $param["FileCreateTime"] !== null) {
            $this->FileCreateTime = $param["FileCreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
