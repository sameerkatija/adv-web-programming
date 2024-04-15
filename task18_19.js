// Task 18: Display your name on the screen using JavaScript.
console.log("Sameer Katija");

// Task 19: Use If...else statement of JavaScript to write a code to Display “Good Morning” or “Good Afternoon” according to current Time.

let currentTime = new Date().getHours();

if (currentTime >= 5 && currentTime < 12) {
  console.log("Good Morning");
} else if (currentTime >= 12 && currentTime < 17) {
  console.log("Good AfterNoon");
} else if (currentTime >= 17 && currentTime < 19) {
  console.log("Good Evening");
} else {
  console.log("Good Night");
}
