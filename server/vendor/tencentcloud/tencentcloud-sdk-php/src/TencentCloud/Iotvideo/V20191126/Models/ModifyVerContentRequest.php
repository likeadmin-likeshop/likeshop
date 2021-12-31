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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVerContent请求参数结构体
 *
 * @method string getProductId() 获取产品id
 * @method void setProductId(string $ProductId) 设置产品id
 * @method string getOtaVersion() 获取需要修改的版本号
 * @method void setOtaVersion(string $OtaVersion) 设置需要修改的版本号
 * @method string getOperator() 获取操作人,字符长度<=64
 * @method void setOperator(string $Operator) 设置操作人,字符长度<=64
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method Contents getContents() 获取版本发布的描述信息，需要国际化，可以为空
 * @method void setContents(Contents $Contents) 设置版本发布的描述信息，需要国际化，可以为空
 */
class ModifyVerContentRequest extends AbstractModel
{
    /**
     * @var string 产品id
     */
    public $ProductId;

    /**
     * @var string 需要修改的版本号
     */
    public $OtaVersion;

    /**
     * @var string 操作人,字符长度<=64
     */
    public $Operator;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var Contents 版本发布的描述信息，需要国际化，可以为空
     */
    public $Contents;

    /**
     * @param string $ProductId 产品id
     * @param string $OtaVersion 需要修改的版本号
     * @param string $Operator 操作人,字符长度<=64
     * @param string $Remark 备注信息
     * @param Contents $Contents 版本发布的描述信息，需要国际化，可以为空
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = new Contents();
            $this->Contents->deserialize($param["Contents"]);
        }
    }
}
