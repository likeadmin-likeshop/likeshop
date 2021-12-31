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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBizConfig返回参数结构体
 *
 * @method string getBizType() 获取业务类型
 * @method void setBizType(string $BizType) 设置业务类型
 * @method string getBizName() 获取业务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizName(string $BizName) 设置业务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModerationCategories() 获取审核范围
 * @method void setModerationCategories(array $ModerationCategories) 设置审核范围
 * @method MediaModerationConfig getMediaModeration() 获取多媒体审核配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaModeration(MediaModerationConfig $MediaModeration) 设置多媒体审核配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBizConfigResponse extends AbstractModel
{
    /**
     * @var string 业务类型
     */
    public $BizType;

    /**
     * @var string 业务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizName;

    /**
     * @var array 审核范围
     */
    public $ModerationCategories;

    /**
     * @var MediaModerationConfig 多媒体审核配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaModeration;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BizType 业务类型
     * @param string $BizName 业务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModerationCategories 审核范围
     * @param MediaModerationConfig $MediaModeration 多媒体审核配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("BizName",$param) and $param["BizName"] !== null) {
            $this->BizName = $param["BizName"];
        }

        if (array_key_exists("ModerationCategories",$param) and $param["ModerationCategories"] !== null) {
            $this->ModerationCategories = $param["ModerationCategories"];
        }

        if (array_key_exists("MediaModeration",$param) and $param["MediaModeration"] !== null) {
            $this->MediaModeration = new MediaModerationConfig();
            $this->MediaModeration->deserialize($param["MediaModeration"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
