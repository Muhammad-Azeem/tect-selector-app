import {
    CREATE_ACTIVITY_ERROR_REQUEST,
    CREATE_ACTIVITY_FETCHING_REQUEST,
    CREATE_ACTIVITY_RESPONSE_REQUEST,
    CREATE_USER_ERROR_REQUEST,
    CREATE_USER_FETCHING_REQUEST,
    CREATE_USER_RESPONSE_REQUEST,
    EMAIL_REPORT_ERROR_REQUEST,
    EMAIL_REPORT_FETCHING_REQUEST,
    EMAIL_REPORT_RESPONSE_REQUEST,
    PHASE_QUESTION_ANS_ERROR_REQUEST,
    PHASE_QUESTION_ANS_FETCHING_REQUEST,
    PHASE_QUESTION_ANS_RESPONSE_REQUEST,
    PHASE_REQUEST,
    UPDATE_ACTIVITY_ERROR_REQUEST,
    UPDATE_ACTIVITY_FETCHING_REQUEST,
    UPDATE_ACTIVITY_RESPONSE_REQUEST,
} from "../../common/constants";
import {combineReducers} from "redux";

const phase = (state = null, action) => {
    const {type, payload} = action;
    switch (type)
    {
        case PHASE_REQUEST:
            return payload;
        default:
            return state;
    }
};

const phaseQuestionsAndAnsFetching = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case PHASE_QUESTION_ANS_FETCHING_REQUEST:
            return payload;
        default:
            return state;
    }
};

const phaseQuestionsAndAnsError = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case PHASE_QUESTION_ANS_ERROR_REQUEST:
            return payload;
        default:
            return state;
    }
};

const phaseQuestionsAndAnsResponse = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case PHASE_QUESTION_ANS_RESPONSE_REQUEST:
            return payload;
        default:
            return state;
    }
};

const createActivityFetching = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case CREATE_ACTIVITY_FETCHING_REQUEST:
            return payload;
        default:
            return state;
    }
};

const createActivityError = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case CREATE_ACTIVITY_ERROR_REQUEST:
            return payload;
        default:
            return state;
    }
};

const createActivityResponse = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case CREATE_ACTIVITY_RESPONSE_REQUEST:
            return payload;
        default:
            return state;
    }
};


const updateActivityFetching = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case UPDATE_ACTIVITY_FETCHING_REQUEST:
            return payload;
        default:
            return state;
    }
};

const updateActivityError = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case UPDATE_ACTIVITY_ERROR_REQUEST:
            return payload;
        default:
            return state;
    }
};

const updateActivityResponse = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case UPDATE_ACTIVITY_RESPONSE_REQUEST:
            return payload;
        default:
            return state;
    }
};

const emailReportFetching = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case EMAIL_REPORT_FETCHING_REQUEST:
            return payload;
        default:
            return state;
    }
};

const emailReportError = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case EMAIL_REPORT_ERROR_REQUEST:
            return payload;
        default:
            return state;
    }
};

const emailReportResponse = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case EMAIL_REPORT_RESPONSE_REQUEST:
            return payload;
        default:
            return state;
    }
};




const phasesReducer = combineReducers({
    currentPhase: phase,
    createActivityFetching: createActivityFetching,
    updateActivityFetching: updateActivityFetching,
    emailReportFetching: emailReportFetching,
    phaseQuestionsAndAnsFetching: phaseQuestionsAndAnsFetching,
    createActivityResponse: createActivityResponse,
    updateActivityResponse: updateActivityResponse,
    emailReportResponse: emailReportResponse,
    phaseQuestionsAndAnsResponse: phaseQuestionsAndAnsResponse,
    phaseQuestionsAndAnsError: phaseQuestionsAndAnsError,
    createActivityError: createActivityError,
    updateActivityError: updateActivityError,
    emailReportError: emailReportError,
});

export default phasesReducer;