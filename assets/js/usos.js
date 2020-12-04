var index = 0;

    var listaimg = ["http://localhost/proyecto2/imgs/fondo.jpg", "http://images..com/template_images/acarabackground.gif", "http://i.imgur.com/cji4OHQ.jpg", "http://i.stack.imgur.com/jGlzr.png"];

$(function() {
  
    setInterval(changeImage, 40000);
  
});

function changeImage() {
  
 
   $('body').css("background-image", 'url(' + listaimg[index] + ')');
                  
   index++;
                  
   if(index == 4)
      index = 0;
    
    
}
