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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灾备同步任务配置选项
 *
 * @method integer getSyncObject() 获取同步对象，1-整个实例，2-指定库表
 * @method void setSyncObject(integer $SyncObject) 设置同步对象，1-整个实例，2-指定库表
 * @method integer getRunMode() 获取同步开始设置，1-立即开始
 * @method void setRunMode(integer $RunMode) 设置同步开始设置，1-立即开始
 * @method integer getSyncType() 获取同步模式， 3-全量且增量同步
 * @method void setSyncType(integer $SyncType) 设置同步模式， 3-全量且增量同步
 * @method integer getConsistencyType() 获取数据一致性检测， 1-无需配置
 * @method void setConsistencyType(integer $ConsistencyType) 设置数据一致性检测， 1-无需配置
 */
class SyncOption extends AbstractModel
{
    /**
     * @var integer 同步对象，1-整个实例，2-指定库表
     */
    public $SyncObject;

    /**
     * @var integer 同步开始设置，1-立即开始
     */
    public $RunMode;

    /**
     * @var integer 同步模式， 3-全量且增量同步
     */
    public $SyncType;

    /**
     * @var integer 数据一致性检测， 1-无需配置
     */
    public $ConsistencyType;

    /**
     * @param integer $SyncObject 同步对象，1-整个实例，2-指定库表
     * @param integer $RunMode 同步开始设置，1-立即开始
     * @param integer $SyncType 同步模式， 3-全量且增量同步
     * @param integer $ConsistencyType 数据一致性检测， 1-无需配置
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
        if (array_key_exists("SyncObject",$param) and $param["SyncObject"] !== null) {
            $this->SyncObject = $param["SyncObject"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }
    }
}
