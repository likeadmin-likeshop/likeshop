import React from "react"
import { ScreenProps } from "../../typing"
import { View, Text, StyleSheet, Platform, TouchableOpacity, Keyboard, TextInput, ScrollView, SafeAreaView, Image } from "react-native";
import Theme from "../../constraint/Theme";
import { rowCenter, row, contain, getImageSize } from "../../constraint/Style";
import { addAddress, editAddress, getOneAddress } from "../../api/user";
import { Toast } from "@ant-design/react-native"
import PressButton from "../../components/main/PressButton";
import { navigate } from "../../utils/navigation"
import AddressPicker from "../../components/main/AddressPicker";
import CheckBox from "../../components/bussiness/CheckBox";
import { arrow_right } from "../../constraint/Image";

type AddressEditProps = ScreenProps<'AddressEdit'>;

class AddressEdit extends React.Component<AddressEditProps, any> {
    constructor(props: AddressEditProps) {
        super(props);
        this.state = {
            userName: '',
            telephone: '',
            region: '',
            province_id: 110000,
            city_id: 110100,
            district_id: 110101,
            address: '',
            is_default: 0,
            showPicker: false,
            type: props.route.params?.type,
            id: props.route.params?.id,
            canEdit: false,
        }
    }
 

    $addAddress() {
        let { userName, telephone, province_id, city_id, district_id, is_default, region } = this.state;
        if (!userName) { Toast.info("请填写收货人信息"); return; }
        if (!telephone) { Toast.info("请填写电话号码"); return; }
        if (!region) {Toast.info("请选择所在地区"); return;}
        if (!this.state.address) { Toast.info("请填写详细地址"); return; }
        let data = {
            contact: userName,
            telephone: telephone,
            province_id: province_id,
            city_id: city_id,
            district_id: district_id,
            address: this.state.address,
            is_default: is_default
        }
        addAddress(data).then((res: any) => {
            if (res.code == 1) {
                Toast.info(res.msg, 1, () => navigate("UserAddress"), false)
            }
        })
    }

    $editAddress() {
        let { userName, telephone, province_id, city_id, district_id, is_default, id } = this.state;
        if (!userName) { Toast.info("请填写收货人信息"); return; }
        if (!telephone) { Toast.info("请填写电话号码"); return; }
        if (!this.state.address) { Toast.info("请填写详细地址"); return; }
        let data = {
            contact: userName,
            telephone: telephone,
            province_id: province_id,
            city_id: city_id,
            district_id: district_id,
            address: this.state.address,
            is_default: is_default,
            id: id
        }
        editAddress(data).then((res: any) => {
            if (res.code == 1) {
                Toast.info(res.msg, 1, () => navigate("UserAddress"), false)
            }
        })
    }

    formContainer() {
        return (
                  <View style={Style.formContainer}>
                <View style={{ paddingHorizontal: 12, }}>
                    <View style={Style.formInputItem}>
                        <Text style={Style.formTitle}>收货人</Text>
                        <TextInput value={this.state.userName} placeholder="请填写收货人姓名" style={Style.formInput} onChangeText={(text) => this.setState({ userName: text })} 
                     
                        />
                    </View>
                </View>
                <View style={{ paddingHorizontal: 12, }}>
                    <View style={Style.formInputItem}>
                        <Text style={Style.formTitle}>联系方式</Text>
                        <TextInput
                        keyboardType={'numeric'}
                        value={this.state.telephone} 
                        placeholder="请填写手机号码" 
                        style={Style.formInput} 
                        onChangeText={(text) => this.setState({ telephone: text })} 
                      
                        />
                    </View>
                </View>
                <PressButton 
                style={{ paddingHorizontal: 12, }} 
                onPress={() => {

                    Keyboard.dismiss();
                    this.setState({showPicker: true});
                }}>
                    <View style={Style.formInputItem}>
                        <Text style={Style.formTitle}>所在地区</Text>
                        <TextInput  
                        pointerEvents={Platform.OS == 'ios'? "none" : 'auto'} 
                        value={this.state.region} 
                        editable={this.state.canEdit} 
                        style={Style.formInput} placeholder="请选择省、市、区" 
                        onChangeText={(text) => this.setState({ region: text })} 
                        onFocus={() => {
                            if(Platform.OS == 'android') {
                                this.setState({
                                    canEdit: false,
                                    showPicker: true
                                })
                            }
                        }}
                        />

                    <Image source={arrow_right} style={{...getImageSize(15)}}/>
                    </View> 
                </PressButton>
                <View style={{ paddingHorizontal: 12, paddingTop: 12 }}>
                    <View style={[Style.formInputItem, { height: 100, borderBottomWidth: 0 }]}>
                        <Text style={[Style.formTitle, { alignSelf: "flex-start", marginTop: 6 }]}>详细地址</Text>
                        <TextInput value={this.state.address} style={[Platform.OS == 'ios' ? { height: "100%", flex: 1, marginLeft: 10 } : { flex: 1, textAlignVertical: "top", marginLeft: 10, height: "100%", marginTop: -6 }]}
                            multiline
                            numberOfLines={4}
                            placeholder="请填写小区、街道、门牌号等信息"
                            onChangeText={(text) => this.setState({ address: text })}
                        />
                    </View>
                </View>
            </View>
          
        )
    }

