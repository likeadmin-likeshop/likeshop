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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用混流控制参数
 *
 * @method integer getUseMixCropCenter() 获取取值范围[0,1]。
填1时，当参数中图层分辨率参数与视频实际分辨率不一致时，自动从视频中按图层设置的分辨率比例进行裁剪。
 * @method void setUseMixCropCenter(integer $UseMixCropCenter) 设置取值范围[0,1]。
填1时，当参数中图层分辨率参数与视频实际分辨率不一致时，自动从视频中按图层设置的分辨率比例进行裁剪。
 * @method integer getAllowCopy() 获取取值范围[0,1]
填1时，当InputStreamList中个数为1时，且OutputParams.OutputStreamType为1时，不执行取消操作，执行拷贝流操作
 * @method void setAllowCopy(integer $AllowCopy) 设置取值范围[0,1]
填1时，当InputStreamList中个数为1时，且OutputParams.OutputStreamType为1时，不执行取消操作，执行拷贝流操作
 * @method integer getPassInputSei() 获取取值范围[0,1]
填1时，透传原始流的sei
 * @method void setPassInputSei(integer $PassInputSei) 设置取值范围[0,1]
填1时，透传原始流的sei
 */
class CommonMixControlParams extends AbstractModel
{
    /**
     * @var integer 取值范围[0,1]。
填1时，当参数中图层分辨率参数与视频实际分辨率不一致时，自动从视频中按图层设置的分辨率比例进行裁剪。
     */
    public $UseMixCropCenter;

    /**
     * @var integer 取值范围[0,1]
填1时，当InputStreamList中个数为1时，且OutputParams.OutputStreamType为1时，不执行取消操作，执行拷贝流操作
     */
    public $AllowCopy;

    /**
     * @var integer 取值范围[0,1]
填1时，透传原始流的sei
     */
    public $PassInputSei;

    /**
     * @param integer $UseMixCropCenter 取值范围[0,1]。
填1时，当参数中图层分辨率参数与视频实际分辨率不一致时，自动从视频中按图层设置的分辨率比例进行裁剪。
     * @param integer $AllowCopy 取值范围[0,1]
填1时，当InputStreamList中个数为1时，且OutputParams.OutputStreamType为1时，不执行取消操作，执行拷贝流操作
     * @param integer $PassInputSei 取值范围[0,1]
填1时，透传原始流的sei
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
        if (array_key_exists("UseMixCropCenter",$param) and $param["UseMixCropCenter"] !== null) {
            $this->UseMixCropCenter = $param["UseMixCropCenter"];
        }

        if (array_key_exists("AllowCopy",$param) and $param["AllowCopy"] !== null) {
            $this->AllowCopy = $param["AllowCopy"];
        }

        if (array_key_exists("PassInputSei",$param) and $param["PassInputSei"] !== null) {
            $this->PassInputSei = $param["PassInputSei"];
        }
    }
}
