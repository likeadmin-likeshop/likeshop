import React, { Component } from 'react'
import { StyleSheet, Text, View, Animated, TouchableOpacity, Platform, TextStyle, ViewStyle } from 'react-native'
import { FlatList } from 'react-native-gesture-handler';
import Theme from '../../constraint/Theme';
import { ScreenWidth } from '../../utils/app';


interface TabBarProps {
    textStyle?: TextStyle
    activeColor: string
    inactiveColor: string
    underlineStyle?: ViewStyle
    style?: ViewStyle
    backgroundColor?: string
    textActiveColor?: string
    [propName: string]: any;
}

export default class CustomScrollTabBars extends Component<TabBarProps, any> {
    constructor(props: TabBarProps) {
        super(props);
        this.state = {

        }
    }

    _renderTab(name: string, page: any, isTabActive: boolean, onPressHandler: (arg0: any) => any) {
        const { activeColor, inactiveColor, textActiveColor } = this.props;
        const textColor = isTabActive ? textActiveColor ? textActiveColor : activeColor : inactiveColor;
        const fontWeight = isTabActive ? 'bold' : 'normal';
        const fontSize = isTabActive ? 15 : 14;
        const Button = ButtonIos

        return (<Button
            style={{ flex: 1 }}
            key={name}
            accessible={true}
            accessibilityLabel={name}
            accessibilityTraits='button'
            onPress={() => onPressHandler(page)}
        >
            <View style={styles.tab}>
                <Text style={[{ color: textColor, fontWeight, fontSize }]}>
                    {name}
                </Text>
            </View>
        </Button>);
    }

    _renderUnderline() {
        let { containerWidth, tabUnderlineDefaultWidth, tabs, tabUnderlineScaleX, activeColor, scrollValue, underlineStyle, tabWidth } = this.props
        const numberOfTabs = tabs.length;
        containerWidth = tabWidth ? tabWidth : containerWidth
        const underlineWidth: number = tabUnderlineDefaultWidth ? tabUnderlineDefaultWidth : containerWidth / (numberOfTabs * 2);
        const scale = tabUnderlineScaleX ? tabUnderlineScaleX : 3;
        const deLen = (containerWidth / numberOfTabs - underlineWidth) / 2;
        const tabUnderlineStyle: ViewStyle = {
            position: 'absolute',
            width: underlineWidth,
            height: 2,
            borderRadius: 2,
            backgroundColor: activeColor,
            bottom: 0,
            left: deLen
        };

        const translateX = scrollValue.interpolate({
            inputRange: [0, 1],
            outputRange: [0, containerWidth / numberOfTabs],
        });

        const scaleValue = (defaultScale: any) => {
            let arr = new Array(numberOfTabs * 2);
            return arr.fill(0).reduce(function (pre, cur, idx) {
                idx == 0 ? pre.inputRange.push(cur) : pre.inputRange.push(pre.inputRange[idx - 1] + 0.5);
                idx % 2 ? pre.outputRange.push(defaultScale) : pre.outputRange.push(1)
                return pre
            }, { inputRange: [], outputRange: [] })
        }

        const scaleX = scrollValue.interpolate(scaleValue(scale));

        return (
            <Animated.View
                style={[
                    tabUnderlineStyle,
                    {
                        transform: [
                            { translateX },
                            { scaleX }
                        ],
                    },
                    underlineStyle,
                ]}
            />
        )
    }

    render() {
        const { backgroundColor, tabs, style, goToPage, activeTab } = this.props
        return (
            <View  style={[styles.tabs, { backgroundColor: backgroundColor }, style]}>
                <FlatList
                    horizontal={true}
                    data={tabs}
                    renderItem={({ item, index }) => {
                        const isTabActive = activeTab === index;
                        return this._renderTab(item as string, index, isTabActive, goToPage)
                    }}
                />
                {this._renderUnderline()}
            </View>
        );
    };
}



const ButtonIos = (props: any) => (<TouchableOpacity activeOpacity={0.7} {...props}>
    {props.children}
</TouchableOpacity>);


const styles = StyleSheet.create({
    tab: {
        backgroundColor: Theme.fill_base
    },
    tabs: {
        height: Theme.tab_bar_height,
    },
});