import axios from 'axios';

export const ROOT_URL = 'http://54.195.144.162/api';
// export const ROOT_URL = 'http://127.0.0.1:8000/api';

export function createUser(data)
{
    let formData = new FormData();
    formData.append("child_name", data.what_s_your_child_s_name);
    formData.append("email", data.parent_email_address);
    formData.append("name", data.parent_full_name);

    return axios.post(`${ROOT_URL}/user`, formData );
}

export function getQuestionAndAnsByPhaseId(id)
{
    return axios.get(`${ROOT_URL}/phase/`+id );
}

export function createActivity(data)
{
    let formData = new FormData();
    formData.append("user_id", data.userId);
    formData.append("user_type_id", 1);
    formData.append("data", JSON.stringify(data.data));

    return axios.post(`${ROOT_URL}/activity`, formData );
}
export function updateActivity(data)
{
    let formData = new FormData();
    formData.append("user_id", 1);
    formData.append("user_type_id", data.userId);
    formData.append("data", JSON.stringify(data.data));

    return axios.post(`${ROOT_URL}/activity/update/`+data.activityId, formData );
}

export function emailReport(data)
{
    let formData = new FormData();
    formData.append("name", data.parent_full_name);
    formData.append("email", data.parent_email_address);
    formData.append("child_name", data.what_s_your_child_s_name);
    return axios.post(`${ROOT_URL}/activity/`+data.activityId+'/products', formData);
}

