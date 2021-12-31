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
 * DescribeCodeRepository返回参数结构体
 *
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getLastModifiedTime() 获取更新时间
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置更新时间
 * @method string getCodeRepositoryName() 获取存储库名称
 * @method void setCodeRepositoryName(string $CodeRepositoryName) 设置存储库名称
 * @method GitConfig getGitConfig() 获取Git存储配置
 * @method void setGitConfig(GitConfig $GitConfig) 设置Git存储配置
 * @method boolean getNoSecret() 获取是否有Git凭证
 * @method void setNoSecret(boolean $NoSecret) 设置是否有Git凭证
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCodeRepositoryResponse extends AbstractModel
{
    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 更新时间
     */
    public $LastModifiedTime;

    /**
     * @var string 存储库名称
     */
    public $CodeRepositoryName;

    /**
     * @var GitConfig Git存储配置
     */
    public $GitConfig;

    /**
     * @var boolean 是否有Git凭证
     */
    public $NoSecret;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CreationTime 创建时间
     * @param string $LastModifiedTime 更新时间
     * @param string $CodeRepositoryName 存储库名称
     * @param GitConfig $GitConfig Git存储配置
     * @param boolean $NoSecret 是否有Git凭证
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("CodeRepositoryName",$param) and $param["CodeRepositoryName"] !== null) {
            $this->CodeRepositoryName = $param["CodeRepositoryName"];
        }

        if (array_key_exists("GitConfig",$param) and $param["GitConfig"] !== null) {
            $this->GitConfig = new GitConfig();
            $this->GitConfig->deserialize($param["GitConfig"]);
        }

        if (array_key_exists("NoSecret",$param) and $param["NoSecret"] !== null) {
            $this->NoSecret = $param["NoSecret"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
