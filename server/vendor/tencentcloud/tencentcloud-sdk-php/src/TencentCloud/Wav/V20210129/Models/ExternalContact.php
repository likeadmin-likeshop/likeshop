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
 * 客户信息
 *
 * @method string getExternalUserId() 获取外部联系人的userId
 * @method void setExternalUserId(string $ExternalUserId) 设置外部联系人的userId
 * @method integer getGender() 获取外部联系人性别 0-未知 1-男性 2-女性
 * @method void setGender(integer $Gender) 设置外部联系人性别 0-未知 1-男性 2-女性
 * @method string getName() 获取外部联系人的名称
 * @method void setName(string $Name) 设置外部联系人的名称
 * @method integer getType() 获取外部联系人的类型，1表示该外部联系人是微信用户，2表示该外部联系人是企业微信用户
 * @method void setType(integer $Type) 设置外部联系人的类型，1表示该外部联系人是微信用户，2表示该外部联系人是企业微信用户
 * @method string getUnionId() 获取外部联系人在微信开放平台的唯一身份标识（微信unionid），通过此字段企业可将外部联系人与公众号/小程序用户关联起来。仅当联系人类型是微信用户，且企业或第三方服务商绑定了微信开发者ID有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionId(string $UnionId) 设置外部联系人在微信开放平台的唯一身份标识（微信unionid），通过此字段企业可将外部联系人与公众号/小程序用户关联起来。仅当联系人类型是微信用户，且企业或第三方服务商绑定了微信开发者ID有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalContact extends AbstractModel
{
    /**
     * @var string 外部联系人的userId
     */
    public $ExternalUserId;

    /**
     * @var integer 外部联系人性别 0-未知 1-男性 2-女性
     */
    public $Gender;

    /**
     * @var string 外部联系人的名称
     */
    public $Name;

    /**
     * @var integer 外部联系人的类型，1表示该外部联系人是微信用户，2表示该外部联系人是企业微信用户
     */
    public $Type;

    /**
     * @var string 外部联系人在微信开放平台的唯一身份标识（微信unionid），通过此字段企业可将外部联系人与公众号/小程序用户关联起来。仅当联系人类型是微信用户，且企业或第三方服务商绑定了微信开发者ID有此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnionId;

    /**
     * @param string $ExternalUserId 外部联系人的userId
     * @param integer $Gender 外部联系人性别 0-未知 1-男性 2-女性
     * @param string $Name 外部联系人的名称
     * @param integer $Type 外部联系人的类型，1表示该外部联系人是微信用户，2表示该外部联系人是企业微信用户
     * @param string $UnionId 外部联系人在微信开放平台的唯一身份标识（微信unionid），通过此字段企业可将外部联系人与公众号/小程序用户关联起来。仅当联系人类型是微信用户，且企业或第三方服务商绑定了微信开发者ID有此字段。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ExternalUserId",$param) and $param["ExternalUserId"] !== null) {
            $this->ExternalUserId = $param["ExternalUserId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UnionId",$param) and $param["UnionId"] !== null) {
            $this->UnionId = $param["UnionId"];
        }
    }
}
