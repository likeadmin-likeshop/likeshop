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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 背书组织及其节点列表
 *
 * @method string getEndorserGroupName() 获取背书组织名称
 * @method void setEndorserGroupName(string $EndorserGroupName) 设置背书组织名称
 * @method array getEndorserPeerList() 获取背书节点列表
 * @method void setEndorserPeerList(array $EndorserPeerList) 设置背书节点列表
 */
class EndorserGroup extends AbstractModel
{
    /**
     * @var string 背书组织名称
     */
    public $EndorserGroupName;

    /**
     * @var array 背书节点列表
     */
    public $EndorserPeerList;

    /**
     * @param string $EndorserGroupName 背书组织名称
     * @param array $EndorserPeerList 背书节点列表
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
        if (array_key_exists("EndorserGroupName",$param) and $param["EndorserGroupName"] !== null) {
            $this->EndorserGroupName = $param["EndorserGroupName"];
        }

        if (array_key_exists("EndorserPeerList",$param) and $param["EndorserPeerList"] !== null) {
            $this->EndorserPeerList = $param["EndorserPeerList"];
        }
    }
}
