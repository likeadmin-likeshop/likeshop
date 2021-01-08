import React from 'react';
import { View, StyleSheet, Text, Image, Platform, TouchableHighlight, TouchableOpacity, ScrollView, FlatList, BackHandler, SafeAreaView } from 'react-native';
import { address_null , icon_del1, icon_edit, icon_warning } from '../../constraint/Image';
import { ScreenProps, RootState } from '../../typing';
import { connect } from 'react-redux';
import { showLoading } from '../../store/reducers/cacheReducer';
import LoadingView from '../../components/main/LoadingView';
// import { get } from '../../utils/request';
import { getAddressLists, delAddress, setDefaultAddress } from '../../api/user'
import PressButton from '../../components/main/PressButton';
import { useFocusEffect } from '@react-navigation/native';
import { isSuccess } from '../../utils/request';
import { Toast } from '@ant-design/react-native';
import { contain, getImageSize, rowCenter, columnCenter } from '../../constraint/Style';
import Theme from '../../constraint/Theme';
import CheckBox from '../../components/bussiness/CheckBox';
import { navigate, goBack } from '../../utils/navigation';
import Dialog from '../../components/main/Dialog';
import { postEvent } from '../../utils/event';

function UserAddressScreen(props: ScreenProps<'UserAddress'>) {
    const [userAddressList, setUserAddressList] = React.useState([])
    useFocusEffect(
        React.useCallback(() => {
            const getUserAddressList = async () => {
                const res: any = await getAddressLists();
                if (isSuccess(res)) {
                    setUserAddressList(res.data)
                }
            }

            getUserAddressList();

            return () => {
                //失去焦点
            }
        }, [])
    );
    return <UserAddress  {...props} userAddressList={userAddressList} />
}

type userAddressProps = ScreenProps<'UserAddress'> & { userAddressList: any };

class UserAddress extends React.Component<userAddressProps, any> {
    type: any;
    constructor(props: userAddressProps) {
        super(props);
        this.type = props.route.params?.type
        this.state = {
            userAddressList: props.userAddressList,
            checked: false,
            value: 0,
            showDialog: false,
            selectedId: -1,
            loadingShow: true,
        };

    }

    $setDefaultAddress(id: number) {
        setDefaultAddress(id).then((res:any) => {
            if(res.code == 1) {
                Toast.info(res.msg);
                this.$getAddressLists();
            }
        })
    }

    UNSAFE_componentWillReceiveProps(props: userAddressProps) {
        console.log(props.userAddressList, '#####')
        this.setState({
            userAddressList: props.userAddressList,
            loadingShow: false
        })
    }

    addressFooter() {
        return (
            <View style={userAddressStyle.footerContainer}>
                <PressButton onPress={() => navigate('AddressEdit', {type: 1})} style={{ justifyContent: "center", alignItems: "center", backgroundColor: '#FF2C3C', ...userAddressStyle.addressBtn }}>
                    <Text style={{ color: "white" }}>新增收货地址</Text>
                </PressButton>
            </View>
        )
    }

    addressEmpty() {
        return (
            <View style={userAddressStyle.addressEmpty}>
                <View style={{ alignItems: "center", justifyContent: "center", flexDirection: "column" }}>
                    <Image source={address_null} style={{ width: 150, height: 150, marginBottom: 10 }}/>
                    <Text style={{ color: "#999999", fontSize: 13 }}>暂无收货地址,请添加～</Text>
                </View>
            </View>
        )
    }

    $getAddressLists() {
        getAddressLists().then((res: any) => {
            if (res.code == 1) {
                this.setState({
                    userAddressList: res.data,
                    showDialog: false,
                })
            }
        })
    }

    $delAddress(id: any) {
        delAddress(id).then((res: any) => {
            if (res.code == 1) {
                Toast.info(res.msg)
                this.$getAddressLists();
            }
        })
    }

