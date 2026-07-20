

const SECOND = 1000;
const MINUTE = 60 * SECOND;
const HOUR = 60 * MINUTE;
const DAY = 24 * HOUR;
export function parseTimeData(time) {
    const days = Math.floor(time / DAY);
    const hours = sliceTwo(Math.floor((time % DAY) / HOUR));
    const minutes = sliceTwo(Math.floor((time % HOUR) / MINUTE));
    const seconds = sliceTwo(Math.floor((time % MINUTE) / SECOND));
    return {
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds,
    };
}

function sliceTwo(str) {
    return (0 + str.toString()).slice(-2)
}

export  function parseFormat(format, timeData) {
    let days = timeData.days;
    let hours = timeData.hours, minutes = timeData.minutes, seconds = timeData.seconds
    if (format.indexOf('dd') !== -1) {
        format = format.replace('dd', days);
    }
    if (format.indexOf('hh') !== -1) {
        format = format.replace('hh', sliceTwo(hours) );
    }
    if (format.indexOf('mm') !== -1) {
        format = format.replace('mm', sliceTwo(minutes));
    }
    if (format.indexOf('ss') !== -1) {
        format = format.replace('ss', sliceTwo(seconds));
    }
    return format
}