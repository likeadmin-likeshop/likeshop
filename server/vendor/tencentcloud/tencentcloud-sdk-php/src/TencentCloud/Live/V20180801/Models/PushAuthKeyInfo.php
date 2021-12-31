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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推流鉴权key信息。
 *
 * @method string getDomainName() 获取域名。
 * @method void setDomainName(string $DomainName) 设置域名。
 * @method integer getEnable() 获取是否启用，0：关闭，1：启用。
 * @method void setEnable(integer $Enable) 设置是否启用，0：关闭，1：启用。
 * @method string getMasterAuthKey() 获取主鉴权 Key。
 * @method void setMasterAuthKey(string $MasterAuthKey) 设置主鉴权 Key。
 * @method string getBackupAuthKey() 获取备鉴权 Key。
 * @method void setBackupAuthKey(string $BackupAuthKey) 设置备鉴权 Key。
 * @method integer getAuthDelta() 获取有效时间，单位：秒。
 * @method void setAuthDelta(integer $AuthDelta) 设置有效时间，单位：秒。
 */
class PushAuthKeyInfo extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $DomainName;

    /**
     * @var integer 是否启用，0：关闭，1：启用。
     */
    public $Enable;

    /**
     * @var string 主鉴权 Key。
     */
    public $MasterAuthKey;

    /**
     * @var string 备鉴权 Key。
     */
    public $BackupAuthKey;

    /**
     * @var integer 有效时间，单位：秒。
     */
    public $AuthDelta;

    /**
     * @param string $DomainName 域名。
     * @param integer $Enable 是否启用，0：关闭，1：启用。
     * @param string $MasterAuthKey 主鉴权 Key。
     * @param string $BackupAuthKey 备鉴权 Key。
     * @param integer $AuthDelta 有效时间，单位：秒。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MasterAuthKey",$param) and $param["MasterAuthKey"] !== null) {
            $this->MasterAuthKey = $param["MasterAuthKey"];
        }

        if (array_key_exists("BackupAuthKey",$param) and $param["BackupAuthKey"] !== null) {
            $this->BackupAuthKey = $param["BackupAuthKey"];
        }

        if (array_key_exists("AuthDelta",$param) and $param["AuthDelta"] !== null) {
            $this->AuthDelta = $param["AuthDelta"];
        }
    }
}
