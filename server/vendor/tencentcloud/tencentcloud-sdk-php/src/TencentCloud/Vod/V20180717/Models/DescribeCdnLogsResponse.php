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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCdnLogs返回参数结构体
 *
 * @method integer getTotalCount() 获取日志下载链接总数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置日志下载链接总数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOverseaCdnLogs() 获取海外CDN节点的日志下载列表。如果域名没有开启海外加速，忽略该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverseaCdnLogs(array $OverseaCdnLogs) 设置海外CDN节点的日志下载列表。如果域名没有开启海外加速，忽略该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomesticCdnLogs() 获取国内CDN节点的日志下载列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomesticCdnLogs(array $DomesticCdnLogs) 设置国内CDN节点的日志下载列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCdnLogsResponse extends AbstractModel
{
    /**
     * @var integer 日志下载链接总数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 海外CDN节点的日志下载列表。如果域名没有开启海外加速，忽略该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OverseaCdnLogs;

    /**
     * @var array 国内CDN节点的日志下载列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomesticCdnLogs;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 日志下载链接总数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OverseaCdnLogs 海外CDN节点的日志下载列表。如果域名没有开启海外加速，忽略该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomesticCdnLogs 国内CDN节点的日志下载列表。
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

        if (array_key_exists("OverseaCdnLogs",$param) and $param["OverseaCdnLogs"] !== null) {
            $this->OverseaCdnLogs = [];
            foreach ($param["OverseaCdnLogs"] as $key => $value){
                $obj = new CdnLogInfo();
                $obj->deserialize($value);
                array_push($this->OverseaCdnLogs, $obj);
            }
        }

        if (array_key_exists("DomesticCdnLogs",$param) and $param["DomesticCdnLogs"] !== null) {
            $this->DomesticCdnLogs = [];
            foreach ($param["DomesticCdnLogs"] as $key => $value){
                $obj = new CdnLogInfo();
                $obj->deserialize($value);
                array_push($this->DomesticCdnLogs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
