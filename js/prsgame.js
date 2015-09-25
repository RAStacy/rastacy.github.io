document.getElementById('userInput').focus();
var win = 0;
var lose = 0;

var prsGame = function(lose, win) {
    var userChoice = document.getElementById('userInput').value.toLocaleLowerCase();
    var computerChoice = Math.random();
    if (computerChoice <0.34){
        computerChoice = "rock";
    }else if(computerChoice <=0.67){
        computerChoice = "paper";
    }else{
        computerChoice = "scissors";
    }
    function userWin() {
        win++;
        return "YOU WIN!";
    }
    function userLose() {
        lose++; 
        document.getElementById('losses').value = lose;
        return "COMPUTER WINS!";
    }
    function stopDefAction(evt) {
        evt.preventDefault();
    }   
    function preventSub() {
        document.getElementById('sub').addEventListener(
        'click', stopDefAction, false);
    }
    
    function compare(choice1, choice2) {
        if (choice1 === choice2) {
            return "IT'S A TIE!";
        }
        else if (choice1 === "rock") {
            if(choice2 === "scissors") {
                return userWin();
            }
            else {
                return userLose();
            }
        }
        else if (choice1 === "paper") {
            if(choice2 === "rock") {
                return "YOU WIN!";
            }
            else {
                return "COMPUTER WINS!";
            }
        }
        else if (choice1 === "scissors") {
            if(choice2 === "paper") {
                return "YOU WIN!";
            }
            else {
                return "COMPUTER WINS!";
            }
        }
    }
    document.getElementById("winner").innerHTML = (compare(userChoice, computerChoice)); 
    document.getElementById("reset").innerHTML = '<button type="reset" id="reset-btn" onClick="reset()" class="btn reset-btn">Play Again?</button>';
    
	function userImg(userChoice) {
		if (userChoice === "rock") {
			document.getElementById("userOutput").innerHTML = '<img src="images/prsgame/rock.png">';
		}
		else if (userChoice === "paper") {
			document.getElementById("userOutput").innerHTML = '<img src="images/prsgame/paper.png">';
		}
		else if (userChoice === "scissors") {
			document.getElementById("userOutput").innerHTML = '<img src="images/prsgame/scissors.png">';
		}
	}
	function compImg(compChoice) {
		if (compChoice === "rock") {
			document.getElementById("compOutput").innerHTML = '<img src="images/prsgame/rock.png">';
		}
		else if (compChoice === "paper") {
			document.getElementById("compOutput").innerHTML = '<img src="images/prsgame/paper.png">';
		}
        else if (compChoice === "scissors") {
    		document.getElementById("compOutput").innerHTML = '<img src="images/prsgame/scissors.png">';
		}
	}
	userImg(userChoice);
	compImg(computerChoice);
    document.getElementById('wins').innerHTML = win;
    document.getElementById('losses').innerHTML = lose;
};
function reset() {
    document.getElementById("userInput").value="";
	document.getElementById("userOutput").innerHTML = '';
	document.getElementById("compOutput").innerHTML = '';
	document.getElementById("winner").innerHTML = '';
	document.getElementById("reset").innerHTML = '';
}


/* Mobile modal script */

var win = 0;
var lose = 0;

var prsGameM = function(win, lose) {
    var userChoice = document.getElementById('userInputM').value.toLocaleLowerCase();
    var computerChoice = Math.random();
    if (computerChoice <0.34){
        computerChoice = "rock";
    }else if(computerChoice <=0.67){
        computerChoice = "paper";
    }else{
        computerChoice = "scissors";
    }
    function userWinM(win) {
        win++; 
        return "YOU WIN!";
    }
    function userLoseM(lose) {
        lose++; 
        return "COMPUTER WINS!";
    }
    function compareM(choice1, choice2) {
        if (choice1 === choice2) {
            return "IT'S A TIE!";
        }
        else if (choice1 === "rock") {
            if(choice2 === "scissors") {
                return "YOU WIN!";
            }
            else {
                return "COMPUTER WINS!";
            }
        }
        else if (choice1 === "paper") {
            if(choice2 === "rock") {
                return "YOU WIN!";
            }
            else {
                return "COMPUTER WINS!";
            }
        }
        else if (choice1 === "scissors") {
            if(choice2 === "paper") {
                return "YOU WIN!";
            }
            else {
                return "COMPUTER WINS!";
            }
        }
    }
    
    document.getElementById("winnerM").innerHTML = (compareM(userChoice, computerChoice)); 
    document.getElementById("resetM").innerHTML = '<button type="reset" id="reset-btn" onClick="resetM()" class="btn reset-btn">Play Again?</button>';
    
	function userImgM(userChoice) {
		if (userChoice === "rock") {
			document.getElementById("userOutputM").innerHTML = '<img src="images/prsgame/rock.png">';
		}
		else if (userChoice === "paper") {
			document.getElementById("userOutputM").innerHTML = '<img src="images/prsgame/paper.png">';
		}
		else if (userChoice === "scissors") {
			document.getElementById("userOutputM").innerHTML = '<img src="images/prsgame/scissors.png">';
		}
	}
	function compImgM(compChoice) {
		if (compChoice === "rock") {
			document.getElementById("compOutputM").innerHTML = '<img src="images/prsgame/rock.png">';
		}
		else if (compChoice === "paper") {
			document.getElementById("compOutputM").innerHTML = '<img src="images/prsgame/paper.png">';
		}
		else if (compChoice === "scissors") {
			document.getElementById("compOutputM").innerHTML = '<img src="images/prsgame/scissors.png">';
		}
	}
	userImgM(userChoice);
	compImgM(computerChoice);
};
function resetM() {
    document.getElementById("userInputM").value="";
	document.getElementById("userOutputM").innerHTML = '';
	document.getElementById("compOutputM").innerHTML = '';
	document.getElementById("winnerM").innerHTML = '';
	document.getElementById("resetM").innerHTML = '';
}