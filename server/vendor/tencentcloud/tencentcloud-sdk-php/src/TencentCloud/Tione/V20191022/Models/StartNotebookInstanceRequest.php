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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartNotebookInstance请求参数结构体
 *
 * @method string getNotebookInstanceName() 获取Notebook实例名称
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称
 * @method string getAutoStopping() 获取自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
 * @method void setAutoStopping(string $AutoStopping) 设置自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
 * @method StoppingCondition getStoppingCondition() 获取自动停止配置，只在AutoStopping为Enabled的时候生效
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置自动停止配置，只在AutoStopping为Enabled的时候生效
 */
class StartNotebookInstanceRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称
     */
    public $NotebookInstanceName;

    /**
     * @var string 自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
     */
    public $AutoStopping;

    /**
     * @var StoppingCondition 自动停止配置，只在AutoStopping为Enabled的时候生效
     */
    public $StoppingCondition;

    /**
     * @param string $NotebookInstanceName Notebook实例名称
     * @param string $AutoStopping 自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
     * @param StoppingCondition $StoppingCondition 自动停止配置，只在AutoStopping为Enabled的时候生效
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
        if (array_key_exists("NotebookInstanceName",$param) and $param["NotebookInstanceName"] !== null) {
            $this->NotebookInstanceName = $param["NotebookInstanceName"];
        }

        if (array_key_exists("AutoStopping",$param) and $param["AutoStopping"] !== null) {
            $this->AutoStopping = $param["AutoStopping"];
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }
    }
}
