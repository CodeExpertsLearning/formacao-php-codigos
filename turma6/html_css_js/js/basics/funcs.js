// function showTypeInLog(key){
//     console.log(typeof(key));
// }

var showTypeInLog = function(key) {
    console.log(typeof(key));
};

//Tipos Básicos JS
var name = 'Nanderson';
showTypeInLog(name);

var age = 19;
showTypeInLog(age);

var isMale = true;
showTypeInLog(isMale);

//Compostos
////Object
var user = {'name': 'Test', 'email': 19}; //JSON
showTypeInLog(user);

/////Array
var fruits = ['orange', 'apple', 'strawberry'];
showTypeInLog(fruits);

console.log(null);
console.log(undefined);