"use strict";

$(document).ready(function(){
    
    //função para o click do menu mobile
    $('#iconeMenu').click(function(){
        
        $('#menuMobile').fadeToggle(1000);
        
    });
    
    //Função para fechar o menu no click do item
    $('.itemMenu').click(function(){
        $('#menuMobile').fadeToggle();
    });
    
});