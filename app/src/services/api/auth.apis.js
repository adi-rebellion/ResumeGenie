


const { getApi } = require('./api.config')

const login = (credentials) => {
    return getApi('AUTH', 'LOGIN', credentials)
}

const register = (details) => {
    return getApi('AUTH', 'REGISTER', details)
}

const getUser = () => {
    return getApi('AUTH', 'GET_USER')
}

const logout = () => {
    return getApi('AUTH', 'LOGOUT')
}



module.exports = {
    login,
    logout,
    getUser,
    register,
    
   
}