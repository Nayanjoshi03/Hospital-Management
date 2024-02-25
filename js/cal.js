const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const daysInMonth = {
    0: 31,
    1: 28,
    2: 31,
    3: 30,
    4: 31,
    5: 30,
    6: 31,
    7: 31,
    8: 30,
    9: 31,
    10: 30,
    11: 31
}
let date = new Date();
let caldate = " ", i = 1;
let bool = false;
let dateset = false;
let timeset = false;


let currentmonths = document.getElementById("month");
currentmonths.innerHTML = monthNames[date.getMonth()];
cal(date.getFullYear(), date.getMonth());

function monthnumber(str) {
    const months = document.getElementById("month");
    let month = monthNames.indexOf(str);
    return month;
}

function monthinc() {
    const months = document.getElementById("month");
    let month = monthNames.indexOf(months.innerHTML);
    if (month == 11) {
        months.innerHTML = "January";
    }
    else {
        months.innerHTML = monthNames[month + 1];
    }
    cal(2024, month + 1);
}

function monthdec() {
    const months = document.getElementById("month");
    let month = monthNames.indexOf(months.innerHTML);
    if (month < 1) {
        months.innerHTML = "December";
    }
    else {
        months.innerHTML = monthNames[month - 1];
    }
    cal(2024, month - 1);
}

function cal(year, month) {
    let caldate = 1, i = 0;
    let bool = false;
    let sat = 6, sun = 0;

    let d = new Date(year, month, "01"); //this us use to get the first date of the month
    let firstDay = d.getDay(); //first day of the month
    const days = document.getElementById("cal");
    days.innerHTML = "";
    days.innerHTML = " <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>";

    let currentMonth = monthNames.indexOf(currentmonths.innerHTML);
    let numdays = daysInMonth[currentMonth];

    while (i <= 41) {
        if (i == firstDay && (caldate <= numdays)) {
            if (caldate < date.getDate() && (currentMonth == date.getMonth())) {
                if (i == sat) {
                    days.innerHTML += ("<button id='" + caldate + "' disabled type='button'>" + caldate + "</button>");
                    sat += 7;
                    sun = i + 1;
                    i++;
                    firstDay++;
                    caldate++;
                }
                else if (i == sun) {
                    days.innerHTML += ("<button id='" + caldate + "' disabled type='button'>" + caldate + "</button>");
                    sun += 7;
                    i++;
                    firstDay++;
                    caldate++;
                }
                else {
                    days.innerHTML += ("<button  type='button' id='" + caldate + "'disabled >" + caldate + "</button>");
                    i++;
                    firstDay++;
                    caldate++;
                }

            }
            else {
                if (i == sat) {
                    days.innerHTML += ("<button  type='button' id='" + caldate + "' disabled>" + caldate + "</button>");
                    sat += 7;
                    sun = i + 1;
                    i++;
                    firstDay++;
                    caldate++;
                }
                else if (i == sun) {
                    days.innerHTML += ("<button type='button' id='" + caldate + "' disabled >" + caldate + "</button>");
                    sun += 7;
                    i++;
                    firstDay++;
                    caldate++;
                }
                else {
                    days.innerHTML += ("<button type='button' id='" + caldate + "' onclick='selectDate(" + caldate + ")' >" + caldate + "</button>");
                    i++;
                    firstDay++;
                    caldate++;
                }
            }
        }

        else {
            days.innerHTML += "<button disabled></button>"
            i++
        }

    }
    backdisable();
    nextdisble();
}
function backdisable() {
    if (date.getMonth() == monthnumber(currentmonths.innerHTML)) {
        document.getElementById("back").setAttribute('disabled', 'true');
    }
    else {
        document.getElementById("back").removeAttribute('disabled');
    }
}
function nextdisble() {
    if (monthnumber(currentmonths.innerHTML) == date.getMonth() + 6) {
        document.getElementById("next").setAttribute('disabled', 'true');
    }
    else {
        document.getElementById("next").removeAttribute('disabled');
    }


}

