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
 * 视频截取雪碧图任务，该结构仅用于对 2017 版[截取雪碧图](https://cloud.tencent.com/document/product/266/8101)接口发起的任务。
 *
 * @method string getTaskId() 获取截图雪碧图任务 ID。
 * @method void setTaskId(string $TaskId) 设置截图雪碧图任务 ID。
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method string getFileId() 获取截取雪碧图文件 ID。
 * @method void setFileId(string $FileId) 设置截取雪碧图文件 ID。
 * @method integer getDefinition() 获取雪碧图规格，参见[雪碧图截图模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method void setDefinition(integer $Definition) 设置雪碧图规格，参见[雪碧图截图模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method integer getTotalCount() 获取雪碧图小图总数量。
 * @method void setTotalCount(integer $TotalCount) 设置雪碧图小图总数量。
 * @method array getImageSpriteUrlSet() 获取截取雪碧图输出的地址。
 * @method void setImageSpriteUrlSet(array $ImageSpriteUrlSet) 设置截取雪碧图输出的地址。
 * @method string getWebVttUrl() 获取雪碧图子图位置与时间关系 WebVtt 文件地址。
 * @method void setWebVttUrl(string $WebVttUrl) 设置雪碧图子图位置与时间关系 WebVtt 文件地址。
 */
class CreateImageSpriteTask2017 extends AbstractModel
{
    /**
     * @var string 截图雪碧图任务 ID。
     */
    public $TaskId;

    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var string 截取雪碧图文件 ID。
     */
    public $FileId;

    /**
     * @var integer 雪碧图规格，参见[雪碧图截图模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     */
    public $Definition;

    /**
     * @var integer 雪碧图小图总数量。
     */
    public $TotalCount;

    /**
     * @var array 截取雪碧图输出的地址。
     */
    public $ImageSpriteUrlSet;

    /**
     * @var string 雪碧图子图位置与时间关系 WebVtt 文件地址。
     */
    public $WebVttUrl;

    /**
     * @param string $TaskId 截图雪碧图任务 ID。
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $Message 错误信息。
     * @param string $FileId 截取雪碧图文件 ID。
     * @param integer $Definition 雪碧图规格，参见[雪碧图截图模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     * @param integer $TotalCount 雪碧图小图总数量。
     * @param array $ImageSpriteUrlSet 截取雪碧图输出的地址。
     * @param string $WebVttUrl 雪碧图子图位置与时间关系 WebVtt 文件地址。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ImageSpriteUrlSet",$param) and $param["ImageSpriteUrlSet"] !== null) {
            $this->ImageSpriteUrlSet = $param["ImageSpriteUrlSet"];
        }

        if (array_key_exists("WebVttUrl",$param) and $param["WebVttUrl"] !== null) {
            $this->WebVttUrl = $param["WebVttUrl"];
        }
    }
}
