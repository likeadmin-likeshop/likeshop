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
 * DescribeCodeRepositories返回参数结构体
 *
 * @method integer getTotalCount() 获取存储库总数目
 * @method void setTotalCount(integer $TotalCount) 设置存储库总数目
 * @method array getCodeRepoSet() 获取存储库列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeRepoSet(array $CodeRepoSet) 设置存储库列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCodeRepositoriesResponse extends AbstractModel
{
    /**
     * @var integer 存储库总数目
     */
    public $TotalCount;

    /**
     * @var array 存储库列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeRepoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 存储库总数目
     * @param array $CodeRepoSet 存储库列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("CodeRepoSet",$param) and $param["CodeRepoSet"] !== null) {
            $this->CodeRepoSet = [];
            foreach ($param["CodeRepoSet"] as $key => $value){
                $obj = new CodeRepoSummary();
                $obj->deserialize($value);
                array_push($this->CodeRepoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
