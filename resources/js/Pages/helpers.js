import dayjs from "dayjs";
import relativeTime from "dayjs/plugin/relativeTime";

dayjs.extend(relativeTime);
export function timeStamp(date) {
    var o = dayjs(date, "YYYY-MM-DD hh:mm:ss").format("DD/MM/YYYY h:mm a");
    if (o == "30/11/1899 12:00 am") {
        return "NULL";
    } else {
        return o;
    }
}
export function dateStamp(date) {
    var o = dayjs(date, "YYYY-MM-DD hh:mm:ss").format("DD MMMM YYYY");
    return o;
}
export function timeForHumans(date) {
    return dayjs(date, "YYYY-MM-DD hh:mm:ss").fromNow();
}

export function sanitizeString(value) {
    let str = value.replace(/[./-]/gim, "_");
    return str;
}
export function formatNumber(value) {
    if (typeof value !== "number") {
        return value;
    }
    var formatter = new Intl.NumberFormat("en-US", {
        minimumFractionDigits: 0,
    });
    return formatter.format(value);
}
