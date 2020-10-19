import {
    CREATE_USER_ERROR_REQUEST,
    CREATE_USER_FETCHING_REQUEST,
    CREATE_USER_RESPONSE_REQUEST
} from "../../common/constants";
import {combineReducers} from "redux";

const createUserFetching = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case CREATE_USER_FETCHING_REQUEST:
            return payload;
        default:
            return state;
    }
};

const createUserError = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case CREATE_USER_ERROR_REQUEST:
            return payload;
        default:
            return state;
    }
};

const createUserResponse = (state = null, action) => {
    const {type, payload} = action;
    switch (type) {
        case CREATE_USER_RESPONSE_REQUEST:
            return payload;
        default:
            return state;
    }
};

const usersReducer = combineReducers({
    createUserError: createUserError,
    createUserFetching: createUserFetching,
    createUserResponse: createUserResponse,
});

export default usersReducer;