import { getToken } from "./auth";
import { host, isSuccess } from "./request";

export function imageUpload(files: any) {

    return new Promise((resolve, reject) => {
        const data = new FormData()
        data.append('file', {
            uri: files.uri,
            type: 'multipart/form-data',
            name: files.uri.split('/').pop()
        });
        console.log(data)
        const fetchOptions = {
            method: 'POST',
            headers: {
                'Content-Type': 'multipart/form-data;charset=utf-8',
                'token': getToken()
            },
            body: data
        };
        fetch(host + '/api/file/formimage', fetchOptions)
            .then(response => response.json())
            .then((res) => {
                if (isSuccess(res)) {
                    resolve(res.data)
                }else {
                    reject(res.msg)
                }
            })
    })
}