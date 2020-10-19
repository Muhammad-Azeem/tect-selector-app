import {
    CREATE_USER_ERROR_REQUEST,
    CREATE_USER_FETCHING_REQUEST,
    CREATE_USER_REQUEST,
    CREATE_USER_RESPONSE_REQUEST
} from "../../common/constants";

export const createUserRequest = (payload) => ({
    type: CREATE_USER_REQUEST,
    payload: payload
});

export const createUserRequestFetching = (payload) => ({
    type: CREATE_USER_FETCHING_REQUEST,
    payload: payload
});
export const createUserRequestError = (payload) => ({
    type: CREATE_USER_ERROR_REQUEST,
    payload: payload
});
export const createUserRequestResponse = (payload) => ({
    type: CREATE_USER_RESPONSE_REQUEST,
    payload: payload
});

