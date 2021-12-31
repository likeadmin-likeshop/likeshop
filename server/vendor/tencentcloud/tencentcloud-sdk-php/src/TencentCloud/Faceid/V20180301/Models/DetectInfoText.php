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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核身文本信息
 *
 * @method integer getErrCode() 获取本次流程最终验证结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置本次流程最终验证结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取本次流程最终验证结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置本次流程最终验证结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCard() 获取本次验证使用的身份证号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCard(string $IdCard) 设置本次验证使用的身份证号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取本次验证使用的姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置本次验证使用的姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrNation() 获取Ocr识别结果。民族。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrNation(string $OcrNation) 设置Ocr识别结果。民族。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrAddress() 获取Ocr识别结果。家庭住址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrAddress(string $OcrAddress) 设置Ocr识别结果。家庭住址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrBirth() 获取Ocr识别结果。生日。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrBirth(string $OcrBirth) 设置Ocr识别结果。生日。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrAuthority() 获取Ocr识别结果。签发机关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrAuthority(string $OcrAuthority) 设置Ocr识别结果。签发机关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrValidDate() 获取Ocr识别结果。有效日期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrValidDate(string $OcrValidDate) 设置Ocr识别结果。有效日期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrName() 获取Ocr识别结果。姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrName(string $OcrName) 设置Ocr识别结果。姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrIdCard() 获取Ocr识别结果。身份证号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrIdCard(string $OcrIdCard) 设置Ocr识别结果。身份证号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrGender() 获取Ocr识别结果。性别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrGender(string $OcrGender) 设置Ocr识别结果。性别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLiveStatus() 获取本次流程最终活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveStatus(integer $LiveStatus) 设置本次流程最终活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLiveMsg() 获取本次流程最终活体结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveMsg(string $LiveMsg) 设置本次流程最终活体结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComparestatus() 获取本次流程最终一比一结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparestatus(integer $Comparestatus) 设置本次流程最终一比一结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComparemsg() 获取本次流程最终一比一结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparemsg(string $Comparemsg) 设置本次流程最终一比一结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSim() 获取本次流程活体一比一的分数，取值范围 [0.00, 100.00]。相似度大于等于70时才判断为同一人，也可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSim(string $Sim) 设置本次流程活体一比一的分数，取值范围 [0.00, 100.00]。相似度大于等于70时才判断为同一人，也可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取地理位置经纬度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置地理位置经纬度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取Auth接口带入额外信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置Auth接口带入额外信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLivenessDetail() 获取本次流程进行的活体一比一流水。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessDetail(array $LivenessDetail) 设置本次流程进行的活体一比一流水。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取手机号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobile(string $Mobile) 设置手机号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareLibType() 获取本次流程最终比对库源类型。包括：
