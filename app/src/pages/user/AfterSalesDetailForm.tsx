import React from 'react'
import {ScreenProps} from '../../typing'
import { contain, row, getImageSize, rowCenter } from '../../constraint/Style';
import { StyleSheet, View, TextInput, Text, Platform, SafeAreaView } from 'react-native';
import Theme from '../../constraint/Theme';
import PressButton from '../../components/main/PressButton';
import { isSuccess } from '../../utils/request';
import { inputExpressInfo } from '../../api/user';
import { goBack } from '../../utils/navigation';
import { Toast } from '@ant-design/react-native';
import UploadProfile from '../../components/bussiness/UploadProfile';
import { imageUpload } from '../../utils/imageUpload';
import { ScrollView } from 'react-native-gesture-handler';

type AfterSalesDetailFormProps = ScreenProps<'AfterSalesDetailForm'>;

export default class AfterSalesDetailForm extends React.Component<AfterSalesDetailFormProps, any> {
    afterSaleId: number | undefined;
    constructor(props: AfterSalesDetailFormProps) {
        super(props);
        this.afterSaleId = props.route.params.id;
        this.state = {
            expressName: '',
            expressNumber: '',
            remarks: '',
            fileList: []
        }
    }

    $inputExpressInfo() {
        let {expressName, expressNumber, remarks, fileList} = this.state;
        if(!expressName) {Toast.info('请输入物流公司名称'); return;}
        if(!expressNumber) {Toast.info('请输入快递单号'); return;}
        let data = {
            id: this.afterSaleId,
            express_name: expressName,
            invoice_no: expressNumber,
            express_remark: remarks,
            express_image: fileList.length ? fileList[0].base_url : ''
        }
        inputExpressInfo(data).then((res: any) => {
            if(isSuccess(res)) {
                Toast.info(res.msg, 1, () => goBack())
            }
        })
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{flex: 1}}>
                    <View style={[Style.formHeader, {marginTop: 10}]}>
                        <View style={[row, Style.formItem]}>
                            <Text style={Style.formTitle}>物流公司</Text>
                            <TextInput style={Style.formInput} placeholder={'请输入物流公司名称'} onChangeText={(text) => {
                                this.setState({
                                    expressName: text
                                })
                            }} />
                        </View>
                        <View style={[row, Style.formItem]}>
                            <Text style={Style.formTitle}>快递单号</Text>
                            <TextInput style={Style.formInput} placeholder={'请输入快递单号'} onChangeText={(text) => {
                                this.setState({
                                    expressNumber: text
                                })
                            }} />
                        </View>
                        <View style={[row, Style.formItem]}>
                            <Text style={Style.formTitle}>备注说明</Text>
                            <TextInput style={Style.formInput} placeholder={'选填'} onChangeText={(text) => {
                                this.setState({
                                    remarks: text
                                })
                            }} />
                        </View>
                    </View>
                    <View style={Style.formCon}>
                        <Text style={Style.uploadTitle}>
                            上传凭证   <Text style={{fontSize: Theme.font_size_sm, color: Theme.color_text_muted}}>(请上传快递单号凭证）</Text>
                        </Text>
                        <UploadProfile 
                        fileList={this.state.fileList}
                        maxCount={1}
                        deleteImage={(index) => {
                            let {fileList} = this.state;
                            fileList.splice(index, 1)
                            this.setState({
                                fileList: fileList
                            })
                        }}
                        afterRead={(file) => {
                            console.log(file);
                            this.setState({
                                fileList: file
                            })
                            imageUpload(file[0]).then((res: any) => {
                                this.setState({
                                    fileList: [res]
                                })
                            })
                        }} />
                    </View>
                    <PressButton style={{...Style.primaryBtn}} onPress={() => {
                        this.$inputExpressInfo()
                    }}>
                        <Text style={{color: 'white'}}>提交</Text>
                    </PressButton>
                </ScrollView>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    formHeader: {
        backgroundColor: Theme.fill_base,

    },
    formItem: {
        padding: 12
    },
    formTitle: {
        marginRight: 20,
        lineHeight: 20,
    },
    formInput: {
        padding: Platform.OS == 'android' ? 0 : undefined,
        flex: 1
    },
    formCon: {
        paddingTop: 12,
        paddingHorizontal: 10,
        paddingBottom: 22,
        backgroundColor: Theme.fill_base,
        marginTop: 10
    },
    uploadTitle: {
        lineHeight: 18
    },
    uploadContent: {
        marginTop: 15
    },
    primaryBtn: {
        ...rowCenter,
        backgroundColor: Theme.brand_primary,
        marginHorizontal: 13,
        paddingVertical: 10,
        borderRadius: Theme.radius_circel,
        marginTop: 25,
    }
})