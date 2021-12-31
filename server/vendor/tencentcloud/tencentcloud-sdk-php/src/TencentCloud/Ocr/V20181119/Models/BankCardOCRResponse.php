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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BankCardOCR返回参数结构体
 *
 * @method string getCardNo() 获取卡号
 * @method void setCardNo(string $CardNo) 设置卡号
 * @method string getBankInfo() 获取银行信息
 * @method void setBankInfo(string $BankInfo) 设置银行信息
 * @method string getValidDate() 获取有效期，格式如：07/2023
 * @method void setValidDate(string $ValidDate) 设置有效期，格式如：07/2023
 * @method string getCardType() 获取卡类型
 * @method void setCardType(string $CardType) 设置卡类型
 * @method string getCardName() 获取卡名字
 * @method void setCardName(string $CardName) 设置卡名字
 * @method string getBorderCutImage() 获取切片图片数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBorderCutImage(string $BorderCutImage) 设置切片图片数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCardNoImage() 获取卡号图片数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardNoImage(string $CardNoImage) 设置卡号图片数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWarningCode() 获取WarningCode 告警码列表和释义：
-9110:银行卡日期无效; 
-9111:银行卡边框不完整; 
-9112:银行卡图片反光;
-9113:银行卡复印件;
-9114:银行卡翻拍件
（告警码可以同时存在多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarningCode(array $WarningCode) 设置WarningCode 告警码列表和释义：
-9110:银行卡日期无效; 
-9111:银行卡边框不完整; 
-9112:银行卡图片反光;
-9113:银行卡复印件;
-9114:银行卡翻拍件
（告警码可以同时存在多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class BankCardOCRResponse extends AbstractModel
{
    /**
     * @var string 卡号
     */
    public $CardNo;

    /**
     * @var string 银行信息
     */
    public $BankInfo;

    /**
     * @var string 有效期，格式如：07/2023
     */
    public $ValidDate;

    /**
     * @var string 卡类型
     */
    public $CardType;

    /**
     * @var string 卡名字
     */
    public $CardName;

    /**
     * @var string 切片图片数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BorderCutImage;

    /**
     * @var string 卡号图片数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardNoImage;

    /**
     * @var array WarningCode 告警码列表和释义：
-9110:银行卡日期无效; 
-9111:银行卡边框不完整; 
-9112:银行卡图片反光;
-9113:银行卡复印件;
-9114:银行卡翻拍件
（告警码可以同时存在多个）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarningCode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CardNo 卡号
     * @param string $BankInfo 银行信息
     * @param string $ValidDate 有效期，格式如：07/2023
     * @param string $CardType 卡类型
     * @param string $CardName 卡名字
     * @param string $BorderCutImage 切片图片数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CardNoImage 卡号图片数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WarningCode WarningCode 告警码列表和释义：
-9110:银行卡日期无效; 
-9111:银行卡边框不完整; 
-9112:银行卡图片反光;
-9113:银行卡复印件;
-9114:银行卡翻拍件
（告警码可以同时存在多个）
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
        if (array_key_exists("CardNo",$param) and $param["CardNo"] !== null) {
            $this->CardNo = $param["CardNo"];
        }

        if (array_key_exists("BankInfo",$param) and $param["BankInfo"] !== null) {
            $this->BankInfo = $param["BankInfo"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("CardName",$param) and $param["CardName"] !== null) {
            $this->CardName = $param["CardName"];
        }

        if (array_key_exists("BorderCutImage",$param) and $param["BorderCutImage"] !== null) {
            $this->BorderCutImage = $param["BorderCutImage"];
        }

        if (array_key_exists("CardNoImage",$param) and $param["CardNoImage"] !== null) {
            $this->CardNoImage = $param["CardNoImage"];
        }

        if (array_key_exists("WarningCode",$param) and $param["WarningCode"] !== null) {
            $this->WarningCode = $param["WarningCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
