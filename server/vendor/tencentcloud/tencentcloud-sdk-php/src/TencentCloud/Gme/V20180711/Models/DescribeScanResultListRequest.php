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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanResultList请求参数结构体
 *
 * @method integer getBizId() 获取应用 ID，登录[控制台](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
 * @method void setBizId(integer $BizId) 设置应用 ID，登录[控制台](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
 * @method array getTaskIdList() 获取查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
 * @method void setTaskIdList(array $TaskIdList) 设置查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
 * @method integer getLimit() 获取任务返回结果数量，默认10，上限500。大文件任务忽略此参数，返回全量结果
 * @method void setLimit(integer $Limit) 设置任务返回结果数量，默认10，上限500。大文件任务忽略此参数，返回全量结果
 */
class DescribeScanResultListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID，登录[控制台](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
     */
    public $BizId;

    /**
     * @var array 查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
     */
    public $TaskIdList;

    /**
     * @var integer 任务返回结果数量，默认10，上限500。大文件任务忽略此参数，返回全量结果
     */
    public $Limit;

    /**
     * @param integer $BizId 应用 ID，登录[控制台](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
     * @param array $TaskIdList 查询的任务 ID 列表，任务 ID 列表最多支持 100 个。
     * @param integer $Limit 任务返回结果数量，默认10，上限500。大文件任务忽略此参数，返回全量结果
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
