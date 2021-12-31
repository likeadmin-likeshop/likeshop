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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcEndPointServiceWhiteList请求参数结构体
 *
 * @method string getUserUin() 获取用户UIN。
 * @method void setUserUin(string $UserUin) 设置用户UIN。
 * @method string getEndPointServiceId() 获取终端节点服务ID。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。
 * @method string getDescription() 获取白名单描述信息。
 * @method void setDescription(string $Description) 设置白名单描述信息。
 */
class ModifyVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var string 用户UIN。
     */
    public $UserUin;

    /**
     * @var string 终端节点服务ID。
     */
    public $EndPointServiceId;

    /**
     * @var string 白名单描述信息。
     */
    public $Description;

    /**
     * @param string $UserUin 用户UIN。
     * @param string $EndPointServiceId 终端节点服务ID。
     * @param string $Description 白名单描述信息。
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
