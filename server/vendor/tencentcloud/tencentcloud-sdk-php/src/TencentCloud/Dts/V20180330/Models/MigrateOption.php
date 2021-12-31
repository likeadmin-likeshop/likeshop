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
 * 迁移任务配置选项
 *
 * @method integer getRunMode() 获取任务运行模式，值包括：1-立即执行，2-定时执行
 * @method void setRunMode(integer $RunMode) 设置任务运行模式，值包括：1-立即执行，2-定时执行
 * @method string getExpectTime() 获取期望执行时间，当runMode=2时，该字段必填，时间格式：yyyy-mm-dd hh:mm:ss
 * @method void setExpectTime(string $ExpectTime) 设置期望执行时间，当runMode=2时，该字段必填，时间格式：yyyy-mm-dd hh:mm:ss
 * @method integer getMigrateType() 获取数据迁移类型，值包括：1-结构迁移,2-全量迁移,3-全量+增量迁移
 * @method void setMigrateType(integer $MigrateType) 设置数据迁移类型，值包括：1-结构迁移,2-全量迁移,3-全量+增量迁移
 * @method integer getMigrateObject() 获取迁移对象，1-整个实例，2-指定库表
 * @method void setMigrateObject(integer $MigrateObject) 设置迁移对象，1-整个实例，2-指定库表
 * @method integer getConsistencyType() 获取抽样数据一致性检测参数，1-未配置,2-全量检测,3-抽样检测, 4-仅校验不一致表,5-不检测
 * @method void setConsistencyType(integer $ConsistencyType) 设置抽样数据一致性检测参数，1-未配置,2-全量检测,3-抽样检测, 4-仅校验不一致表,5-不检测
 * @method integer getIsOverrideRoot() 获取是否用源库Root账户覆盖目标库，值包括：0-不覆盖，1-覆盖，选择库表或者结构迁移时应该为0
 * @method void setIsOverrideRoot(integer $IsOverrideRoot) 设置是否用源库Root账户覆盖目标库，值包括：0-不覆盖，1-覆盖，选择库表或者结构迁移时应该为0
 * @method string getExternParams() 获取不同数据库用到的额外参数.以JSON格式描述. 
Redis可定义如下的参数: 
{ 
	"ClientOutputBufferHardLimit":512, 	从机缓冲区的硬性容量限制(MB) 
	"ClientOutputBufferSoftLimit":512, 	从机缓冲区的软性容量限制(MB) 
	"ClientOutputBufferPersistTime":60, 从机缓冲区的软性限制持续时间(秒) 
	"ReplBacklogSize":512, 	环形缓冲区容量限制(MB) 
	"ReplTimeout":120，		复制超时时间(秒) 
}
MongoDB可定义如下的参数: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL暂不支持额外参数设置。
 * @method void setExternParams(string $ExternParams) 设置不同数据库用到的额外参数.以JSON格式描述. 
Redis可定义如下的参数: 
{ 
	"ClientOutputBufferHardLimit":512, 	从机缓冲区的硬性容量限制(MB) 
	"ClientOutputBufferSoftLimit":512, 	从机缓冲区的软性容量限制(MB) 
	"ClientOutputBufferPersistTime":60, 从机缓冲区的软性限制持续时间(秒) 
	"ReplBacklogSize":512, 	环形缓冲区容量限制(MB) 
	"ReplTimeout":120，		复制超时时间(秒) 
}
MongoDB可定义如下的参数: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL暂不支持额外参数设置。
 * @method ConsistencyParams getConsistencyParams() 获取仅用于“抽样数据一致性检测”，ConsistencyType配置为抽样检测时，必选
 * @method void setConsistencyParams(ConsistencyParams $ConsistencyParams) 设置仅用于“抽样数据一致性检测”，ConsistencyType配置为抽样检测时，必选
 */
class MigrateOption extends AbstractModel
{
    /**
     * @var integer 任务运行模式，值包括：1-立即执行，2-定时执行
     */
    public $RunMode;

    /**
     * @var string 期望执行时间，当runMode=2时，该字段必填，时间格式：yyyy-mm-dd hh:mm:ss
     */
    public $ExpectTime;

