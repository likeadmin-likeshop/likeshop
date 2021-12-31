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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片下载信息
 *
 * @method ImageInfo getImageInfo() 获取图片基础信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置图片基础信息
 * @method string getImageUrl() 获取图片原图URL
 * @method void setImageUrl(string $ImageUrl) 设置图片原图URL
 * @method string getImageThumbUrl() 获取图片缩略图URL
 * @method void setImageThumbUrl(string $ImageThumbUrl) 设置图片缩略图URL
 * @method string getOrderId() 获取订单Id
 * @method void setOrderId(string $OrderId) 设置订单Id
 * @method string getOrderCreateTime() 获取订单创建时间
 * @method void setOrderCreateTime(string $OrderCreateTime) 设置订单创建时间
 * @method string getDownloadId() 获取下载Id
 * @method void setDownloadId(string $DownloadId) 设置下载Id
 * @method string getDownloadTime() 获取下载时间
 * @method void setDownloadTime(string $DownloadTime) 设置下载时间
 * @method integer getConsumeType() 获取图片购买类型，单张/会员
 * @method void setConsumeType(integer $ConsumeType) 设置图片购买类型，单张/会员
 * @method boolean getFirstDownload() 获取是否首次下载
 * @method void setFirstDownload(boolean $FirstDownload) 设置是否首次下载
 */
class DownloadInfo extends AbstractModel
{
    /**
     * @var ImageInfo 图片基础信息
     */
    public $ImageInfo;

    /**
     * @var string 图片原图URL
     */
    public $ImageUrl;

    /**
     * @var string 图片缩略图URL
     */
    public $ImageThumbUrl;

    /**
     * @var string 订单Id
     */
    public $OrderId;

    /**
     * @var string 订单创建时间
     */
    public $OrderCreateTime;

    /**
     * @var string 下载Id
     */
    public $DownloadId;

    /**
     * @var string 下载时间
     */
    public $DownloadTime;

    /**
     * @var integer 图片购买类型，单张/会员
     */
    public $ConsumeType;

    /**
     * @var boolean 是否首次下载
     */
    public $FirstDownload;

    /**
     * @param ImageInfo $ImageInfo 图片基础信息
     * @param string $ImageUrl 图片原图URL
     * @param string $ImageThumbUrl 图片缩略图URL
     * @param string $OrderId 订单Id
     * @param string $OrderCreateTime 订单创建时间
     * @param string $DownloadId 下载Id
     * @param string $DownloadTime 下载时间
     * @param integer $ConsumeType 图片购买类型，单张/会员
     * @param boolean $FirstDownload 是否首次下载
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
        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageThumbUrl",$param) and $param["ImageThumbUrl"] !== null) {
            $this->ImageThumbUrl = $param["ImageThumbUrl"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("OrderCreateTime",$param) and $param["OrderCreateTime"] !== null) {
            $this->OrderCreateTime = $param["OrderCreateTime"];
        }

        if (array_key_exists("DownloadId",$param) and $param["DownloadId"] !== null) {
            $this->DownloadId = $param["DownloadId"];
        }

        if (array_key_exists("DownloadTime",$param) and $param["DownloadTime"] !== null) {
            $this->DownloadTime = $param["DownloadTime"];
        }

        if (array_key_exists("ConsumeType",$param) and $param["ConsumeType"] !== null) {
            $this->ConsumeType = $param["ConsumeType"];
        }

        if (array_key_exists("FirstDownload",$param) and $param["FirstDownload"] !== null) {
            $this->FirstDownload = $param["FirstDownload"];
        }
    }
}
