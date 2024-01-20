    <!-- <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
    <nav>
        <div class="leftnav">
            <h1>Тренировочные задания по ЕГЭ<br>
                <span>ИНФОРМАТИКА</span><br>
                <p>Уфимский государственный университет</p></h1>
        </div>
        <div class="navright">
            <h1>Вы вошли на сайт как гость</h1>
            <button>Войти</button>
            <button>Зарегестрироваться</button>
        </div>
    </nav>
        <main>
            <section id="VARS-BG">
                    <div id="timer-content" >
                    Осталось времени<span id="seconds">60</span> минут
                    </div>
    
                <div id="container-main-task">
                    <h1 id = "bilet">Билет №1</h1>
                    <?php 
//     function random($min, $max) { 
//         return mt_rand($min, $max); 
//     } 

//     function get2SS($len) { 
//         $str=""; 
//         for($i=0;$i<$len;$i++) { 
//             if($i==0) $str.=1; 
//             else $str.=random(0,1); 
//         } 
//         return $str; 
//     } 
 
//     function imgSize($len1) { 
//         for ($i=1;$i<=2;$i++) { 
//             if($i==1) return $len1; 
//             else return $len1; 
//         } 
//     } 
 
//         $var1 = 0; 
//         $var2 = 0; 
//         $var3 = 0; 
//         $var4 = 0; 
//         $var5 = 0; 
//         $var6 = 0; 
 
 
//         $tasks = [ 
//             "Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать число.", 
//             "Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое 
//              изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?", 
//             "Напишите колличество вхождений символа $var5 в следующем тексте <pre> 
//             Я вас любил: любовь еще, быть может, 
//             В душе моей угасла не совсем; 
//             Но пусть она вас больше не тревожит; 
//             Я не хочу печалить вас ничем. 
//             Я вас любил безмолвно, безнадежно, 
//             То робостью, то ревностью томим; 
//             Я вас любил так искренно, так нежно, 
//             Как дай вам Бог любимой быть другим. 
//             </pre>. Записать число вхождений $var6" 
//         ]; 
 
//         $randomElementsArray = array('16', '128', '256'); 
 
//         function randColor($randomElementsArray){ 
//             return $randomElementsArray[array_rand($randomElementsArray)]; 
//         } 
 
//         $letters = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р',  
//             'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я']; 
 
 
//         function randLetter($letters) { 
//             return $letters[array_rand($letters)]; 
//         } 
 
//         $poems = [  
//             '<pre> 
//             Я вас любил: любовь еще, быть может,  
//             В душе моей угасла не совсем;  
//             Но пусть она вас больше не тревожит;  
//             Я не хочу печалить вас ничем.  
//             Я вас любил безмолвно, безнадежно,  
//             То робостью, то ревностью томим;  
//             Я вас любил так искренно, так нежно,  
//             Как дай вам Бог любимой быть другим.</pre>',   
              
//             '<pre> 
//             Сижу за решеткой в темнице сырой.  
//             Вскормленный в неволе орел молодой,  
//             Мой грустный товарищ, махая крылом,  
//             Кровавую пищу клюет под окном,  
//             Клюет, и бросает, и смотрит в окно,  
//             Как будто со мною задумал одно.  
//             Зовет меня взглядом и криком своим  
//             И вымолвить хочет: «Давай улетим!  
//             Мы вольные птицы; пора, брат, пора!  
//             Туда, где за тучей белеет гора,  
//             Туда, где синеют морские края,  
//             Туда, где гуляем лишь ветер… да я!..»</pre>',  
              
//             '<pre> 
//             Уж небо осенью дышало,  
//             Уж реже солнышко блистало,  
//             Короче становился день,  
//             Лесов таинственная сень  
//             С печальным шумом обнажалась,  
//             Ложился на поля туман,  
//             Гусей крикливых караван  
//             Тянулся к югу: приближалась  
//             Довольно скучная пора;  
//             Стоял ноябрь уж у двора.</pre>',  
              
