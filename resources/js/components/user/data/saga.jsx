import {put, takeEvery, all, call} from 'redux-saga/effects';
import {
    createUserRequestError, createUserRequestFetching, createUserRequestResponse,
} from "./actions";
import {
    CREATE_USER_REQUEST,
    SERVER_ERROR_MSG,
} from "../../common/constants";
import {createUser} from "../../common/repository";


function* createUserRequest(action) {
    try {
        yield put(createUserRequestError(false));
        yield put(createUserRequestFetching(true));
        const response = yield call(createUser, action.payload);
        yield put(createUserRequestResponse(response.data));
    }
    catch (error) {
        if (error.response) {
            yield put(createUserRequestError(error.response));
        } else {
            yield put(createUserRequestError({
                message: SERVER_ERROR_MSG
            }));
        }
    }
    finally {
        yield put(createUserRequestFetching(false));
    }
}


function* actionWatcher() {
    yield all([
        takeEvery(CREATE_USER_REQUEST, createUserRequest),
    ])
}

export default function* usersSaga() {
    yield all([
        actionWatcher(),
    ]);
}