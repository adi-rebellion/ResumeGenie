
const axios = require("axios").default;
const VUE_APP_API_URL_PREFIX = process.env.VUE_APP_API_URL

axios.defaults.withCredentials = true;

// Add a response interceptor
axios.interceptors.response.use(function (response) {
    // Do something with response data
    return response;
}, function (error) {
    // Do something with response error
    // console.log({
    //     apiError: error,
    // })
    // return Promise.resolve();
});

const apiConfig = {
    'AUTH': {
        'LOGIN': {
            "METHOD": "post",
            "URL": "/api/auth/login",
            validateParams() {
                return true
            }
        },
        'GET_USER': {
            "METHOD": "post",
            "URL": "/api/auth/user",
            validateParams() {
                return true
            }
        },
        'LOGOUT': {
            "METHOD": "post",
            "URL": "/api/auth/logout",
            validateParams() {
                return true
            }
        },
        'REGISTER': {
            "METHOD": "post",
            "URL": "/api/auth/register",
            validateParams() {
                return true
            }
        },
    },

    'GENIE': {
        'USER_DETAILS': {
            "METHOD": "get",
            "URL": "/api/get/user/details",
            validateParams() {
                return true
            }
        },
        'BASIC': {
            "METHOD": "post",
            "URL": "/api/insert/genie/basic",
            validateParams() {
                return true
            }
        },
        'GET_BASIC':
        {
            "METHOD": "get",
            "URL": "/api/get/genie/basic",
            validateParams() {
                return true
            }
        },
        'WORK_EXP': {
            "METHOD": "post",
            "URL": "/api/insert/genie/work",
            validateParams() {
                return true
            }
        },
        'UPDATE_WORK_EXP': {
            "METHOD": "post",
            "URL": "/api/update/genie/work",
            validateParams() {
                return true
            }
        },
        'TOGGLE_WORK_EXP':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/work",
            validateParams() {
                return true
            }
        },
        'GET_ALL_WORK_EXP':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/work",
            validateParams() {
                return true
            }
        },

        'LANGUAGE': {
            "METHOD": "post",
            "URL": "/api/insert/genie/language",
            validateParams() {
                return true
            }
        },
        'UPDATE_LANGUAGE': {
            "METHOD": "post",
            "URL": "/api/update/genie/language",
            validateParams() {
                return true
            }
        },
        'TOGGLE_LANGUAGE':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/language",
            validateParams() {
                return true
            }
        },
        'GET_ALL_LANGUAGE':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/language",
            validateParams() {
                return true
            }
        },
        'EDUCATION': {
            "METHOD": "post",
            "URL": "/api/insert/genie/education",
            validateParams() {
                return true
            }
        },
        'TOGGLE_WORK_EDUCATION':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/education",
            validateParams() {
                return true
            }
        },
        'UPDATE_EDUCATION': {
            "METHOD": "post",
            "URL": "/api/update/genie/education",
            validateParams() {
                return true
            }
        },
      
        'GET_ALL_EDUCATION':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/education",
            validateParams() {
                return true
            }
        },
        'GET_ALL_AWARD':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/award",
            validateParams() {
                return true
            }
        },
        'AWARD':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/award",
            validateParams() {
                return true
            }
        },
        'TOGGLE_AWARD':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/award",
            validateParams() {
                return true
            }
        },
        'UPDATE_AWARD': {
            "METHOD": "post",
            "URL": "/api/update/genie/award",
            validateParams() {
                return true
            }
        },
        'GET_ALL_PROJECT':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/project",
            validateParams() {
                return true
            }
        },
        'PROJECT':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/project",
            validateParams() {
                return true
            }
        },
        'TOGGLE_PROJECT':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/project",
            validateParams() {
                return true
            }
        },
        'UPDATE_PROJECT': {
            "METHOD": "post",
            "URL": "/api/update/genie/project",
            validateParams() {
                return true
            }
        },
        'GET_ALL_SKILL':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/skill",
            validateParams() {
                return true
            }
        },
        'SKILL':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/skill",
            validateParams() {
                return true
            }
        },
        'TOGGLE_SKILL':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/skill",
            validateParams() {
                return true
            }
        },
        'UPDATE_SKILL': {
            "METHOD": "post",
            "URL": "/api/update/genie/skill",
            validateParams() {
                return true
            }
        },
        'REFERENCE': {
            "METHOD": "post",
            "URL": "/api/insert/genie/reference",
            validateParams() {
                return true
            }
        },
        'UPDATE_REFERENCE': {
            "METHOD": "post",
            "URL": "/api/update/genie/reference",
            validateParams() {
                return true
            }
        },
        'TOGGLE_REFERENCE':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/reference",
            validateParams() {
                return true
            }
        },
        'GET_ALL_REFERENCE':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/reference",
            validateParams() {
                return true
            }
        },
        'VOLUNTEER': {
            "METHOD": "post",
            "URL": "/api/insert/genie/volunteer",
            validateParams() {
                return true
            }
        },
        'UPDATE_VOLUNTEER': {
            "METHOD": "post",
            "URL": "/api/update/genie/volunteer",
            validateParams() {
                return true
            }
        },
        'TOGGLE_VOLUNTEER':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/volunteer",
            validateParams() {
                return true
            }
        },
        'GET_ALL_VOLUNTEER':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/volunteer",
            validateParams() {
                return true
            }
        },
        'INTEREST': {
            "METHOD": "post",
            "URL": "/api/insert/genie/interest",
            validateParams() {
                return true
            }
        },
        'UPDATE_INTEREST': {
            "METHOD": "post",
            "URL": "/api/update/genie/interest",
            validateParams() {
                return true
            }
        },
        'TOGGLE_INTEREST':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/interest",
            validateParams() {
                return true
            }
        },
        'GET_ALL_INTEREST':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/interest",
            validateParams() {
                return true
            }
        },
        'GET_ALL_CONTACT':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/contact",
            validateParams() {
                return true
            }
        },
        'CONTACT':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/contact",
            validateParams() {
                return true
            }
        },
        'ALL_ACTIVE_COMPO' :
        {
            "METHOD": "post",
            "URL": "/api/get/all/genie/active",
            validateParams() {
                return true
            }
        },
        'GENIE_SKILL_SELECT' :
        {
            "METHOD": "post",
            "URL": "/api/get/all/genie/skill",
            validateParams() {
                return true
            }
        },
        'GENIE_CONNECT' :
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/connect",
            validateParams() {
                return true
            }
        },
        'GENIE_SPOKEN' :
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/spoken",
            validateParams() {
                return true
            }
        },
        // 'GET_ALL_SOCIAL':
        // {
        //     "METHOD": "get",
        //     "URL": "/api/get/all/genie/social",
        //     validateParams() {
        //         return true
        //     }
        // },
        'GET_ALL_SOCIAL':
        {
            "METHOD" : "get",
            "URL" : "/api/get/all/genie/social",
            validateParams()
            {
                return true
            }
        },
        'SOCIAL':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/social",
            validateParams() {
                return true
            }
        },
        'TOGGLE_SOCIAL':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/social",
            validateParams() {
                return true
            }
        },
        'UPDATE_SOCIAL': {
            "METHOD": "post",
            "URL": "/api/update/genie/social",
            validateParams() {
                return true
            }
        },
        'RESUME':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/resume",
            validateParams() {
                return true
            }
        },
        'TOGGLE_RESUME':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/resume",
            validateParams() {
                return true
            }
        },
        'UPDATE_RESUME': {
            "METHOD": "post",
            "URL": "/api/update/genie/resume",
            validateParams() {
                return true
            }
        },
        'GET_ALL_RESUME':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/resume",
            validateParams() {
                return true
            }
        },

        'TOGGLE_COMPONENT':
        {
            "METHOD": "post",
            "URL": "/api/toggle/genie/component",
            validateParams() {
                return true
            }
        },
        'GENERATE_RESUME': {
            "METHOD": "post",
            "URL": "/api/resume",
            validateParams() {
                return true
            }
        },
        'GET_ALL_THEMES':{
            "METHOD": "get",
            "URL": "/api/get/themes",
            validateParams() {
                return true
            }
        },
        'RENDER_RESUME':{
            "METHOD": "get",
            "URL": "/api/render/resume",
            validateParams() {
                return true
            }
        }
        


    }
}

module.exports = {
    getApi: (type, name, params = null) => {
        console.log({ VUE_APP_API_URL_PREFIX })
        console.log({
            type, name, params,
            z:apiConfig[type][name]
        })
        const { METHOD: apiMethod, URL: apiUrl } = apiConfig[type][name]

        console.log(params);
        return axios[apiMethod](VUE_APP_API_URL_PREFIX + apiUrl, params)
    }
}