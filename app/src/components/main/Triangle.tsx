import React from 'react'
import { Surface, Shape, Path, Group } from '@react-native-community/art';
import Theme from '../../constraint/Theme';
import { View, ViewStyle } from 'react-native';
interface TriangleProps {
    direction?: 'up' | 'down'
    color?: string
    style?: ViewStyle
    width?: number
    height?: number
}

let path = null
export default function Triangle({ direction = 'down', color = Theme.color_text_secondary, style, width = 6, height = 3 }: TriangleProps) {
    if (direction == 'up') {
        path = new Path()
            .moveTo(width / 2, 0)
            .lineTo(0, height)
            .lineTo(width, height)
            .close();
    } else {
        path = new Path()
            .moveTo(0, 0)
            .lineTo(width, 0)
            .lineTo(width / 2, height)
            .close()
    }
    return (
        <View style={style}>
            <Surface width={width} height={height}>
                <Shape d={path} stroke={Theme.color_text_base} fill={color} strokeWidth={0} />
            </Surface>
        </View>
    )

}