    UNSAFE_componentWillMount() {
        this.setState({
            userAddress: this.props.userAddressList
        })
    }
    addressItem(data: any) {
        const item = data.item;
        return (
            <PressButton style={userAddressStyle.addressItem} disabled={!this.type} onPress={() => {
                if(!this.type) return
                postEvent('SELECT_ADDRESS', item.id)
                goBack()
            }}>
                <View style={userAddressStyle.addressItemHeader}>
                    <View style={{ flexDirection: "row" }}>
                        <Text style={{ fontSize: 15 }}>{item.contact}</Text>
                        <Text style={{ marginLeft: 11, fontSize: 15 }}>{item.telephone}</Text>
                    </View>
                    <View style={{ marginTop: 8 }}>
                        <Text style={{ color: "#666666", fontSize: 13, lineHeight: 20 }}>{item.province} {item.city} {item.district} {item.address}</Text>
                    </View>
                </View>
                <View style={userAddressStyle.addressItemFooter}>
                    <View style={userAddressStyle.rowCenter}>
                        <CheckBox
                            checked={item.is_default}
                            onClick={() => {
                                if(item.is_default) {
                                    return;
                                }
                                this.$setDefaultAddress(item.id)
                            }} 
                        >
                            <Text style={{ marginLeft: 5 }}>设为默认</Text>
                        </CheckBox>
                    </View>
                    <View style={userAddressStyle.rowCenter}>
                        <PressButton style={{ ...userAddressStyle.rowCenter, marginRight: 20 }} onPress={() => navigate('AddressEdit', {type: 0, id: item.id})}>
                            <Image source={icon_edit} style={{ width: 22, height: 22 }}></Image>
                            <Text style={{ marginLeft: 3 }}>编辑</Text>
                        </PressButton>
                        <PressButton 
                        style={{ ...userAddressStyle.rowCenter, marginRight: 15 }} 
                        onPress={() => {
                            this.setState({
                                showDialog: true,
                                selectedId: item.id
                            })
                        }}>
                            <Image source={icon_del1} style={{ width: 22, height: 22 }}></Image>
                            <Text style={{ marginLeft: 3 }}>删除</Text>
                        </PressButton>
                    </View>
                </View>
            </PressButton>
        )
    }

    addressItemContainer() {
        return (
            <View style={{flex: 1}}>
                <FlatList
                    data={this.state.userAddressList}
                    renderItem={(data) => this.addressItem(data)}
                    keyExtractor={(item, index) => {
                        return index.toString()
                    }}
                    ListEmptyComponent={this.addressEmpty()}
                />
                <Dialog
                style={{width: 300}}
                isVisible={this.state.showDialog}
                confirmButtonText={"确定"}
                onConfirm={() => {
                    console.log('onConfirm')
                    this.$delAddress(this.state.selectedId)
                }}
                onCancel={() => this.setState({showDialog: false})}
                >
                    <View style={columnCenter}>
                        <Image source={icon_warning} style={getImageSize(28)}/>
                        <Text style={{marginTop: 15, fontSize: Theme.font_size_md}} >确认删除该收货地址吗？</Text>
                    </View>
                </Dialog>
            </View>
        )
    }

    componentWillUnmount() {
        console.log('Unmount!!!')
    }

    addressContainer() {
        // 有地址
        return (
            <View style={{ flex: 1 }}>
                <View style={{flex: 1}}>
                    {this.state.loadingShow && (<LoadingView/>)}
                    {this.state.userAddressList && this.addressItemContainer()}
                </View>
            </View>
        )
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <View style={{ flex: 1 }}>
                    {this.addressContainer()}
                    {this.addressFooter()}
                </View>
            </SafeAreaView>
        )
    }
}

const userAddressStyle = StyleSheet.create({
    rowCenter: {
        flexDirection: "row",
        justifyContent: "center",
        alignItems: "center"
    },
    rowBetween: {
        flexDirection: "row",
        justifyContent: "space-between",
        alignItems: "center"
    },
    addressItem: {
        backgroundColor: "white",
        paddingLeft: 15,
        paddingTop: 10,
        marginTop: 10,
    },
    addressItemHeader: {
        paddingBottom: 10,
        borderBottomColor: "#E5E5E5",
        borderBottomWidth: Theme.border_width_sm
    },
    addressItemFooter: {
        flexDirection: "row",
        justifyContent: "space-between",
        height: 40
    },
    addressEmpty: {
        justifyContent: "center",
        alignItems: "center",
        paddingTop: 150
    },
    addressBtn: {
        flex:1,
        height: 37,
        borderRadius: 30,
    },
    footerContainer: {
        height: 59.5,
        backgroundColor: "white",
        flexDirection: "row",
        justifyContent: "space-between",
        alignItems: "center",
        paddingHorizontal: 15,
        flex: 0
    }
})

export default connect()(UserAddressScreen);