//             '<pre> 
//             В тот год осенняя погода  
//             Стояла долго на дворе,
// Зимы ждала, ждала природа.  
//             Снег выпал только в январе  
//             На третье в ночь. Проснувшись рано,  
//             В окно увидела Татьяна  
//             Поутру побелевший двор,  
//             Куртины, кровли и забор,  
//             На стеклах легкие узоры,  
//             Деревья в зимнем серебре,  
//             Сорок веселых на дворе  
//             И мягко устланные горы  
//             Зимы блистательным ковром.  
//             Все ярко, все бело кругом.</pre>'];  
 
//     function randPoem($poems) { 
//         return $poems[array_rand($poems)]; 
//     }
//     $answer=[];
//         for($i=0;$i<4;$i++) { 
//             switch($_GET['task']) { 
//                 case 0: 
        
//                     $var1 = get2SS(random(2,5));
//                     $answer[$i]=base_convert($var1, 2, 10);
//                     echo "<p>Необходимо перевести значение <i id=quest$i>$var1</i> из 2СС в 10СС. В качестве ответа указать число.</p>"; 
//                     echo "<label>Ответ:</label><input type='number' id='answer$i'> <br>"; 
//                     echo "<p id= poleotvetov$i></p>";
//                     break; 
 
//                 case 1: 
//                     $var2 = imgSize(random(128,256)); 
//                     $var3 = imgSize(random(128,256)); 
                     
//                     $var4 = randColor($randomElementsArray); 
//                     echo "<p>Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?</p>"; 
//                     echo "<label>Ответ:</label><input type='number'> <input type='submit' >  <br>"; 
                         
//                     break; 
 
                 
//                 case 2:  
//                     $var5 = randletter ($letters);  
//                     $var6 = randPoem($poems);  
//                     echo "<p>Напишите колличество вхождений символа $var5 в следующем тексте <pre>  
//                     $var6  
//                     </pre> Записать число вхождений $var5</p>";  
//                     echo "<label>Ответ:</label><input type='number'> <input type='submit'>  <br>";  
           
//                     break; 
//             } 
//         } 
//      echo  "<input type='submit'onclick='example()'>"; 
    ?>
                </div>
            </section>

 

        </main>
    
    </body>
    </html>-->
    <!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Задачи</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<script src='main.js'></script>
</head>
<body>
<section id="Ege-bg">
<div id="EGE">
<div id="Title-EGE">
<h2>Тренировочные задания по ЕГЭ</h2>
<h1>Информатика</h1>
<p>Тольяттинский государственный университет</з>
</div>

<div id="YourSignHow">
<p>Вы вошли как гость</p>
<div id="but-content">
<button id="Sign">Войти</button>
<button id="Reg">Зарегистрироваться</button>
</div>
</div>
</div>
</section>

<main>
<section id="VARS-BG">
<div id="timer-content">
<div id="timers">  <section id="VARS-BG">
                    <div id="timer-content" >
                    Осталось времени<span id="seconds">60</span> минут
                    </div></h4>
<!— не получилось —>
</div>


<div id="date-and-time">
<?php
echo date("Y-m-d"); // Outputs the current date in the format: YYYY-MM-DD
?>
<?php
$timezone = new DateTimeZone('Europe/Moscow');
$time = new DateTime('now', $timezone);
$time->modify('+2 hours');
echo $time->format('H:i:s'); // Выводит текущее время с учетом сдвига на +2 часа от Московского времени
?>
</div>
</div>

<div id="container-main-task">
<h1 id = "bilet">Билет №1</h1>
<?php
$var1 = 0;
$var2 = 0;
$var3 = 0;
$var4 = 0;
$var5 = 0;
$var6 = 0;

$tasks = [

"Необходимо перевести значение $var1 из 2 сисемы счисления в 10 систему счисления. В качестве ответа указать число.",

"Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером $var2 × $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.",

"Напишите количество вхождений символа $var5 в следующем тексте. В ответ записать число вхождений. $var6"

];


