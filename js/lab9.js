const sports = ['Football', 'Basketball', 'Cricket'];
const lakes = new Array('Phewa', 'Rara', 'Begnas');
console.log(sports[0]);
for (name of sports) {
    console.log(name);
}


//Array  properties and function

const places = ['Kathmandu', 'Pokhara', 'Lalitpur', 'Bhaktpur', 'Dharan'];
console.log(places.pop())
console.log(places)


const students = ['Ram', 'Hari', 'Gita'];
console.log(students);
students.push("dev");
console.log(students);


//3. Length

const highway = ['Mahendra', 'Madan Bhandari', 'Araniko'];
console.log(highway.length);
console.log(highway.shift())
console.log(highway.splice(2,2,"Araniko"))