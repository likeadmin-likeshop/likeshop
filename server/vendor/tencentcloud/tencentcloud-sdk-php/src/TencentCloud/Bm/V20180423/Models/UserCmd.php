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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 脚本信息
 *
 * @method string getAlias() 获取用户自定义脚本名
 * @method void setAlias(string $Alias) 设置用户自定义脚本名
 * @method integer getAppId() 获取AppId
 * @method void setAppId(integer $AppId) 设置AppId
 * @method integer getAutoId() 获取脚本自增ID
 * @method void setAutoId(integer $AutoId) 设置脚本自增ID
 * @method string getCmdId() 获取脚本ID
 * @method void setCmdId(string $CmdId) 设置脚本ID
 * @method string getContent() 获取脚本内容
 * @method void setContent(string $Content) 设置脚本内容
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getOsType() 获取命令适用的操作系统类型
 * @method void setOsType(string $OsType) 设置命令适用的操作系统类型
 */
class UserCmd extends AbstractModel
{
    /**
     * @var string 用户自定义脚本名
     */
    public $Alias;

    /**
     * @var integer AppId
     */
    public $AppId;

    /**
     * @var integer 脚本自增ID
     */
    public $AutoId;

    /**
     * @var string 脚本ID
     */
    public $CmdId;

    /**
     * @var string 脚本内容
     */
    public $Content;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 命令适用的操作系统类型
     */
    public $OsType;

    /**
     * @param string $Alias 用户自定义脚本名
     * @param integer $AppId AppId
     * @param integer $AutoId 脚本自增ID
     * @param string $CmdId 脚本ID
     * @param string $Content 脚本内容
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $OsType 命令适用的操作系统类型
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AutoId",$param) and $param["AutoId"] !== null) {
            $this->AutoId = $param["AutoId"];
        }

        if (array_key_exists("CmdId",$param) and $param["CmdId"] !== null) {
            $this->CmdId = $param["CmdId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
