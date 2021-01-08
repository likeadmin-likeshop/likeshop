import React from "react";
import { View, StyleSheet, Platform, Text, Alert } from "react-native";
import Theme from "../../constraint/Theme";
import { columnCenter, rowCenter } from '../../constraint/Style'
import Popup from "./Popup";
import CodePush from "react-native-code-push";
import { ScreenHeight, ScreenWidth } from "../../utils/app";
let codePushOptions = {
    checkFrequency: CodePush.CheckFrequency.ON_APP_START
}
interface CheckUpDataProps {
   
}


class CheckUpData extends React.Component<CheckUpDataProps, any> {
    constructor(props: CheckUpDataProps) {
        super(props);
        this.state = {
            codePushState: '',
            syncMessage: '',
            progress: false,
            isDownloading: false
        }
    }
    static defaultProps = {

    }

    componentDidMount() {
        this.syncImmediate();
    }
    syncImmediate() {
        CodePush.sync({
            //安装模式
            //ON_NEXT_RESUME 下次恢复到前台时
            //ON_NEXT_RESTART 下一次重启时
            //IMMEDIATE 马上更新
            installMode: CodePush.InstallMode.IMMEDIATE,
            //对话框
            updateDialog: {
                //是否显示更新描述
                appendReleaseDescription: true,
                //更新描述的前缀。 默认为"Description"
                descriptionPrefix: "更新内容：",
                //强制更新按钮文字，默认为continue
                mandatoryContinueButtonLabel: "立即更新",
                //强制更新时的信息. 默认为"An update is available that must be installed."
                mandatoryUpdateMessage: "必须更新后才能使用",
                //非强制更新时，按钮文字,默认为"ignore"
                optionalIgnoreButtonLabel: '稍后',
                //非强制更新时，确认按钮文字. 默认为"Install"
                optionalInstallButtonLabel: '更新',
                //非强制更新时，检查到更新的消息文本
                optionalUpdateMessage: '有新版本了，是否更新？',
                //Alert窗口的标题
                title: '更新提示'
            },
        },
            this.codePushStatusDidChange.bind(this),
            this.codePushDownloadDidProgress.bind(this)
        );
    }
    codePushDownloadDidProgress(progress: any) {
        let { receivedBytes, totalBytes } = progress;
        let codePushState = `正在准备数据 :${((receivedBytes / (totalBytes * 1.0)) * 100).toFixed(2)}%`;
        this.setState({
            isDownloading: true,
            codePushState
        });
    }

    codePushStatusDidChange(syncStatus: any) {
        
        switch (syncStatus) {
            case CodePush.SyncStatus.CHECKING_FOR_UPDATE:
                this.setState({ syncMessage: "Checking for update." });
                break;
            case CodePush.SyncStatus.DOWNLOADING_PACKAGE:
                this.setState({ syncMessage: "Downloading package." });
                break;
            case CodePush.SyncStatus.AWAITING_USER_ACTION:
                this.setState({ syncMessage: "Awaiting user action." });
                break;
            case CodePush.SyncStatus.INSTALLING_UPDATE:
                this.setState({ syncMessage: "Installing update." });
                break;
            case CodePush.SyncStatus.UP_TO_DATE:
                {
                    this.setState({ syncMessage: "App up to date.", progress: false });
                }

                break;
            case CodePush.SyncStatus.UPDATE_IGNORED:
                this.setState({ syncMessage: "Update cancelled by user.", progress: false });
                break;
            case CodePush.SyncStatus.UPDATE_INSTALLED:
                this.setState({ syncMessage: "Update installed and will be applied on restart.", progress: false });
                break;
            case CodePush.SyncStatus.UNKNOWN_ERROR:
                this.setState({ syncMessage: "An unknown error occurred.", progress: false });
                break;
        }
    }
    render() {
        const { isDownloading, codePushState, syncMessage} = this.state
        return (
            <Popup style={{ height: ScreenHeight, width: ScreenWidth, ...columnCenter }}  isVisible={isDownloading} position="center">
                <Text>{codePushState}</Text>
            </Popup>
        );
    }
}
const styles = StyleSheet.create({

});

export default CodePush(codePushOptions)(CheckUpData)