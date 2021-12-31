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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录音信息
 *
 * @method string getAccountNum() 获取案件编号。
 * @method void setAccountNum(string $AccountNum) 设置案件编号。
 * @method string getBizDate() 获取外呼日期。
 * @method void setBizDate(string $BizDate) 设置外呼日期。
 * @method string getCallStartTime() 获取开始呼叫时间。
 * @method void setCallStartTime(string $CallStartTime) 设置开始呼叫时间。
 * @method string getCallerPhone() 获取主叫号码。
 * @method void setCallerPhone(string $CallerPhone) 设置主叫号码。
 * @method string getDirection() 获取呼叫方向，O为呼出，I为呼入。
 * @method void setDirection(string $Direction) 设置呼叫方向，O为呼出，I为呼入。
 * @method integer getDuration() 获取通话时长。
 * @method void setDuration(integer $Duration) 设置通话时长。
 * @method string getProductId() 获取产品ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置产品ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordCosUrl() 获取录音下载链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordCosUrl(string $RecordCosUrl) 设置录音下载链接。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SingleRecord extends AbstractModel
{
    /**
     * @var string 案件编号。
     */
    public $AccountNum;

    /**
     * @var string 外呼日期。
     */
    public $BizDate;

    /**
     * @var string 开始呼叫时间。
     */
    public $CallStartTime;

    /**
     * @var string 主叫号码。
     */
    public $CallerPhone;

    /**
     * @var string 呼叫方向，O为呼出，I为呼入。
     */
    public $Direction;

    /**
     * @var integer 通话时长。
     */
    public $Duration;

    /**
     * @var string 产品ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 录音下载链接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordCosUrl;

    /**
     * @param string $AccountNum 案件编号。
     * @param string $BizDate 外呼日期。
     * @param string $CallStartTime 开始呼叫时间。
     * @param string $CallerPhone 主叫号码。
     * @param string $Direction 呼叫方向，O为呼出，I为呼入。
     * @param integer $Duration 通话时长。
     * @param string $ProductId 产品ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordCosUrl 录音下载链接。
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
        if (array_key_exists("AccountNum",$param) and $param["AccountNum"] !== null) {
            $this->AccountNum = $param["AccountNum"];
        }

        if (array_key_exists("BizDate",$param) and $param["BizDate"] !== null) {
            $this->BizDate = $param["BizDate"];
        }

        if (array_key_exists("CallStartTime",$param) and $param["CallStartTime"] !== null) {
            $this->CallStartTime = $param["CallStartTime"];
        }

        if (array_key_exists("CallerPhone",$param) and $param["CallerPhone"] !== null) {
            $this->CallerPhone = $param["CallerPhone"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("RecordCosUrl",$param) and $param["RecordCosUrl"] !== null) {
            $this->RecordCosUrl = $param["RecordCosUrl"];
        }
    }
}
