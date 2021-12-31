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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCodeRepository请求参数结构体
 *
 * @method string getCodeRepositoryName() 获取存储库名称
 * @method void setCodeRepositoryName(string $CodeRepositoryName) 设置存储库名称
 */
class DescribeCodeRepositoryRequest extends AbstractModel
{
    /**
     * @var string 存储库名称
     */
    public $CodeRepositoryName;

    /**
     * @param string $CodeRepositoryName 存储库名称
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
        if (array_key_exists("CodeRepositoryName",$param) and $param["CodeRepositoryName"] !== null) {
            $this->CodeRepositoryName = $param["CodeRepositoryName"];
        }
    }
}
