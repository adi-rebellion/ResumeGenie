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

//////////////////////////////////Genie Reference////////////////////

const GetAllReference = () => {
    return getApi('GENIE', 'GET_ALL_REFERENCE')
}

const GenieReference = (genie_reference) => {
    return getApi('GENIE', 'REFERENCE', genie_reference)
}

const ToggleGenieReference = (genie_reference_id,status) => {
    return getApi('GENIE', 'TOGGLE_REFERENCE', genie_reference_id,status)
}

const UpdateGenieReference = (genie_reference_id) => {
    return getApi('GENIE', 'UPDATE_REFERENCE', genie_reference_id)
}

//////////////////////////////////Genie Reference////////////////////

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


const GetAllActiveCompo = () => {
    return getApi('GENIE', 'ALL_ACTIVE_COMPO')
}

const GetGenieSkillSelect = (key) => {
    return getApi('GENIE', 'GENIE_SKILL_SELECT',key)
}

const GetGenieConnect = () => {
    return getApi('GENIE', 'GENIE_CONNECT')
}

//////////////////////////////////Genie Socail////////////////////
const GetAllSocial = () => {
    return getApi('GENIE', 'GET_ALL_SOCIAL')
}

const GenieSocial = (genie_social) => {
    return getApi('GENIE','SOCIAL',genie_social)
}

const ToggleGenieSocial = (genie_social_id,status) => {
    return getApi('GENIE', 'TOGGLE_SOCIAL', genie_social_id,status)
}

const UpdateGenieSocial = (genie_social_id) => {
    return getApi('GENIE', 'UPDATE_SOCIAL', genie_social_id)
}

//////////////////////////////////Genie Socail////////////////////


//////////////////////////////////Genie Resume////////////////////

const GetAllResume = () => {
    return getApi('GENIE', 'GET_ALL_RESUME')
}

const GenieResume = (genie_resume) => {
    return getApi('GENIE','RESUME',genie_resume)
}

const ToggleGenieResume = (genie_resume_id,status) => {
    return getApi('GENIE', 'TOGGLE_RESUME', genie_resume_id,status)
}

const UpdateGenieResume = (genie_resume_id) => {
    return getApi('GENIE', 'UPDATE_RESUME', genie_skill_id)
}

const ToggleGenieComponent = (resume_id,status) => {
    return getApi('GENIE', 'TOGGLE_COMPONENT', resume_id,status)
}

//////////////////////////////////Genie Resume////////////////////

const GetGenieSpoken = () => {
    return getApi('GENIE', 'GENIE_SPOKEN')
}

//////////////////////////////////Genie Work////////////////////

const GetAllLanguage = () => {
    return getApi('GENIE', 'GET_ALL_LANGUAGE')
}

const GenieLanguage = (genie_language) => {
    return getApi('GENIE', 'LANGUAGE', genie_language)
}

const ToggleGenieLanguage = (genie_language_id,status) => {
    return getApi('GENIE', 'TOGGLE_LANGUAGE', genie_language_id,status)
}

const UpdateGenieLanguage = (genie_language_id) => {
    return getApi('GENIE', 'UPDATE_LANGUAGE',genie_language_id)
}

//////////////////////////////////Genie Work////////////////////



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
    GetAllLanguage,
    GenieLanguage,
    ToggleGenieLanguage,
    UpdateGenieLanguage,
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
    UpdateGenieSkill,
    GetAllActiveCompo,
    GetGenieSkillSelect,
    GetGenieConnect,
    GetAllSocial,
    GenieSocial,
    ToggleGenieSocial,
    UpdateGenieSocial,
    GenieResume,
    ToggleGenieResume,
    UpdateGenieResume,
    GetAllResume,
    ToggleGenieComponent,
    GetGenieSpoken,
    GetAllReference,
    GenieReference,
    ToggleGenieReference,
    UpdateGenieReference


    

}