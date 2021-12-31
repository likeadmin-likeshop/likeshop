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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频分类识别结果信息
 *
 * @method integer getStatus() 获取编辑任务状态。 
1：执行中；2：成功；3：失败。
 * @method void setStatus(integer $Status) 设置编辑任务状态。 
1：执行中；2：成功；3：失败。
 * @method integer getErrCode() 获取编辑任务失败错误码。 
0：成功；其他值：失败。
 * @method void setErrCode(integer $ErrCode) 设置编辑任务失败错误码。 
0：成功；其他值：失败。
 * @method string getErrMsg() 获取编辑任务失败错误描述。
 * @method void setErrMsg(string $ErrMsg) 设置编辑任务失败错误描述。
 * @method array getItemSet() 获取视频分类识别结果集。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemSet(array $ItemSet) 设置视频分类识别结果集。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClassificationTaskResult extends AbstractModel
{
    /**
     * @var integer 编辑任务状态。 
1：执行中；2：成功；3：失败。
     */
    public $Status;

    /**
     * @var integer 编辑任务失败错误码。 
0：成功；其他值：失败。
     */
    public $ErrCode;

    /**
     * @var string 编辑任务失败错误描述。
     */
    public $ErrMsg;

    /**
     * @var array 视频分类识别结果集。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemSet;

    /**
     * @param integer $Status 编辑任务状态。 
1：执行中；2：成功；3：失败。
     * @param integer $ErrCode 编辑任务失败错误码。 
0：成功；其他值：失败。
     * @param string $ErrMsg 编辑任务失败错误描述。
     * @param array $ItemSet 视频分类识别结果集。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ItemSet",$param) and $param["ItemSet"] !== null) {
            $this->ItemSet = [];
            foreach ($param["ItemSet"] as $key => $value){
                $obj = new ClassificationTaskResultItem();
                $obj->deserialize($value);
                array_push($this->ItemSet, $obj);
            }
        }
    }
}
