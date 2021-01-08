
import CacheReducer from './cacheReducer'
import userReducer from './userReducer'
import appReducer from './appReducer'
const rootReducer = {
    cacheStore: CacheReducer,
    userStore: userReducer,
    appStore: appReducer
};
export default rootReducer