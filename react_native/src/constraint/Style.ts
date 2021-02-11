import { ViewStyle, ImageStyle, View } from 'react-native'
import Theme from './Theme'

export const contain: ViewStyle = {
    flex: 1,
    backgroundColor: Theme.fill_body
}
export const twoGoodsWrap: ViewStyle = {
    paddingHorizontal: 10,
    justifyContent: 'space-between'
}
export const row: ViewStyle = {
    flexDirection: 'row',
    alignItems: 'center'
}
export const rowCenter: ViewStyle = {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center'
}

export const rowEnd: ViewStyle = {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'flex-end'
}

export const rowBetween: ViewStyle = {
    flexDirection: "row",
    alignItems: "center",
    justifyContent: "space-between"
}

export const columnCenter: ViewStyle = {
    alignItems: 'center',
    justifyContent: 'center',
}

export const columnEnd: ViewStyle = {
    justifyContent: 'flex-end',
    alignItems: 'center'
}
export function getImageSize(size: number): ImageStyle {
    return {
        width: size,
        height: size
    }
}