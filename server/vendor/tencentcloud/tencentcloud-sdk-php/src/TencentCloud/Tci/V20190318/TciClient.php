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

namespace TencentCloud\Tci\V20190318;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tci\V20190318\Models as Models;

/**
 * @method Models\AIAssistantResponse AIAssistant(Models\AIAssistantRequest $req) 提供 AI 助教基础版本功能接口
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) 用于取消已经提交的任务，目前只支持图像任务。
 * @method Models\CheckFacePhotoResponse CheckFacePhoto(Models\CheckFacePhotoRequest $req) 检查人脸图片是否合法
 * @method Models\CreateFaceResponse CreateFace(Models\CreateFaceRequest $req) 创建人脸
 * @method Models\CreateLibraryResponse CreateLibrary(Models\CreateLibraryRequest $req) 创建人员库
 * @method Models\CreatePersonResponse CreatePerson(Models\CreatePersonRequest $req) 创建人员
 * @method Models\CreateVocabResponse CreateVocab(Models\CreateVocabRequest $req) 创建词汇
 * @method Models\CreateVocabLibResponse CreateVocabLib(Models\CreateVocabLibRequest $req) 建立词汇库
 * @method Models\DeleteFaceResponse DeleteFace(Models\DeleteFaceRequest $req) 删除人脸
 * @method Models\DeleteLibraryResponse DeleteLibrary(Models\DeleteLibraryRequest $req) 删除人员库
 * @method Models\DeletePersonResponse DeletePerson(Models\DeletePersonRequest $req) 删除人员
 * @method Models\DeleteVocabResponse DeleteVocab(Models\DeleteVocabRequest $req) 删除词汇
 * @method Models\DeleteVocabLibResponse DeleteVocabLib(Models\DeleteVocabLibRequest $req) 删除词汇库
 * @method Models\DescribeAITaskResultResponse DescribeAITaskResult(Models\DescribeAITaskResultRequest $req) 获取标准化接口任务结果
 * @method Models\DescribeAttendanceResultResponse DescribeAttendanceResult(Models\DescribeAttendanceResultRequest $req) 人脸考勤查询结果
 * @method Models\DescribeAudioTaskResponse DescribeAudioTask(Models\DescribeAudioTaskRequest $req) 音频评估任务信息查询接口，异步查询客户提交的请求的结果。
 * @method Models\DescribeConversationTaskResponse DescribeConversationTask(Models\DescribeConversationTaskRequest $req) 音频对话任务评估任务信息查询接口，异步查询客户提交的请求的结果。
 * @method Models\DescribeHighlightResultResponse DescribeHighlightResult(Models\DescribeHighlightResultRequest $req) 视频精彩集锦结果查询接口，异步查询客户提交的请求的结果。
 * @method Models\DescribeImageTaskResponse DescribeImageTask(Models\DescribeImageTaskRequest $req) 拉取任务详情
 * @method Models\DescribeImageTaskStatisticResponse DescribeImageTaskStatistic(Models\DescribeImageTaskStatisticRequest $req) 获取图像任务统计信息
 * @method Models\DescribeLibrariesResponse DescribeLibraries(Models\DescribeLibrariesRequest $req) 获取人员库列表
 * @method Models\DescribePersonResponse DescribePerson(Models\DescribePersonRequest $req) 获取人员详情
 * @method Models\DescribePersonsResponse DescribePersons(Models\DescribePersonsRequest $req) 拉取人员列表
 * @method Models\DescribeVocabResponse DescribeVocab(Models\DescribeVocabRequest $req) 查询词汇
 * @method Models\DescribeVocabLibResponse DescribeVocabLib(Models\DescribeVocabLibRequest $req) 查询词汇库
 * @method Models\ModifyLibraryResponse ModifyLibrary(Models\ModifyLibraryRequest $req) 修改人员库信息
 * @method Models\ModifyPersonResponse ModifyPerson(Models\ModifyPersonRequest $req) 修改人员信息
 * @method Models\SubmitAudioTaskResponse SubmitAudioTask(Models\SubmitAudioTaskRequest $req) 音频任务提交接口
 * @method Models\SubmitCheckAttendanceTaskResponse SubmitCheckAttendanceTask(Models\SubmitCheckAttendanceTaskRequest $req) 提交人员考勤任务，支持包括点播和直播资源；支持通过DescribeAttendanceResult查询结果，也支持通过NoticeUrl设置考勤回调结果，回调结果结构如下：
##### 回调事件结构
 | 参数名称 | 类型 | 描述 | 
 | ----  | ---  | ------  |
 | jobid | Integer | 任务ID | 
 | person_info | array of PersonInfo | 识别到的人员列表 | 
#####子结构PersonInfo
 | 参数名称 | 类型 | 描述 | 
 | ----  | ---  | ------  |
 | traceid | String | 可用于区分同一路视频流下的不同陌生人 | 
 | personid | String | 识别到的人员ID，如果是陌生人则返回空串 | 
 | libid | String | 识别到的人员所在的库ID，如果是陌生人则返回空串 | 
 | timestamp | uint64 | 识别到人脸的绝对时间戳，单位ms | 
 | image_url | string | 识别到人脸的事件抓图的下载地址，不长期保存，需要请及时下载 | 
 * @method Models\SubmitCheckAttendanceTaskPlusResponse SubmitCheckAttendanceTaskPlus(Models\SubmitCheckAttendanceTaskPlusRequest $req) 支持多路视频流，提交高级人员考勤任务
 * @method Models\SubmitConversationTaskResponse SubmitConversationTask(Models\SubmitConversationTaskRequest $req) 对话任务分析接口
 * @method Models\SubmitDoubleVideoHighlightsResponse SubmitDoubleVideoHighlights(Models\SubmitDoubleVideoHighlightsRequest $req) 发起双路视频生成精彩集锦接口。该接口可以通过客户传入的学生音视频及老师视频两路Url，自动生成一堂课程的精彩集锦。需要通过DescribeHighlightResult
接口获取生成结果。
 * @method Models\SubmitFullBodyClassTaskResponse SubmitFullBodyClassTask(Models\SubmitFullBodyClassTaskRequest $req) **传统课堂授课任务**：在此场景中，老师为站立授课，有白板或投影供老师展示课程内容，摄像头可以拍摄到老师的半身或者全身。拍摄视频为一路全局画面，且背景不动，要求画面稳定清晰。通过此接口可分析老师授课的行为及语音，以支持AI评教。  
  
**提供的功能接口有：**老师人脸识别、老师表情识别、老师肢体动作识别、语音识别。  可分析的指标维度包括：身份识别、正脸、侧脸、人脸坐标、人脸尺寸、高兴、中性、高兴、中性、惊讶、厌恶、恐惧、愤怒、蔑视、悲伤、正面讲解、写板书、指黑板、语音转文字、发音时长、非发音时长、音量、语速、指定关键词的使用等
  
**对场景的要求为：**真实场景老师1人出现在画面中，全局画面且背景不动；人脸上下角度在20度以内，左右角度在15度以内，歪头角度在15度以内；光照均匀，无遮挡，人脸清晰可见；像素最好在 100X100 像素以上，但是图像整体质量不能超过1080p。
    
**结果查询方式：**图像任务直接返回结果，点播及直播任务通过DescribeAITaskResult查询结果。
 * @method Models\SubmitHighlightsResponse SubmitHighlights(Models\SubmitHighlightsRequest $req) 发起视频生成精彩集锦接口。该接口可以通过客户传入的课程音频数据及相关策略（如微笑抽取，专注抽取等），自动生成一堂课程的精彩集锦。需要通过QueryHighlightResult接口获取生成结果。
 * @method Models\SubmitImageTaskResponse SubmitImageTask(Models\SubmitImageTaskRequest $req) 提交图像分析任务
 * @method Models\SubmitImageTaskPlusResponse SubmitImageTaskPlus(Models\SubmitImageTaskPlusRequest $req) 高级图像分析任务，开放了图像任务里的所有开关，可以根据场景深度定制图像分析任务。支持的图像类别有，图片链接、图片二进制数据、点播链接和直播链接。
 * @method Models\SubmitOneByOneClassTaskResponse SubmitOneByOneClassTask(Models\SubmitOneByOneClassTaskRequest $req) **提交在线1对1课堂任务**  
对于在线1对1课堂，老师通过视频向学生授课，并且学生人数为1人。通过上传学生端的图像信息，可以获取学生的听课情况分析。 具体指一路全局画面且背景不动，有1位学生的头像或上半身的画面，要求画面稳定清晰。
  
**提供的功能接口有：**学生人脸识别、学生表情识别、语音识别。可分析的指标维度包括：学生身份识别、正脸、侧脸、抬头、低头、人脸坐标、人脸尺寸、高兴、中性、高兴、中性、惊讶、厌恶、恐惧、愤怒、蔑视、悲伤、语音转文字、发音时长、非发音时长、音量、语速等。
  
**对场景的要求为：**真实常规1v1授课场景，学生2人以下，全局画面且背景不动；人脸上下角度在20度以内，左右角度在15度以内，歪头角度在15度以内；光照均匀，无遮挡，人脸清晰可见；像素最好在 100X100 像素以上，但是图像整体质量不能超过1080p。
    
**结果查询方式：**图像任务直接返回结果，点播及直播任务通过DescribeAITaskResult查询结果。
 * @method Models\SubmitOpenClassTaskResponse SubmitOpenClassTask(Models\SubmitOpenClassTaskRequest $req) **提交线下小班（无课桌）课任务**  
线下小班课是指有学生无课桌的课堂，满座15人以下，全局画面且背景不动，能清晰看到。  
  
**提供的功能接口有：**学生人脸识别、学生表情识别、学生肢体动作识别。  可分析的指标维度包括：身份识别、正脸、侧脸、抬头、低头、高兴、中性、高兴、中性、惊讶、厌恶、恐惧、愤怒、蔑视、悲伤、站立、举手、坐着等。
  
**对场景的要求为：**真实常规教室，满座15人以下，全局画面且背景不动；人脸上下角度在20度以内，左右角度在15度以内，歪头角度在15度以内；光照均匀，无遮挡，人脸清晰可见；像素最好在 100X100 像素以上但是图像整体质量不能超过1080p。
    
**结果查询方式：**图像任务直接返回结果，点播及直播任务通过DescribeAITaskResult查询结果。
 * @method Models\SubmitPartialBodyClassTaskResponse SubmitPartialBodyClassTask(Models\SubmitPartialBodyClassTaskRequest $req) **在线小班课任务**：此场景是在线授课场景，老师一般为坐着授课，摄像头可以拍摄到老师的头部及上半身。拍摄视频为一路全局画面，且背景不动，要求画面稳定清晰。通过此接口可分析老师授课的行为及语音，以支持AI评教。    
  
**提供的功能接口有：**老师人脸识别、老师表情识别、老师手势识别、光线识别、语音识别。 可分析的指标维度包括：身份识别、正脸、侧脸、人脸坐标、人脸尺寸、高兴、中性、高兴、中性、惊讶、厌恶、恐惧、愤怒、蔑视、悲伤、点赞手势、听你说手势、听我说手势、拿教具行为、语音转文字、发音时长、非发音时长、音量、语速、指定关键词的使用等 
  
**对场景的要求为：**在线常规授课场景，全局画面且背景不动；人脸上下角度在20度以内，左右角度在15度以内，歪头角度在15度以内；光照均匀，无遮挡，人脸清晰可见；像素最好在 100X100 像素以上，但是图像整体质量不能超过1080p。
    
**结果查询方式：**图像任务直接返回结果，点播及直播任务通过DescribeAITaskResult查询结果。
 * @method Models\SubmitTraditionalClassTaskResponse SubmitTraditionalClassTask(Models\SubmitTraditionalClassTaskRequest $req) **提交线下传统面授大班课（含课桌）任务。**  
传统教室课堂是指有学生课堂有课桌的课堂，满座20-50人，全局画面且背景不动。  
  
**提供的功能接口有：**学生人脸识别、学生表情识别、学生肢体动作识别。可分析的指标维度包括：学生身份识别、正脸、侧脸、抬头、低头、高兴、中性、高兴、中性、惊讶、厌恶、恐惧、愤怒、蔑视、悲伤、举手、站立、坐着、趴桌子、玩手机等  
  
**对场景的要求为：**传统的学生上课教室，满座20-50人，全局画面且背景不动；人脸上下角度在20度以内，左右角度在15度以内，歪头角度在15度以内；光照均匀，无遮挡，人脸清晰可见；像素最好在 100X100 像素以上，但是图像整体质量不能超过1080p。
    
**结果查询方式：**图像任务直接返回结果，点播及直播任务通过DescribeAITaskResult查询结果。
  
 * @method Models\TransmitAudioStreamResponse TransmitAudioStream(Models\TransmitAudioStreamRequest $req) 分析音频信息
 */

class TciClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tci.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tci";

    /**
     * @var string
     */
    protected $version = "2019-03-18";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tci")."\\"."V20190318\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
