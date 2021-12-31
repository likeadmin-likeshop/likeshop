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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SecurityPolicyDatabase策略
 *
 * @method string getLocalCidrBlock() 获取本端网段
 * @method void setLocalCidrBlock(string $LocalCidrBlock) 设置本端网段
 * @method array getRemoteCidrBlock() 获取对端网段
 * @method void setRemoteCidrBlock(array $RemoteCidrBlock) 设置对端网段
 */
class SecurityPolicyDatabase extends AbstractModel
{
    /**
     * @var string 本端网段
     */
    public $LocalCidrBlock;

    /**
     * @var array 对端网段
     */
    public $RemoteCidrBlock;

    /**
     * @param string $LocalCidrBlock 本端网段
     * @param array $RemoteCidrBlock 对端网段
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
        if (array_key_exists("LocalCidrBlock",$param) and $param["LocalCidrBlock"] !== null) {
            $this->LocalCidrBlock = $param["LocalCidrBlock"];
        }

        if (array_key_exists("RemoteCidrBlock",$param) and $param["RemoteCidrBlock"] !== null) {
            $this->RemoteCidrBlock = $param["RemoteCidrBlock"];
        }
    }
}
