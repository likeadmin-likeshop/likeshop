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
 * CreateJobConfig请求参数结构体
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method string getEntrypointClass() 获取主类
 * @method void setEntrypointClass(string $EntrypointClass) 设置主类
 * @method string getProgramArgs() 获取主类入参
 * @method void setProgramArgs(string $ProgramArgs) 设置主类入参
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getResourceRefs() 获取资源引用数组
 * @method void setResourceRefs(array $ResourceRefs) 设置资源引用数组
 * @method integer getDefaultParallelism() 获取作业默认并行度
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置作业默认并行度
 * @method array getProperties() 获取系统参数
 * @method void setProperties(array $Properties) 设置系统参数
 * @method integer getAutoDelete() 获取1: 作业配置达到上限之后，自动删除可删除的最早版本
 * @method void setAutoDelete(integer $AutoDelete) 设置1: 作业配置达到上限之后，自动删除可删除的最早版本
 * @method string getCOSBucket() 获取作业使用的 COS 存储桶名
 * @method void setCOSBucket(string $COSBucket) 设置作业使用的 COS 存储桶名
 * @method boolean getLogCollect() 获取是否采集作业日志
 * @method void setLogCollect(boolean $LogCollect) 设置是否采集作业日志
 */
class CreateJobConfigRequest extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var string 主类
     */
    public $EntrypointClass;

    /**
     * @var string 主类入参
     */
    public $ProgramArgs;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 资源引用数组
     */
    public $ResourceRefs;

    /**
     * @var integer 作业默认并行度
     */
    public $DefaultParallelism;

    /**
     * @var array 系统参数
     */
    public $Properties;

    /**
     * @var integer 1: 作业配置达到上限之后，自动删除可删除的最早版本
     */
    public $AutoDelete;

    /**
     * @var string 作业使用的 COS 存储桶名
     */
    public $COSBucket;

    /**
     * @var boolean 是否采集作业日志
     */
    public $LogCollect;

    /**
     * @param string $JobId 作业Id
     * @param string $EntrypointClass 主类
     * @param string $ProgramArgs 主类入参
     * @param string $Remark 备注
     * @param array $ResourceRefs 资源引用数组
     * @param integer $DefaultParallelism 作业默认并行度
     * @param array $Properties 系统参数
     * @param integer $AutoDelete 1: 作业配置达到上限之后，自动删除可删除的最早版本
     * @param string $COSBucket 作业使用的 COS 存储桶名
     * @param boolean $LogCollect 是否采集作业日志
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

        if (array_key_exists("ResourceRefs",$param) and $param["ResourceRefs"] !== null) {
            $this->ResourceRefs = [];
            foreach ($param["ResourceRefs"] as $key => $value){
                $obj = new ResourceRef();
                $obj->deserialize($value);
                array_push($this->ResourceRefs, $obj);
            }
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

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("LogCollect",$param) and $param["LogCollect"] !== null) {
            $this->LogCollect = $param["LogCollect"];
        }
    }
}
