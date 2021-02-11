import React from 'react';
import { Text, View, FlatList } from 'react-native';
import areaList from '../../utils/area'
import Popup from './Popup';
import Theme from '../../constraint/Theme';
import PressButton from './PressButton';

const itemHeight = 40
interface AddressPickerProps {
    show: boolean
    onSelect: (val: any) => void
    onClose: () => void
}
enum areaType {
    'province',
    'city',
    'district'
}
class AddressPicker extends React.Component<AddressPickerProps, any> {
    areaList: any;
    cityList: any;
    districtList: any;
    flatList!: FlatList<any> | null;
    constructor(props: AddressPickerProps) {
        super(props)
        this.areaList = areaList
        this.state = {
            areaList: areaList,
            areaArr: [{}, {}, {}],
            areaTypre: areaType['province'],
            chooseType: areaType['province']
        }
    }
    getItem(item: any, index: number, preType: number, nextType?: number) {
        const {onClose, onSelect} = this.props
        let { areaArr } = this.state
        areaArr = areaArr.map((item: any, index: number) => {
            if (index >= preType) {
                return {}
            }
            return item
        })
        areaArr[preType] = {
            name: item.name,
            value: item.value,
            index
        }
        if(item.child.length == 0) {
            this.setState({
                areaArr
            })
            onClose()
            onSelect(areaArr)
            return
        }
        this.setState({
            areaList: item.child,
            areaTypre: nextType,
            chooseType: nextType,
            areaArr
        }, () => this.scrollToIndex(0))
    }
    onClick(item: any, index: number) {
        const { areaTypre } = this.state
        switch (areaTypre) {
            case areaType['province']: this.getItem(item, index, areaTypre, areaType['city'])
                this.cityList = item.child
                break;
            case areaType['city']: this.getItem(item, index, areaTypre, areaType['district'])
                this.districtList = item.child
                break;
            case areaType['district']: this.getItem(item, index, areaTypre)
        }
    }
    scrollToIndex(index: number) {
        this.flatList?.scrollToIndex({
            animated: false,
            index: index | 0,
            viewPosition: 0.5
        })
    }
    addressItem(item: any, index: number) {
        const { areaTypre, areaArr } = this.state
        return (
            <PressButton
                style={{ paddingHorizontal: 20, height: itemHeight, justifyContent: 'center' }}
                textStyle={{ color: areaArr[areaTypre].value == item.value ? Theme.brand_primary : Theme.color_text_base, }}
                onPress={() => this.onClick(item, index)}
            >{item.name}</PressButton>
        )
    }
    render() {
        const { areaTypre, areaArr, chooseType, areaList } = this.state
        const { show, onClose } = this.props
        return (
            <Popup isVisible={show} position="bottom" round closeable onClose={onClose}>
                <View style={{ height: 500, }}>
                    <Text style={{ fontSize: Theme.font_size_xl, marginVertical: 20, textAlign: 'center', fontWeight: '500' }}>请选择所在地区</Text>
                    <View style={{ flexDirection: 'row', }}>
                        {areaArr.map((item: any, index: number) => {
                            return (
                                chooseType >= index ? <Text key={index}
                                    onPress={() => {
                                        let areaList = []
                                        switch (index) {
                                            case areaType['province']: areaList = this.areaList
                                                break;
                                            case areaType['city']: areaList = this.cityList
                                                break;
                                            case areaType['district']: areaList = this.districtList
                                                break;
                                        }
                                        this.setState({ areaTypre: index, areaList }, () => {
                                            setTimeout(() => {
                                                this.scrollToIndex(item.index)
                                            })
                                        })
                                    }}
                                    style={{ color: areaTypre == index ? Theme.brand_primary : Theme.color_text_base, fontSize: 16, height: 30, textAlignVertical: 'center', marginLeft: 20 }}
                                >{item.name ? item.name : '请选择'}</Text> : null
                            )
                        })}
                    </View>
                    <FlatList
                        ref={ref => this.flatList = ref}
                        showsVerticalScrollIndicator={false}
                        data={areaList}
                        getItemLayout={(data, index) => ({
                            length: itemHeight,
                            offset: itemHeight*index,
                            index
                        })}
                        keyExtractor={(item) => item.value}
                        renderItem={({ item, index }) => this.addressItem(item, index)}
                    />
                </View>
            </Popup>
        );
    }
}


export default AddressPicker