// on click function of buttons 
function selectDate(n) {
    dateset = true;
    let element = document.getElementById("cal").children;
    for (let i = 7; i < element.length - 1; i++) {
        if (element[i].id == n) {
            element[i].style.backgroundColor = "#ff4e0094";
        }
        else {
            element[i].style.backgroundColor = "";
        }
    }
    let setdate = document.getElementById("appointment_date");
    let currentMonth = monthNames.indexOf(currentmonths.innerHTML);
    setdate.value = date.getFullYear() + "-0" + (currentMonth + 1) + "-0" + n + " "; //**************************************/
    //setdate.value = dd;
    let time = document.getElementById("time");
    let currentHours = date.getHours();
    // let currentminutes = (date.getMinutes() < 30) ? 0 : 30;
    time.removeAttribute("data-content");

    if (n == date.getDate() && (currentMonth == date.getMonth())) {
        // set the time to be selected time when user click today's date
        console.log("if block");
        time.innerHTML = "";
        switch (currentHours + 1) {
            case (9):
                time.innerHTML = `<button type="button" onclick="selectTime(0)" id="0">09:00  AM</button>`;
                time.innerHTML += `<button type="button" onclick="selectTime(1)" id="1">09:30  AM</button>`;
            case (10):
                time.innerHTML += `<button type="button" onclick="selectTime(2)" id="2">10:00  AM</button>`;
                time.innerHTML += `<button type="button" onclick="selectTime(3)" id="3">10:30  AM</button>`;
            case (11):
                time.innerHTML += `<button type="button" onclick="selectTime(4)" id="4">11:00  AM</button>`;
                time.innerHTML += `<button type="button" onclick="selectTime(5)" id="5">11:30  AM</button>`;
            case (12):
                time.innerHTML += `<button type="button" onclick="selectTime(6)" id="6">12:00  PM</button>`;
                time.innerHTML += `<button type="button" onclick="selectTime(7)" id="7">12:30  PM</button>`;
            case (13):
                time.innerHTML += `<button type="button" onclick="selectTime(8)" id="8">01:00  PM</button>`;
                time.innerHTML += `<button type="button" onclick="selectTime(9)" id="9">01:30  PM</button>`;
            default:
                time.setAttribute("data-content", "text");
                time.innerHTML = "Please Select Another date";
                break;
        }

    }
    else {
        time.innerHTML = ` <button type="button" onclick="selectTime(0)" id="0">09:00 AM</button>
        <button type="button" onclick="selectTime(1)" id="1">09:30 AM</button>
        <button type="button" onclick="selectTime(2)" id="2">10:00 AM</button>
        <button type="button" onclick="selectTime(3)" id="3">10:30 AM</button>
        <button type="button" onclick="selectTime(4)" id="4">11:00 AM</button>
        <button type="button" onclick="selectTime(5)" id="5">11:30 AM</button>
        <button type="button" onclick="selectTime(6)" id="6">12:00 PM</button>
        <button type="button" onclick="selectTime(7)" id="7">12:30 PM</button>
        <button type="button" onclick="selectTime(8)" id="8">01:00 PM</button>
        <button type="button" onclick="selectTime(9)" id="9">01:30 PM</button>`
    }


}
function selectTime(n) {
    timeset = true;
    let element = document.getElementById("time").children;
    let setdate = document.getElementById("appointment_date");
    switch (n) {
        case 0:
            setdate.value += "09:00:00";
            break;
        case 1:
            setdate.value += "09:30:00";
            break;
        case 2:
            setdate.value += "10:00:00";
            break;
        case 3:
            setdate.value += "10:30:00";
            break;
        case 4:
            setdate.value += "11:00:00";
            break;
        case 5:
            setdate.value += "11:30:00";
            break;
        case 6:
            setdate.value += "12:00:00";
            break;
        case 7:
            setdate.value += "12:30:00";
            break;
        case 8:
            setdate.value += "13:00:00";
            break;
        case 9:
            setdate.value += "13:30:00";
            break;

    }
    for (let i = 0; i <= element.length - 1; i++) {
        if (element[i].id == n) {
            element[i].style.backgroundColor = "#04755b";
            element[i].style.color = "white";
        }
        else {
            element[i].style.backgroundColor = "white";
            element[i].style.color = "#04755b";
        }
    }


}