    /**
     * @var integer 数据迁移类型，值包括：1-结构迁移,2-全量迁移,3-全量+增量迁移
     */
    public $MigrateType;

    /**
     * @var integer 迁移对象，1-整个实例，2-指定库表
     */
    public $MigrateObject;

    /**
     * @var integer 抽样数据一致性检测参数，1-未配置,2-全量检测,3-抽样检测, 4-仅校验不一致表,5-不检测
     */
    public $ConsistencyType;

    /**
     * @var integer 是否用源库Root账户覆盖目标库，值包括：0-不覆盖，1-覆盖，选择库表或者结构迁移时应该为0
     */
    public $IsOverrideRoot;

    /**
     * @var string 不同数据库用到的额外参数.以JSON格式描述. 
Redis可定义如下的参数: 
{ 
	"ClientOutputBufferHardLimit":512, 	从机缓冲区的硬性容量限制(MB) 
	"ClientOutputBufferSoftLimit":512, 	从机缓冲区的软性容量限制(MB) 
	"ClientOutputBufferPersistTime":60, 从机缓冲区的软性限制持续时间(秒) 
	"ReplBacklogSize":512, 	环形缓冲区容量限制(MB) 
	"ReplTimeout":120，		复制超时时间(秒) 
}
MongoDB可定义如下的参数: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL暂不支持额外参数设置。
     */
    public $ExternParams;

    /**
     * @var ConsistencyParams 仅用于“抽样数据一致性检测”，ConsistencyType配置为抽样检测时，必选
     */
    public $ConsistencyParams;

    /**
     * @param integer $RunMode 任务运行模式，值包括：1-立即执行，2-定时执行
     * @param string $ExpectTime 期望执行时间，当runMode=2时，该字段必填，时间格式：yyyy-mm-dd hh:mm:ss
     * @param integer $MigrateType 数据迁移类型，值包括：1-结构迁移,2-全量迁移,3-全量+增量迁移
     * @param integer $MigrateObject 迁移对象，1-整个实例，2-指定库表
     * @param integer $ConsistencyType 抽样数据一致性检测参数，1-未配置,2-全量检测,3-抽样检测, 4-仅校验不一致表,5-不检测
     * @param integer $IsOverrideRoot 是否用源库Root账户覆盖目标库，值包括：0-不覆盖，1-覆盖，选择库表或者结构迁移时应该为0
     * @param string $ExternParams 不同数据库用到的额外参数.以JSON格式描述. 
Redis可定义如下的参数: 
{ 
	"ClientOutputBufferHardLimit":512, 	从机缓冲区的硬性容量限制(MB) 
	"ClientOutputBufferSoftLimit":512, 	从机缓冲区的软性容量限制(MB) 
	"ClientOutputBufferPersistTime":60, 从机缓冲区的软性限制持续时间(秒) 
	"ReplBacklogSize":512, 	环形缓冲区容量限制(MB) 
	"ReplTimeout":120，		复制超时时间(秒) 
}
MongoDB可定义如下的参数: 
{
	'SrcAuthDatabase':'admin', 
	'SrcAuthFlag': "1", 
	'SrcAuthMechanism':"SCRAM-SHA-1"
}
MySQL暂不支持额外参数设置。
     * @param ConsistencyParams $ConsistencyParams 仅用于“抽样数据一致性检测”，ConsistencyType配置为抽样检测时，必选
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
        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("MigrateObject",$param) and $param["MigrateObject"] !== null) {
            $this->MigrateObject = $param["MigrateObject"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("IsOverrideRoot",$param) and $param["IsOverrideRoot"] !== null) {
            $this->IsOverrideRoot = $param["IsOverrideRoot"];
        }

        if (array_key_exists("ExternParams",$param) and $param["ExternParams"] !== null) {
            $this->ExternParams = $param["ExternParams"];
        }

        if (array_key_exists("ConsistencyParams",$param) and $param["ConsistencyParams"] !== null) {
            $this->ConsistencyParams = new ConsistencyParams();
            $this->ConsistencyParams->deserialize($param["ConsistencyParams"]);
        }
    }
}
