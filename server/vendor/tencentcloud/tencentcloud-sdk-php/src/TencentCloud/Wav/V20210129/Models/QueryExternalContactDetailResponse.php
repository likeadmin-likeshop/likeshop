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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryExternalContactDetail返回参数结构体
 *
 * @method string getNextCursor() 获取分页游标，再下次请求时填写以获取之后分页的记录，如果已经没有更多的数据则返回空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextCursor(string $NextCursor) 设置分页游标，再下次请求时填写以获取之后分页的记录，如果已经没有更多的数据则返回空
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExternalContact getCustomer() 获取客户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomer(ExternalContact $Customer) 设置客户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFollowUser() 获取添加了此外部联系人的企业成员信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowUser(array $FollowUser) 设置添加了此外部联系人的企业成员信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryExternalContactDetailResponse extends AbstractModel
{
    /**
     * @var string 分页游标，再下次请求时填写以获取之后分页的记录，如果已经没有更多的数据则返回空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextCursor;

    /**
     * @var ExternalContact 客户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Customer;

    /**
     * @var array 添加了此外部联系人的企业成员信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowUser;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NextCursor 分页游标，再下次请求时填写以获取之后分页的记录，如果已经没有更多的数据则返回空
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExternalContact $Customer 客户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FollowUser 添加了此外部联系人的企业成员信息
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
        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }

        if (array_key_exists("Customer",$param) and $param["Customer"] !== null) {
            $this->Customer = new ExternalContact();
            $this->Customer->deserialize($param["Customer"]);
        }

        if (array_key_exists("FollowUser",$param) and $param["FollowUser"] !== null) {
            $this->FollowUser = [];
            foreach ($param["FollowUser"] as $key => $value){
                $obj = new FollowUser();
                $obj->deserialize($value);
                array_push($this->FollowUser, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
