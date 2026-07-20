import axios from "axios";


export function loadBMap(funcName, key) {
    // wFRqZ7Xer2f8ToGIkBGkpunplUq7cKc3
    const script = document.createElement("script");
    script.src = `https://api.map.baidu.com/api?v=2.0&ak=${key}&callback=${funcName}`;
    document.body.appendChild(script);
}