权威库；
业务方自有库（用户上传照片、客户的混合库、混合部署库）；
二次验证库；
人工审核库；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareLibType(string $CompareLibType) 设置本次流程最终比对库源类型。包括：
权威库；
业务方自有库（用户上传照片、客户的混合库、混合部署库）；
二次验证库；
人工审核库；
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectInfoText extends AbstractModel
{
    /**
     * @var integer 本次流程最终验证结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 本次流程最终验证结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var string 本次验证使用的身份证号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCard;

    /**
     * @var string 本次验证使用的姓名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string Ocr识别结果。民族。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrNation;

    /**
     * @var string Ocr识别结果。家庭住址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrAddress;

    /**
     * @var string Ocr识别结果。生日。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrBirth;

    /**
     * @var string Ocr识别结果。签发机关。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrAuthority;

    /**
     * @var string Ocr识别结果。有效日期。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrValidDate;

    /**
     * @var string Ocr识别结果。姓名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrName;

    /**
     * @var string Ocr识别结果。身份证号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrIdCard;

    /**
     * @var string Ocr识别结果。性别。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrGender;

    /**
     * @var integer 本次流程最终活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveStatus;

    /**
     * @var string 本次流程最终活体结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveMsg;

    /**
     * @var integer 本次流程最终一比一结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comparestatus;

    /**
     * @var string 本次流程最终一比一结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comparemsg;

    /**
     * @var string 本次流程活体一比一的分数，取值范围 [0.00, 100.00]。相似度大于等于70时才判断为同一人，也可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sim;

    /**
     * @var string 地理位置经纬度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string Auth接口带入额外信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var array 本次流程进行的活体一比一流水。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessDetail;

    /**
     * @var string 手机号码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mobile;

    /**
     * @var string 本次流程最终比对库源类型。包括：
权威库；
业务方自有库（用户上传照片、客户的混合库、混合部署库）；
二次验证库；
人工审核库；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareLibType;

    /**
     * @param integer $ErrCode 本次流程最终验证结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 本次流程最终验证结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCard 本次验证使用的身份证号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 本次验证使用的姓名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrNation Ocr识别结果。民族。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrAddress Ocr识别结果。家庭住址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrBirth Ocr识别结果。生日。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrAuthority Ocr识别结果。签发机关。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrValidDate Ocr识别结果。有效日期。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrName Ocr识别结果。姓名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrIdCard Ocr识别结果。身份证号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrGender Ocr识别结果。性别。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LiveStatus 本次流程最终活体结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LiveMsg 本次流程最终活体结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Comparestatus 本次流程最终一比一结果。0为成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comparemsg 本次流程最终一比一结果描述。（仅描述用，文案更新时不会通知。）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sim 本次流程活体一比一的分数，取值范围 [0.00, 100.00]。相似度大于等于70时才判断为同一人，也可根据具体场景自行调整阈值（阈值70的误通过率为千分之一，阈值80的误通过率是万分之一）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 地理位置经纬度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra Auth接口带入额外信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LivenessDetail 本次流程进行的活体一比一流水。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile 手机号码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareLibType 本次流程最终比对库源类型。包括：
权威库；
业务方自有库（用户上传照片、客户的混合库、混合部署库）；
二次验证库；
人工审核库；
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OcrNation",$param) and $param["OcrNation"] !== null) {
            $this->OcrNation = $param["OcrNation"];
        }

        if (array_key_exists("OcrAddress",$param) and $param["OcrAddress"] !== null) {
            $this->OcrAddress = $param["OcrAddress"];
        }

        if (array_key_exists("OcrBirth",$param) and $param["OcrBirth"] !== null) {
            $this->OcrBirth = $param["OcrBirth"];
        }

        if (array_key_exists("OcrAuthority",$param) and $param["OcrAuthority"] !== null) {
            $this->OcrAuthority = $param["OcrAuthority"];
        }

        if (array_key_exists("OcrValidDate",$param) and $param["OcrValidDate"] !== null) {
            $this->OcrValidDate = $param["OcrValidDate"];
        }

        if (array_key_exists("OcrName",$param) and $param["OcrName"] !== null) {
            $this->OcrName = $param["OcrName"];
        }

        if (array_key_exists("OcrIdCard",$param) and $param["OcrIdCard"] !== null) {
            $this->OcrIdCard = $param["OcrIdCard"];
        }

        if (array_key_exists("OcrGender",$param) and $param["OcrGender"] !== null) {
            $this->OcrGender = $param["OcrGender"];
        }

        if (array_key_exists("LiveStatus",$param) and $param["LiveStatus"] !== null) {
            $this->LiveStatus = $param["LiveStatus"];
        }

        if (array_key_exists("LiveMsg",$param) and $param["LiveMsg"] !== null) {
            $this->LiveMsg = $param["LiveMsg"];
        }

        if (array_key_exists("Comparestatus",$param) and $param["Comparestatus"] !== null) {
            $this->Comparestatus = $param["Comparestatus"];
        }

        if (array_key_exists("Comparemsg",$param) and $param["Comparemsg"] !== null) {
            $this->Comparemsg = $param["Comparemsg"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("LivenessDetail",$param) and $param["LivenessDetail"] !== null) {
            $this->LivenessDetail = [];
            foreach ($param["LivenessDetail"] as $key => $value){
                $obj = new DetectDetail();
                $obj->deserialize($value);
                array_push($this->LivenessDetail, $obj);
            }
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("CompareLibType",$param) and $param["CompareLibType"] !== null) {
            $this->CompareLibType = $param["CompareLibType"];
        }
    }
}
