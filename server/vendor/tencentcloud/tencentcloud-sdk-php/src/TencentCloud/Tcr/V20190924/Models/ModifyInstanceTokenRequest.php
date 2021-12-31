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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceToken请求参数结构体
 *
 * @method string getTokenId() 获取实例长期访问凭证 ID
 * @method void setTokenId(string $TokenId) 设置实例长期访问凭证 ID
 * @method string getRegistryId() 获取实例 ID
 * @method void setRegistryId(string $RegistryId) 设置实例 ID
 * @method boolean getEnable() 获取启用或禁用实例长期访问凭证
 * @method void setEnable(boolean $Enable) 设置启用或禁用实例长期访问凭证
 * @method string getDesc() 获取访问凭证描述
 * @method void setDesc(string $Desc) 设置访问凭证描述
 * @method integer getModifyFlag() 获取1为修改描述 2为启动禁用，不填写默认为修改启动禁用
 * @method void setModifyFlag(integer $ModifyFlag) 设置1为修改描述 2为启动禁用，不填写默认为修改启动禁用
 */
class ModifyInstanceTokenRequest extends AbstractModel
{
    /**
     * @var string 实例长期访问凭证 ID
     */
    public $TokenId;

    /**
     * @var string 实例 ID
     */
    public $RegistryId;

    /**
     * @var boolean 启用或禁用实例长期访问凭证
     */
    public $Enable;

    /**
     * @var string 访问凭证描述
     */
    public $Desc;

    /**
     * @var integer 1为修改描述 2为启动禁用，不填写默认为修改启动禁用
     */
    public $ModifyFlag;

    /**
     * @param string $TokenId 实例长期访问凭证 ID
     * @param string $RegistryId 实例 ID
     * @param boolean $Enable 启用或禁用实例长期访问凭证
     * @param string $Desc 访问凭证描述
     * @param integer $ModifyFlag 1为修改描述 2为启动禁用，不填写默认为修改启动禁用
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ModifyFlag",$param) and $param["ModifyFlag"] !== null) {
            $this->ModifyFlag = $param["ModifyFlag"];
        }
    }
}
