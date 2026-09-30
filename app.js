const start = document.getElementById("start");
const stop = document.getElementById("stop");
const timer = document.getElementById("timer");

const focus = document.getElementById("focus");
const shortbreak = document.getElementById("shortbreak");
const longbreak = document.getElementById("longbreak");

const selesaiSound = new Audio("Ripples-Beabadoobee.mp3");

const monthYear = document.getElementById("month-year");
const calenderDays = document.getElementById("calenderDays");
let date = new Date();

let timeLeft = 25 * 60;
let selectedTime = 25 * 60;
let interval = null;



const updateTimer = () => {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;

    timer.innerHTML = 
    `${minutes.toString().padStart(2,"0")}:${seconds.toString().padStart(2,"0")}`;
}

const changeTextToStop = () => {
    start.textContent = "Stop";
};

const changeTextToStar = () => {
    stop.textContent = "Start";
}

const changeTimerToFocus = () => {
    resetTimer(25);
}

const changeTimerToShortBreak = () => {
    timer.textContent = "05:00";
    resetTimer(5);
}

const changeTimerToLongBreak = () => {
    timer.textContent = "15:00";
    resetTimer(15);
}

const startTimer = () => {
    if (interval) return;

    interval = setInterval(() => {
        timeLeft--;
        updateTimer();

        if (timeLeft === 0) {
            clearInterval(interval);
            interval = null;

            selesaiSound.play();

            alert("Yeeeyy selesai!");
        }
    }, 1000);
};

const stopTimer = () => {
    clearInterval(interval)
    interval = null ; 
};

const resetTimer = (minutes) => {
    clearInterval(interval);
    interval = null;

    selectedTime = minutes * 60;
    timeLeft = selectedTime;

    updateTimer();
};



function renderCalendar(){
    const year = date.getFullYear();
    const month = date.getMonth();

    const firsDay = new Date(year, month, 1).getDay();
    const lastDay = new Date(year, month, 0).getDate();

    calenderDays.innerHTML = "";
    monthYear.innerHTML = `${date.toLocaleDateString("default", {    
        month: "long",
    })} ${year}` ; 

    for (let i = 0; i < firsDay; i++) {
        calenderDays.innerHTML += '<div class="empty"></div>'        
    }

    for (let d = 1; d < lastDay; d++) {
        const today = new Date();
        const isToday = d === today.getDate() && year === today.getFullYear() && month === today.getMonth();

        calenderDays.innerHTML += `<div class="${isToday ? "today" : ""}"> ${d}</div>`;  
    }
}

function prevMonth(){
    date.setMonth(date.getMonth() -1);
    renderCalendar();
}

function nextMonth(){
    date.setMonth(date.getMonth() +1);
    renderCalendar();
}


renderCalendar();

start.addEventListener("click", startTimer);
stop.addEventListener("click", stopTimer); 

focus.addEventListener("click", changeTimerToFocus);
shortbreak.addEventListener("click", changeTimerToShortBreak);
longbreak.addEventListener("click", changeTimerToLongBreak);