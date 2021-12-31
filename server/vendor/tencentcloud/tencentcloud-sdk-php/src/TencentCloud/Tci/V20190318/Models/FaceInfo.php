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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸操作信息
 *
 * @method string getErrorCode() 获取人脸操作错误码
 * @method void setErrorCode(string $ErrorCode) 设置人脸操作错误码
 * @method string getErrorMsg() 获取人脸操作结果信息
 * @method void setErrorMsg(string $ErrorMsg) 设置人脸操作结果信息
 * @method string getFaceId() 获取人脸唯一标识符
 * @method void setFaceId(string $FaceId) 设置人脸唯一标识符
 * @method string getFaceUrl() 获取人脸保存地址
 * @method void setFaceUrl(string $FaceUrl) 设置人脸保存地址
 * @method string getPersonId() 获取人员唯一标识
 * @method void setPersonId(string $PersonId) 设置人员唯一标识
 */
class FaceInfo extends AbstractModel
{
    /**
     * @var string 人脸操作错误码
     */
    public $ErrorCode;

    /**
     * @var string 人脸操作结果信息
     */
    public $ErrorMsg;

    /**
     * @var string 人脸唯一标识符
     */
    public $FaceId;

    /**
     * @var string 人脸保存地址
     */
    public $FaceUrl;

    /**
     * @var string 人员唯一标识
     */
    public $PersonId;

    /**
     * @param string $ErrorCode 人脸操作错误码
     * @param string $ErrorMsg 人脸操作结果信息
     * @param string $FaceId 人脸唯一标识符
     * @param string $FaceUrl 人脸保存地址
     * @param string $PersonId 人员唯一标识
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("FaceUrl",$param) and $param["FaceUrl"] !== null) {
            $this->FaceUrl = $param["FaceUrl"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
