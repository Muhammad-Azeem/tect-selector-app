import {combineReducers} from "redux";
import phasesReducer from "./phases/data/reducer";
import usersReducer from "./user/data/reducer";

const appReducer = combineReducers({
    phase: phasesReducer,
    user: usersReducer,
});

const rootReducer = (state, action) => {
    return appReducer(state, action);
};

export default rootReducer;