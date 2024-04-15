// Task 20 : Use the switch statement to display “today is (whatever day
// it is)” according to the current day.

let currentTime = new Date();
let Day = currentTime.getDay();
let day;
switch (Day) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case 6:
    day = "Saturday";
    break;
}

console.log("The Current Day is " + day);
