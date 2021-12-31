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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServerState请求参数结构体
 *
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method array getServerStateItems() 获取服务器监控信息列表
 * @method void setServerStateItems(array $ServerStateItems) 设置服务器监控信息列表
 * @method integer getMallId() 获取商场ID
 * @method void setMallId(integer $MallId) 设置商场ID
 * @method integer getReportTime() 获取服务器监控信息上报时间戳，单位毫秒
 * @method void setReportTime(integer $ReportTime) 设置服务器监控信息上报时间戳，单位毫秒
 */
class CreateServerStateRequest extends AbstractModel
{
    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var array 服务器监控信息列表
     */
    public $ServerStateItems;

    /**
     * @var integer 商场ID
     */
    public $MallId;

    /**
     * @var integer 服务器监控信息上报时间戳，单位毫秒
     */
    public $ReportTime;

    /**
     * @param string $GroupCode 集团编码
     * @param array $ServerStateItems 服务器监控信息列表
     * @param integer $MallId 商场ID
     * @param integer $ReportTime 服务器监控信息上报时间戳，单位毫秒
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
        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("ServerStateItems",$param) and $param["ServerStateItems"] !== null) {
            $this->ServerStateItems = [];
            foreach ($param["ServerStateItems"] as $key => $value){
                $obj = new ServerStateItem();
                $obj->deserialize($value);
                array_push($this->ServerStateItems, $obj);
            }
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }
    }
}
