class Board {
    constructor(board, backgroundImage, SNAKES_AND_LADDERS) {
        this.board = board;
        this.backgroundImage = backgroundImage;
        this.SNAKES_AND_LADDERS = SNAKES_AND_LADDERS;
        this.board.style.backgroundImage = `url("${backgroundImage}")`;
        this.playButton;

    }

    getBoard() {
        return this.board;
    }

    setBoard(board) {
        this.board = board;
    }

    getbackgroundImage() {
        return this.backgroundImage;
    }

    setbackgroundImage(backgroundImage) {
        this.backgroundImage = backgroundImage;
        this.board.style.backgroundImage = `url("${backgroundImage}")`;
    }

    getSnakeAndLadders() {
        return this.SNAKES_AND_LADDERS;
    }

    getRandQuestions(type = 'amateur') {
        return questions[type][Math.floor(Math.random() * questions[type].length)];
    }

    setSnakeAndLadders(SNAKES_AND_LADDERS) {
        this.SNAKES_AND_LADDERS = SNAKES_AND_LADDERS;
    }
}
