// // let name = "Sameer";
// // alert(name + " katija"');
// // var sch = "abab";

// // alert(sch);

// // alert(3 % 2);

// let number = Number(prompt("Enter a num: "));

// // if (number % 2 !== 0) {
// //   alert("Odd");
// // } else {
// //   alert("Even");
// // }

// let num = 1;
// while (num < 1000) {
//   console.log(num);
//   num = num + 2;
// }

// arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// for (let num = 0; num < arr.length; num++) {
//   if (arr[num] % 2 !== 0) {
//     console.log(arr[num]);
//   }
// }

//ls
// let num = 1001;

// do {
//   console.log(num);
//   num += 2;
// } while (num < 1000);

let arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
arr.push(11);
arr.pop();

arr.unshift(0);
arr.shift();

let person = { name: "Sameer", role: "student" };

person.role = "teacher";

person.favNum = 11;

console.log(person.hasOwnProperty("name"));

keys = Object.keys(person);

for (let i = 0; i < keys.length; i++) {
  console.log(keys[i] + " : " + person[keys[i]]);
}

function isOdd(num) {
  if (num % 2 !== 0) {
    console.log(num);
  }
}

for (let i = 0; i < arr.length; i++) {
  isOdd(arr[i]);
}
