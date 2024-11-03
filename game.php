<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Ladder</title>
    <link rel="stylesheet" href="assets/css/game/style.css">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <?php
        include "include/cssHeader.php";
    ?>
</head>

<body>
    <?php 
        include "include/topHeader.php";
    ?>
    <div id="menu" class='h-screen flex flex-col justify-center items-center'>
        <div class="menu__container">
            <button id="playComputerBtn">1 vs Computer</button>
            <button id="playTwoPlayersBtn">Two Players</button>
            <button id="playThreePlayersBtn">Three Players</button>
            <button id="playFourPlayersBtn">Four Players</button>
            <button id="backBtn">Back</button>
        </div>
    </div>

    <div id="playground">
        <div id="boardWrapper">
            <div id="gameBoard">
                <div class="player" id="redPlayerPiece">
                    <span class="player-name">Red</span>
                </div>
                <div class="player" id="greenPlayerPiece">
                    <span class="player-name">Green</span>
                </div>
                <div class="player" id="bluePlayerPiece">
                    <span class="player-name">Blue</span>
                </div>
                <div class="player" id="yellowPlayerPiece">
                    <span class="player-name">Yellow</span>
                </div>
    
                <div class="player" id="computerPlayerPiece">
                    <span class="player-name">Computer</span>
                </div>
    
                <div id="startingLinePlayers"></div>
                
        
                <div id="gameController">
                    <div id="dice"></div>
                    <button id="superplay" class='flex flex-col items-center justify-center' disabled>
                        <span>Mulai</span>
                        <img src="assets/icons/play.svg" alt="Play button">
                    </button>
                </div>
    
                <div id="gamePodium">
                </div>
            </div>
        </div>
        <div class='left-container'>
            <div id="diceContainer">
                <!-- Dice cube with 6 faces -->
                <div id="cube">
                    <div class="cubeFace face1">1</div>
                    <div class="cubeFace face2">2</div>
                    <div class="cubeFace face3">3</div>
                    <div class="cubeFace face4">4</div>
                    <div class="cubeFace face5">5</div>
                    <div class="cubeFace face6">6</div>
                </div>
            </div>
            <div>
                <p id='playerTurn' class='font-bold text-white text-2xl'></p>
            </div>
        </div>
    
        <div class="controller">
            <button class="play" id="red"></button>
            <button class="play" id="green"></button>
            <button class="play" id="blue"></button>
            <button class="play" id="yellow"></button>
            <button class="play" id="computer"></button>
            <button id="resetBtn">
                <img src="assets/icons/arrow-clockwise.svg" alt="Restart" title="Reset">
            </button>
    
        </div>
        <div id="log" style="display: none;"></div>
    </div>
    <?php
    include "include/footer.php";
    include "include/modalQuestion.php";
    ?>
    <script src="assets/js/constant.js"></script>
    <script src="assets/js/player.js"></script>
    <script src="assets/js/board.js"></script>
    <script src="assets/js/app.js"></script>
    
</body>

</html>