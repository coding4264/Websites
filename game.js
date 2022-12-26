var player = document.getElementById("player");
var block = document.getElementById("block");
var score1 = NaN || 0
function jump(){
    if(player.classList != "animate"){
        player.classList.add("animate");
        score1+=1;
    }
    setTimeout(function(){
        player.classList.remove("animate");
    },500);
}
var dead = setInterval(function(){
    var playertop = parseInt(window.getComputedStyle(player).getPropertyValue("top"));
    var blockleft = parseInt(window.getComputedStyle(block).getPropertyValue("left"));
    if(blockleft<20 && blockleft>0 && playertop>=130){
        block.style.animation = "none";
        block.style.display = "none";
        alert("You Lost :(");
        alert("Score: " + score1)
    }
},10);