function random($min, $max){
return mt_rand($min, $max);
}

function get2SS($len){
$str="";
for($i=0;$i<$len;$i++){
if($i==0) $str.=1;
else $str.=random(0,1);
}
return $str;
}


function get_answer($var1) {
$binaryDigits = str_split($var1);
$decimalNumber = 0;

for ($i = 0; $i < count($binaryDigits); $i++) {
$decimalNumber += intval($binaryDigits[$i]) * pow(2, count($binaryDigits) - 1 - $i);
}

return $decimalNumber;
}

for($i=0;$i<4;$i++){
switch($_GET['task']){
case 0;
$var1 = get2SS(random(2,5));
echo "<p>Необходимо перевести значение $var1 из 2 сисемы счисления в 10 систему счисления. В качестве ответа указать число.</p>";
echo "<input type='hidden' value='" . get_answer($var1) . "' id='ans$i'>";
echo "<label>Ответ:</label><input type='number' id='ans_user$i'>";
echo "<p id='val$i'></p><hr>";
break;
}
}


function getColor($tlen){
$str="";
$digits = array(128, 256, 16); // определенные цифры
for($i=0; $i < $tlen; $i++){
if($i == 0) {
$str .= $digits[array_rand($digits, 1)]; // первая цифра из определенных
} else {
$str .= $digits[array_rand($digits, 1)]; // случайная цифра из определенных
}
}
return $str;
}


function calculateMemorySize($var2, $var3, $var4) {
$bitsPerPixel = ceil(log($var4, 2)); // вычисляем количество бит на пиксель
$memorySize = $var2 * $var3 * $bitsPerPixel / 8 / 1024; // вычисляем объем памяти в Кбайтах
return ceil($memorySize); // округляем до ближайшего целого числа
}

$memorySize = calculateMemorySize($var2, $var3, $var4);



for($i=0; $i<4; $i++){
switch($_GET['task']){
case 1:
$var2 = getColor(rand(1, 1));
$var3 = getColor(rand(1, 1));
$var4 = getColor(rand(1, 1));
echo "<p>Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером $var2 × $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.</p>";
echo "<input type='hidden' value='" . calculateMemorySize($var2, $var3, $var4)
. "' id='ans$i'>";
echo "<label>Ответ:</label><input type='number' id='ans_user$i'>";
echo "<p id='val$i'></p><hr>";
break;
}
}


function getRandomText() {
$texts = array(
"<br>Я вас любил: любовь еще, быть может,
<br>В душе моей угасла не совсем;
<br>Но пусть она вас больше не тревожит;
<br>Я не хочу печалить вас ничем.
<br>Я вас любил безмолвно, безнадежно,
<br>То робостью, то ревностью томим;
<br>Я вас любил так искренно, так нежно,
<br>Как дай вам Бог любимой быть другим.<br>",

"<br>Сижу за решеткой в темнице сырой.
<br>Вскормленный в неволе орел молодой,
<br>Мой грустный товарищ, махая крылом,
<br>Кровавую пищу клюет под окном,
<br>Клюет, и бросает, и смотрит в окно,
<br>Как будто со мною задумал одно.
<br>Зовет меня взглядом и криком своим
<br>И вымолвить хочет: «Давай улетим!
<br>Мы вольные птицы; пора, брат, пора!
<br>Туда, где за тучей белеет гора,
<br>Туда, где синеют морские края,
<br>Туда, где гуляем лишь ветер… да я!..»<br>",

"<br>Уж небо осенью дышало,
<br>Уж реже солнышко блистало,
<br>Короче становился день,
<br>Лесов таинственная сень
<br>С печальным шумом обнажалась,
<br>Ложился на поля туман,
<br>Гусей крикливых караван
<br>Тянулся к югу: приближалась
<br>Довольно скучная пора;
<br>Стоял ноябрь уж у двора.<br>",

"<br>В тот год осенняя погода
<br>Стояла долго на дворе,
<br>Зимы ждала, ждала природа.
<br>Снег выпал только в январе
<br>На третье в ночь. Проснувшись рано,
<br>В окно увидела Татьяна
<br>Поутру побелевший двор,
<br>Куртины, кровли и забор,
<br>На стеклах легкие узоры,
<br>Деревья в зимнем серебре,
<br>Сорок веселых на дворе
<br>И мягко устланные горы
<br>Зимы блистательным ковром.
<br>Все ярко, все бело кругом.<br>"
);

$randomIndex = array_rand($texts); // Получаем случайный индекс из массива

return $texts[$randomIndex]; // Возвращаем случайный текст
}

