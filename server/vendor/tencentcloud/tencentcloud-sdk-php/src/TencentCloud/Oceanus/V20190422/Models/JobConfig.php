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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业配置详情
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method string getEntrypointClass() 获取主类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntrypointClass(string $EntrypointClass) 设置主类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramArgs() 获取主类入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramArgs(string $ProgramArgs) 设置主类入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取作业配置创建时间
 * @method void setCreateTime(string $CreateTime) 设置作业配置创建时间
 * @method integer getVersion() 获取作业配置的版本号
 * @method void setVersion(integer $Version) 设置作业配置的版本号
 * @method integer getDefaultParallelism() 获取作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取系统参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置系统参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefDetails() 获取引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefDetails(array $ResourceRefDetails) 设置引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCOSBucket() 获取作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSBucket(string $COSBucket) 设置作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogCollect() 获取是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogCollect(integer $LogCollect) 设置是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxParallelism() 获取作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxParallelism(integer $MaxParallelism) 设置作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobConfig extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var string 主类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntrypointClass;

    /**
     * @var string 主类入参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramArgs;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 作业配置创建时间
     */
    public $CreateTime;

    /**
     * @var integer 作业配置的版本号
     */
    public $Version;

    /**
     * @var integer 作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultParallelism;

    /**
     * @var array 系统参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var array 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefDetails;

    /**
     * @var string 创建者uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSBucket;

    /**
     * @var integer 是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogCollect;

    /**
     * @var integer 作业的最大并行度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxParallelism;

    /**
     * @param string $JobId 作业Id
     * @param string $EntrypointClass 主类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramArgs 主类入参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 作业配置创建时间
     * @param integer $Version 作业配置的版本号
     * @param integer $DefaultParallelism 作业默认并行度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 系统参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefDetails 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建者uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 作业配置上次启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $COSBucket 作业绑定的存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogCollect 是否启用日志收集，0-未启用，1-已启用，2-历史集群未设置日志集，3-历史集群已开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxParallelism 作业的最大并行度
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EntrypointClass",$param) and $param["EntrypointClass"] !== null) {
            $this->EntrypointClass = $param["EntrypointClass"];
        }

        if (array_key_exists("ProgramArgs",$param) and $param["ProgramArgs"] !== null) {
            $this->ProgramArgs = $param["ProgramArgs"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("DefaultParallelism",$param) and $param["DefaultParallelism"] !== null) {
            $this->DefaultParallelism = $param["DefaultParallelism"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("ResourceRefDetails",$param) and $param["ResourceRefDetails"] !== null) {
            $this->ResourceRefDetails = [];
            foreach ($param["ResourceRefDetails"] as $key => $value){
                $obj = new ResourceRefDetail();
                $obj->deserialize($value);
                array_push($this->ResourceRefDetails, $obj);
            }
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("LogCollect",$param) and $param["LogCollect"] !== null) {
            $this->LogCollect = $param["LogCollect"];
        }

        if (array_key_exists("MaxParallelism",$param) and $param["MaxParallelism"] !== null) {
            $this->MaxParallelism = $param["MaxParallelism"];
        }
    }
}
