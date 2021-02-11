import React from "react";
import { Image, View } from "react-native";
import PropTypes from "prop-types";

interface TabBarItemProps {
    focused: boolean;
    selectedImage: number;
    normalImage: number;

}

class TabBarItem extends React.Component<TabBarItemProps, any> {
    constructor(props:TabBarItemProps) {
        super(props);
    }

    static defaultProps = {
        focused: false,
        normalImage: NaN,
        selectedImage: NaN,
    };

    static propTypes = {
        tintColor: PropTypes.string,
        focused: PropTypes.bool,
        normalImage: PropTypes.number,
        selectedImage: PropTypes.number,

    };

    render() {
        return (
            <View style={{ height: 30, alignItems: 'center', justifyContent: 'center' }}>
                <Image source={this.props.focused ? this.props.selectedImage : this.props.normalImage}
                    style={{ width: 24, height: 24 }} resizeMode={'contain'} />
            </View>
        );
    }
}

export default TabBarItem;