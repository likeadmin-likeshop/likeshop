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
 * GetBcosBlockByNumber请求参数结构体
 *
 * @method string getClusterId() 获取网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置网络ID，可在区块链网络详情或列表中获取
 * @method integer getGroupId() 获取群组编号，可在群组列表中获取
 * @method void setGroupId(integer $GroupId) 设置群组编号，可在群组列表中获取
 * @method integer getBlockNumber() 获取区块高度，可以从InvokeBcosTrans接口的返回值中解析获取
 * @method void setBlockNumber(integer $BlockNumber) 设置区块高度，可以从InvokeBcosTrans接口的返回值中解析获取
 */
class GetBcosBlockByNumberRequest extends AbstractModel
{
    /**
     * @var string 网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var integer 群组编号，可在群组列表中获取
     */
    public $GroupId;

    /**
     * @var integer 区块高度，可以从InvokeBcosTrans接口的返回值中解析获取
     */
    public $BlockNumber;

    /**
     * @param string $ClusterId 网络ID，可在区块链网络详情或列表中获取
     * @param integer $GroupId 群组编号，可在群组列表中获取
     * @param integer $BlockNumber 区块高度，可以从InvokeBcosTrans接口的返回值中解析获取
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("BlockNumber",$param) and $param["BlockNumber"] !== null) {
            $this->BlockNumber = $param["BlockNumber"];
        }
    }
}
