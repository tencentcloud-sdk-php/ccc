<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ControlAIConversation请求参数结构体
 *
 * @method string getSessionId() 获取会话 ID
 * @method void setSessionId(string $SessionId) 设置会话 ID
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getCommand() 获取控制命令，目前支持命令如下：

- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本
 * @method void setCommand(string $Command) 设置控制命令，目前支持命令如下：

- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本
 * @method ServerPushText getServerPushText() 获取服务端发送播报文本命令，当Command为ServerPushText时必填
 * @method void setServerPushText(ServerPushText $ServerPushText) 设置服务端发送播报文本命令，当Command为ServerPushText时必填
 */
class ControlAIConversationRequest extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $SessionId;

    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 控制命令，目前支持命令如下：

- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本
     */
    public $Command;

    /**
     * @var ServerPushText 服务端发送播报文本命令，当Command为ServerPushText时必填
     */
    public $ServerPushText;

    /**
     * @param string $SessionId 会话 ID
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Command 控制命令，目前支持命令如下：

- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本
     * @param ServerPushText $ServerPushText 服务端发送播报文本命令，当Command为ServerPushText时必填
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServerPushText",$param) and $param["ServerPushText"] !== null) {
            $this->ServerPushText = new ServerPushText();
            $this->ServerPushText->deserialize($param["ServerPushText"]);
        }
    }
}
