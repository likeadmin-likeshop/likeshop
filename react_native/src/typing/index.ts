
import { StackNavigationProp } from '@react-navigation/stack';
import { CompositeNavigationProp, RouteProp, } from '@react-navigation/native';
import { BottomTabNavigationProp } from '@react-navigation/bottom-tabs';
import { StateType, ActionType } from 'typesafe-actions';
import { RootStackParamList, BottomTabParamList } from './routeConfig';
export type RouteName =  keyof RootStackParamList
type ScreenRouteProp<T extends keyof RootStackParamList> = RouteProp<RootStackParamList, T>;
export type ScreenNavigationProp<T extends keyof RootStackParamList> = CompositeNavigationProp<BottomTabNavigationProp<BottomTabParamList>, StackNavigationProp<RootStackParamList, T>>;

export interface ScreenProps<T extends keyof RootStackParamList>  {
    route: ScreenRouteProp<T>;
    navigation: ScreenNavigationProp<T>;
}




export type RootState = StateType<typeof import('../store/reducers').default>;