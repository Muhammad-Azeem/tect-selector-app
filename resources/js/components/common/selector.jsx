export const currentPhase = (state) => {
    return state.phase.currentPhase != null ? state.phase.currentPhase : null;
};

export const getUserResponse = (state) => {
    return state.user.createUserResponse != null ? state.user.createUserResponse : null;
};

export const getQuestionAnsResponse = (state) => {
    return state.phase.phaseQuestionsAndAnsResponse != null ? state.phase.phaseQuestionsAndAnsResponse : null;
};

export const getQuestionAnsFetching = (state) => {
    return state.phase.phaseQuestionsAndAnsFetching != null ? state.phase.phaseQuestionsAndAnsFetching : null;
};

export const createActivityResponse = (state) => {
    return state.phase.createActivityResponse != null ? state.phase.createActivityResponse : null;
};

export const createUserFetching = (state) => {
    return state.user.createUserFetching != null ? state.user.createUserFetching : null;
};

export const createUserResponse = (state) => {
    return state.user.createUserResponse != null ? state.user.createUserResponse : null;
};













