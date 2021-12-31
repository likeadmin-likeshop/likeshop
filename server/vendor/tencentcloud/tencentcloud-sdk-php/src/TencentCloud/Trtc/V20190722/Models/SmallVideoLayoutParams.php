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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 画中画模板中有效，代表小画面的布局参数
 *
 * @method string getUserId() 获取代表小画面对应的用户ID。
 * @method void setUserId(string $UserId) 设置代表小画面对应的用户ID。
 * @method integer getStreamType() 获取代表小画面对应的流类型，0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
 * @method void setStreamType(integer $StreamType) 设置代表小画面对应的流类型，0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
 * @method integer getImageWidth() 获取小画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method void setImageWidth(integer $ImageWidth) 设置小画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method integer getImageHeight() 获取小画面在输出时的高度，单位为像素值，不填默认为0。
 * @method void setImageHeight(integer $ImageHeight) 设置小画面在输出时的高度，单位为像素值，不填默认为0。
 * @method integer getLocationX() 获取小画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method void setLocationX(integer $LocationX) 设置小画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method integer getLocationY() 获取小画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method void setLocationY(integer $LocationY) 设置小画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 */
class SmallVideoLayoutParams extends AbstractModel
{
    /**
     * @var string 代表小画面对应的用户ID。
     */
    public $UserId;

    /**
     * @var integer 代表小画面对应的流类型，0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
     */
    public $StreamType;

    /**
     * @var integer 小画面在输出时的宽度，单位为像素值，不填默认为0。
     */
    public $ImageWidth;

    /**
     * @var integer 小画面在输出时的高度，单位为像素值，不填默认为0。
     */
    public $ImageHeight;

    /**
     * @var integer 小画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     */
    public $LocationX;

    /**
     * @var integer 小画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     */
    public $LocationY;

    /**
     * @param string $UserId 代表小画面对应的用户ID。
     * @param integer $StreamType 代表小画面对应的流类型，0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
     * @param integer $ImageWidth 小画面在输出时的宽度，单位为像素值，不填默认为0。
     * @param integer $ImageHeight 小画面在输出时的高度，单位为像素值，不填默认为0。
     * @param integer $LocationX 小画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     * @param integer $LocationY 小画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }
    }
}
