$(function (){

    var delay = 2

    var currentSlide = 0;

    var maxSlide = $('.banner-single').length - 1;

    var maxTitulo = $('.titulo-single').length - 1;

    initSlider();
    changeSlider();

    function initSlider() {
        //Esconder todos os elementos da classe: banner-single
        $('.banner-single').hide();
        $('.titulo-single').hide();
        //Selecionar a imagem pelo index com base na função eq() para mostrar( show())
        $('.banner-single').eq(currentSlide).show();
        $('.titulo-single').eq(currentSlide).show();

        for(var i=0; i<= maxSlide; i++){
            //Recuperando o conteudo do HTML

            content = $('.bullets').html();
            

            //verificando se é o primeiro bullet

            if(i==0){
                content += '<span class="active-slider"></span>';
            }
            else{
                content += '<span></span>';
            }

            $('.bullets').html(content);
        }
    }

    function changeSlider() {
        setInterval(function () {
            $('.banner-single').eq(currentSlide).fadeOut();
            $('.titulo-single').eq(currentSlide).fadeOut();
            currentSlide++;

            if(currentSlide > maxSlide)
                currentSlide = 0;



            $('.banner-single').eq(currentSlide).fadeIn();
            $('.titulo-single').eq(currentSlide).fadeIn();
            //Trocar os bullets na navegação
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(currentSlide).addClass('activer-slider');
    
        }, delay * 1000)

        $('body').on('click', '.bullets span', function() {

            var currentBullet = $(this);
            //Sincronizar bullets e slider
            $('.banner-single').eq(currentSlide).fadeOut();
            $('titulo-single').eq(currentSlide).fadeOut();
            currentSlide = currentBullet.index();
            $('.banner-single').eq(currentSlide).fadeIn();
            $('titulo-single').eq(currentSlide).fadeIn();
            //Removendo a classe antiga
            $('.bullets span').removeClass('active-slider');
            //Atualizando a classe do click
            currentBullet.addClass('active-slider');
        })
    }

})