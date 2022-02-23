$(document).ready(function(){
    getSongs();
});
var audio;
var music;

// para obtener las canciones
function getSongs(){
    $.getJSON("../json/canciones.json",function(mjson){
        music = mjson;
        console.log(music);
    });
}