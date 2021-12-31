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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方平台视频发布信息。
 *
 * @method string getChannelMaterialId() 获取发布通道  ID。
 * @method void setChannelMaterialId(string $ChannelMaterialId) 设置发布通道  ID。
 * @method PenguinMediaPlatformPublishInfo getPenguinMediaPlatformPublishInfo() 获取企鹅号发布信息，如果使用的发布通道为企鹅号时必填。
 * @method void setPenguinMediaPlatformPublishInfo(PenguinMediaPlatformPublishInfo $PenguinMediaPlatformPublishInfo) 设置企鹅号发布信息，如果使用的发布通道为企鹅号时必填。
 * @method WeiboPublishInfo getWeiboPublishInfo() 获取新浪微博发布信息，如果使用的发布通道为新浪微博时必填。
 * @method void setWeiboPublishInfo(WeiboPublishInfo $WeiboPublishInfo) 设置新浪微博发布信息，如果使用的发布通道为新浪微博时必填。
 * @method KuaishouPublishInfo getKuaishouPublishInfo() 获取快手发布信息，如果使用的发布通道为快手时必填。
 * @method void setKuaishouPublishInfo(KuaishouPublishInfo $KuaishouPublishInfo) 设置快手发布信息，如果使用的发布通道为快手时必填。
 * @method CosPublishInputInfo getCosPublishInfo() 获取腾讯云对象存储发布信息， 如果使用的发布通道为腾讯云对象存储时必填。
 * @method void setCosPublishInfo(CosPublishInputInfo $CosPublishInfo) 设置腾讯云对象存储发布信息， 如果使用的发布通道为腾讯云对象存储时必填。
 */
class ThirdPartyPublishInfo extends AbstractModel
{
    /**
     * @var string 发布通道  ID。
     */
    public $ChannelMaterialId;

    /**
     * @var PenguinMediaPlatformPublishInfo 企鹅号发布信息，如果使用的发布通道为企鹅号时必填。
     */
    public $PenguinMediaPlatformPublishInfo;

    /**
     * @var WeiboPublishInfo 新浪微博发布信息，如果使用的发布通道为新浪微博时必填。
     */
    public $WeiboPublishInfo;

    /**
     * @var KuaishouPublishInfo 快手发布信息，如果使用的发布通道为快手时必填。
     */
    public $KuaishouPublishInfo;

    /**
     * @var CosPublishInputInfo 腾讯云对象存储发布信息， 如果使用的发布通道为腾讯云对象存储时必填。
     */
    public $CosPublishInfo;

    /**
     * @param string $ChannelMaterialId 发布通道  ID。
     * @param PenguinMediaPlatformPublishInfo $PenguinMediaPlatformPublishInfo 企鹅号发布信息，如果使用的发布通道为企鹅号时必填。
     * @param WeiboPublishInfo $WeiboPublishInfo 新浪微博发布信息，如果使用的发布通道为新浪微博时必填。
     * @param KuaishouPublishInfo $KuaishouPublishInfo 快手发布信息，如果使用的发布通道为快手时必填。
     * @param CosPublishInputInfo $CosPublishInfo 腾讯云对象存储发布信息， 如果使用的发布通道为腾讯云对象存储时必填。
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
        if (array_key_exists("ChannelMaterialId",$param) and $param["ChannelMaterialId"] !== null) {
            $this->ChannelMaterialId = $param["ChannelMaterialId"];
        }

        if (array_key_exists("PenguinMediaPlatformPublishInfo",$param) and $param["PenguinMediaPlatformPublishInfo"] !== null) {
            $this->PenguinMediaPlatformPublishInfo = new PenguinMediaPlatformPublishInfo();
            $this->PenguinMediaPlatformPublishInfo->deserialize($param["PenguinMediaPlatformPublishInfo"]);
        }

        if (array_key_exists("WeiboPublishInfo",$param) and $param["WeiboPublishInfo"] !== null) {
            $this->WeiboPublishInfo = new WeiboPublishInfo();
            $this->WeiboPublishInfo->deserialize($param["WeiboPublishInfo"]);
        }

        if (array_key_exists("KuaishouPublishInfo",$param) and $param["KuaishouPublishInfo"] !== null) {
            $this->KuaishouPublishInfo = new KuaishouPublishInfo();
            $this->KuaishouPublishInfo->deserialize($param["KuaishouPublishInfo"]);
        }

        if (array_key_exists("CosPublishInfo",$param) and $param["CosPublishInfo"] !== null) {
            $this->CosPublishInfo = new CosPublishInputInfo();
            $this->CosPublishInfo->deserialize($param["CosPublishInfo"]);
        }
    }
}
