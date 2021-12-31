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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaOperData 接口 返回数据类型集合
 *
 * @method array getOperDataLoadTimeUnitArray() 获取验证码加载耗时数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperDataLoadTimeUnitArray(array $OperDataLoadTimeUnitArray) 设置验证码加载耗时数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperDataInterceptUnitArray() 获取验证码拦截情况数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperDataInterceptUnitArray(array $OperDataInterceptUnitArray) 设置验证码拦截情况数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperDataTryTimesUnitArray() 获取验证码尝试次数数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperDataTryTimesUnitArray(array $OperDataTryTimesUnitArray) 设置验证码尝试次数数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperDataTryTimesDistributeUnitArray() 获取验证码尝试次数分布数据返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperDataTryTimesDistributeUnitArray(array $OperDataTryTimesDistributeUnitArray) 设置验证码尝试次数分布数据返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class CaptchaOperDataRes extends AbstractModel
{
    /**
     * @var array 验证码加载耗时数据返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperDataLoadTimeUnitArray;

    /**
     * @var array 验证码拦截情况数据返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperDataInterceptUnitArray;

    /**
     * @var array 验证码尝试次数数据返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperDataTryTimesUnitArray;

    /**
     * @var array 验证码尝试次数分布数据返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperDataTryTimesDistributeUnitArray;

    /**
     * @param array $OperDataLoadTimeUnitArray 验证码加载耗时数据返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OperDataInterceptUnitArray 验证码拦截情况数据返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OperDataTryTimesUnitArray 验证码尝试次数数据返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OperDataTryTimesDistributeUnitArray 验证码尝试次数分布数据返回
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
        if (array_key_exists("OperDataLoadTimeUnitArray",$param) and $param["OperDataLoadTimeUnitArray"] !== null) {
            $this->OperDataLoadTimeUnitArray = [];
            foreach ($param["OperDataLoadTimeUnitArray"] as $key => $value){
                $obj = new CaptchaOperDataLoadTimeUnit();
                $obj->deserialize($value);
                array_push($this->OperDataLoadTimeUnitArray, $obj);
            }
        }

        if (array_key_exists("OperDataInterceptUnitArray",$param) and $param["OperDataInterceptUnitArray"] !== null) {
            $this->OperDataInterceptUnitArray = [];
            foreach ($param["OperDataInterceptUnitArray"] as $key => $value){
                $obj = new CaptchaOperDataInterceptUnit();
                $obj->deserialize($value);
                array_push($this->OperDataInterceptUnitArray, $obj);
            }
        }

        if (array_key_exists("OperDataTryTimesUnitArray",$param) and $param["OperDataTryTimesUnitArray"] !== null) {
            $this->OperDataTryTimesUnitArray = [];
            foreach ($param["OperDataTryTimesUnitArray"] as $key => $value){
                $obj = new CaptchaOperDataTryTimesUnit();
                $obj->deserialize($value);
                array_push($this->OperDataTryTimesUnitArray, $obj);
            }
        }

        if (array_key_exists("OperDataTryTimesDistributeUnitArray",$param) and $param["OperDataTryTimesDistributeUnitArray"] !== null) {
            $this->OperDataTryTimesDistributeUnitArray = [];
            foreach ($param["OperDataTryTimesDistributeUnitArray"] as $key => $value){
                $obj = new CaptchaOperDataTryTimesDistributeUnit();
                $obj->deserialize($value);
                array_push($this->OperDataTryTimesDistributeUnitArray, $obj);
            }
        }
    }
}
