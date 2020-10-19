import {
    CREATE_ACTIVITY,
    CREATE_ACTIVITY_ERROR_REQUEST,
    CREATE_ACTIVITY_FETCHING_REQUEST,
    CREATE_ACTIVITY_RESPONSE_REQUEST,
    CREATE_USER_ERROR_REQUEST,
    CREATE_USER_FETCHING_REQUEST,
    CREATE_USER_REQUEST,
    CREATE_USER_RESPONSE_REQUEST,
    EMAIL_REPORT,
    EMAIL_REPORT_ERROR_REQUEST,
    EMAIL_REPORT_FETCHING_REQUEST,
    EMAIL_REPORT_RESPONSE_REQUEST,
    PHASE_QUESTION_ANS,
    PHASE_QUESTION_ANS_ERROR_REQUEST,
    PHASE_QUESTION_ANS_FETCHING_REQUEST,
    PHASE_QUESTION_ANS_RESPONSE_REQUEST,
    PHASE_REQUEST,
    UPDATE_ACTIVITY,
    UPDATE_ACTIVITY_ERROR_REQUEST,
    UPDATE_ACTIVITY_FETCHING_REQUEST,
    UPDATE_ACTIVITY_RESPONSE_REQUEST,
} from "../../common/constants";

export const phaseRequest = (payload) => ({
    type: PHASE_REQUEST,
    payload: payload
});

export const phaseQuestionsAndAns = (payload) => ({
    type: PHASE_QUESTION_ANS,
    payload: payload
});

export const phaseQuestionsAndAnsRequestFetching = (payload) => ({
    type: PHASE_QUESTION_ANS_FETCHING_REQUEST,
    payload: payload
});
export const phaseQuestionsAndAnsRequestError = (payload) => ({
    type: PHASE_QUESTION_ANS_ERROR_REQUEST,
    payload: payload
});
export const phaseQuestionsAndAnsRequestResponse = (payload) => ({
    type: PHASE_QUESTION_ANS_RESPONSE_REQUEST,
    payload: payload
});

export const createActivityRequest = (payload) => ({
    type: CREATE_ACTIVITY,
    payload: payload
});

export const createActivityRequestFetching = (payload) => ({
    type: CREATE_ACTIVITY_FETCHING_REQUEST,
    payload: payload
});
export const createActivityRequestError = (payload) => ({
    type: CREATE_ACTIVITY_ERROR_REQUEST,
    payload: payload
});
export const createActivityRequestResponse = (payload) => ({
    type: CREATE_ACTIVITY_RESPONSE_REQUEST,
    payload: payload
});

export const updateActivityRequest = (payload) => ({
    type: UPDATE_ACTIVITY,
    payload: payload
});

export const updateActivityRequestFetching = (payload) => ({
    type: UPDATE_ACTIVITY_FETCHING_REQUEST,
    payload: payload
});
export const updateActivityRequestError = (payload) => ({
    type: UPDATE_ACTIVITY_ERROR_REQUEST,
    payload: payload
});
export const updateActivityRequestResponse = (payload) => ({
    type: UPDATE_ACTIVITY_RESPONSE_REQUEST,
    payload: payload
});

export const emailReportRequest = (payload) => ({
    type: EMAIL_REPORT,
    payload: payload
});

export const emailReportRequestFetching = (payload) => ({
    type: EMAIL_REPORT_FETCHING_REQUEST,
    payload: payload
});
export const emailReportRequestError = (payload) => ({
    type: EMAIL_REPORT_ERROR_REQUEST,
    payload: payload
});
export const emailReportRequestResponse = (payload) => ({
    type: EMAIL_REPORT_RESPONSE_REQUEST,
    payload: payload
});



