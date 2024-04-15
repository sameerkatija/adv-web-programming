// Task 21 : Use of loop to display a string of all the names of months using JS functions and variables.

let months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

for (let num = 0; num < months.length; num++) {
  console.log("Month " + (Number(num) + 1) + " is " + months[num]);
}