function randomRussianLetter() {
$letters = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
$randomIndex = rand(0, mb_strlen($letters, 'utf-8') - 1);
return mb_substr($letters, $randomIndex, 1, 'utf-8');
}
for($i=0;$i<4;$i++){
switch($_GET['task']){
case 2:
$var5 = randomRussianLetter();
$var6 = getRandomText();
$count = mb_substr_count($var6, $var5, 'utf-8');
echo "<p>Напишите количество вхождений символа '$var5' в следующем тексте. В ответ записать число вхождений. <br> $var6</p>";
echo "<input type='hidden' value='" . mb_substr_count($var6, $var5, 'utf-8') . "' id='ans$i'>";
echo "<label>Ответ:</label><input type='number' id='ans_user$i'>";
echo "<p id='val$i'></p><hr>";
break;
}
}
?>
</div>
</section>


</main>

<div class="submit">
<label for="refreshButton">
<input type="button" id="refreshButton" onclick="location.reload()" value="Пример решения"></label>
<label onclick="click" for="redirectButton">
<input type="button" id="btn" onclick="click" value="Отправить"></label>
</div>


<script>
let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
for (let i = 0; i < 4; i++) {
let ans = document.getElementById(`ans${i}`).value;
let ans_user = document.getElementById(`ans_user${i}`).value;
let val = document.getElementById(`val${i}`);

val.innerText = `Правильный ответ: ${ans}`;
if (ans == ans_user)
val.style.color = "green";
else
val.style.color = "red";

// Заблокировать поле ввода после отправки ответа
document.getElementById(`ans_user${i}`).disabled = true;
}
});
</script>


</body>
</html>

<style>

body{
background-color: rgb(199, 197, 197);
}

.submit{
display: flex;
justify-content: center;
}

.submit input{
border-radius: 25px;
padding: 5px 15px;
background-color: black;;
color: white;
}
#EGE{
    display: flex;
    justify-content: space-around;

}
#timers{
width: 20%;
display: flex;
align-items: center;
justify-content: space-between;
}

#form-php input{
font-size: x-large;
margin: 0%;
}

#container-main-task{
display: flex;
flex-direction: column;
align-items: center;
width: 70%;
text-align: center;
}

#bilet{
margin: 0% auto;
}

#VARS-BG{
font-size: x-large;
}

#VARS-BG p{
margin: 0%;
}

#timer-content{
width: 90%;
display: flex;
align-items: center;
justify-content: space-between;
}

#date-and-time{
display: flex;
gap: 20px;
align-items: center;
}


</style>
   <style> 
    *{
    margin: 0;
    padding: 0;
}


body{
    background-image: url(фон.jpg);
    background-size: cover;
}

nav{
    display: flex;
    justify-content: space-between;
    padding: 2% 6%;
    background: rgb(117,111,100);
}

span{
    letter-spacing: 8px;
    font-size: 35px;
}

h1 p{
    font-size: 20px;
}

button{
    display: flex;
    flex-direction: column;
    margin-top: 2%;
    border-radius: 15px;
    width: 50%;
    height: 35px;
    align-items: center;
    justify-content: center;
    background-color: rgb(117, 111, 100);
    color: #fff;
    
}
.navright{
    display: flex;
    align-items: flex-end;
    flex-direction: column;
}
main{
    display: flex;
    background-color: #939393;
    flex-direction: column;
    justify-content: center;
    align-items: center;
 
}
   </style>