import {all} from "redux-saga/effects";
import phasesSaga from "./phases/data/saga";
import usersSaga from "./user/data/saga";

export default function* rootSaga() {
    yield all([
        phasesSaga(),
        usersSaga(),
    ]);
}