//Esta função é executada assim que a pagina é executada
$(function(){
    const speed = 2500;
    
    let rotate = setInterval(auto, speed);
    
    //Recebendo a largura do meu "li" que é a minha imagem
    const widthli = $("#galeria ul li").outerWidth();
    
    //Através da id, recebe a div slide
    $("#galeria").hover(
        //função quando o mouse estiver em cima
        function(){
        $("#buttons").fadeIn();
        clearInterval(rotate);
    }, 
        //função quando o mouse sair
        function(){
        $("#buttons").fadeOut();
        let rotate = setInterval(auto, speed);
    });
    
    //Função que avança o slide
    $(".next").click(function(e){
        //Faz com que não apareça no link que o botão foi pressionado
        e.preventDefault();
        //Acrescenta na width da lista 99999% para que ela fique uma do lado da outra
        $("#galeria ul").css({'width':'99999%'}).animate({left:-widthli}, function(){
            //recebendo a ultima imagem do slide e passando de volta como primeira, para que o slide fique infinito
            $("#galeria ul li").last().after($("#galeria ul li").first());
            //fazendo com que a width volte ao seu padrão que é auto
            $(this).css({'left':'0', 'width':'auto'});
        });
    });
    
    //Função que volta o slide
    $(".previous").click(function(e){
        e.preventDefault();
        $("#galeria ul li").first().before($("#galeria ul li").last().css({'margin-left':-widthli}));
        
        $("#galeria ul").css({'width':'99999%'}).animate({left:widthli}, function(){
            $("#galeria ul li").first().css({'margin-left':'0'});
            $(this).css({'left':'0', 'width':'auto'});
        });
    });
    
    function auto(){
        $('.next').click();
    }
});