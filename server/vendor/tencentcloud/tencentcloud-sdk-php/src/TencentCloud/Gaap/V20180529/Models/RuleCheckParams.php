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
 * 7层监听器转发规则健康检查相关参数
 *
 * @method integer getDelayLoop() 获取健康检查的时间间隔
 * @method void setDelayLoop(integer $DelayLoop) 设置健康检查的时间间隔
 * @method integer getConnectTimeout() 获取健康检查的响应超时时间
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置健康检查的响应超时时间
 * @method string getPath() 获取健康检查的检查路径
 * @method void setPath(string $Path) 设置健康检查的检查路径
 * @method string getMethod() 获取健康检查的方法，GET/HEAD
 * @method void setMethod(string $Method) 设置健康检查的方法，GET/HEAD
 * @method array getStatusCode() 获取确认源站正常的返回码，可选范围[100, 200, 300, 400, 500]
 * @method void setStatusCode(array $StatusCode) 设置确认源站正常的返回码，可选范围[100, 200, 300, 400, 500]
 * @method string getDomain() 获取健康检查的检查域名。
当调用ModifyRuleAttribute时，不支持修改该参数。
 * @method void setDomain(string $Domain) 设置健康检查的检查域名。
当调用ModifyRuleAttribute时，不支持修改该参数。
 * @method integer getFailedCountInter() 获取源站服务失败统计频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedCountInter(integer $FailedCountInter) 设置源站服务失败统计频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedThreshold() 获取源站健康性检查阀值，超过该阀值会屏蔽服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedThreshold(integer $FailedThreshold) 设置源站健康性检查阀值，超过该阀值会屏蔽服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockInter() 获取源站健康性检测超出阀值后，屏蔽的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockInter(integer $BlockInter) 设置源站健康性检测超出阀值后，屏蔽的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleCheckParams extends AbstractModel
{
    /**
     * @var integer 健康检查的时间间隔
     */
    public $DelayLoop;

    /**
     * @var integer 健康检查的响应超时时间
     */
    public $ConnectTimeout;

    /**
     * @var string 健康检查的检查路径
     */
    public $Path;

    /**
     * @var string 健康检查的方法，GET/HEAD
     */
    public $Method;

    /**
     * @var array 确认源站正常的返回码，可选范围[100, 200, 300, 400, 500]
     */
    public $StatusCode;

    /**
     * @var string 健康检查的检查域名。
当调用ModifyRuleAttribute时，不支持修改该参数。
     */
    public $Domain;

    /**
     * @var integer 源站服务失败统计频率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedCountInter;

    /**
     * @var integer 源站健康性检查阀值，超过该阀值会屏蔽服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedThreshold;

    /**
     * @var integer 源站健康性检测超出阀值后，屏蔽的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockInter;

    /**
     * @param integer $DelayLoop 健康检查的时间间隔
     * @param integer $ConnectTimeout 健康检查的响应超时时间
     * @param string $Path 健康检查的检查路径
     * @param string $Method 健康检查的方法，GET/HEAD
     * @param array $StatusCode 确认源站正常的返回码，可选范围[100, 200, 300, 400, 500]
     * @param string $Domain 健康检查的检查域名。
当调用ModifyRuleAttribute时，不支持修改该参数。
     * @param integer $FailedCountInter 源站服务失败统计频率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedThreshold 源站健康性检查阀值，超过该阀值会屏蔽服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockInter 源站健康性检测超出阀值后，屏蔽的时间
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
        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("FailedCountInter",$param) and $param["FailedCountInter"] !== null) {
            $this->FailedCountInter = $param["FailedCountInter"];
        }

        if (array_key_exists("FailedThreshold",$param) and $param["FailedThreshold"] !== null) {
            $this->FailedThreshold = $param["FailedThreshold"];
        }

        if (array_key_exists("BlockInter",$param) and $param["BlockInter"] !== null) {
            $this->BlockInter = $param["BlockInter"];
        }
    }
}
