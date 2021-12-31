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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubProject返回参数结构体
 *
 * @method ProductInfo getProductInfo() 获取作品信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductInfo(ProductInfo $ProductInfo) 设置作品信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ActivityInfo getActivityInfo() 获取活动信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityInfo(ActivityInfo $ActivityInfo) 设置活动信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareTitle() 获取分享标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareTitle(string $ShareTitle) 设置分享标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareDesc() 获取分享描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareDesc(string $ShareDesc) 设置分享描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareImg() 获取分享图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareImg(string $ShareImg) 设置分享图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHasStrategy() 获取是否已创建策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasStrategy(integer $HasStrategy) 设置是否已创建策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProjectStatus() 获取子项目状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProjectStatus(string $SubProjectStatus) 设置子项目状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareAppId() 获取分享公众号的appId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareAppId(string $ShareAppId) 设置分享公众号的appId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareWsId() 获取分享公众号的wsId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareWsId(string $ShareWsId) 设置分享公众号的wsId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubProjectResponse extends AbstractModel
{
    /**
     * @var ProductInfo 作品信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductInfo;

    /**
     * @var ActivityInfo 活动信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityInfo;

    /**
     * @var string 分享标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareTitle;

    /**
     * @var string 分享描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareDesc;

    /**
     * @var string 分享图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareImg;

    /**
     * @var integer 是否已创建策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasStrategy;

    /**
     * @var string 子项目状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProjectStatus;

    /**
     * @var string 分享公众号的appId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareAppId;

    /**
     * @var string 分享公众号的wsId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareWsId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ProductInfo $ProductInfo 作品信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ActivityInfo $ActivityInfo 活动信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareTitle 分享标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareDesc 分享描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareImg 分享图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HasStrategy 是否已创建策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProjectStatus 子项目状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareAppId 分享公众号的appId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareWsId 分享公众号的wsId
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
        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = new ProductInfo();
            $this->ProductInfo->deserialize($param["ProductInfo"]);
        }

        if (array_key_exists("ActivityInfo",$param) and $param["ActivityInfo"] !== null) {
            $this->ActivityInfo = new ActivityInfo();
            $this->ActivityInfo->deserialize($param["ActivityInfo"]);
        }

        if (array_key_exists("ShareTitle",$param) and $param["ShareTitle"] !== null) {
            $this->ShareTitle = $param["ShareTitle"];
        }

        if (array_key_exists("ShareDesc",$param) and $param["ShareDesc"] !== null) {
            $this->ShareDesc = $param["ShareDesc"];
        }

        if (array_key_exists("ShareImg",$param) and $param["ShareImg"] !== null) {
            $this->ShareImg = $param["ShareImg"];
        }

        if (array_key_exists("HasStrategy",$param) and $param["HasStrategy"] !== null) {
            $this->HasStrategy = $param["HasStrategy"];
        }

        if (array_key_exists("SubProjectStatus",$param) and $param["SubProjectStatus"] !== null) {
            $this->SubProjectStatus = $param["SubProjectStatus"];
        }

        if (array_key_exists("ShareAppId",$param) and $param["ShareAppId"] !== null) {
            $this->ShareAppId = $param["ShareAppId"];
        }

        if (array_key_exists("ShareWsId",$param) and $param["ShareWsId"] !== null) {
            $this->ShareWsId = $param["ShareWsId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
