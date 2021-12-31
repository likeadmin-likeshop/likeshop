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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfig请求参数结构体
 *
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method string getCameraSign() 获取摄像头签名
 * @method void setCameraSign(string $CameraSign) 设置摄像头签名
 * @method string getCameraAppId() 获取摄像头app id
 * @method void setCameraAppId(string $CameraAppId) 设置摄像头app id
 * @method integer getCameraTimestamp() 获取摄像头时间戳，毫秒
 * @method void setCameraTimestamp(integer $CameraTimestamp) 设置摄像头时间戳，毫秒
 * @method string getServerMac() 获取MAC地址，字母大写
 * @method void setServerMac(string $ServerMac) 设置MAC地址，字母大写
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 */
class DescribeConfigRequest extends AbstractModel
{
    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var string 摄像头签名
     */
    public $CameraSign;

    /**
     * @var string 摄像头app id
     */
    public $CameraAppId;

    /**
     * @var integer 摄像头时间戳，毫秒
     */
    public $CameraTimestamp;

    /**
     * @var string MAC地址，字母大写
     */
    public $ServerMac;

    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var integer 广场ID
     */
    public $MallId;

    /**
     * @param string $SessionId 会话ID
     * @param string $CameraSign 摄像头签名
     * @param string $CameraAppId 摄像头app id
     * @param integer $CameraTimestamp 摄像头时间戳，毫秒
     * @param string $ServerMac MAC地址，字母大写
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("CameraSign",$param) and $param["CameraSign"] !== null) {
            $this->CameraSign = $param["CameraSign"];
        }

        if (array_key_exists("CameraAppId",$param) and $param["CameraAppId"] !== null) {
            $this->CameraAppId = $param["CameraAppId"];
        }

        if (array_key_exists("CameraTimestamp",$param) and $param["CameraTimestamp"] !== null) {
            $this->CameraTimestamp = $param["CameraTimestamp"];
        }

        if (array_key_exists("ServerMac",$param) and $param["ServerMac"] !== null) {
            $this->ServerMac = $param["ServerMac"];
        }

        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }
    }
}
