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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAsset请求参数结构体
 *
 * @method string getAssetId() 获取生成包ID
 * @method void setAssetId(string $AssetId) 设置生成包ID
 * @method string getAssetName() 获取生成包名字，最小长度为1，最大长度为64
 * @method void setAssetName(string $AssetName) 设置生成包名字，最小长度为1，最大长度为64
 * @method string getAssetVersion() 获取生成包版本，最小长度为1，最大长度为64
 * @method void setAssetVersion(string $AssetVersion) 设置生成包版本，最小长度为1，最大长度为64
 */
class UpdateAssetRequest extends AbstractModel
{
    /**
     * @var string 生成包ID
     */
    public $AssetId;

    /**
     * @var string 生成包名字，最小长度为1，最大长度为64
     */
    public $AssetName;

    /**
     * @var string 生成包版本，最小长度为1，最大长度为64
     */
    public $AssetVersion;

    /**
     * @param string $AssetId 生成包ID
     * @param string $AssetName 生成包名字，最小长度为1，最大长度为64
     * @param string $AssetVersion 生成包版本，最小长度为1，最大长度为64
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetVersion",$param) and $param["AssetVersion"] !== null) {
            $this->AssetVersion = $param["AssetVersion"];
        }
    }
}
