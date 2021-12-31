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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取短信人群包上传信息返回
 *
 * @method integer getExpiredTime() 获取过期时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间
 * @method string getSessionToken() 获取会话token
 * @method void setSessionToken(string $SessionToken) 设置会话token
 * @method string getTmpSecretId() 获取临时密钥id
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时密钥id
 * @method string getTmpSecretKey() 获取临时密钥
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥
 * @method UploadFansInfoCosInfo getCosInfo() 获取cos信息
 * @method void setCosInfo(UploadFansInfoCosInfo $CosInfo) 设置cos信息
 */
class SmsGetCrowdUploadInfoResponse extends AbstractModel
{
    /**
     * @var integer 过期时间
     */
    public $ExpiredTime;

    /**
     * @var string 会话token
     */
    public $SessionToken;

    /**
     * @var string 临时密钥id
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥
     */
    public $TmpSecretKey;

    /**
     * @var UploadFansInfoCosInfo cos信息
     */
    public $CosInfo;

    /**
     * @param integer $ExpiredTime 过期时间
     * @param string $SessionToken 会话token
     * @param string $TmpSecretId 临时密钥id
     * @param string $TmpSecretKey 临时密钥
     * @param UploadFansInfoCosInfo $CosInfo cos信息
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
        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new UploadFansInfoCosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }
    }
}
