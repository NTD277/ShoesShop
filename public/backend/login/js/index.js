// var myName = ['Tung Trinh'];
// var myName2 = [
//     'Tung Trinh',
//     'Tuan Trinh',
//     'Hoa Nguyen',
//     'Linh Trinh'
// ];
// console.log(myName2.slice(1,2));

// console.log(myName2);
// function myConsolog() {
//     var myString = '';
//     for(var param of arguments){
//         myString += `${param} - `;
//     }
//     console.log(myString)
// }
// myConsolog('tung','hoa','tuan');
// function cong(a,b) {
//     return a+b;
// }
// var result = cong(3,4)
// console.log(result);
// var person = [
//     {
//         name:'tung',
//         age:21,
//         gender:'male'
//     },
//     {
//         name:'minh',
//         age:21,
//         gender:'male'
//     },
//     {
//         name:'chau',
//         age:21,
//         gender:'male'
//     },
//     {
//         name:'sy',
//         age:21,
//         gender:'male'
//     }
// ];
// var newPerson = person.map(function(input,index,originArray) {
//     var newAge = 0;
//     return {
//         name:input.name,
//         age:newAge= input.age + 5,
//         gender:`Phai : ${input.gender}`
//     }
// });
// console.log(newPerson)
// var deathArray = [1,2,3,[4,5],6,[7,8,9]];

// var flatArray = deathArray.reduce(function(flat,itemCurrent ){
//     return flat.concat(itemCurrent);
// },[])
// console.log(flatArray)(
// Array.prototype.map2= function(callback) {
//     var output=[], arrayLength = this.length;
//     for(var i = 0;i< arrayLength;i++){
//         var result= callback(this[i],i);
//         output.push(result);
        
//     }
//     return output;
// }
// var myDogs = [
//     'Lucky',
//     'Milu',
//     'GauGau'
// ]
// var myDog = myDogs.map2(function (dog,index) {
//     return `<h2>${dog}</h2>`
// });
// console.log(myDog.join(''))
// var callback = myDogs.map(function (dog) {
//     return `<h2>${dog}</h2>`
// });
// console.log(callback.join(''))
// Array.prototype.forEach2 = function(callback){
//     for(var index in this){
//        if(this.hasOwnProperty(index)){
//            callback(this[index],index,this)
//        }
//     }
// }
// var courses = [
//     'Javascript',
//     'PHP',
//     'Ruby'
// ];

// var output =courses.forEach2(function(course ,index ,array) {
//     console.log(course,index,array)
// });
// Array.prototype.filter2 = function (callback) {
//     var output =[];
//     for(var index in this){
//         if(this.hasOwnProperty(index))
//         {
//            var result = callback(this[index],index,this);
//            if(result){
//                 output.push(this[index]);
//            }
         
//         }
       
//     }
//     return output;
// };
// var myDog = [
//     {
//         name : 'Lucky',
//         age : 1
//     },
//     {
//         name : 'Moment',
//         age : 3
//     },
//     {
//         name : 'Lulu',
//         age : 2
//     }
// ];
// var filterMyDog = myDog.filter2(function(dog,index,array) {
//     return dog.age > 1;
// });
// console.log(filterMyDog)
// console.log(document.querySelector('div').style)
// Object.assign(document.querySelector('div').style,{

// })