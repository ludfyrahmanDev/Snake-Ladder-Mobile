<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS Snake &amp; Ladders: a multiplayer game developed in HTML+CSS with no JS</title>
  <meta name="monetization" content="$ilp.uphold.com/WUdKN2pAgLAG" /><link rel="stylesheet" href="assets/css/game/style.css">

</head>
<body>
<!-- partial:index.partial.php -->
<!-- checkboxes to control states and variables-->
<input type="radio" name="players" id="players1" checked="checked" value="1"/>
<input type="radio" name="players" id="players2" value="2"/>
<input type="radio" name="players" id="players3" value="3"/>
<input type="radio" name="players" id="players4" value="4"/>
<input type="radio" name="turn" id="turn1" checked="checked" value="1"/>
<input type="radio" name="turn" id="turn2" value="2"/>
<input type="radio" name="turn" id="turn3" value="3"/>
<input type="radio" name="turn" id="turn4" value="4"/>
<input type="radio" name="colors" checked="checked" id="colors1"/>
<input type="radio" name="colors" id="colors2"/>
<input type="radio" name="colors" id="colors3"/>
<input type="radio" name="colors" id="colors4"/>
<input class="game-time" type="checkbox" id="game-time" name="game-time"/>
<input type="checkbox" name="show-info" id="show-info"/>
<input type="checkbox" name="play-fx" id="play-fx"/>
<input class="game-time" type="radio" id="show-instructions-1" name="show-instructions"/>
<input class="game-time" type="radio" id="show-instructions-2" name="show-instructions"/>
<input class="game-time" type="radio" id="show-instructions-3" name="show-instructions"/>
<input class="game-time" type="radio" id="show-instructions-4" name="show-instructions"/>
<input class="game-time" type="radio" id="show-instructions-5" name="show-instructions"/>
<!-- inputs and labels that control the piece position for player 1-->
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-0" checked="checked"/>
<label class="dice" for="cb-pl1-0"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-1"/>
<label class="dice" for="cb-pl1-1"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-2"/>
<label class="dice" for="cb-pl1-2"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-3"/>
<label class="dice" for="cb-pl1-3"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-4"/>
<label class="dice" for="cb-pl1-4"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-5"/>
<label class="dice" for="cb-pl1-5"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-6"/>
<label class="dice" for="cb-pl1-6"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-7"/>
<label class="dice" for="cb-pl1-7"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-8"/>
<label class="dice" for="cb-pl1-8"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-9"/>
<label class="dice" for="cb-pl1-9"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-10"/>
<label class="dice" for="cb-pl1-10"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-11"/>
<label class="dice" for="cb-pl1-11"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-12"/>
<label class="dice" for="cb-pl1-12"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-13"/>
<label class="dice" for="cb-pl1-13"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-14"/>
<label class="dice" for="cb-pl1-14"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-15"/>
<label class="dice" for="cb-pl1-15"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-16"/>
<label class="dice" for="cb-pl1-16"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-17"/>
<label class="dice" for="cb-pl1-17"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-18"/>
<label class="dice" for="cb-pl1-18"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-19"/>
<label class="dice" for="cb-pl1-19"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-20"/>
<label class="dice" for="cb-pl1-20"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-21"/>
<label class="dice" for="cb-pl1-21"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-22"/>
<label class="dice" for="cb-pl1-22"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-23"/>
<label class="dice" for="cb-pl1-23"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-24"/>
<label class="dice" for="cb-pl1-24"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-25"/>
<label class="dice" for="cb-pl1-25"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-26"/>
<label class="dice" for="cb-pl1-26"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-27"/>
<label class="dice" for="cb-pl1-27"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-28"/>
<label class="dice" for="cb-pl1-28"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-29"/>
<label class="dice" for="cb-pl1-29"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-30"/>
<label class="dice" for="cb-pl1-30"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-31"/>
<label class="dice" for="cb-pl1-31"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-32"/>
<label class="dice" for="cb-pl1-32"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-33"/>
<label class="dice" for="cb-pl1-33"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-34"/>
<label class="dice" for="cb-pl1-34"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-35"/>
<label class="dice" for="cb-pl1-35"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-36"/>
<label class="dice" for="cb-pl1-36"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-37"/>
<label class="dice" for="cb-pl1-37"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-38"/>
<label class="dice" for="cb-pl1-38"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-39"/>
<label class="dice" for="cb-pl1-39"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-40"/>
<label class="dice" for="cb-pl1-40"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-41"/>
<label class="dice" for="cb-pl1-41"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-42"/>
<label class="dice" for="cb-pl1-42"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-43"/>
<label class="dice" for="cb-pl1-43"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-44"/>
<label class="dice" for="cb-pl1-44"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-45"/>
<label class="dice" for="cb-pl1-45"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-46"/>
<label class="dice" for="cb-pl1-46"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-47"/>
<label class="dice" for="cb-pl1-47"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-48"/>
<label class="dice" for="cb-pl1-48"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-49"/>
<label class="dice" for="cb-pl1-49"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-50"/>
<label class="dice" for="cb-pl1-50"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-51"/>
<label class="dice" for="cb-pl1-51"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-52"/>
<label class="dice" for="cb-pl1-52"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-53"/>
<label class="dice" for="cb-pl1-53"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-54"/>
<label class="dice" for="cb-pl1-54"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-55"/>
<label class="dice" for="cb-pl1-55"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-56"/>
<label class="dice" for="cb-pl1-56"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-57"/>
<label class="dice" for="cb-pl1-57"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-58"/>
<label class="dice" for="cb-pl1-58"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-59"/>
<label class="dice" for="cb-pl1-59"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-60"/>
<label class="dice" for="cb-pl1-60"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-61"/>
<label class="dice" for="cb-pl1-61"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-62"/>
<label class="dice" for="cb-pl1-62"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-63"/>
<label class="dice" for="cb-pl1-63"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-64"/>
<label class="dice" for="cb-pl1-64"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-65"/>
<label class="dice" for="cb-pl1-65"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-66"/>
<label class="dice" for="cb-pl1-66"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-67"/>
<label class="dice" for="cb-pl1-67"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-68"/>
<label class="dice" for="cb-pl1-68"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-69"/>
<label class="dice" for="cb-pl1-69"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-70"/>
<label class="dice" for="cb-pl1-70"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-71"/>
<label class="dice" for="cb-pl1-71"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-72"/>
<label class="dice" for="cb-pl1-72"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-73"/>
<label class="dice" for="cb-pl1-73"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-74"/>
<label class="dice" for="cb-pl1-74"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-75"/>
<label class="dice" for="cb-pl1-75"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-76"/>
<label class="dice" for="cb-pl1-76"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-77"/>
<label class="dice" for="cb-pl1-77"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-78"/>
<label class="dice" for="cb-pl1-78"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-79"/>
<label class="dice" for="cb-pl1-79"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-80"/>
<label class="dice" for="cb-pl1-80"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-81"/>
<label class="dice" for="cb-pl1-81"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-82"/>
<label class="dice" for="cb-pl1-82"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-83"/>
<label class="dice" for="cb-pl1-83"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-84"/>
<label class="dice" for="cb-pl1-84"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-85"/>
<label class="dice" for="cb-pl1-85"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-86"/>
<label class="dice" for="cb-pl1-86"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-87"/>
<label class="dice" for="cb-pl1-87"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-88"/>
<label class="dice" for="cb-pl1-88"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-89"/>
<label class="dice" for="cb-pl1-89"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-90"/>
<label class="dice" for="cb-pl1-90"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-91"/>
<label class="dice" for="cb-pl1-91"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-92"/>
<label class="dice" for="cb-pl1-92"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-93"/>
<label class="dice" for="cb-pl1-93"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-94"/>
<label class="dice" for="cb-pl1-94"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-95"/>
<label class="dice" for="cb-pl1-95"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-96"/>
<label class="dice" for="cb-pl1-96"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-97"/>
<label class="dice" for="cb-pl1-97"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-98"/>
<label class="dice" for="cb-pl1-98"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-99"/>
<label class="dice" for="cb-pl1-99"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-100"/>
<label class="dice" for="cb-pl1-100"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-101"/>
<label class="dice" for="cb-pl1-101"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-102"/>
<label class="dice" for="cb-pl1-102"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-103"/>
<label class="dice" for="cb-pl1-103"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-104"/>
<label class="dice" for="cb-pl1-104"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-105"/>
<label class="dice" for="cb-pl1-105"></label>
<input class="cb" type="radio" name="cb-player1" id="cb-pl1-106"/>
<label class="dice" for="cb-pl1-106"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-0" checked="checked"/>
<label class="dice" for="cb-pl2-0"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-1"/>
<label class="dice" for="cb-pl2-1"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-2"/>
<label class="dice" for="cb-pl2-2"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-3"/>
<label class="dice" for="cb-pl2-3"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-4"/>
<label class="dice" for="cb-pl2-4"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-5"/>
<label class="dice" for="cb-pl2-5"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-6"/>
<label class="dice" for="cb-pl2-6"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-7"/>
<label class="dice" for="cb-pl2-7"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-8"/>
<label class="dice" for="cb-pl2-8"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-9"/>
<label class="dice" for="cb-pl2-9"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-10"/>
<label class="dice" for="cb-pl2-10"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-11"/>
<label class="dice" for="cb-pl2-11"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-12"/>
<label class="dice" for="cb-pl2-12"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-13"/>
<label class="dice" for="cb-pl2-13"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-14"/>
<label class="dice" for="cb-pl2-14"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-15"/>
<label class="dice" for="cb-pl2-15"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-16"/>
<label class="dice" for="cb-pl2-16"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-17"/>
<label class="dice" for="cb-pl2-17"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-18"/>
<label class="dice" for="cb-pl2-18"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-19"/>
<label class="dice" for="cb-pl2-19"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-20"/>
<label class="dice" for="cb-pl2-20"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-21"/>
<label class="dice" for="cb-pl2-21"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-22"/>
<label class="dice" for="cb-pl2-22"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-23"/>
<label class="dice" for="cb-pl2-23"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-24"/>
<label class="dice" for="cb-pl2-24"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-25"/>
<label class="dice" for="cb-pl2-25"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-26"/>
<label class="dice" for="cb-pl2-26"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-27"/>
<label class="dice" for="cb-pl2-27"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-28"/>
<label class="dice" for="cb-pl2-28"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-29"/>
<label class="dice" for="cb-pl2-29"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-30"/>
<label class="dice" for="cb-pl2-30"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-31"/>
<label class="dice" for="cb-pl2-31"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-32"/>
<label class="dice" for="cb-pl2-32"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-33"/>
<label class="dice" for="cb-pl2-33"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-34"/>
<label class="dice" for="cb-pl2-34"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-35"/>
<label class="dice" for="cb-pl2-35"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-36"/>
<label class="dice" for="cb-pl2-36"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-37"/>
<label class="dice" for="cb-pl2-37"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-38"/>
<label class="dice" for="cb-pl2-38"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-39"/>
<label class="dice" for="cb-pl2-39"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-40"/>
<label class="dice" for="cb-pl2-40"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-41"/>
<label class="dice" for="cb-pl2-41"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-42"/>
<label class="dice" for="cb-pl2-42"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-43"/>
<label class="dice" for="cb-pl2-43"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-44"/>
<label class="dice" for="cb-pl2-44"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-45"/>
<label class="dice" for="cb-pl2-45"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-46"/>
<label class="dice" for="cb-pl2-46"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-47"/>
<label class="dice" for="cb-pl2-47"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-48"/>
<label class="dice" for="cb-pl2-48"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-49"/>
<label class="dice" for="cb-pl2-49"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-50"/>
<label class="dice" for="cb-pl2-50"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-51"/>
<label class="dice" for="cb-pl2-51"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-52"/>
<label class="dice" for="cb-pl2-52"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-53"/>
<label class="dice" for="cb-pl2-53"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-54"/>
<label class="dice" for="cb-pl2-54"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-55"/>
<label class="dice" for="cb-pl2-55"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-56"/>
<label class="dice" for="cb-pl2-56"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-57"/>
<label class="dice" for="cb-pl2-57"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-58"/>
<label class="dice" for="cb-pl2-58"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-59"/>
<label class="dice" for="cb-pl2-59"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-60"/>
<label class="dice" for="cb-pl2-60"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-61"/>
<label class="dice" for="cb-pl2-61"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-62"/>
<label class="dice" for="cb-pl2-62"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-63"/>
<label class="dice" for="cb-pl2-63"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-64"/>
<label class="dice" for="cb-pl2-64"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-65"/>
<label class="dice" for="cb-pl2-65"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-66"/>
<label class="dice" for="cb-pl2-66"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-67"/>
<label class="dice" for="cb-pl2-67"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-68"/>
<label class="dice" for="cb-pl2-68"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-69"/>
<label class="dice" for="cb-pl2-69"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-70"/>
<label class="dice" for="cb-pl2-70"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-71"/>
<label class="dice" for="cb-pl2-71"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-72"/>
<label class="dice" for="cb-pl2-72"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-73"/>
<label class="dice" for="cb-pl2-73"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-74"/>
<label class="dice" for="cb-pl2-74"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-75"/>
<label class="dice" for="cb-pl2-75"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-76"/>
<label class="dice" for="cb-pl2-76"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-77"/>
<label class="dice" for="cb-pl2-77"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-78"/>
<label class="dice" for="cb-pl2-78"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-79"/>
<label class="dice" for="cb-pl2-79"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-80"/>
<label class="dice" for="cb-pl2-80"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-81"/>
<label class="dice" for="cb-pl2-81"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-82"/>
<label class="dice" for="cb-pl2-82"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-83"/>
<label class="dice" for="cb-pl2-83"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-84"/>
<label class="dice" for="cb-pl2-84"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-85"/>
<label class="dice" for="cb-pl2-85"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-86"/>
<label class="dice" for="cb-pl2-86"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-87"/>
<label class="dice" for="cb-pl2-87"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-88"/>
<label class="dice" for="cb-pl2-88"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-89"/>
<label class="dice" for="cb-pl2-89"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-90"/>
<label class="dice" for="cb-pl2-90"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-91"/>
<label class="dice" for="cb-pl2-91"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-92"/>
<label class="dice" for="cb-pl2-92"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-93"/>
<label class="dice" for="cb-pl2-93"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-94"/>
<label class="dice" for="cb-pl2-94"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-95"/>
<label class="dice" for="cb-pl2-95"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-96"/>
<label class="dice" for="cb-pl2-96"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-97"/>
<label class="dice" for="cb-pl2-97"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-98"/>
<label class="dice" for="cb-pl2-98"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-99"/>
<label class="dice" for="cb-pl2-99"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-100"/>
<label class="dice" for="cb-pl2-100"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-101"/>
<label class="dice" for="cb-pl2-101"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-102"/>
<label class="dice" for="cb-pl2-102"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-103"/>
<label class="dice" for="cb-pl2-103"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-104"/>
<label class="dice" for="cb-pl2-104"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-105"/>
<label class="dice" for="cb-pl2-105"></label>
<input class="cb" type="radio" name="cb-player2" id="cb-pl2-106"/>
<label class="dice" for="cb-pl2-106"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-0" checked="checked"/>
<label class="dice" for="cb-pl3-0"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-1"/>
<label class="dice" for="cb-pl3-1"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-2"/>
<label class="dice" for="cb-pl3-2"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-3"/>
<label class="dice" for="cb-pl3-3"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-4"/>
<label class="dice" for="cb-pl3-4"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-5"/>
<label class="dice" for="cb-pl3-5"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-6"/>
<label class="dice" for="cb-pl3-6"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-7"/>
<label class="dice" for="cb-pl3-7"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-8"/>
<label class="dice" for="cb-pl3-8"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-9"/>
<label class="dice" for="cb-pl3-9"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-10"/>
<label class="dice" for="cb-pl3-10"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-11"/>
<label class="dice" for="cb-pl3-11"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-12"/>
<label class="dice" for="cb-pl3-12"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-13"/>
<label class="dice" for="cb-pl3-13"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-14"/>
<label class="dice" for="cb-pl3-14"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-15"/>
<label class="dice" for="cb-pl3-15"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-16"/>
<label class="dice" for="cb-pl3-16"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-17"/>
<label class="dice" for="cb-pl3-17"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-18"/>
<label class="dice" for="cb-pl3-18"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-19"/>
<label class="dice" for="cb-pl3-19"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-20"/>
<label class="dice" for="cb-pl3-20"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-21"/>
<label class="dice" for="cb-pl3-21"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-22"/>
<label class="dice" for="cb-pl3-22"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-23"/>
<label class="dice" for="cb-pl3-23"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-24"/>
<label class="dice" for="cb-pl3-24"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-25"/>
<label class="dice" for="cb-pl3-25"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-26"/>
<label class="dice" for="cb-pl3-26"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-27"/>
<label class="dice" for="cb-pl3-27"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-28"/>
<label class="dice" for="cb-pl3-28"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-29"/>
<label class="dice" for="cb-pl3-29"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-30"/>
<label class="dice" for="cb-pl3-30"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-31"/>
<label class="dice" for="cb-pl3-31"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-32"/>
<label class="dice" for="cb-pl3-32"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-33"/>
<label class="dice" for="cb-pl3-33"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-34"/>
<label class="dice" for="cb-pl3-34"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-35"/>
<label class="dice" for="cb-pl3-35"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-36"/>
<label class="dice" for="cb-pl3-36"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-37"/>
<label class="dice" for="cb-pl3-37"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-38"/>
<label class="dice" for="cb-pl3-38"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-39"/>
<label class="dice" for="cb-pl3-39"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-40"/>
<label class="dice" for="cb-pl3-40"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-41"/>
<label class="dice" for="cb-pl3-41"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-42"/>
<label class="dice" for="cb-pl3-42"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-43"/>
<label class="dice" for="cb-pl3-43"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-44"/>
<label class="dice" for="cb-pl3-44"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-45"/>
<label class="dice" for="cb-pl3-45"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-46"/>
<label class="dice" for="cb-pl3-46"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-47"/>
<label class="dice" for="cb-pl3-47"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-48"/>
<label class="dice" for="cb-pl3-48"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-49"/>
<label class="dice" for="cb-pl3-49"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-50"/>
<label class="dice" for="cb-pl3-50"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-51"/>
<label class="dice" for="cb-pl3-51"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-52"/>
<label class="dice" for="cb-pl3-52"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-53"/>
<label class="dice" for="cb-pl3-53"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-54"/>
<label class="dice" for="cb-pl3-54"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-55"/>
<label class="dice" for="cb-pl3-55"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-56"/>
<label class="dice" for="cb-pl3-56"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-57"/>
<label class="dice" for="cb-pl3-57"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-58"/>
<label class="dice" for="cb-pl3-58"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-59"/>
<label class="dice" for="cb-pl3-59"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-60"/>
<label class="dice" for="cb-pl3-60"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-61"/>
<label class="dice" for="cb-pl3-61"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-62"/>
<label class="dice" for="cb-pl3-62"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-63"/>
<label class="dice" for="cb-pl3-63"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-64"/>
<label class="dice" for="cb-pl3-64"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-65"/>
<label class="dice" for="cb-pl3-65"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-66"/>
<label class="dice" for="cb-pl3-66"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-67"/>
<label class="dice" for="cb-pl3-67"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-68"/>
<label class="dice" for="cb-pl3-68"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-69"/>
<label class="dice" for="cb-pl3-69"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-70"/>
<label class="dice" for="cb-pl3-70"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-71"/>
<label class="dice" for="cb-pl3-71"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-72"/>
<label class="dice" for="cb-pl3-72"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-73"/>
<label class="dice" for="cb-pl3-73"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-74"/>
<label class="dice" for="cb-pl3-74"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-75"/>
<label class="dice" for="cb-pl3-75"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-76"/>
<label class="dice" for="cb-pl3-76"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-77"/>
<label class="dice" for="cb-pl3-77"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-78"/>
<label class="dice" for="cb-pl3-78"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-79"/>
<label class="dice" for="cb-pl3-79"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-80"/>
<label class="dice" for="cb-pl3-80"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-81"/>
<label class="dice" for="cb-pl3-81"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-82"/>
<label class="dice" for="cb-pl3-82"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-83"/>
<label class="dice" for="cb-pl3-83"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-84"/>
<label class="dice" for="cb-pl3-84"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-85"/>
<label class="dice" for="cb-pl3-85"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-86"/>
<label class="dice" for="cb-pl3-86"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-87"/>
<label class="dice" for="cb-pl3-87"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-88"/>
<label class="dice" for="cb-pl3-88"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-89"/>
<label class="dice" for="cb-pl3-89"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-90"/>
<label class="dice" for="cb-pl3-90"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-91"/>
<label class="dice" for="cb-pl3-91"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-92"/>
<label class="dice" for="cb-pl3-92"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-93"/>
<label class="dice" for="cb-pl3-93"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-94"/>
<label class="dice" for="cb-pl3-94"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-95"/>
<label class="dice" for="cb-pl3-95"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-96"/>
<label class="dice" for="cb-pl3-96"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-97"/>
<label class="dice" for="cb-pl3-97"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-98"/>
<label class="dice" for="cb-pl3-98"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-99"/>
<label class="dice" for="cb-pl3-99"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-100"/>
<label class="dice" for="cb-pl3-100"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-101"/>
<label class="dice" for="cb-pl3-101"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-102"/>
<label class="dice" for="cb-pl3-102"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-103"/>
<label class="dice" for="cb-pl3-103"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-104"/>
<label class="dice" for="cb-pl3-104"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-105"/>
<label class="dice" for="cb-pl3-105"></label>
<input class="cb" type="radio" name="cb-player3" id="cb-pl3-106"/>
<label class="dice" for="cb-pl3-106"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-0" checked="checked"/>
<label class="dice" for="cb-pl4-0"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-1"/>
<label class="dice" for="cb-pl4-1"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-2"/>
<label class="dice" for="cb-pl4-2"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-3"/>
<label class="dice" for="cb-pl4-3"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-4"/>
<label class="dice" for="cb-pl4-4"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-5"/>
<label class="dice" for="cb-pl4-5"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-6"/>
<label class="dice" for="cb-pl4-6"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-7"/>
<label class="dice" for="cb-pl4-7"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-8"/>
<label class="dice" for="cb-pl4-8"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-9"/>
<label class="dice" for="cb-pl4-9"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-10"/>
<label class="dice" for="cb-pl4-10"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-11"/>
<label class="dice" for="cb-pl4-11"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-12"/>
<label class="dice" for="cb-pl4-12"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-13"/>
<label class="dice" for="cb-pl4-13"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-14"/>
<label class="dice" for="cb-pl4-14"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-15"/>
<label class="dice" for="cb-pl4-15"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-16"/>
<label class="dice" for="cb-pl4-16"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-17"/>
<label class="dice" for="cb-pl4-17"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-18"/>
<label class="dice" for="cb-pl4-18"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-19"/>
<label class="dice" for="cb-pl4-19"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-20"/>
<label class="dice" for="cb-pl4-20"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-21"/>
<label class="dice" for="cb-pl4-21"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-22"/>
<label class="dice" for="cb-pl4-22"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-23"/>
<label class="dice" for="cb-pl4-23"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-24"/>
<label class="dice" for="cb-pl4-24"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-25"/>
<label class="dice" for="cb-pl4-25"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-26"/>
<label class="dice" for="cb-pl4-26"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-27"/>
<label class="dice" for="cb-pl4-27"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-28"/>
<label class="dice" for="cb-pl4-28"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-29"/>
<label class="dice" for="cb-pl4-29"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-30"/>
<label class="dice" for="cb-pl4-30"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-31"/>
<label class="dice" for="cb-pl4-31"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-32"/>
<label class="dice" for="cb-pl4-32"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-33"/>
<label class="dice" for="cb-pl4-33"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-34"/>
<label class="dice" for="cb-pl4-34"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-35"/>
<label class="dice" for="cb-pl4-35"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-36"/>
<label class="dice" for="cb-pl4-36"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-37"/>
<label class="dice" for="cb-pl4-37"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-38"/>
<label class="dice" for="cb-pl4-38"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-39"/>
<label class="dice" for="cb-pl4-39"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-40"/>
<label class="dice" for="cb-pl4-40"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-41"/>
<label class="dice" for="cb-pl4-41"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-42"/>
<label class="dice" for="cb-pl4-42"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-43"/>
<label class="dice" for="cb-pl4-43"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-44"/>
<label class="dice" for="cb-pl4-44"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-45"/>
<label class="dice" for="cb-pl4-45"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-46"/>
<label class="dice" for="cb-pl4-46"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-47"/>
<label class="dice" for="cb-pl4-47"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-48"/>
<label class="dice" for="cb-pl4-48"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-49"/>
<label class="dice" for="cb-pl4-49"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-50"/>
<label class="dice" for="cb-pl4-50"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-51"/>
<label class="dice" for="cb-pl4-51"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-52"/>
<label class="dice" for="cb-pl4-52"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-53"/>
<label class="dice" for="cb-pl4-53"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-54"/>
<label class="dice" for="cb-pl4-54"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-55"/>
<label class="dice" for="cb-pl4-55"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-56"/>
<label class="dice" for="cb-pl4-56"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-57"/>
<label class="dice" for="cb-pl4-57"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-58"/>
<label class="dice" for="cb-pl4-58"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-59"/>
<label class="dice" for="cb-pl4-59"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-60"/>
<label class="dice" for="cb-pl4-60"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-61"/>
<label class="dice" for="cb-pl4-61"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-62"/>
<label class="dice" for="cb-pl4-62"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-63"/>
<label class="dice" for="cb-pl4-63"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-64"/>
<label class="dice" for="cb-pl4-64"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-65"/>
<label class="dice" for="cb-pl4-65"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-66"/>
<label class="dice" for="cb-pl4-66"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-67"/>
<label class="dice" for="cb-pl4-67"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-68"/>
<label class="dice" for="cb-pl4-68"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-69"/>
<label class="dice" for="cb-pl4-69"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-70"/>
<label class="dice" for="cb-pl4-70"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-71"/>
<label class="dice" for="cb-pl4-71"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-72"/>
<label class="dice" for="cb-pl4-72"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-73"/>
<label class="dice" for="cb-pl4-73"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-74"/>
<label class="dice" for="cb-pl4-74"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-75"/>
<label class="dice" for="cb-pl4-75"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-76"/>
<label class="dice" for="cb-pl4-76"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-77"/>
<label class="dice" for="cb-pl4-77"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-78"/>
<label class="dice" for="cb-pl4-78"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-79"/>
<label class="dice" for="cb-pl4-79"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-80"/>
<label class="dice" for="cb-pl4-80"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-81"/>
<label class="dice" for="cb-pl4-81"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-82"/>
<label class="dice" for="cb-pl4-82"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-83"/>
<label class="dice" for="cb-pl4-83"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-84"/>
<label class="dice" for="cb-pl4-84"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-85"/>
<label class="dice" for="cb-pl4-85"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-86"/>
<label class="dice" for="cb-pl4-86"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-87"/>
<label class="dice" for="cb-pl4-87"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-88"/>
<label class="dice" for="cb-pl4-88"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-89"/>
<label class="dice" for="cb-pl4-89"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-90"/>
<label class="dice" for="cb-pl4-90"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-91"/>
<label class="dice" for="cb-pl4-91"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-92"/>
<label class="dice" for="cb-pl4-92"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-93"/>
<label class="dice" for="cb-pl4-93"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-94"/>
<label class="dice" for="cb-pl4-94"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-95"/>
<label class="dice" for="cb-pl4-95"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-96"/>
<label class="dice" for="cb-pl4-96"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-97"/>
<label class="dice" for="cb-pl4-97"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-98"/>
<label class="dice" for="cb-pl4-98"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-99"/>
<label class="dice" for="cb-pl4-99"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-100"/>
<label class="dice" for="cb-pl4-100"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-101"/>
<label class="dice" for="cb-pl4-101"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-102"/>
<label class="dice" for="cb-pl4-102"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-103"/>
<label class="dice" for="cb-pl4-103"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-104"/>
<label class="dice" for="cb-pl4-104"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-105"/>
<label class="dice" for="cb-pl4-105"></label>
<input class="cb" type="radio" name="cb-player4" id="cb-pl4-106"/>
<label class="dice" for="cb-pl4-106"></label>
<!-- game settings menu (# of players, colors) -->
<div class="scrim" id="options">
  <div class="box">
    <h1>Game Settings</h1>
    <div>
      <h2>Number of players</h2>
      <div class="flex option-players">
        <label for="players1">1</label>
        <label for="players2">2</label>
        <label for="players3">3</label>
        <label for="players4">4</label>
      </div>
      <h2>Piece colors</h2>
      <div class="option-colors">
        <label class="flex" for="colors1"><span></span><span></span><span></span><span></span><span></span></label>
        <label class="flex" for="colors2"><span></span><span></span><span></span><span></span><span></span></label>
        <label class="flex" for="colors3"><span></span><span></span><span></span><span></span><span></span></label>
        <label class="flex" for="colors4"><span></span><span></span><span></span><span></span><span></span></label>
      </div>
      <h2>Sound options</h2>
      <label id="activate-fx" for="play-fx">FX Sound</label>
      <div>
        <label class="option-start" for="show-instructions-1">START GAME</label>
      </div>
    </div>
  </div>
</div>
<!-- pop-up with information about the game and the author-->
<div class="scrim" id="info">
  <div class="box">
    <h1>About</h1>
    <div>
      <p>Si Gesit adalah aplikasi game ular tangga, Permainan ini dirancang untuk memperkenalkan konsep pentingnya asupan gizi yang seimbang atau pentingnya makanan sehat dengan cara yang mudah dipahami oleh anak-anak. Dalam permainan ini, pemain akan menggerakkan karakter melalui papan ular tangga yang menampilkan berbagai jenis rintangan yang harus dilalui. Setiap rintangan atau keputusan dalam permainan ini akan memberikan informasi tentang gizi seimbang. Aplikasi ini dapat terselengggara dengan bantuan dana hibah PNBP Politeknik Negeri Jember Tahun Anggaran 2024.</p>
      <p>
        <label id="close-button" for="show-info">Close</label>
      </p>
    </div>
  </div>
</div>
<!-- animated instructions section-->
<div id="instructions">
  <label id="go-to-game" for="game-time">SKIP INSTRUCTIONS &rsaquo;</label>
  <div id="step">
    <div> 
      <label for="show-instructions-2"></label>
      <label for="show-instructions-3"></label>
      <label for="show-instructions-4"></label>
      <label for="show-instructions-5"></label>
      <label for="game-time">PLAY &rsaquo;</label>
    </div>
  </div>
</div>
<!-- the game section: board, dice, snakes, ladders, and all that jazz...-->
<div id="game">
  <div class="tab" id="player-info"><span>Player</span></div>
  <!--label#dice.tab-->
  <div class="tab" id="action">
    <label id="turn-changer1" for="turn1"></label>
    <label id="turn-changer2" for="turn2"></label>
    <label id="turn-changer3" for="turn3"></label>
    <label id="turn-changer4" for="turn4"></label>
    <div class="fx-sound" id="fx-click-action">
      <embed src="https://studiokah.com/tests/click2.mp3"/>
    </div>
  </div>
  <label class="tab" id="more-info" for="show-info"></label>
  <div class="fx-sound" id="fx-click-more-info">
    <embed src="https://studiokah.com/tests/click2.mp3"/>
  </div>
  <!-- Board based on the one from codewars: https://www.codewars.com/kata/snakes-and-ladders-1 -->
  <div id="board">
    <div class="tile tile100" data-index="100"></div>
    <div class="tile tile99" data-index="99"></div>
    <div class="tile tile98" data-index="98"></div>
    <div class="tile tile97" data-index="97"></div>
    <div class="tile tile96" data-index="96"></div>
    <div class="tile tile95" data-index="95"></div>
    <div class="tile tile94" data-index="94"></div>
    <div class="tile tile93" data-index="93"></div>
    <div class="tile tile92" data-index="92"></div>
    <div class="tile tile91" data-index="91"></div>
    <div class="tile tile81" data-index="81"></div>
    <div class="tile tile82" data-index="82"></div>
    <div class="tile tile83" data-index="83"></div>
    <div class="tile tile84" data-index="84"></div>
    <div class="tile tile85" data-index="85"></div>
    <div class="tile tile86" data-index="86"></div>
    <div class="tile tile87" data-index="87"></div>
    <div class="tile tile88" data-index="88"></div>
    <div class="tile tile89" data-index="89"></div>
    <div class="tile tile90" data-index="90"></div>
    <div class="tile tile80" data-index="80"></div>
    <div class="tile tile79" data-index="79"></div>
    <div class="tile tile78" data-index="78"></div>
    <div class="tile tile77" data-index="77"></div>
    <div class="tile tile76" data-index="76"></div>
    <div class="tile tile75" data-index="75"></div>
    <div class="tile tile74" data-index="74"></div>
    <div class="tile tile73" data-index="73"></div>
    <div class="tile tile72" data-index="72"></div>
    <div class="tile tile71" data-index="71"></div>
    <div class="tile tile61" data-index="61"></div>
    <div class="tile tile62" data-index="62"></div>
    <div class="tile tile63" data-index="63"></div>
    <div class="tile tile64" data-index="64"></div>
    <div class="tile tile65" data-index="65"></div>
    <div class="tile tile66" data-index="66"></div>
    <div class="tile tile67" data-index="67"></div>
    <div class="tile tile68" data-index="68"></div>
    <div class="tile tile69" data-index="69"></div>
    <div class="tile tile70" data-index="70"></div>
    <div class="tile tile60" data-index="60"></div>
    <div class="tile tile59" data-index="59"></div>
    <div class="tile tile58" data-index="58"></div>
    <div class="tile tile57" data-index="57"></div>
    <div class="tile tile56" data-index="56"></div>
    <div class="tile tile55" data-index="55"></div>
    <div class="tile tile54" data-index="54"></div>
    <div class="tile tile53" data-index="53"></div>
    <div class="tile tile52" data-index="52"></div>
    <div class="tile tile51" data-index="51"></div>
    <div class="tile tile41" data-index="41"></div>
    <div class="tile tile42" data-index="42"></div>
    <div class="tile tile43" data-index="43"></div>
    <div class="tile tile44" data-index="44"></div>
    <div class="tile tile45" data-index="45"></div>
    <div class="tile tile46" data-index="46"></div>
    <div class="tile tile47" data-index="47"></div>
    <div class="tile tile48" data-index="48"></div>
    <div class="tile tile49" data-index="49"></div>
    <div class="tile tile50" data-index="50"></div>
    <div class="tile tile40" data-index="40"></div>
    <div class="tile tile39" data-index="39"></div>
    <div class="tile tile38" data-index="38"></div>
    <div class="tile tile37" data-index="37"></div>
    <div class="tile tile36" data-index="36"></div>
    <div class="tile tile35" data-index="35"></div>
    <div class="tile tile34" data-index="34"></div>
    <div class="tile tile33" data-index="33"></div>
    <div class="tile tile32" data-index="32"></div>
    <div class="tile tile31" data-index="31"></div>
    <div class="tile tile21" data-index="21"></div>
    <div class="tile tile22" data-index="22"></div>
    <div class="tile tile23" data-index="23"></div>
    <div class="tile tile24" data-index="24"></div>
    <div class="tile tile25" data-index="25"></div>
    <div class="tile tile26" data-index="26"></div>
    <div class="tile tile27" data-index="27"></div>
    <div class="tile tile28" data-index="28"></div>
    <div class="tile tile29" data-index="29"></div>
    <div class="tile tile30" data-index="30"></div>
    <div class="tile tile20" data-index="20"></div>
    <div class="tile tile19" data-index="19"></div>
    <div class="tile tile18" data-index="18"></div>
    <div class="tile tile17" data-index="17"></div>
    <div class="tile tile16" data-index="16"></div>
    <div class="tile tile15" data-index="15"></div>
    <div class="tile tile14" data-index="14"></div>
    <div class="tile tile13" data-index="13"></div>
    <div class="tile tile12" data-index="12"></div>
    <div class="tile tile11" data-index="11"></div>
    <div class="tile tile1" data-index="1"></div>
    <div class="tile tile2" data-index="2"></div>
    <div class="tile tile3" data-index="3"></div>
    <div class="tile tile4" data-index="4"></div>
    <div class="tile tile5" data-index="5"></div>
    <div class="tile tile6" data-index="6"></div>
    <div class="tile tile7" data-index="7"></div>
    <div class="tile tile8" data-index="8"></div>
    <div class="tile tile9" data-index="9"></div>
    <div class="tile tile10" data-index="10"></div>
    <svg id="snakeladders" viewBox="0 0 600 600" preserveAspectRatio="none">
      <g class="ladders-big">
        <path d="M89,574 140,392 M102,578 153,396 M388,581 385,508 M402,580 399,507 M449,552 554,395 M460,560 565,403 M320,516 333,444 M334,518 347,446 M24,436 74,329 M36,442 87,334 M430,458 210,99 M441,450 222,93 M264,393 214,339 M273,384 224,330 M563,284 391,203 M568,271 396,190 M570,149 559,31 M584,148 573,30 M142,158 155,40 M156,160 169,42 M397,101 379,30 M411,97 392,26"></path>
      </g>
      <g class="ladders-small">
        <path d="M91,568 104,573 M94,556 105,561 M97,544 108,549 M100,532 111,537 M103,520 114,525 M107,508 118,513 M111,496 122,501 M114,484 125,489 M117,472 128,477 M121,460 132,465 M124,448 135,453 M128,436 139,441 M131,424 142,429 M134,412 145,417 M138,400 149,405 M388,575 401,574 M388,563 401,562 M388,552 401,551 M388,541 401,540 M388,530 400,529 M388,518 400,517 M452,546 464,555 M459,536 470,544 M466,526 476,533 M473,516 482,522 M479,508 490,515 M485,498 496,506 M492,488 502,495 M498,479 509,486 M504,469 515,477 M512,459 522,467 M517,449 528,457 M523,440 534,448 M530,430 541,438 M536,421 548,429 M542,412 554,419 M549,402 560,409 M322,510 335,512 M324,498 337,500 M326,486 339,488 M328,475 341,477 M330,463 343,465 M332,452 345,454 M258,388 268,378 M250,379 260,369 M243,370 252,361 M235,362 245,352 M227,353 236,344 M219,345 229,335 M27,430 40,436 M32,419 45,425 M37,408 49,414 M42,398 54,404 M47,388 59,394 M51,377 64,383 M56,366 69,372 M61,356 75,362 M66,345 79,351 M71,335 84,341 M427,453 438,444 M420,443 432,434 M414,433 426,424 M408,423 420,414 M402,413 413,404 M395,402 407,393 M388,391 400,382 M381,379 393,370 M374,368 386,359 M367,356 378,347 M359,344 371,336 M352,332 364,324 M345,320 357,312 M338,308 350,300 M330,296 342,288 M323,284 335,276 M316,272 328,264 M308,260 320,252 M301,248 313,240 M294,236 305,228 M287,224 298,216 M280,212 291,205 M273,200 284,193 M267,188 277,181 M259,175 269,168 M251,163 261,156 M244,151 254,144 M236,139 246,132 M229,127 239,120 M222,115 232,108 M215,103 225,96 M143,152 157,154 M144,140 158,142 M145,128 159,130 M146,116 160,118 M147,104 161,106 M149,92 163,94 M150,80 164,82 M151,68 165,70 M153,56 167,58 M154,44 168,46 M396,95 409,91 M393,84 406,80 M390,73 403,69 M387,62 400,58 M384,51 397,47 M381,40 394,36 M570,143 583,142 M568,130 582,129 M566,117 580,116 M565,104 577,103 M564,91 576,90 M563,78 575,77 M562,65 574,64 M561,52 573,51 M560,38 572,37 M556,281 562,268 M546,276 552,263 M536,271 542,258 M526,266 532,254 M516,261 522,249 M506,255 512,244 M496,250 502,239 M486,245 492,235 M476,240 482,230 M466,236 472,225 M456,231 462,220 M446,226 451,216 M436,221 441,211 M425,218 431,206 M415,213 421,201 M405,208 411,196 M395,204 401,192"></path>
      </g>
      <path d="M20,42 28,42 28,35 32,35 32,42 40,42 40,32 45,32 30,20 15,32 20,32 Z M20,578 30,578 30,583 40,570 30,557 30,562 20, 562Z" fill="rgba(0,0,0,0.25)"></path>
      <path class="snake" d="M 90,226 C 98,257 69,322 128,332 187,342 181,381 120,382 59,383 53,425 54,433 56,450 87,467 87,481 87,495 76,506 76,512 84,505 95,496 96,480 97,464 60,447 64,425 68,403 99,392 134,391 169,390 219,344 131,322 94,313 100,279 101,256 102,233 101,229 100,225 105,223.62 106,214 96,210 86,205 65.75,211 83,223 85.88,225 88,226 90,226 Z" fill="#73880A"></path>
      <circle class="eye" cx="97" cy="212" r="5"></circle>
      <path class="snake" d="M 22,282 C 35,271 58,266 81,273 104,280 144,278 145,253 146,228 175,208 193,213 204,198 220,210 220,216 220,222 201,229 193,221 182,222 157,229 156,252 155,275 139,297 86,281 33,268 22,283 22,283 Z" fill="#D15600"></path>
      <circle class="eye" cx="203" cy="210" r="5"></circle>
      <path class="snake" d="M 453,271 C 433,285 396,289 400,261 405,233 394,223 369,223 343,224 319,167 376,161 379,168 401,168 402,156 403,143 376,143 375,152 300,162 333,233 366,233 402,233 388,258 389,266 390,281 414,309 453,272 Z" fill="#6BBA70"></path>
      <circle class="eye" cx="387" cy="148" r="5"></circle>
      <path class="snake" d="M 457,199 C 429,161 465,134 489,158 512,182 542,159 540,129 538,99 523,98 522,98 528,91 505,75 495,97 503,113 518,105 519,105 519,105 530,110 531,130 532,150 513,169 492,149 471,129 445,143 443,159 442,174 449,194 457,200 Z" fill="#C79810"></path>
      <circle class="eye" cx="512" cy="90" r="5"></circle>
      <path class="snake" d="M 441,95 C 457,93 479,72 445,52 415,33 434,16 451,16 468,16 489,39 492,40 495,28 521,33 521,43 521,54 496,54 490,48 490,48 466,23 450,25 434,27 439,43 459,51 479,61 473,101 441,96 Z" fill="#356AA0"></path>
      <circle class="eye" cx="504" cy="35" r="5"></circle>
      <path class="snake" d="M 278,457 C 291,438 262,428 247,444 230,464 193,450 231,420 256,400 300,425 335,395 349,381 334,338 334,338 334,338 348,325 325,324 301,322 306,341 326,340 334,358 346,401 285,401 231,401 205,416 205,446 206,472 244,462 250,452 258,441 281,435 278,458 Z" fill="#3F4C6B"></path>
      <circle class="eye" cx="327" cy="325" r="5"></circle>
      <path class="snake" d="M 343,584 C 352,567 344,553 320,553 296,553 286,562 279,568 272,573 238,592 238,558 237,524 253,517 253,517 253,517 270,517 270,509 270,498 238,501 247,514 227,537 230,556 230,561 229,567 239,605 281,575 324,544 349,562 343,585 Z" fill="#008C00"></path>
      <circle class="eye" cx="257" cy="503" r="5"></circle>
      <path class="snake" d="M 572,506 C 555,514 511,516 518,456 526,396 518,380 490,388 457,397 436,346 492,335 507,341 518,334 518,326 518,317 494,313 489,326 422,337 448,410 489,398 525,384 510,449 510,456 510,462 502,547 572,508 Z" fill="#D01F3C"></path>
      <circle class="eye" cx="503" cy="320" r="5"></circle>
      <path class="snake" d="M 19,138 C 45,154 84,152 63,119 43,87 59,85 79,84 99,83 103,77 94,40 85,46 73,39 72,32 72,25 109,13 102,35 117,69 108,100 79,94 52,88 70,114 73,118 82,127 83,190 18,138 Z" fill="#2096cE"></path>
      <circle class="eye" cx="89" cy="27" r="5"></circle>
      <path class="snake" d="M 322,152 C 302,168 282,153 285,137 287,120 287,121 275,110 263,99 295,79 291,62 287,45 297,30 318,38 324,51 346,48 346,39 347,30 327,20 320,31 295,18 274,33 280,57 286,82 252,86 262,111 265,118 280,122 275,137 271,148 291,185 322,154 Z" fill="#CC4444"></path>
      <circle class="eye" cx="330" cy="30" r="5"></circle>
    </svg>
    <svg class="piece" id="piece-player-1" viewBox="0 0 100 100">
      <g>
        <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
        <circle cx="50" cy="21" r="20"></circle>
        <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
      </g>
    </svg>
    <svg class="piece" id="piece-player-2" viewBox="0 0 100 100">
      <g>
        <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
        <circle cx="50" cy="21" r="20"></circle>
        <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
      </g>
    </svg>
    <svg class="piece" id="piece-player-3" viewBox="0 0 100 100">
      <g>
        <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
        <circle cx="50" cy="21" r="20"></circle>
        <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
      </g>
    </svg>
    <svg class="piece" id="piece-player-4" viewBox="0 0 100 100">
      <g>
        <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
        <circle cx="50" cy="21" r="20"></circle>
        <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
      </g>
    </svg>
  </div>
</div>
<div class="scrim" id="snake-popup"> 
  <div class="box">
    <h1>Snake!!!</h1>
    <div>Oh tidak! Ular itu menggigitmu! Kau harus memindahkan bidakmu ke ekor ular itu.
      Mengapa kita harus sarapan setiap pagi?
      <li>a. Supaya tidur lebih lama</li>
      <li>b. Supaya punya energi untuk belajar dan bermain</li>
      <li>c. Supaya bisa menonton TV</li>
      <li>d. Supaya tidak minum air</li>
        <input type="text">
        <label id="snake-pl1-16" for="cb-pl1-6">Move Down</label>
        <label id="snake-pl1-46" for="cb-pl1-25">Move Down</label>
        <label id="snake-pl1-49" for="cb-pl1-11">Move Down</label>
        <label id="snake-pl1-62" for="cb-pl1-19">Move Down</label>
        <label id="snake-pl1-64" for="cb-pl1-60">Move Down</label>
        <label id="snake-pl1-74" for="cb-pl1-53">Move Down</label>
        <label id="snake-pl1-89" for="cb-pl1-68">Move Down</label>
        <label id="snake-pl1-92" for="cb-pl1-88">Move Down</label>
        <label id="snake-pl1-95" for="cb-pl1-75">Move Down</label>
        <label id="snake-pl1-99" for="cb-pl1-80">Move Down</label>
        <label id="snake-pl2-16" for="cb-pl2-6">Move Down</label>
        <label id="snake-pl2-46" for="cb-pl2-25">Move Down</label>
        <label id="snake-pl2-49" for="cb-pl2-11">Move Down</label>
        <label id="snake-pl2-62" for="cb-pl2-19">Move Down</label>
        <label id="snake-pl2-64" for="cb-pl2-60">Move Down</label>
        <label id="snake-pl2-74" for="cb-pl2-53">Move Down</label>
        <label id="snake-pl2-89" for="cb-pl2-68">Move Down</label>
        <label id="snake-pl2-92" for="cb-pl2-88">Move Down</label>
        <label id="snake-pl2-95" for="cb-pl2-75">Move Down</label>
        <label id="snake-pl2-99" for="cb-pl2-80">Move Down</label>
        <label id="snake-pl3-16" for="cb-pl3-6">Move Down</label>
        <label id="snake-pl3-46" for="cb-pl3-25">Move Down</label>
        <label id="snake-pl3-49" for="cb-pl3-11">Move Down</label>
        <label id="snake-pl3-62" for="cb-pl3-19">Move Down</label>
        <label id="snake-pl3-64" for="cb-pl3-60">Move Down</label>
        <label id="snake-pl3-74" for="cb-pl3-53">Move Down</label>
        <label id="snake-pl3-89" for="cb-pl3-68">Move Down</label>
        <label id="snake-pl3-92" for="cb-pl3-88">Move Down</label>
        <label id="snake-pl3-95" for="cb-pl3-75">Move Down</label>
        <label id="snake-pl3-99" for="cb-pl3-80">Move Down</label>
        <label id="snake-pl4-16" for="cb-pl4-6">Move Down</label>
        <label id="snake-pl4-46" for="cb-pl4-25">Move Down</label>
        <label id="snake-pl4-49" for="cb-pl4-11">Move Down</label>
        <label id="snake-pl4-62" for="cb-pl4-19">Move Down</label>
        <label id="snake-pl4-64" for="cb-pl4-60">Move Down</label>
        <label id="snake-pl4-74" for="cb-pl4-53">Move Down</label>
        <label id="snake-pl4-89" for="cb-pl4-68">Move Down</label>
        <label id="snake-pl4-92" for="cb-pl4-88">Move Down</label>
        <label id="snake-pl4-95" for="cb-pl4-75">Move Down</label>
        <label id="snake-pl4-99" for="cb-pl4-80">Move Down</label>
      </div>
    </div>
    <svg viewBox="0 0 100 100">
      <path d="M1,32 4,32 M6,34 4,32 M4,32 10,20" stroke="black" stroke-with="1"></path>
      <path d="M 30,70 C 49,56 60,84 33,92 -17,103 0,50 24,45 32,44 37,41 29,27 26,33 5,35 3,24 4,13 26,3 37,16 49,30 49,52 28,55 8,59 0,94 33,82 56,72 35,66 30,71 Z" fill="#73B80A" stroke-width="0"></path>
      <circle cx="18" cy="15" r="5" fill="black" stroke="white" stroke-width="6"></circle>
    </svg>
  </div>
</div>
<div class="scrim" id="ladder-popup">
  <div class="box">
    <h1>Ladder!</h1>
    <div>1.Apa yang harus kita lakukan sebelum makan?
      <ul>
        <li>a. Minum obat</li>
        <li> b. Mencuci tangan dengan sabun</li>
        <li>c. Menonton televisi</li>
        <li>d. Bermain.</li>
      </ul>
      <input type="text">
      <div>
        <label id="ladder-pl1-2" for="cb-pl1-38">Move Up</label>
        <label id="ladder-pl1-7" for="cb-pl1-14">Move Up</label>
        <label id="ladder-pl1-8" for="cb-pl1-31">Move Up</label>
        <label id="ladder-pl1-15" for="cb-pl1-26">Move Up</label>
        <label id="ladder-pl1-21" for="cb-pl1-42">Move Up</label>
        <label id="ladder-pl1-28" for="cb-pl1-84">Move Up</label>
        <label id="ladder-pl1-36" for="cb-pl1-44">Move Up</label>
        <label id="ladder-pl1-51" for="cb-pl1-67">Move Up</label>
        <label id="ladder-pl1-71" for="cb-pl1-91">Move Up</label>
        <label id="ladder-pl1-78" for="cb-pl1-98">Move Up</label>
        <label id="ladder-pl1-87" for="cb-pl1-94">Move Up</label>
        <label id="ladder-pl2-2" for="cb-pl2-38">Move Up</label>
        <label id="ladder-pl2-7" for="cb-pl2-14">Move Up</label>
        <label id="ladder-pl2-8" for="cb-pl2-31">Move Up</label>
        <label id="ladder-pl2-15" for="cb-pl2-26">Move Up</label>
        <label id="ladder-pl2-21" for="cb-pl2-42">Move Up</label>
        <label id="ladder-pl2-28" for="cb-pl2-84">Move Up</label>
        <label id="ladder-pl2-36" for="cb-pl2-44">Move Up</label>
        <label id="ladder-pl2-51" for="cb-pl2-67">Move Up</label>
        <label id="ladder-pl2-71" for="cb-pl2-91">Move Up</label>
        <label id="ladder-pl2-78" for="cb-pl2-98">Move Up</label>
        <label id="ladder-pl2-87" for="cb-pl2-94">Move Up</label>
        <label id="ladder-pl3-2" for="cb-pl3-38">Move Up</label>
        <label id="ladder-pl3-7" for="cb-pl3-14">Move Up</label>
        <label id="ladder-pl3-8" for="cb-pl3-31">Move Up</label>
        <label id="ladder-pl3-15" for="cb-pl3-26">Move Up</label>
        <label id="ladder-pl3-21" for="cb-pl3-42">Move Up</label>
        <label id="ladder-pl3-28" for="cb-pl3-84">Move Up</label>
        <label id="ladder-pl3-36" for="cb-pl3-44">Move Up</label>
        <label id="ladder-pl3-51" for="cb-pl3-67">Move Up</label>
        <label id="ladder-pl3-71" for="cb-pl3-91">Move Up</label>
        <label id="ladder-pl3-78" for="cb-pl3-98">Move Up</label>
        <label id="ladder-pl3-87" for="cb-pl3-94">Move Up</label>
        <label id="ladder-pl4-2" for="cb-pl4-38">Move Up</label>
        <label id="ladder-pl4-7" for="cb-pl4-14">Move Up</label>
        <label id="ladder-pl4-8" for="cb-pl4-31">Move Up</label>
        <label id="ladder-pl4-15" for="cb-pl4-26">Move Up</label>
        <label id="ladder-pl4-21" for="cb-pl4-42">Move Up</label>
        <label id="ladder-pl4-28" for="cb-pl4-84">Move Up</label>
        <label id="ladder-pl4-36" for="cb-pl4-44">Move Up</label>
        <label id="ladder-pl4-51" for="cb-pl4-67">Move Up</label>
        <label id="ladder-pl4-71" for="cb-pl4-91">Move Up</label>
        <label id="ladder-pl4-78" for="cb-pl4-98">Move Up</label>
        <label id="ladder-pl4-87" for="cb-pl4-94">Move Up</label>
      </div>
    </div>
    <svg viewBox="0 0 100 100">
      <path d="M5,85 20,10" stroke="#8B4513" stroke-width="10" stroke-linecap="round"></path>
      <path d="M10,67 30,71 M15,45 35,49 M20,23 40,27" stroke="#aB6533" stroke-width="5" stroke-linecap="round"></path>
      <path d="M30,90 45,15" stroke="#8B4513" stroke-width="10" stroke-linecap="round"></path>
    </svg>
  </div>
</div>
<div class="scrim" id="home-popup">
  <div class="box">
    <h1>Home</h1>
    <div>You made it home, but you didn't do it in an exact jump so you will bounce back the remaining tiles.
      <div>
        <label id="home-pl1-101" for="cb-pl1-99">Bounce back</label>
        <label id="home-pl1-102" for="cb-pl1-98">Bounce back</label>
        <label id="home-pl1-103" for="cb-pl1-97">Bounce back</label>
        <label id="home-pl1-104" for="cb-pl1-96">Bounce back</label>
        <label id="home-pl1-105" for="cb-pl1-95">Bounce back</label>
        <label id="home-pl1-106" for="cb-pl1-94">Bounce back</label>
        <label id="home-pl2-101" for="cb-pl2-99">Bounce back</label>
        <label id="home-pl2-102" for="cb-pl2-98">Bounce back</label>
        <label id="home-pl2-103" for="cb-pl2-97">Bounce back</label>
        <label id="home-pl2-104" for="cb-pl2-96">Bounce back</label>
        <label id="home-pl2-105" for="cb-pl2-95">Bounce back</label>
        <label id="home-pl2-106" for="cb-pl2-94">Bounce back</label>
        <label id="home-pl3-101" for="cb-pl3-99">Bounce back</label>
        <label id="home-pl3-102" for="cb-pl3-98">Bounce back</label>
        <label id="home-pl3-103" for="cb-pl3-97">Bounce back</label>
        <label id="home-pl3-104" for="cb-pl3-96">Bounce back</label>
        <label id="home-pl3-105" for="cb-pl3-95">Bounce back</label>
        <label id="home-pl3-106" for="cb-pl3-94">Bounce back</label>
        <label id="home-pl4-101" for="cb-pl4-99">Bounce back</label>
        <label id="home-pl4-102" for="cb-pl4-98">Bounce back</label>
        <label id="home-pl4-103" for="cb-pl4-97">Bounce back</label>
        <label id="home-pl4-104" for="cb-pl4-96">Bounce back</label>
        <label id="home-pl4-105" for="cb-pl4-95">Bounce back</label>
        <label id="home-pl4-106" for="cb-pl4-94">Bounce back</label>
      </div>
    </div>
    <svg viewBox="0 0 100 100">
      <path d="M12,85 12,40 5,40 30,5 55,40 48,40 48,85 35,85 35,60 25,60 25,85 Z" fill="#8Ba5f3"></path>
      <path d="M30,65 C 30,60 25,55 20,55 15,55 10,60 10,65 10,70 15,75 20,75 20,75 20,75 50,75 M40,65 50,75 40,85" stroke="#eeee60" stroke-width="6" fill="none"></path>
    </svg>
  </div>
</div>
<div class="scrim" id="congratulations">
  <div class="box">
    <h1>Congratulations!</h1>
    <div>You made it home safely! You won!</div>
    <div>Reload the page to play again.</div>
    <svg viewBox="0 0 100 100">
      <path d="M5,10 C 5,10 65,10 65,10 65,10 65,40 65,40 65,50 55,70 35,70 15,70 5,50 5,40 Z" fill="#fede60"></path>
      <path d="M35,40 35,85 M20,85 50,85" stroke="#fede60" stroke-width="12" fill="none" stroke-linecap="round"></path>
    </svg>
  </div>
</div>
<div class="fx-sound" id="fx-dice">
  <embed src="https://studiokah.com/tests/dice.mp3"/>
</div>
<div class="fx-sound" id="fx-click">
  <!-- Click sound by Sebastian. Source: http://soundbible.com/1705-Click2.php-->
  <embed src="https://studiokah.com/tests/click2.mp3"/>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
