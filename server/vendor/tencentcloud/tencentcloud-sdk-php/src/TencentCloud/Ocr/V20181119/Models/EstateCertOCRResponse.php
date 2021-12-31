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
 * EstateCertOCR返回参数结构体
 *
 * @method string getObligee() 获取权利人
 * @method void setObligee(string $Obligee) 设置权利人
 * @method string getOwnership() 获取共有情况
 * @method void setOwnership(string $Ownership) 设置共有情况
 * @method string getLocation() 获取坐落
 * @method void setLocation(string $Location) 设置坐落
 * @method string getUnit() 获取不动产单元号
 * @method void setUnit(string $Unit) 设置不动产单元号
 * @method string getType() 获取权利类型
 * @method void setType(string $Type) 设置权利类型
 * @method string getProperty() 获取权利性质
 * @method void setProperty(string $Property) 设置权利性质
 * @method string getUsage() 获取用途
 * @method void setUsage(string $Usage) 设置用途
 * @method string getArea() 获取面积
 * @method void setArea(string $Area) 设置面积
 * @method string getTerm() 获取使用期限
 * @method void setTerm(string $Term) 设置使用期限
 * @method string getOther() 获取权利其他状况，多行会用换行符\n连接。
 * @method void setOther(string $Other) 设置权利其他状况，多行会用换行符\n连接。
 * @method float getAngle() 获取图片旋转角度
 * @method void setAngle(float $Angle) 设置图片旋转角度
 * @method string getNumber() 获取不动产权号
 * @method void setNumber(string $Number) 设置不动产权号
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class EstateCertOCRResponse extends AbstractModel
{
    /**
     * @var string 权利人
     */
    public $Obligee;

    /**
     * @var string 共有情况
     */
    public $Ownership;

    /**
     * @var string 坐落
     */
    public $Location;

    /**
     * @var string 不动产单元号
     */
    public $Unit;

    /**
     * @var string 权利类型
     */
    public $Type;

    /**
     * @var string 权利性质
     */
    public $Property;

    /**
     * @var string 用途
     */
    public $Usage;

    /**
     * @var string 面积
     */
    public $Area;

    /**
     * @var string 使用期限
     */
    public $Term;

    /**
     * @var string 权利其他状况，多行会用换行符\n连接。
     */
    public $Other;

    /**
     * @var float 图片旋转角度
     */
    public $Angle;

    /**
     * @var string 不动产权号
     */
    public $Number;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Obligee 权利人
     * @param string $Ownership 共有情况
     * @param string $Location 坐落
     * @param string $Unit 不动产单元号
     * @param string $Type 权利类型
     * @param string $Property 权利性质
     * @param string $Usage 用途
     * @param string $Area 面积
     * @param string $Term 使用期限
     * @param string $Other 权利其他状况，多行会用换行符\n连接。
     * @param float $Angle 图片旋转角度
     * @param string $Number 不动产权号
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
        if (array_key_exists("Obligee",$param) and $param["Obligee"] !== null) {
            $this->Obligee = $param["Obligee"];
        }

        if (array_key_exists("Ownership",$param) and $param["Ownership"] !== null) {
            $this->Ownership = $param["Ownership"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Term",$param) and $param["Term"] !== null) {
            $this->Term = $param["Term"];
        }

        if (array_key_exists("Other",$param) and $param["Other"] !== null) {
            $this->Other = $param["Other"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
