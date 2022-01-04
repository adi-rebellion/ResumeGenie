const { getApi } = require('./api.config')

const GenieBasic = (genie_basic) => {
    return getApi('GENIE', 'BASIC', genie_basic)
}

const GetGenieBasic = () => {
    return getApi('GENIE', 'GET_BASIC')
}
//////////////////////////////////Genie Work////////////////////

const GetAllWorkExp = () => {
    return getApi('GENIE', 'GET_ALL_WORK_EXP')
}

const GenieWork = (genie_work) => {
    return getApi('GENIE', 'WORK_EXP', genie_work)
}

const ToggleGenieWork = (genie_work_id,status) => {
    return getApi('GENIE', 'TOGGLE_WORK_EXP', genie_work_id,status)
}

const UpdateGenieWork = (genie_work_id) => {
    return getApi('GENIE', 'UPDATE_WORK_EXP', genie_work_id)
}

//////////////////////////////////Genie Work////////////////////

//////////////////////////////////Genie Education////////////////////

const GetAllEducation = () => {
    return getApi('GENIE', 'GET_ALL_EDUCATION')
}

const GenieEducation = (genie_education) => {
    return getApi('GENIE', 'EDUCATION', genie_education)
}

const ToggleGenieEducation = (genie_edu_id,status) => {
    return getApi('GENIE', 'TOGGLE_WORK_EDUCATION', genie_edu_id,status)
}

const UpdateGenieEducation = (genie_edu_id) => {
    return getApi('GENIE', 'UPDATE_EDUCATION', genie_edu_id)
}

//////////////////////////////////Genie Education////////////////////




//////////////////////////////////Genie Award////////////////////

const GetAllAward = () => {
    return getApi('GENIE', 'GET_ALL_AWARD')
}

const GenieAward = (genie_award) => {
    return getApi('GENIE','AWARD',genie_award)
}

const ToggleGenieAward = (genie_award_id,status) => {
    return getApi('GENIE', 'TOGGLE_AWARD', genie_award_id,status)
}

const UpdateGenieAward = (genie_award_id) => {
    return getApi('GENIE', 'UPDATE_AWARD', genie_award_id)
}

//////////////////////////////////Genie Award////////////////////


//////////////////////////////////Genie Project////////////////////
const GetAllProject = () => {
    return getApi('GENIE', 'GET_ALL_PROJECT')
}

const GenieProject = (genie_project) => {
    return getApi('GENIE','PROJECT',genie_project)
}

const ToggleGenieProject = (genie_project_id,status) => {
    return getApi('GENIE', 'TOGGLE_PROJECT', genie_project_id,status)
}

const UpdateGenieProject = (genie_project_id) => {
    return getApi('GENIE', 'UPDATE_PROJECT', genie_project_id)
}

//////////////////////////////////Genie Project////////////////////

//////////////////////////////////Genie Skill////////////////////

const GetAllSkill = () => {
    return getApi('GENIE', 'GET_ALL_SKILL')
}

const GenieSkill = (genie_skill) => {
    return getApi('GENIE','SKILL',genie_skill)
}

const ToggleGenieSkill = (genie_skill_id,status) => {
    return getApi('GENIE', 'TOGGLE_SKILL', genie_skill_id,status)
}

const UpdateGenieSkill = (genie_skill_id) => {
    return getApi('GENIE', 'UPDATE_SKILL', genie_skill_id)
}



//////////////////////////////////Genie Skill////////////////////

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
    GetAllContact,
    UpdateGenieWork,
    GetGenieBasic,
    ToggleGenieWork,
    ToggleGenieEducation,
    UpdateGenieEducation,
    ToggleGenieAward,
    UpdateGenieAward,
    ToggleGenieProject,
    UpdateGenieProject,
    ToggleGenieSkill,
    UpdateGenieSkill

    

}