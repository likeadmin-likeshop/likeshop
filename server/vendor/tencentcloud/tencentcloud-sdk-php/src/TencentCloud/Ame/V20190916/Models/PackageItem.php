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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 曲库包歌曲信息
 *
 * @method string getOrderId() 获取订单id
 * @method void setOrderId(string $OrderId) 设置订单id
 * @method string getTrackName() 获取歌曲名
 * @method void setTrackName(string $TrackName) 设置歌曲名
 * @method string getItemID() 获取歌曲ID
 * @method void setItemID(string $ItemID) 设置歌曲ID
 * @method string getImg() 获取专辑图片
 * @method void setImg(string $Img) 设置专辑图片
 * @method string getArtistName() 获取歌手名
 * @method void setArtistName(string $ArtistName) 设置歌手名
 * @method string getDuration() 获取歌曲时长
 * @method void setDuration(string $Duration) 设置歌曲时长
 * @method string getAuthorizedArea() 获取授权区域，global: 全球 CN: 中国
 * @method void setAuthorizedArea(string $AuthorizedArea) 设置授权区域，global: 全球 CN: 中国
 */
class PackageItem extends AbstractModel
{
    /**
     * @var string 订单id
     */
    public $OrderId;

    /**
     * @var string 歌曲名
     */
    public $TrackName;

    /**
     * @var string 歌曲ID
     */
    public $ItemID;

    /**
     * @var string 专辑图片
     */
    public $Img;

    /**
     * @var string 歌手名
     */
    public $ArtistName;

    /**
     * @var string 歌曲时长
     */
    public $Duration;

    /**
     * @var string 授权区域，global: 全球 CN: 中国
     */
    public $AuthorizedArea;

    /**
     * @param string $OrderId 订单id
     * @param string $TrackName 歌曲名
     * @param string $ItemID 歌曲ID
     * @param string $Img 专辑图片
     * @param string $ArtistName 歌手名
     * @param string $Duration 歌曲时长
     * @param string $AuthorizedArea 授权区域，global: 全球 CN: 中国
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("TrackName",$param) and $param["TrackName"] !== null) {
            $this->TrackName = $param["TrackName"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("Img",$param) and $param["Img"] !== null) {
            $this->Img = $param["Img"];
        }

        if (array_key_exists("ArtistName",$param) and $param["ArtistName"] !== null) {
            $this->ArtistName = $param["ArtistName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AuthorizedArea",$param) and $param["AuthorizedArea"] !== null) {
            $this->AuthorizedArea = $param["AuthorizedArea"];
        }
    }
}
