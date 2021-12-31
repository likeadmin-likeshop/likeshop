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
 * 视频指定时间点截图任务信息，该结构仅用于 2017 版[指定时间点截图](https://cloud.tencent.com/document/product/266/8102)接口发起的任务。
 *
 * @method string getTaskId() 获取截图任务 ID。
 * @method void setTaskId(string $TaskId) 设置截图任务 ID。
 * @method string getFileId() 获取截图文件 ID。
 * @method void setFileId(string $FileId) 设置截图文件 ID。
 * @method integer getDefinition() 获取截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method void setDefinition(integer $Definition) 设置截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method array getSnapshotInfoSet() 获取截图结果信息。
 * @method void setSnapshotInfoSet(array $SnapshotInfoSet) 设置截图结果信息。
 */
class SnapshotByTimeOffsetTask2017 extends AbstractModel
{
    /**
     * @var string 截图任务 ID。
     */
    public $TaskId;

    /**
     * @var string 截图文件 ID。
     */
    public $FileId;

    /**
     * @var integer 截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     */
    public $Definition;

    /**
     * @var array 截图结果信息。
     */
    public $SnapshotInfoSet;

    /**
     * @param string $TaskId 截图任务 ID。
     * @param string $FileId 截图文件 ID。
     * @param integer $Definition 截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     * @param array $SnapshotInfoSet 截图结果信息。
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SnapshotInfoSet",$param) and $param["SnapshotInfoSet"] !== null) {
            $this->SnapshotInfoSet = [];
            foreach ($param["SnapshotInfoSet"] as $key => $value){
                $obj = new SnapshotByTimeOffset2017();
                $obj->deserialize($value);
                array_push($this->SnapshotInfoSet, $obj);
            }
        }
    }
}
