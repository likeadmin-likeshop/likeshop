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
 * IdCardOCRVerification返回参数结构体
 *
 * @method string getResult() 获取认证结果码，收费情况如下。
收费结果码：
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）
-3: 非法姓名（长度、格式等不正确）
-4: 证件库服务异常
-5: 证件库中无此身份证记录
 * @method void setResult(string $Result) 设置认证结果码，收费情况如下。
收费结果码：
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）
-3: 非法姓名（长度、格式等不正确）
-4: 证件库服务异常
-5: 证件库中无此身份证记录
 * @method string getDescription() 获取业务结果描述。
 * @method void setDescription(string $Description) 设置业务结果描述。
 * @method string getName() 获取用于验证的姓名
 * @method void setName(string $Name) 设置用于验证的姓名
 * @method string getIdCard() 获取用于验证的身份证号
 * @method void setIdCard(string $IdCard) 设置用于验证的身份证号
 * @method string getSex() 获取OCR得到的性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置OCR得到的性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNation() 获取OCR得到的民族
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNation(string $Nation) 设置OCR得到的民族
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirth() 获取OCR得到的生日
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirth(string $Birth) 设置OCR得到的生日
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取OCR得到的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置OCR得到的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class IdCardOCRVerificationResponse extends AbstractModel
{
    /**
     * @var string 认证结果码，收费情况如下。
收费结果码：
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）
-3: 非法姓名（长度、格式等不正确）
-4: 证件库服务异常
-5: 证件库中无此身份证记录
     */
    public $Result;

    /**
     * @var string 业务结果描述。
     */
    public $Description;

    /**
     * @var string 用于验证的姓名
     */
    public $Name;

    /**
     * @var string 用于验证的身份证号
     */
    public $IdCard;

    /**
     * @var string OCR得到的性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string OCR得到的民族
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nation;

    /**
     * @var string OCR得到的生日
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birth;

    /**
     * @var string OCR得到的地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result 认证结果码，收费情况如下。
收费结果码：
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）
-3: 非法姓名（长度、格式等不正确）
-4: 证件库服务异常
-5: 证件库中无此身份证记录
     * @param string $Description 业务结果描述。
     * @param string $Name 用于验证的姓名
     * @param string $IdCard 用于验证的身份证号
     * @param string $Sex OCR得到的性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nation OCR得到的民族
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birth OCR得到的生日
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address OCR得到的地址
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
