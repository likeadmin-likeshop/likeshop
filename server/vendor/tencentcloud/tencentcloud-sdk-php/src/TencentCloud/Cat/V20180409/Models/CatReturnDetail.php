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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测失败详情
 *
 * @method string getIspName() 获取运营商名称
 * @method void setIspName(string $IspName) 设置运营商名称
 * @method string getProvince() 获取省份全拼
 * @method void setProvince(string $Province) 设置省份全拼
 * @method string getProvinceName() 获取省份中文名称
 * @method void setProvinceName(string $ProvinceName) 设置省份中文名称
 * @method string getMapKey() 获取Map键值
 * @method void setMapKey(string $MapKey) 设置Map键值
 * @method string getServerIp() 获取拨测目标的IP
 * @method void setServerIp(string $ServerIp) 设置拨测目标的IP
 * @method integer getResultCount() 获取拨测失败个数
 * @method void setResultCount(integer $ResultCount) 设置拨测失败个数
 * @method integer getResultCode() 获取拨测失败返回码
 * @method void setResultCode(integer $ResultCode) 设置拨测失败返回码
 * @method string getErrorReason() 获取拨测失败原因描述
 * @method void setErrorReason(string $ErrorReason) 设置拨测失败原因描述
 */
class CatReturnDetail extends AbstractModel
{
    /**
     * @var string 运营商名称
     */
    public $IspName;

    /**
     * @var string 省份全拼
     */
    public $Province;

    /**
     * @var string 省份中文名称
     */
    public $ProvinceName;

    /**
     * @var string Map键值
     */
    public $MapKey;

    /**
     * @var string 拨测目标的IP
     */
    public $ServerIp;

    /**
     * @var integer 拨测失败个数
     */
    public $ResultCount;

    /**
     * @var integer 拨测失败返回码
     */
    public $ResultCode;

    /**
     * @var string 拨测失败原因描述
     */
    public $ErrorReason;

    /**
     * @param string $IspName 运营商名称
     * @param string $Province 省份全拼
     * @param string $ProvinceName 省份中文名称
     * @param string $MapKey Map键值
     * @param string $ServerIp 拨测目标的IP
     * @param integer $ResultCount 拨测失败个数
     * @param integer $ResultCode 拨测失败返回码
     * @param string $ErrorReason 拨测失败原因描述
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
        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("MapKey",$param) and $param["MapKey"] !== null) {
            $this->MapKey = $param["MapKey"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("ResultCount",$param) and $param["ResultCount"] !== null) {
            $this->ResultCount = $param["ResultCount"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("ErrorReason",$param) and $param["ErrorReason"] !== null) {
            $this->ErrorReason = $param["ErrorReason"];
        }
    }
}
