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
 * 通道详情信息
 *
 * @method string getChannelName() 获取通道名称
 * @method void setChannelName(string $ChannelName) 设置通道名称
 * @method array getPeerList() 获取当前组织加入通道的节点列表
 * @method void setPeerList(array $PeerList) 设置当前组织加入通道的节点列表
 */
class ChannelDetailForUser extends AbstractModel
{
    /**
     * @var string 通道名称
     */
    public $ChannelName;

    /**
     * @var array 当前组织加入通道的节点列表
     */
    public $PeerList;

    /**
     * @param string $ChannelName 通道名称
     * @param array $PeerList 当前组织加入通道的节点列表
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PeerList",$param) and $param["PeerList"] !== null) {
            $this->PeerList = [];
            foreach ($param["PeerList"] as $key => $value){
                $obj = new PeerDetailForUser();
                $obj->deserialize($value);
                array_push($this->PeerList, $obj);
            }
        }
    }
}
