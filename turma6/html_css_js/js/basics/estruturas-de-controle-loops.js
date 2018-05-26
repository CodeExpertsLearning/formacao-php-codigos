// var fruits = [
//     'strawberry',
//     'orange',
//     'pineaple',
//     'grape'
// ];

// for(var i = 0; i < fruits.length; i++) {
//     console.log(fruits[i]);
// }
// console.log('---------');
// users = [
//     {'name': 'Nanderson', 'email': 'nandokstro@gmail'},
//     { 'name': 'Nanderson 2', 'email': 'nandokstro2@gmail' },
//     { 'name': 'Lazaro 24', 'email': 'lazaro24@gmail' }
// ];
// users.forEach(function(u){
//     if(u.name == 'Nanderson 2') {
//         console.log(u.name);
//     }
// });

// var users = users.filter(function(u){
//     return u.name == 'Nanderson 2';
// });
// console.log(users);

console.log('--------------');
var users = [
    {'name': 'Nanderson', 'email': 'nandokstro@gmail'},
    { 'name': 'Nanderson 2', 'email': 'nandokstro2@gmail' },
    { 'name': 'Lazaro 24', 'email': 'lazaro24@gmail' }
];

for(u of users) {
    console.log(u.name);
}
for(u in users) {
    console.log(users[u].name);
    console.log(users[u].email);
}
