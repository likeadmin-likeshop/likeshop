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
 * 可以显示统计数据的通道组和对应通道信息
 *
 * @method string getGroupId() 获取通道组ID
 * @method void setGroupId(string $GroupId) 设置通道组ID
 * @method string getGroupName() 获取通道组名称
 * @method void setGroupName(string $GroupName) 设置通道组名称
 * @method array getProxySet() 获取通道组下通道列表
 * @method void setProxySet(array $ProxySet) 设置通道组下通道列表
 */
class GroupStatisticsInfo extends AbstractModel
{
    /**
     * @var string 通道组ID
     */
    public $GroupId;

    /**
     * @var string 通道组名称
     */
    public $GroupName;

    /**
     * @var array 通道组下通道列表
     */
    public $ProxySet;

    /**
     * @param string $GroupId 通道组ID
     * @param string $GroupName 通道组名称
     * @param array $ProxySet 通道组下通道列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProxySet",$param) and $param["ProxySet"] !== null) {
            $this->ProxySet = [];
            foreach ($param["ProxySet"] as $key => $value){
                $obj = new ProxySimpleInfo();
                $obj->deserialize($value);
                array_push($this->ProxySet, $obj);
            }
        }
    }
}
