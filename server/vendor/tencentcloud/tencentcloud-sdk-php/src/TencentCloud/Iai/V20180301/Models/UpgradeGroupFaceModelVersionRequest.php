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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeGroupFaceModelVersion请求参数结构体
 *
 * @method string getGroupId() 获取需要升级的人员库ID。
 * @method void setGroupId(string $GroupId) 设置需要升级的人员库ID。
 * @method string getFaceModelVersion() 获取需要升级至的算法模型版本。默认为最新版本。不可逆向升级
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置需要升级至的算法模型版本。默认为最新版本。不可逆向升级
 */
class UpgradeGroupFaceModelVersionRequest extends AbstractModel
{
    /**
     * @var string 需要升级的人员库ID。
     */
    public $GroupId;

    /**
     * @var string 需要升级至的算法模型版本。默认为最新版本。不可逆向升级
     */
    public $FaceModelVersion;

    /**
     * @param string $GroupId 需要升级的人员库ID。
     * @param string $FaceModelVersion 需要升级至的算法模型版本。默认为最新版本。不可逆向升级
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }
    }
}
