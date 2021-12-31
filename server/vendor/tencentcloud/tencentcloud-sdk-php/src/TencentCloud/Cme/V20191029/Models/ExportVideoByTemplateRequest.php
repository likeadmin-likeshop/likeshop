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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportVideoByTemplate请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getTemplateId() 获取视频编辑模板  Id。
 * @method void setTemplateId(string $TemplateId) 设置视频编辑模板  Id。
 * @method integer getDefinition() 获取导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method void setDefinition(integer $Definition) 设置导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
 * @method string getExportDestination() 获取导出目标，可取值为：
<li>CME：云剪，即导出为云剪媒体；</li>
<li>VOD：云点播，即导出为云点播媒资。</li>
 * @method void setExportDestination(string $ExportDestination) 设置导出目标，可取值为：
<li>CME：云剪，即导出为云剪媒体；</li>
<li>VOD：云点播，即导出为云点播媒资。</li>
 * @method array getSlotReplacements() 获取需要替换的素材信息。
 * @method void setSlotReplacements(array $SlotReplacements) 设置需要替换的素材信息。
 * @method CMEExportInfo getCMEExportInfo() 获取导出的云剪媒体信息。指定 ExportDestination = CME 时有效。
 * @method void setCMEExportInfo(CMEExportInfo $CMEExportInfo) 设置导出的云剪媒体信息。指定 ExportDestination = CME 时有效。
 * @method VODExportInfo getVODExportInfo() 获取导出的云点播媒资信息。指定 ExportDestination = VOD 时有效。
 * @method void setVODExportInfo(VODExportInfo $VODExportInfo) 设置导出的云点播媒资信息。指定 ExportDestination = VOD 时有效。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
 */
class ExportVideoByTemplateRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 视频编辑模板  Id。
     */
    public $TemplateId;

    /**
     * @var integer 导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     */
    public $Definition;

    /**
     * @var string 导出目标，可取值为：
<li>CME：云剪，即导出为云剪媒体；</li>
<li>VOD：云点播，即导出为云点播媒资。</li>
     */
    public $ExportDestination;

    /**
     * @var array 需要替换的素材信息。
     */
    public $SlotReplacements;

    /**
     * @var CMEExportInfo 导出的云剪媒体信息。指定 ExportDestination = CME 时有效。
     */
    public $CMEExportInfo;

    /**
     * @var VODExportInfo 导出的云点播媒资信息。指定 ExportDestination = VOD 时有效。
     */
    public $VODExportInfo;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $TemplateId 视频编辑模板  Id。
     * @param integer $Definition 导出模板 Id，目前不支持自定义创建，只支持下面的预置模板 Id。
<li>10：分辨率为 480P，输出视频格式为 MP4；</li>
<li>11：分辨率为 720P，输出视频格式为 MP4；</li>
<li>12：分辨率为 1080P，输出视频格式为 MP4。</li>
     * @param string $ExportDestination 导出目标，可取值为：
<li>CME：云剪，即导出为云剪媒体；</li>
<li>VOD：云点播，即导出为云点播媒资。</li>
     * @param array $SlotReplacements 需要替换的素材信息。
     * @param CMEExportInfo $CMEExportInfo 导出的云剪媒体信息。指定 ExportDestination = CME 时有效。
     * @param VODExportInfo $VODExportInfo 导出的云点播媒资信息。指定 ExportDestination = VOD 时有效。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验项目导出权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExportDestination",$param) and $param["ExportDestination"] !== null) {
            $this->ExportDestination = $param["ExportDestination"];
        }

        if (array_key_exists("SlotReplacements",$param) and $param["SlotReplacements"] !== null) {
            $this->SlotReplacements = [];
            foreach ($param["SlotReplacements"] as $key => $value){
                $obj = new SlotReplacementInfo();
                $obj->deserialize($value);
                array_push($this->SlotReplacements, $obj);
            }
        }

        if (array_key_exists("CMEExportInfo",$param) and $param["CMEExportInfo"] !== null) {
            $this->CMEExportInfo = new CMEExportInfo();
            $this->CMEExportInfo->deserialize($param["CMEExportInfo"]);
        }

        if (array_key_exists("VODExportInfo",$param) and $param["VODExportInfo"] !== null) {
            $this->VODExportInfo = new VODExportInfo();
            $this->VODExportInfo->deserialize($param["VODExportInfo"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
