const auth = require('./auth.apis')
const genie = require('./genie.apis')

module.exports = {
    ...auth,
    ...genie
}