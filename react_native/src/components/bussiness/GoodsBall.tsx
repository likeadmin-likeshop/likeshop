import React from 'react';

import { StyleSheet, View, Image, Animated, ImageSourcePropType, Easing } from 'react-native';
import { ScreenHeight, ScreenWidth } from '../../utils/app';

interface GoodsBallProps {
    toY: number;
    toX: number;
    source: ImageSourcePropType
    onFinish?:() => void
}

const ballSize = 200
const scale =0.15
export default class GoodsBall extends React.PureComponent<GoodsBallProps, any> {
    constructor(props: GoodsBallProps) {
        super(props);
        this.state = {
            animValue: new Animated.Value(0),
            animValueX: new Animated.Value(0),
            fromX: 0,
            fromY: 0,
        };
    }
    componentDidMount() {
        const {onFinish} = this.props
        Animated.parallel([
            Animated.timing(
                this.state.animValue,
                {
                    toValue: 1,
                    duration: 1000,
                    useNativeDriver: true,
                }
            ),
            Animated.timing(
                this.state.animValueX,
                {
                    toValue: 1,
                    duration: 1000,
                    useNativeDriver: true,
                    easing: Easing.linear
                }
            )
        ]).start(() => {onFinish && onFinish()})
    }
    render() {
        const { animValue, fromX, fromY, animValueX } = this.state;
        const { toY, toX, source } = this.props
        return (
            <Animated.View
                style={{
                    zIndex: 9,
                    position: 'absolute',
                    opacity: animValue.interpolate({
                        inputRange: [0, 0.3, 0.5, 1],
                        outputRange: [0, 1, 0.4, 0]
                    }),
                    left: '50%',
                    marginLeft: -ballSize / 2,
                    top: 80,
                    transform: [
                        {
                            scale: animValue.interpolate({
                                inputRange: [0, 0.3, 1],
                                outputRange: [1, scale+0.1, scale],
                                // easing: 
                            })
                        },
                        {
                            translateX: animValueX.interpolate({
                                inputRange: [0, 0.3, 0.5, 1],
                                outputRange: [fromX, fromX, -90 * (1 / scale), (toX - ScreenWidth / 2 + ballSize * scale / 2) * (1 / scale)],
                            })
                        },
                        {
                            translateY: animValue.interpolate({
                                inputRange: [0, 0.3, 0.5,1],
                                outputRange: [fromY, fromY, 100 * (1 / scale), (toY - ballSize / 2 + 25 - 80) * (1 / scale)]
                            })
                        },
                        // {
                        //     rotateZ: animValue.interpolate({
                        //         inputRange: [0, 1],
                        //         outputRange: ['0deg', '180deg']
                        //     })
                        // },

                    ]
                }}
            >
                <Image
                    source={source}
                    style={[
                        {
                            borderRadius: ballSize,
                            width: ballSize,
                            height: ballSize,
                            zIndex: 9,
                        }
                    ]}
                />
            </Animated.View>
        );
    }
}

