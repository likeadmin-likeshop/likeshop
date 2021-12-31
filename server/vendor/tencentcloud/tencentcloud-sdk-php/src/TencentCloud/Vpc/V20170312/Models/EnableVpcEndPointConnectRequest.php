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
 * EnableVpcEndPointConnect请求参数结构体
 *
 * @method string getEndPointServiceId() 获取终端节点服务ID。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。
 * @method array getEndPointId() 获取终端节点ID。
 * @method void setEndPointId(array $EndPointId) 设置终端节点ID。
 * @method boolean getAcceptFlag() 获取是否接受终端节点连接请求。
 * @method void setAcceptFlag(boolean $AcceptFlag) 设置是否接受终端节点连接请求。
 */
class EnableVpcEndPointConnectRequest extends AbstractModel
{
    /**
     * @var string 终端节点服务ID。
     */
    public $EndPointServiceId;

    /**
     * @var array 终端节点ID。
     */
    public $EndPointId;

    /**
     * @var boolean 是否接受终端节点连接请求。
     */
    public $AcceptFlag;

    /**
     * @param string $EndPointServiceId 终端节点服务ID。
     * @param array $EndPointId 终端节点ID。
     * @param boolean $AcceptFlag 是否接受终端节点连接请求。
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("AcceptFlag",$param) and $param["AcceptFlag"] !== null) {
            $this->AcceptFlag = $param["AcceptFlag"];
        }
    }
}
