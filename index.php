<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'PaginaInicial';
?>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Descrição do Site">
    <meta name="keywords" content="The Boys">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <!-- Google Fonts -->

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome-->

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/CabecalhoRodape.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/PaginaInicial.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/MonteSeuHeroi.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/Personagens.css">
    <!-- CSS -->

     <!--Favicon-->
     <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon">
    <!--Favicon-->

    <title>The Boys</title>
</head>
<body>

    <!-- --------------------------Cabeçalho-------------------------- -->
    <header>
        <img src="<?php echo INCLUDE_PATH ?>LogoTheBoys.png" alt="LogoTheBoys" class="LogoSite">

        <nav>
            <div class="w33"><a href="<?php echo INCLUDE_PATH ?>">Pagina Inicial</a></div>
            <div class="w33"><a href="<?php echo INCLUDE_PATH ?>MonteSeuHeroi">Formulario</a></div>
            <div class="w33"><a href="<?php echo INCLUDE_PATH ?>Personagens">Personagens</a></div>
        </nav>
        <div class="mobile">
            <a href="" class="fa-solid fa-bars"></a>
        </div>
    </header>
    <!-- --------------------------Cabeçalho-------------------------- -->
    <?php
    if (file_exists('pages/' . $url . '.php')){
        include('pages/'. $url . '.php');
    } else {
        if($url != 'MonteSeuHeroi' && $url != 'Personagens'){
            $pagina404 = true;
            include('pages/404.php');
        } else {
            include('pages/PaginaInicial.php');
        }
    }

    ?>

    <!-- --------------------------Rodapé-------------------------- -->
    <footer>

        <div class="rodape">
            <div class="w33">
                <img class="LogoRodape" src="assets/img/logo_white.png" alt="LogoTheBoys">
            </div>
    
            <div class="w33">
                <h4>Contato</h4>
                <table>
                    <tbody>
                        <tr>
                            <td><a href="https://www.instagram.com/joao.sonalio/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </td>
                            <td>joao.sonalio</td>
                        </tr>
                        <tr>
                            <td><a
                                    href="https://api.whatsapp.com/send/?phone=42999945270&text&type=phone_number&app_absent=0" target="_blank"><i
                                        class="fa-brands fa-whatsapp"></i></a></td>
                            <td>(42)999945270</td>
                        </tr>
                    </tbody>
    
                </table>
            </div>
    
            <div class="w33">
                <h4>Localização</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.843861908598!2d-51.05014303612233!3d-26.227693068539793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e6602a2f792417%3A0x260a3f120bc90789!2sIFPR%20-%20Campus%20Uni%C3%A3o%20da%20Vit%C3%B3ria!5e0!3m2!1spt-BR!2sbr!4v1725923121642!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </footer>

    <!-- --------------------------Rodapé-------------------------- -->
    

    <!-- Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo INCLUDE_PATH ?>assets/js/script.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>assets/js/slider.js"></script>
</body>
</html>