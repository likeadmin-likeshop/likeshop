const middleware = {}

middleware['auth'] = require('../middleware/auth.js')
middleware['auth'] = middleware['auth'].default || middleware['auth']

middleware['route'] = require('../middleware/route.js')
middleware['route'] = middleware['route'].default || middleware['route']

export default middleware
