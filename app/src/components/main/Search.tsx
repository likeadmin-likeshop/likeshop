import React from "react";
import { TouchableOpacity, Text, TextStyle, StyleSheet, ViewStyle, View, TextInput, Image } from "react-native";
import Theme from "../../constraint/Theme";
import { columnCenter, row, getImageSize } from "../../constraint/Style";
import { icon_search } from "../../constraint/Image";
import PressButton from "./PressButton";

export interface SearchProps {
    editable?: boolean
    showBtn?: boolean
    bgColor?: string
    value?: string
    link?: boolean
    style?: ViewStyle
    onPress?: (_?: any) => void
    onChange?: (_?: any) => void
    onSearch?: (_?: any) => void
    onBlur?: (_?: any) => void
    onFocus?: (_?: any) => void
}
class Search extends React.Component<SearchProps, any> {
    static textInput: any;
    [x: string]: any;
    constructor(props: SearchProps) {
        super(props);
    }

    static defaultProps = {
        editable: true,
        bgColor: Theme.fill_base,
        link: false,
        showBtn: false
    };
    focus() {
        this.textInput.focus()
    }
    render() {
        const { editable, bgColor, onPress, onChange, style, link, value, onSearch, showBtn, onBlur, onFocus } = this.props
        return (
            <PressButton disabled={!link} style={{ ...styles.wrap, backgroundColor: bgColor, ...style }} onPress={() => onPress && onPress()}>
                <View style={[styles.input, { backgroundColor: bgColor == Theme.fill_base ? Theme.fill_body : Theme.fill_base }]}>
                    <Image source={icon_search} style={[getImageSize(17), { marginRight: 2 }]} />
                    <TextInput
                        ref={ref => this.textInput = ref}
                        returnKeyType="search"
                        value={value}
                        pointerEvents={link ? 'none' : 'auto'}
                        editable={editable}
                        style={[styles.textInput]}
                        onBlur={() => onBlur && onBlur()}
                        onFocus={() => onFocus && onFocus()}
                        placeholder={'请输入搜索的商品'}
                        placeholderTextColor={Theme.color_text_placeholder}
                        onChangeText={(val) => onChange && onChange(val)}
                        onSubmitEditing={() => onSearch && onSearch()}
                    />
                </View>
                {showBtn && <PressButton onPress={() => onSearch && onSearch()} style={{paddingHorizontal: 12}}>搜索</PressButton>}
            </PressButton>
        );
    }
}


const styles = StyleSheet.create({
    wrap: {
        paddingHorizontal: Theme.h_spacing_md,
        paddingVertical: 7.5,
        ...row
    },
    textInput: {
        flex: 1,
        height: 30,
        padding: 0,
    },
    input: {
        flex: 1,
        ...row,
        borderRadius: Theme.radius_circel,
        paddingHorizontal: Theme.h_spacing_lg,
    }
})

export default Search;
