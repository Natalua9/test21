 var seconds = 60;
  var intervalId=setInterval(function () {
   document.getElementById("seconds").innerHTML = --seconds;
  if (seconds<=0){
     clearInterval(intervalId);
  }
}, 100 );
 clearTimeout(seconds);
// function example() {
//   var area = document.getElementById("poleotvetov0");
//   var area = document.getElementById("poleotvetov1");
//   var area = document.getElementById("poleotvetov2");
//   var area = document.getElementById("poleotvetov3");
//   var answer0 = document.getElementById("answer0").value;
//   var answer1 = document.getElementById("answer1").value;
//   var answer2 = document.getElementById("answer2").value;
//   var answer3 = document.getElementById("answer3").value;

//   var quest0 = document.getElementById("quest0").textContent;
//   var quest1 = document.getElementById("quest1").textContent;
//   var quest2 = document.getElementById("quest2").textContent;
//   var quest3 = document.getElementById("quest3").textContent;
//   area.innerHTML = `<label> Ваш ответ: ${answer0} ${
//     convertToBinary1(answer0) == quest0 ? "верно" : "Неверно"
//   }  <label> 
//   <br>
//  <label> Ваш ответ: ${answer1}  ${
//      convertToBinary1(answer1) == quest1 ? "верно" : "Неверно"
//    }  <label>
//   <br>
//  <label> Ваш ответ: ${answer2} ${
//   convertToBinary1(answer2) == quest2 ? "верно" : "Неверно"} 
//    <label>
//   <br>
//  <label> Ваш ответ: ${answer3} ${
//   convertToBinary1(answer3) == quest3 ? "верно" : "Неверно"} 
//    <label>
//   <br>
//   `;
//   function convertToBinary1(number) {
//     let num = number;
//     let binary = (num % 2).toString(); //to strin() перевести в число
//     for (; num > 1; ) {
//       // бесконечный цикл
//       num = parseInt(num / 2);
//       binary = (num % 2) + binary;
//     }
//     return binary;
//   }
// }
