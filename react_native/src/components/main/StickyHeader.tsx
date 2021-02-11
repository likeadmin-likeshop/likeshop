'use strict';
//import liraries
import React from 'react';
import PropTypes from 'prop-types';
import {
    Animated,
    StyleSheet,
    ViewStyle,
} from 'react-native';
interface StickyHeaderProps {
    stickyHeaderY?: number
    stickyScrollY: any
    style?: ViewStyle
}
// create a component
export default class StickyHeader extends React.Component<StickyHeaderProps, any> {

    static defaultProps = {
        stickyHeaderY: -1,
        stickyScrollY: new Animated.Value(0)
    }
    constructor(props: StickyHeaderProps) {
        super(props);
        this.state = {
            stickyLayoutY: 0,
        };
    }
    componentDidMount() {
        this.props.stickyScrollY.addListener(() => {
        })
    }
    _onLayout = (event: { nativeEvent: { layout: { y: any; }; }; }) => {
        this.setState({
            stickyLayoutY: event.nativeEvent.layout.y,
        });
    }
    render() {
        const { stickyHeaderY, stickyScrollY, children, style } = this.props
        const { stickyLayoutY } = this.state
        let y = stickyHeaderY != -1 ? stickyHeaderY : stickyLayoutY;
        const translateY = stickyScrollY.interpolate({
            inputRange: [-1, 0, y, y + 1],
            outputRange: [0, 0, 0, 1],
        });
        return (
            <Animated.View
                onLayout={this._onLayout}
                style={[
                    style,
                    styles.container,
                    { transform: [{ translateY }] }
                ]
                }
            >
                {children}
            </Animated.View>
        );
    }
}

// define your styles
const styles = StyleSheet.create({
    container: {
        zIndex: 100
    },
});

