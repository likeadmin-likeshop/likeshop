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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallerDisplayList返回参数结构体
 *
 * @method string getAppId() 获取appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCodeList() 获取主叫显号号码集合，codeList[0...*] 结构体数组，如果业务是主被叫互显，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeList(array $CodeList) 设置主叫显号号码集合，codeList[0...*] 结构体数组，如果业务是主被叫互显，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码
 * @method string getMsg() 获取错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCallerDisplayListResponse extends AbstractModel
{
    /**
     * @var string appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var array 主叫显号号码集合，codeList[0...*] 结构体数组，如果业务是主被叫互显，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeList;

    /**
     * @var string 错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppId appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CodeList 主叫显号号码集合，codeList[0...*] 结构体数组，如果业务是主被叫互显，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode 错误码
     * @param string $Msg 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CodeList",$param) and $param["CodeList"] !== null) {
            $this->CodeList = [];
            foreach ($param["CodeList"] as $key => $value){
                $obj = new CallBackPhoneCode();
                $obj->deserialize($value);
                array_push($this->CodeList, $obj);
            }
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
