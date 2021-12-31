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
 * ModifyAddressAttribute请求参数结构体
 *
 * @method string getAddressId() 获取标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
 * @method void setAddressId(string $AddressId) 设置标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
 * @method string getAddressName() 获取修改后的 EIP 名称。长度上限为20个字符。
 * @method void setAddressName(string $AddressName) 设置修改后的 EIP 名称。长度上限为20个字符。
 * @method string getEipDirectConnection() 获取设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。注意该参数仅对EIP直通功能可见的用户可以设定。
 * @method void setEipDirectConnection(string $EipDirectConnection) 设置设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。注意该参数仅对EIP直通功能可见的用户可以设定。
 */
class ModifyAddressAttributeRequest extends AbstractModel
{
    /**
     * @var string 标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
     */
    public $AddressId;

    /**
     * @var string 修改后的 EIP 名称。长度上限为20个字符。
     */
    public $AddressName;

    /**
     * @var string 设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。注意该参数仅对EIP直通功能可见的用户可以设定。
     */
    public $EipDirectConnection;

    /**
     * @param string $AddressId 标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
     * @param string $AddressName 修改后的 EIP 名称。长度上限为20个字符。
     * @param string $EipDirectConnection 设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。注意该参数仅对EIP直通功能可见的用户可以设定。
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("EipDirectConnection",$param) and $param["EipDirectConnection"] !== null) {
            $this->EipDirectConnection = $param["EipDirectConnection"];
        }
    }
}
