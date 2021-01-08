import React from 'react'
import { SafeAreaView, ScrollView, View } from 'react-native';
import HTML from 'react-native-render-html';
import { getAfterSaleGuar, getPrivatePolicy, getServerProto } from '../../api/app';
import { contain } from '../../constraint/Style';
import Theme from '../../constraint/Theme';
import { ScreenProps } from '../../typing';
import { ScreenWidth } from '../../utils/app';
import { isSuccess } from '../../utils/request';

type ServerExplainProps = ScreenProps<'ServerExplain'>

export default class ServerExplain extends React.Component<ServerExplainProps, any> {
    type: number;
    [x: string]: any;
    constructor(props: ServerExplainProps) {
        super(props);
        this.type = props.route.params.type
        this.state = {
            serverObj: ""
        }
    }

    $getServerProto() {
        getServerProto().then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    serverObj: res.data
                })
            }
        })
    }

    $getPrivatePolicy() {
        getPrivatePolicy().then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    serverObj: res.data
                })
            }
        })
    }

    $getAfterSaleGuar() {
        getAfterSaleGuar().then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    serverObj: res.data
                })
            }
        })
    }

    UNSAFE_componentWillMount() {
        switch(this.type) {
            case 0:
                this.$getServerProto() 
                break;
            case 1:
                this.$getPrivatePolicy()
                break;
            case 2:
                this.$getAfterSaleGuar()
                break;
            default:
                this.$getServerProto() 
                break;
        }
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{padding: 10, backgroundColor: Theme.fill_base, flex: 1}}>
                    <View style={{flex: 1, paddingBottom: 30}}>
                        <HTML html={this.state.serverObj} imagesMaxWidth={ScreenWidth - 20} baseFontStyle={{ fontSize: 14 }}></HTML>
                    </View>
                </ScrollView>
            </SafeAreaView>
        )
    }
}