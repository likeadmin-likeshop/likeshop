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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 小程序码信息
 *
 * @method integer getId() 获取主键id
 * @method void setId(integer $Id) 设置主键id
 * @method string getMiniAppName() 获取小程序名称
 * @method void setMiniAppName(string $MiniAppName) 设置小程序名称
 * @method string getMiniAppLogo() 获取小程序logo
 * @method void setMiniAppLogo(string $MiniAppLogo) 设置小程序logo
 * @method string getMiniAdminUrl() 获取小程序管理端地址
 * @method void setMiniAdminUrl(string $MiniAdminUrl) 设置小程序管理端地址
 * @method integer getState() 获取状态：0正常，1删除
 * @method void setState(integer $State) 设置状态：0正常，1删除
 * @method integer getCreateTime() 获取创建时间戳，单位为秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳，单位为秒
 * @method integer getUpdateTime() 获取更新时间戳，单位为秒
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳，单位为秒
 */
class MiniAppCodeInfo extends AbstractModel
{
    /**
     * @var integer 主键id
     */
    public $Id;

    /**
     * @var string 小程序名称
     */
    public $MiniAppName;

    /**
     * @var string 小程序logo
     */
    public $MiniAppLogo;

    /**
     * @var string 小程序管理端地址
     */
    public $MiniAdminUrl;

    /**
     * @var integer 状态：0正常，1删除
     */
    public $State;

    /**
     * @var integer 创建时间戳，单位为秒
     */
    public $CreateTime;

    /**
     * @var integer 更新时间戳，单位为秒
     */
    public $UpdateTime;

    /**
     * @param integer $Id 主键id
     * @param string $MiniAppName 小程序名称
     * @param string $MiniAppLogo 小程序logo
     * @param string $MiniAdminUrl 小程序管理端地址
     * @param integer $State 状态：0正常，1删除
     * @param integer $CreateTime 创建时间戳，单位为秒
     * @param integer $UpdateTime 更新时间戳，单位为秒
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

        if (array_key_exists("MiniAppName",$param) and $param["MiniAppName"] !== null) {
            $this->MiniAppName = $param["MiniAppName"];
        }

        if (array_key_exists("MiniAppLogo",$param) and $param["MiniAppLogo"] !== null) {
            $this->MiniAppLogo = $param["MiniAppLogo"];
        }

        if (array_key_exists("MiniAdminUrl",$param) and $param["MiniAdminUrl"] !== null) {
            $this->MiniAdminUrl = $param["MiniAdminUrl"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
