(function(){
var puzList = document.getElementsByClassName("puz-list")[0];
var puzListSize = puzList.getBoundingClientRect();
var tileArray = [];
var selectionReady = false;
var savedTile;
// Set transition in MS
var transitionCSS = 500;
// Delayed transition for when tiles didnt match, added to the transitionCSS value
var transitionDelayed = 300;

function resizePuzList(){
    puzList.style.height = puzListSize.width - 4 + "px";
    puzListSize = puzList.getBoundingClientRect();
    console.log(puzListSize);
}
resizePuzList();

// Create Tile object
function createArray(dimensions){
    tileArray = [];
    var cordArray = [];
    var total = dimensions*dimensions;
    var rowCount = 0;
    // Make an array for random values, put into in order, paired as 2 of the same value in random spots
    for(var i = 0; i < total; i++){
        //makes a condition, for the random number is never right the same nr of times
        var hasBeenSet = false;
        //while loop, takes the value for repeating
        while(hasBeenSet === false){
            //makes the random number
            var randomNr = Math.floor(Math.random()*total);
            //If the array[thisRandomNumber] is undefined, it breaks the loop and repeats for I
            if(cordArray[randomNr] === undefined){
                cordArray[randomNr] = Math.floor(i/2);
                hasBeenSet = true;
            }
        }
    }
    for(var i = 0; i < total; i++){
        // Check for new row (modulus)
        if(i % dimensions === 0 && i != 0){
            rowCount++;
        }
        //Create object with values
        tileArray[i] = {
            id      : i,
            value   : cordArray[i],
            cordX   : i%dimensions,
            cordY   : rowCount,
            active  : false,
            found   : false
        };
    };
    return tileArray;
}; // END createArray()

// Generate HTML for the array
function generateTiles(array){
    var getRoot = Math.sqrt(array.length);
    // All this code is for generating the tiles in HTML and putting a listener on them
    for(var i = 0; i < array.length; i++){
        var tile = document.createElement("li");
        var tileText = document.createElement("span");
        tile.setAttribute("value", i);
        tile.classList.add("tile");
        tile.style.margin = "2px";
        tile.style.width = ((puzListSize.width - 4) / getRoot) - 8 + "px";
        tile.style.maxHeight = ((puzListSize.heigth - 4) / getRoot) - 8 + "px";
        tileText.innerHTML = "0";
        tile.appendChild(tileText);
        puzList.appendChild(tile);
    };
    var tileList = document.getElementsByClassName("tile");
    for (var i = 0; i < tileList.length; i++) {
        tileList[i].addEventListener("click", function(e){
            tileOnClick(this);
        });
    }
}; // END generateTiles()

// Function for triggers when clicking a tile
function tileOnClick(trigger){
    if(selectionReady === true){
        selectionReady = false;
        var tileArrObj = tileArray[trigger.value];
        var tile = trigger;


        // Block of code for handling the click
        // First check if brick is active and/or found
        // Bricks stay in active mode when found
        if(tileArrObj.active === false && tileArrObj.found === false){
            // non-active non-found brick selected, run animation
            animateOn(tile, tileArrObj.value);
            // Set brick as active
            tileArrObj.active = true;
            // Check for a saved brick (Check for first click or second click)
            if(savedTile !== "undefined"){
                // A brick was saved, now check if the 2 bricks match in values
                if(tileArray[savedTile.value].value === tileArrObj.value){
                    // Bricks are matching
                    console.log("Yes!");
                    tileArray[savedTile.value].found = true;
                    tileArrObj.found = true;
                    setTimeout(function(){
                        animateFound(savedTile);
                        animateFound(tile);
                        savedTile = "undefined";
                        selectionReady = true;
                    }, transitionCSS);
                } else {
                    // Bricks didnt match, wait for animation to finish, then return them to idle
                    console.log("No Bueno");
                    setTimeout(function(){
                        animateOff(savedTile);
                        animateOff(tile);
                        tileArray[savedTile.value].active = false;
                        tileArrObj.active = false;
                        savedTile = "undefined";
                        selectionReady = true;
                    }, transitionCSS + transitionDelayed);
                }
            } else {
                // A brick wasnt saved, save this one and wait for new click
                console.log("Selected a tile!");
                savedTile = tile;
                selectionReady = true;
            }
        } else if(tileArrObj.active === true && tileArrObj.found === false) {
            // Error, The brick that was clicked was already active
            console.log("That tile is already selected!");
            selectionReady = true;
        } else if(tileArrObj.active === true && tileArrObj.found === true){
            // Error, The brick that was clicked was already found
            console.log("That tile has already been found!");
            selectionReady = true;
        }
    } else {
        // Error, A brick was clicked before the script had run through everything
        console.log("The game isnt ready yet!");
    }
}; // END gameMechanic()

// ANIMATION FUNCTIONS
// Animations are run when bricks are clicked, not matching, and when matching
function animateOn(target, value){
    var targetChild = target.firstChild;
    target.style.cursor = "default";
    target.style.backgroundColor = "#fff";
    target.style.color = "#8A2BE2";
    target.style.transform = "rotateY(180deg)";
    targetChild.style.transform = "rotateY(180deg)";
    targetChild.innerHTML = value + "";
}
function animateOff(target){
    var targetChild = target.firstChild;
    target.style.cursor = "pointer";
    target.style.backgroundColor = "#8A2BE2";
    target.style.color = "#8A2BE2";
    target.style.transform = "rotateY(0deg)";
    targetChild.style.transform = "rotateY(0deg)";
    setTimeout(function(){
        targetChild.innerHTML = "0";
    }, transitionCSS);
}
function animateFound(target){
    var targetChild = target.firstChild;
    target.style.cursor = "default";
    target.style.backgroundColor = "#000";
    target.style.color = "#8A2BE2";
}

//
function startNewGame(startValue){
    selectionReady = false;
    gamePurge();
    var tileObj = createArray(startValue);
    console.log("Array Generated!");
    var tileHTML = generateTiles(tileObj);
    // Nothing can trigger buttons before the script has finished generating
    selectionReady = true;
}
// Function for purging game, space for more stuff like score
function gamePurge(){
    puzList.innerHTML = "";
    tileArray = [];
    savedTile = "undefined";
} // END purgeGame()

// Run listener on buttons for generation
var buttons = document.getElementsByClassName("genPuzzle");
for(var i = 0; i < buttons.length; i++){
    buttons[i].addEventListener("click", function(e){
        startNewGame(this.value);
    });
};
document.getElementsByClassName("formButt")[0].addEventListener("click", function(e){
    if(document.getElementsByClassName("formInput")[0].value % 2 === 0){
        startNewGame(document.getElementsByClassName("formInput")[0].value);
    } else {
        window.alert("Number must be even!");
    }
    //console.log(document.getElementsByClassName("formInput")[0].value);
});
})();
