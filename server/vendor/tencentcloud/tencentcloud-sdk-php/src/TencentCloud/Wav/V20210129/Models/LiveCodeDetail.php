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
 * 活动活码详情
 *
 * @method integer getLiveCodeId() 获取活码id
 * @method void setLiveCodeId(integer $LiveCodeId) 设置活码id
 * @method string getLiveCodeName() 获取活码名称
 * @method void setLiveCodeName(string $LiveCodeName) 设置活码名称
 * @method string getShortChainAddress() 获取短链url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShortChainAddress(string $ShortChainAddress) 设置短链url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLiveCodePreview() 获取活码二维码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveCodePreview(string $LiveCodePreview) 设置活码二维码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActivityId() 获取活动id
 * @method void setActivityId(integer $ActivityId) 设置活动id
 * @method string getActivityName() 获取活动名称
 * @method void setActivityName(string $ActivityName) 设置活动名称
 * @method integer getLiveCodeState() 获取活码状态，-1：删除，0：启用，1禁用，默认为0
 * @method void setLiveCodeState(integer $LiveCodeState) 设置活码状态，-1：删除，0：启用，1禁用，默认为0
 * @method string getLiveCodeData() 获取活码参数，每个活码参数都是不一样的， 这个的值对应的是字符串json类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveCodeData(string $LiveCodeData) 设置活码参数，每个活码参数都是不一样的， 这个的值对应的是字符串json类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间戳，单位为秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳，单位为秒
 * @method integer getUpdateTime() 获取更新时间戳，单位为秒
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳，单位为秒
 */
class LiveCodeDetail extends AbstractModel
{
    /**
     * @var integer 活码id
     */
    public $LiveCodeId;

    /**
     * @var string 活码名称
     */
    public $LiveCodeName;

    /**
     * @var string 短链url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShortChainAddress;

    /**
     * @var string 活码二维码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveCodePreview;

    /**
     * @var integer 活动id
     */
    public $ActivityId;

    /**
     * @var string 活动名称
     */
    public $ActivityName;

    /**
     * @var integer 活码状态，-1：删除，0：启用，1禁用，默认为0
     */
    public $LiveCodeState;

    /**
     * @var string 活码参数，每个活码参数都是不一样的， 这个的值对应的是字符串json类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveCodeData;

    /**
     * @var integer 创建时间戳，单位为秒
     */
    public $CreateTime;

    /**
     * @var integer 更新时间戳，单位为秒
     */
    public $UpdateTime;

    /**
     * @param integer $LiveCodeId 活码id
     * @param string $LiveCodeName 活码名称
     * @param string $ShortChainAddress 短链url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LiveCodePreview 活码二维码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActivityId 活动id
     * @param string $ActivityName 活动名称
     * @param integer $LiveCodeState 活码状态，-1：删除，0：启用，1禁用，默认为0
     * @param string $LiveCodeData 活码参数，每个活码参数都是不一样的， 这个的值对应的是字符串json类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间戳，单位为秒
     * @param integer $UpdateTime 更新时间戳，单位为秒
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
        if (array_key_exists("LiveCodeId",$param) and $param["LiveCodeId"] !== null) {
            $this->LiveCodeId = $param["LiveCodeId"];
        }

        if (array_key_exists("LiveCodeName",$param) and $param["LiveCodeName"] !== null) {
            $this->LiveCodeName = $param["LiveCodeName"];
        }

        if (array_key_exists("ShortChainAddress",$param) and $param["ShortChainAddress"] !== null) {
            $this->ShortChainAddress = $param["ShortChainAddress"];
        }

        if (array_key_exists("LiveCodePreview",$param) and $param["LiveCodePreview"] !== null) {
            $this->LiveCodePreview = $param["LiveCodePreview"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ActivityName",$param) and $param["ActivityName"] !== null) {
            $this->ActivityName = $param["ActivityName"];
        }

        if (array_key_exists("LiveCodeState",$param) and $param["LiveCodeState"] !== null) {
            $this->LiveCodeState = $param["LiveCodeState"];
        }

        if (array_key_exists("LiveCodeData",$param) and $param["LiveCodeData"] !== null) {
            $this->LiveCodeData = $param["LiveCodeData"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
