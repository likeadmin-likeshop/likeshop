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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加源站的源站信息返回值
 *
 * @method string getRealServerIP() 获取源站的IP或域名
 * @method void setRealServerIP(string $RealServerIP) 设置源站的IP或域名
 * @method string getRealServerId() 获取源站ID
 * @method void setRealServerId(string $RealServerId) 设置源站ID
 * @method string getRealServerName() 获取源站名称
 * @method void setRealServerName(string $RealServerName) 设置源站名称
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method array getTagSet() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindRealServerInfo extends AbstractModel
{
    /**
     * @var string 源站的IP或域名
     */
    public $RealServerIP;

    /**
     * @var string 源站ID
     */
    public $RealServerId;

    /**
     * @var string 源站名称
     */
    public $RealServerName;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @param string $RealServerIP 源站的IP或域名
     * @param string $RealServerId 源站ID
     * @param string $RealServerName 源站名称
     * @param integer $ProjectId 项目ID
     * @param array $TagSet 标签列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("RealServerName",$param) and $param["RealServerName"] !== null) {
            $this->RealServerName = $param["RealServerName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
