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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCensorship返回参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method array getUins() 获取已加入审批人的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUins(array $Uins) 设置已加入审批人的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCensorship() 获取集群是否开启审核 0-关闭 1-开启
 * @method void setCensorship(integer $Censorship) 设置集群是否开启审核 0-关闭 1-开启
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyCensorshipResponse extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var array 已加入审批人的uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uins;

    /**
     * @var integer 集群是否开启审核 0-关闭 1-开启
     */
    public $Censorship;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId 集群id
     * @param array $Uins 已加入审批人的uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Censorship 集群是否开启审核 0-关闭 1-开启
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Uins",$param) and $param["Uins"] !== null) {
            $this->Uins = $param["Uins"];
        }

        if (array_key_exists("Censorship",$param) and $param["Censorship"] !== null) {
            $this->Censorship = $param["Censorship"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
