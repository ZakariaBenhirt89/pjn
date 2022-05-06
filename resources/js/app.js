require('./bootstrap');

import Alpine from 'alpinejs';
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

FilePond.registerPlugin(FilePondPluginFileValidateType,FilePondPluginFileValidateSize);
const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content")
FilePond.setOptions({
    server: {
        process: {
            url: '/videos/store',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN':token ,
            },
            withCredentials: false,
            onload: (response) => {
                console.log(response)
                if(response.data.msg === "done"){
                    document.getElementById("saveBtn").removeAttribute("disabled")
                }
            },
            onerror: (response) => {
                console.log(response)
            },

        },
    },
});
FilePond.create(
    document.querySelector('.filepond'), {
        acceptedFileTypes: ['video/mp4'],
        fileValidateTypeDetectType: (source, type) =>
            new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            }),
    }
);
document.addEventListener('FilePond:loaded', (e) => {
    document.querySelector(".filepond--credits").innerText = ' Powred by AOBC'
});
