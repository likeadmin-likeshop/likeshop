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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterNodes请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID,实例ID形如: emr-xxxxxxxx
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID,实例ID形如: emr-xxxxxxxx
 * @method string getNodeFlag() 获取节点标识，取值为：
<li>all：表示获取全部类型节点，cdb信息除外。</li>
<li>master：表示获取master节点信息。</li>
<li>core：表示获取core节点信息。</li>
<li>task：表示获取task节点信息。</li>
<li>common：表示获取common节点信息。</li>
<li>router：表示获取router节点信息。</li>
<li>db：表示获取正常状态的cdb信息。</li>
<li>recyle：表示获取回收站隔离中的节点信息，包括cdb信息。</li>
<li>renew：表示获取所有待续费的节点信息，包括cdb信息，自动续费节点不会返回。</li>
注意：现在只支持以上取值，输入其他值会导致错误。
 * @method void setNodeFlag(string $NodeFlag) 设置节点标识，取值为：
<li>all：表示获取全部类型节点，cdb信息除外。</li>
<li>master：表示获取master节点信息。</li>
<li>core：表示获取core节点信息。</li>
<li>task：表示获取task节点信息。</li>
<li>common：表示获取common节点信息。</li>
<li>router：表示获取router节点信息。</li>
<li>db：表示获取正常状态的cdb信息。</li>
<li>recyle：表示获取回收站隔离中的节点信息，包括cdb信息。</li>
<li>renew：表示获取所有待续费的节点信息，包括cdb信息，自动续费节点不会返回。</li>
注意：现在只支持以上取值，输入其他值会导致错误。
 * @method integer getOffset() 获取页编号，默认值为0，表示第一页。
 * @method void setOffset(integer $Offset) 设置页编号，默认值为0，表示第一页。
 * @method integer getLimit() 获取每页返回数量，默认值为100，最大值为100。
 * @method void setLimit(integer $Limit) 设置每页返回数量，默认值为100，最大值为100。
 * @method string getHardwareResourceType() 获取资源类型:支持all/host/pod，默认为all
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置资源类型:支持all/host/pod，默认为all
 * @method array getSearchFields() 获取支持搜索的字段
 * @method void setSearchFields(array $SearchFields) 设置支持搜索的字段
 */
class DescribeClusterNodesRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID,实例ID形如: emr-xxxxxxxx
     */
    public $InstanceId;

    /**
     * @var string 节点标识，取值为：
<li>all：表示获取全部类型节点，cdb信息除外。</li>
<li>master：表示获取master节点信息。</li>
<li>core：表示获取core节点信息。</li>
<li>task：表示获取task节点信息。</li>
<li>common：表示获取common节点信息。</li>
<li>router：表示获取router节点信息。</li>
<li>db：表示获取正常状态的cdb信息。</li>
<li>recyle：表示获取回收站隔离中的节点信息，包括cdb信息。</li>
<li>renew：表示获取所有待续费的节点信息，包括cdb信息，自动续费节点不会返回。</li>
注意：现在只支持以上取值，输入其他值会导致错误。
     */
    public $NodeFlag;

    /**
     * @var integer 页编号，默认值为0，表示第一页。
     */
    public $Offset;

    /**
     * @var integer 每页返回数量，默认值为100，最大值为100。
     */
    public $Limit;

    /**
     * @var string 资源类型:支持all/host/pod，默认为all
     */
    public $HardwareResourceType;

    /**
     * @var array 支持搜索的字段
     */
    public $SearchFields;

    /**
     * @param string $InstanceId 集群实例ID,实例ID形如: emr-xxxxxxxx
     * @param string $NodeFlag 节点标识，取值为：
<li>all：表示获取全部类型节点，cdb信息除外。</li>
<li>master：表示获取master节点信息。</li>
<li>core：表示获取core节点信息。</li>
<li>task：表示获取task节点信息。</li>
<li>common：表示获取common节点信息。</li>
<li>router：表示获取router节点信息。</li>
<li>db：表示获取正常状态的cdb信息。</li>
<li>recyle：表示获取回收站隔离中的节点信息，包括cdb信息。</li>
<li>renew：表示获取所有待续费的节点信息，包括cdb信息，自动续费节点不会返回。</li>
注意：现在只支持以上取值，输入其他值会导致错误。
     * @param integer $Offset 页编号，默认值为0，表示第一页。
     * @param integer $Limit 每页返回数量，默认值为100，最大值为100。
     * @param string $HardwareResourceType 资源类型:支持all/host/pod，默认为all
     * @param array $SearchFields 支持搜索的字段
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("SearchFields",$param) and $param["SearchFields"] !== null) {
            $this->SearchFields = [];
            foreach ($param["SearchFields"] as $key => $value){
                $obj = new SearchItem();
                $obj->deserialize($value);
                array_push($this->SearchFields, $obj);
            }
        }
    }
}
