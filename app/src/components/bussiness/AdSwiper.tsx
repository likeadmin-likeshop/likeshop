import React from 'react'
import { View, StyleSheet, TouchableOpacity, ViewStyle } from 'react-native'
import Theme from '../../constraint/Theme'
import { getAdList } from '../../api/store'
import { isSuccess } from '../../utils/request'
import CustomImage from '../main/CustomImage'
import Swiper from 'react-native-swiper'
import { navigate } from '../../utils/navigation'
import PressButton from '../main/PressButton'
import { ScreenWidth } from '../../utils/app'
import Carousel from 'react-native-snap-carousel'
interface AdSwiperProps {
    pid: number;
    height?: number;
    width?: number;
    style?: ViewStyle;
    padding?: number;
}

export default class AdSwiper extends React.Component<AdSwiperProps, any> {
    [x: string]: any
    constructor(props: AdSwiperProps) {
        super(props)
        this.state = {
            bannerList: [],
            currentIndex: 0,

        }
    }
    static defaultProps = {
        width: ScreenWidth - 20,
        height:  (ScreenWidth - 20)*0.4
    }
    _getBanner() {
        getAdList({ pid: this.props.pid }).then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    bannerList: res.data
                })
            }
        })
    }

    UNSAFE_componentWillMount() {
        this._getBanner();
    }
    goPage(item: any) {
        let { link, link_type, params } = item;
        switch (link_type) {
            case 1: ''
            case 2:
                navigate(link, params)
                break;
            case 3: navigate('MyWebView', { url: link })
                break;
        }
    }
    render() {
        const { bannerList, currentIndex } = this.state;
        let { width, height, style, padding } = this.props
        const bannerListView = ({ item, index }: any) => {
            return (
                <TouchableOpacity key={index} activeOpacity={1} onPress={() => this.goPage(item)} style={{ padding: padding }}>
                    <CustomImage resizeMode="cover" source={{ uri: item.image }} width={width} height={height} radius={5} />
                </TouchableOpacity>
            )
        }
        return (
            bannerList.length > 0 ? <View style={{ alignItems: 'center', ...style, height: height }}>
                <Carousel
                    data={bannerList}
                    loop={true}
                    renderItem={bannerListView}
                    sliderWidth={width}
                    layout="default"
                    autoplay={true}
                    inactiveSlideScale={1}
                    itemWidth={width}
                    onSnapToItem={(index) => { this.setState({ currentIndex: index }) }}
                />
                { bannerList.length > 1 ?<View style={{ position: 'absolute', bottom: 10, flexDirection: 'row' }}>
                    {
                        bannerList.map((item: any, index: number) => (
                            <View
                             key={index} 
                            style={[{ width: 5, height: 3, backgroundColor: Theme.fill_base, marginHorizontal: 3, borderRadius: 5, },
                                 currentIndex == index ? {width: 10, backgroundColor: Theme.brand_primary} : {}]}></View>
                        ))
                    }
                </View> : null}
            </View> : null
        )
    }
}

const Style = StyleSheet.create({

})