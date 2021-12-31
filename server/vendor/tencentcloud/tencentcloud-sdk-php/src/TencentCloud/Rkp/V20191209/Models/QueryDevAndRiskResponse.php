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
namespace TencentCloud\Rkp\V20191209\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryDevAndRisk返回参数结构体
 *
 * @method integer getFound() 获取是否查得
 * @method void setFound(integer $Found) 设置是否查得
 * @method integer getAllCnt() 获取匹配数量级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllCnt(integer $AllCnt) 设置匹配数量级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMatches() 获取匹配到的设备信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatches(array $Matches) 设置匹配到的设备信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryDevAndRiskResponse extends AbstractModel
{
    /**
     * @var integer 是否查得
     */
    public $Found;

    /**
     * @var integer 匹配数量级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllCnt;

    /**
     * @var array 匹配到的设备信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Matches;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Found 是否查得
     * @param integer $AllCnt 匹配数量级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Matches 匹配到的设备信息
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
        if (array_key_exists("Found",$param) and $param["Found"] !== null) {
            $this->Found = $param["Found"];
        }

        if (array_key_exists("AllCnt",$param) and $param["AllCnt"] !== null) {
            $this->AllCnt = $param["AllCnt"];
        }

        if (array_key_exists("Matches",$param) and $param["Matches"] !== null) {
            $this->Matches = [];
            foreach ($param["Matches"] as $key => $value){
                $obj = new DevInfoQ();
                $obj->deserialize($value);
                array_push($this->Matches, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
