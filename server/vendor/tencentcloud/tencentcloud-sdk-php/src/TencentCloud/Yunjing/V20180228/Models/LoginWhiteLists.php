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
 * 异地登录白名单
 *
 * @method integer getId() 获取记录ID
 * @method void setId(integer $Id) 设置记录ID
 * @method string getUuid() 获取云镜客户端ID
 * @method void setUuid(string $Uuid) 设置云镜客户端ID
 * @method array getPlaces() 获取白名单地域
 * @method void setPlaces(array $Places) 设置白名单地域
 * @method string getUserName() 获取白名单用户（多个用户逗号隔开）
 * @method void setUserName(string $UserName) 设置白名单用户（多个用户逗号隔开）
 * @method string getSrcIp() 获取白名单IP（多个IP逗号隔开）
 * @method void setSrcIp(string $SrcIp) 设置白名单IP（多个IP逗号隔开）
 * @method boolean getIsGlobal() 获取是否为全局规则
 * @method void setIsGlobal(boolean $IsGlobal) 设置是否为全局规则
 * @method string getCreateTime() 获取创建白名单时间
 * @method void setCreateTime(string $CreateTime) 设置创建白名单时间
 * @method string getModifyTime() 获取修改白名单时间
 * @method void setModifyTime(string $ModifyTime) 设置修改白名单时间
 * @method string getMachineName() 获取机器名
 * @method void setMachineName(string $MachineName) 设置机器名
 * @method string getHostIp() 获取机器IP
 * @method void setHostIp(string $HostIp) 设置机器IP
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class LoginWhiteLists extends AbstractModel
{
    /**
     * @var integer 记录ID
     */
    public $Id;

    /**
     * @var string 云镜客户端ID
     */
    public $Uuid;

    /**
     * @var array 白名单地域
     */
    public $Places;

    /**
     * @var string 白名单用户（多个用户逗号隔开）
     */
    public $UserName;

    /**
     * @var string 白名单IP（多个IP逗号隔开）
     */
    public $SrcIp;

    /**
     * @var boolean 是否为全局规则
     */
    public $IsGlobal;

    /**
     * @var string 创建白名单时间
     */
    public $CreateTime;

    /**
     * @var string 修改白名单时间
     */
    public $ModifyTime;

    /**
     * @var string 机器名
     */
    public $MachineName;

    /**
     * @var string 机器IP
     */
    public $HostIp;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param integer $Id 记录ID
     * @param string $Uuid 云镜客户端ID
     * @param array $Places 白名单地域
     * @param string $UserName 白名单用户（多个用户逗号隔开）
     * @param string $SrcIp 白名单IP（多个IP逗号隔开）
     * @param boolean $IsGlobal 是否为全局规则
     * @param string $CreateTime 创建白名单时间
     * @param string $ModifyTime 修改白名单时间
     * @param string $MachineName 机器名
     * @param string $HostIp 机器IP
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