    onSubmit() {
        if (this.state.type == 1) {
            this.$addAddress();
        }
        else if (this.state.type == 0) {
            this.$editAddress();
        }
    }

    UNSAFE_componentWillMount() {
        if (this.state.id && this.state.type == 0) {
            this.$getOneAddress(this.state.id);
            this.setState({
                canEdit: true
            })
        }
    }

    $getOneAddress(id: number) {
        getOneAddress(id).then((res: any) => {
            if (res.code == 1) {
                let { address, city_id, district_id, province_id, is_default, telephone, contact, city, district, province } = res.data;
                this.setState({
                    userName: contact,
                    telephone: telephone,
                    address: address,
                    region: province + " " + city + " " + district,
                    is_default: is_default,
                    province_id: province_id,
                    city_id: city_id,
                    district_id: district_id, 
                    canEdit: true,
                })
            }
        })
    }

    render() {
        const {showPicker} = this.state
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{flex: 1}} keyboardShouldPersistTaps="always">
                    {this.formContainer()}
                    <View style={[Style.formCheck, row]}>
                        <CheckBox
                            checked={this.state.is_default}
                            onClick={() => {
                                if(this.state.is_default == 0) {
                                    this.setState({
                                        is_default: 1
                                    });
                                }else {
                                    this.setState({
                                        is_default: 0
                                    })
                                }
                            }} 
                        >
                            <Text style={{ marginLeft: 5, fontSize: Theme.font_size_xs }}>设为默认</Text>
                        </CheckBox>  
                    </View>
                    <PressButton style={{ ...Style.submitBtn, ...rowCenter }} onPress={this.onSubmit.bind(this)}>
                        <Text style={{ color: "#fff", fontSize: Theme.font_size_lg }}>完成</Text>
                    </PressButton>
                </ScrollView>
                <AddressPicker 
                onClose={() => this.setState({showPicker: false})} 
                show={showPicker} 
                onSelect={(val) => {
                    this.setState({
                        province_id: val[0].value,
                        city_id: val[1].value,
                        district_id: val[2].value,
                        region: val[0].name + " " + val[1].name + " " + val[2].name,
                        canEdit: Platform.OS == "android" ? true : false
                    })
                }} />
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    formContainer: {
        backgroundColor: "white",
        marginTop: 10,
    },
    formInputItem: {
        height: 50,
        flexDirection: "row",
        alignItems: "center",
        borderColor: "#E5E5E5",
        borderBottomWidth: Theme.border_width_sm
    },
    formTitle: {
        fontSize: 14,
        width: 75
    },
    formInput: {
        height: "100%",
        flex: 1,
        marginLeft: 10
    },
    formCheck: {
        backgroundColor: 'white',
        padding: 10,
        marginTop: 5
    },
    submitBtn: {
        paddingVertical: 10,
        backgroundColor: Theme.brand_primary,
        borderRadius: Theme.radius_circel,
        marginHorizontal: 13,
        marginTop: 20
    }
})

export default AddressEdit;