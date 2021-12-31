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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 截图输出信息（2017 版）
 *
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method integer getTimeOffset() 获取截图的具体时间点，单位：毫秒。
 * @method void setTimeOffset(integer $TimeOffset) 设置截图的具体时间点，单位：毫秒。
 * @method string getUrl() 获取截图输出文件地址。
 * @method void setUrl(string $Url) 设置截图输出文件地址。
 */
class SnapshotByTimeOffset2017 extends AbstractModel
{
    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var integer 截图的具体时间点，单位：毫秒。
     */
    public $TimeOffset;

    /**
     * @var string 截图输出文件地址。
     */
    public $Url;

    /**
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param integer $TimeOffset 截图的具体时间点，单位：毫秒。
     * @param string $Url 截图输出文件地址。
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
