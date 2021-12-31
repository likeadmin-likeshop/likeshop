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
namespace TencentCloud\Fmu\V20191213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LUT素材信息
 *
 * @method string getModelId() 获取唇色素材ID
 * @method void setModelId(string $ModelId) 设置唇色素材ID
 * @method string getLUTFileUrl() 获取唇色素材 url 。 LUT 文件 url 5分钟有效。
 * @method void setLUTFileUrl(string $LUTFileUrl) 设置唇色素材 url 。 LUT 文件 url 5分钟有效。
 * @method string getDescription() 获取文件描述信息。
 * @method void setDescription(string $Description) 设置文件描述信息。
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string 唇色素材ID
     */
    public $ModelId;

    /**
     * @var string 唇色素材 url 。 LUT 文件 url 5分钟有效。
     */
    public $LUTFileUrl;

    /**
     * @var string 文件描述信息。
     */
    public $Description;

    /**
     * @param string $ModelId 唇色素材ID
     * @param string $LUTFileUrl 唇色素材 url 。 LUT 文件 url 5分钟有效。
     * @param string $Description 文件描述信息。
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("LUTFileUrl",$param) and $param["LUTFileUrl"] !== null) {
            $this->LUTFileUrl = $param["LUTFileUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
