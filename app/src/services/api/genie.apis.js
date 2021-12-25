const { getApi } = require('./api.config')

const GenieBasic = (genie_basic) => {
    return getApi('GENIE', 'BASIC', genie_basic)
}

module.exports = {
    GenieBasic 
}