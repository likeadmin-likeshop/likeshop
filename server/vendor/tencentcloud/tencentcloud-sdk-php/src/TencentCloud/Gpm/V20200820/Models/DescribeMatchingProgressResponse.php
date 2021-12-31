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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMatchingProgress返回参数结构体
 *
 * @method array getMatchTickets() 获取匹配票据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchTickets(array $MatchTickets) 设置匹配票据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrCode() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMatchingProgressResponse extends AbstractModel
{
    /**
     * @var array 匹配票据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchTickets;

    /**
     * @var integer 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MatchTickets 匹配票据列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrCode 错误码
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
        if (array_key_exists("MatchTickets",$param) and $param["MatchTickets"] !== null) {
            $this->MatchTickets = [];
            foreach ($param["MatchTickets"] as $key => $value){
                $obj = new MatchTicket();
                $obj->deserialize($value);
                array_push($this->MatchTickets, $obj);
            }
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
