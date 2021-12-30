const { getApi } = require('./api.config')

const GenieBasic = (genie_basic) => {
    return getApi('GENIE', 'BASIC', genie_basic)
}

const GenieWork = (genie_work) => {
    return getApi('GENIE', 'WORK_EXP', genie_work)
}

const GenieEducation = (genie_education) => {
    return getApi('GENIE', 'EDUCATION', genie_education)
}

const GetAllWorkExp = () => {
    return getApi('GENIE', 'GET_ALL_WORK_EXP')
}

const GetAllEducation = () => {
    return getApi('GENIE', 'GET_ALL_EDUCATION')
}

const GenieAward = (genie_award) => {
    return getApi('GENIE','AWARD',genie_award)
}

const GetAllAward = () => {
    return getApi('GENIE', 'GET_ALL_AWARD')
}

const GenieProject = (genie_project) => {
    return getApi('GENIE','PROJECT',genie_project)
}

const GetAllProject = () => {
    return getApi('GENIE', 'GET_ALL_PROJECT')
}

const GenieSkill = (genie_skill) => {
    return getApi('GENIE','SKILL',genie_skill)
}

const GetAllSkill = () => {
    return getApi('GENIE', 'GET_ALL_SKILL')
}

const GenieContact = (genie_contact) => {
    return getApi('GENIE','CONTACT',genie_contact)
}

const GetAllContact = () => {
    return getApi('GENIE', 'GET_ALL_CONTACT')
}

module.exports = {
    GenieBasic ,
    GenieWork,
    GetAllWorkExp,
    GenieEducation,
    GetAllEducation,
    GenieAward,
    GetAllAward,
    GenieProject,
    GetAllProject,
    GenieSkill,
    GetAllSkill,
    GenieContact,
    GetAllContact
    

}