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
 * 白名单规则
 *
 * @method array getPlaces() 获取加白地域
 * @method void setPlaces(array $Places) 设置加白地域
 * @method string getSrcIp() 获取加白源IP，支持网段，多个IP以逗号隔开
 * @method void setSrcIp(string $SrcIp) 设置加白源IP，支持网段，多个IP以逗号隔开
 * @method string getUserName() 获取加白用户名，多个用户名以逗号隔开
 * @method void setUserName(string $UserName) 设置加白用户名，多个用户名以逗号隔开
 * @method boolean getIsGlobal() 获取是否对全局生效
 * @method void setIsGlobal(boolean $IsGlobal) 设置是否对全局生效
 * @method string getHostIp() 获取白名单生效的机器
 * @method void setHostIp(string $HostIp) 设置白名单生效的机器
 * @method integer getId() 获取规则ID，用于更新规则
 * @method void setId(integer $Id) 设置规则ID，用于更新规则
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class LoginWhiteListsRule extends AbstractModel
{
    /**
     * @var array 加白地域
     */
    public $Places;

    /**
     * @var string 加白源IP，支持网段，多个IP以逗号隔开
     */
    public $SrcIp;

    /**
     * @var string 加白用户名，多个用户名以逗号隔开
     */
    public $UserName;

    /**
     * @var boolean 是否对全局生效
     */
    public $IsGlobal;

    /**
     * @var string 白名单生效的机器
     */
    public $HostIp;

    /**
     * @var integer 规则ID，用于更新规则
     */
    public $Id;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param array $Places 加白地域
     * @param string $SrcIp 加白源IP，支持网段，多个IP以逗号隔开
     * @param string $UserName 加白用户名，多个用户名以逗号隔开
     * @param boolean $IsGlobal 是否对全局生效
     * @param string $HostIp 白名单生效的机器
     * @param integer $Id 规则ID，用于更新规则
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
        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
