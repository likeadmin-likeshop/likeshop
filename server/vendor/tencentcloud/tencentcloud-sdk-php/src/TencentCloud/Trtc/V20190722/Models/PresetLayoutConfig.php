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
 * 自定义模板中有效，指定用户视频在混合画面中的位置。
 *
 * @method string getUserId() 获取指定显示在该画面上的用户ID。如果不指定用户ID，会按照用户加入房间的顺序自动匹配PresetLayoutConfig中的画面设置。
 * @method void setUserId(string $UserId) 设置指定显示在该画面上的用户ID。如果不指定用户ID，会按照用户加入房间的顺序自动匹配PresetLayoutConfig中的画面设置。
 * @method integer getStreamType() 获取当该画面指定用户时，代表用户的流类型。0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
 * @method void setStreamType(integer $StreamType) 设置当该画面指定用户时，代表用户的流类型。0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
 * @method integer getImageWidth() 获取该画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method void setImageWidth(integer $ImageWidth) 设置该画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method integer getImageHeight() 获取该画面在输出时的高度，单位为像素值，不填默认为0。
 * @method void setImageHeight(integer $ImageHeight) 设置该画面在输出时的高度，单位为像素值，不填默认为0。
 * @method integer getLocationX() 获取该画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method void setLocationX(integer $LocationX) 设置该画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method integer getLocationY() 获取该画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method void setLocationY(integer $LocationY) 设置该画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method integer getZOrder() 获取该画面在输出时的层级，不填默认为0。
 * @method void setZOrder(integer $ZOrder) 设置该画面在输出时的层级，不填默认为0。
 * @method integer getRenderMode() 获取该画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
 * @method void setRenderMode(integer $RenderMode) 设置该画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
 * @method integer getMixInputType() 获取该当前位置用户混入的流类型：0为混入音视频，1为只混入视频，2为只混入音频。默认为0，建议配合指定用户ID使用。
 * @method void setMixInputType(integer $MixInputType) 设置该当前位置用户混入的流类型：0为混入音视频，1为只混入视频，2为只混入音频。默认为0，建议配合指定用户ID使用。
 * @method integer getPlaceImageId() 获取占位图ID。启用占位图功能时，在当前位置的用户没有上行视频时显示占位图。占位图在实时音视频控制台上传并生成，https://cloud.tencent.com/document/product/647/50769
 * @method void setPlaceImageId(integer $PlaceImageId) 设置占位图ID。启用占位图功能时，在当前位置的用户没有上行视频时显示占位图。占位图在实时音视频控制台上传并生成，https://cloud.tencent.com/document/product/647/50769
 */
class PresetLayoutConfig extends AbstractModel
{
    /**
     * @var string 指定显示在该画面上的用户ID。如果不指定用户ID，会按照用户加入房间的顺序自动匹配PresetLayoutConfig中的画面设置。
     */
    public $UserId;

    /**
     * @var integer 当该画面指定用户时，代表用户的流类型。0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
     */
    public $StreamType;

    /**
     * @var integer 该画面在输出时的宽度，单位为像素值，不填默认为0。
     */
    public $ImageWidth;

    /**
     * @var integer 该画面在输出时的高度，单位为像素值，不填默认为0。
     */
    public $ImageHeight;

    /**
     * @var integer 该画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     */
    public $LocationX;

    /**
     * @var integer 该画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     */
    public $LocationY;

    /**
     * @var integer 该画面在输出时的层级，不填默认为0。
     */
    public $ZOrder;

    /**
     * @var integer 该画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
     */
    public $RenderMode;

    /**
     * @var integer 该当前位置用户混入的流类型：0为混入音视频，1为只混入视频，2为只混入音频。默认为0，建议配合指定用户ID使用。
     */
    public $MixInputType;

    /**
     * @var integer 占位图ID。启用占位图功能时，在当前位置的用户没有上行视频时显示占位图。占位图在实时音视频控制台上传并生成，https://cloud.tencent.com/document/product/647/50769
     */
    public $PlaceImageId;

    /**
     * @param string $UserId 指定显示在该画面上的用户ID。如果不指定用户ID，会按照用户加入房间的顺序自动匹配PresetLayoutConfig中的画面设置。
     * @param integer $StreamType 当该画面指定用户时，代表用户的流类型。0为摄像头，1为屏幕分享。小画面为web用户时此值填0。
     * @param integer $ImageWidth 该画面在输出时的宽度，单位为像素值，不填默认为0。
     * @param integer $ImageHeight 该画面在输出时的高度，单位为像素值，不填默认为0。
     * @param integer $LocationX 该画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     * @param integer $LocationY 该画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     * @param integer $ZOrder 该画面在输出时的层级，不填默认为0。
     * @param integer $RenderMode 该画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
     * @param integer $MixInputType 该当前位置用户混入的流类型：0为混入音视频，1为只混入视频，2为只混入音频。默认为0，建议配合指定用户ID使用。
     * @param integer $PlaceImageId 占位图ID。启用占位图功能时，在当前位置的用户没有上行视频时显示占位图。占位图在实时音视频控制台上传并生成，https://cloud.tencent.com/document/product/647/50769
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

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("MixInputType",$param) and $param["MixInputType"] !== null) {
            $this->MixInputType = $param["MixInputType"];
        }

        if (array_key_exists("PlaceImageId",$param) and $param["PlaceImageId"] !== null) {
            $this->PlaceImageId = $param["PlaceImageId"];
        }
    }
}
