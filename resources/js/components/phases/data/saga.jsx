import {put, takeEvery, all, call} from 'redux-saga/effects';
import {
    createActivityRequestError,
    createActivityRequestFetching,
    createActivityRequestResponse,
    emailReportRequestError,
    emailReportRequestFetching, emailReportRequestResponse,
    phaseQuestionsAndAnsRequestError,
    phaseQuestionsAndAnsRequestFetching,
    phaseQuestionsAndAnsRequestResponse,
    phaseRequest,
    updateActivityRequestError,
    updateActivityRequestFetching,
    updateActivityRequestResponse,
} from "./actions";
import {
    CREATE_ACTIVITY, EMAIL_REPORT,
    PHASE, PHASE_QUESTION_ANS, SERVER_ERROR_MSG, UPDATE_ACTIVITY,
} from "../../common/constants";
import {createActivity, emailReport, getQuestionAndAnsByPhaseId, updateActivity} from "../../common/repository";

function* updatePhase(action) {
    yield put(phaseRequest(action.payload));
}

function* phaseQuestionAndAns(action) {
    try {
        yield put(phaseQuestionsAndAnsRequestError(false));
        yield put(phaseQuestionsAndAnsRequestFetching(true));
        const response = yield call(getQuestionAndAnsByPhaseId, action.payload);
        yield put(phaseQuestionsAndAnsRequestResponse(response.data));
    }
    catch (error) {
        if (error.response) {
            yield put(phaseQuestionsAndAnsRequestError(error.response));
        } else {
            yield put(phaseQuestionsAndAnsRequestError({
                message: SERVER_ERROR_MSG
            }));
        }
    }
    finally {
        yield put(phaseQuestionsAndAnsRequestFetching(false));
    }
}

function* createActivityRequest(action) {
    try {
        yield put(createActivityRequestError(false));
        yield put(createActivityRequestFetching(true));
        const response = yield call(createActivity, action.payload);
        yield put(createActivityRequestResponse(response.data));
    }
    catch (error) {
        if (error.response) {
            yield put(createActivityRequestError(error.response));
        } else {
            yield put(createActivityRequestError({
                message: SERVER_ERROR_MSG
            }));
        }
    }
    finally {
        yield put(createActivityRequestFetching(false));
    }
}

function* updateActivityRequest(action) {
    try {
        yield put(updateActivityRequestError(false));
        yield put(updateActivityRequestFetching(true));
        const response = yield call(updateActivity, action.payload);
        yield put(updateActivityRequestResponse(response.data));
    }
    catch (error) {
        if (error.response) {
            yield put(updateActivityRequestError(error.response));
        } else {
            yield put(updateActivityRequestError({
                message: SERVER_ERROR_MSG
            }));
        }
    }
    finally {
        yield put(updateActivityRequestFetching(false));
    }
}

function* emailReportRequest(action) {
    try {
        yield put(emailReportRequestError(false));
        yield put(emailReportRequestFetching(true));
        const response = yield call(emailReport, action.payload);
        yield put(emailReportRequestResponse(response.data));
    }
    catch (error) {
        if (error.response) {
            yield put(emailReportRequestError(error.response));
        } else {
            yield put(emailReportRequestError({
                message: SERVER_ERROR_MSG
            }));
        }
    }
    finally {
        yield put(emailReportRequestFetching(false));
    }
}


function* actionWatcher() {
    yield all([
        takeEvery(PHASE, updatePhase),
        takeEvery(PHASE_QUESTION_ANS, phaseQuestionAndAns),
        takeEvery(CREATE_ACTIVITY, createActivityRequest),
        takeEvery(UPDATE_ACTIVITY, updateActivityRequest),
        takeEvery(EMAIL_REPORT, emailReportRequest),
    ])
}

export default function* phasesSaga() {
    yield all([
        actionWatcher(),
    ]);
}