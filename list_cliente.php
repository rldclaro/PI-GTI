<?php
    //Instancia do Banco de dados
    session_start();
    require_once "MySQL/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alex Preparações</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/fav.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php
        require_once "include/topbar.php";
    ?> 
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
        if (isset($_SESSION['id'])) {
            require_once "include/menuLogado.php";
        } else {
            require_once "include/menu.php";
        }
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Clientes Cadastrados</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <?php
        require_once "include/TableCliente.php"
    ?>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
        require_once "include/footer.php"
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var marcaSelect = document.getElementById("txtMarca");
        var modeloSelect = document.getElementById("txtModelo");

        marcaSelect.addEventListener("change", function () {
            // Limpar as opções anteriores
            modeloSelect.innerHTML = "<option value=''>Selecione a Marca primeiro</option>";

            // Obter o valor selecionado da marca
            var marcaSelecionada = marcaSelect.value;

            // Adicionar opções ao modeloSelect com base na marcaSelecionada
            switch (marcaSelecionada) {
                case "YAMAHA":
                    adicionarOpcao("MT-03");
                    adicionarOpcao("MT-07");
                    adicionarOpcao("YZF-R1");
                    adicionarOpcao("XT 660");
                    adicionarOpcao("YZF-R6");
                    adicionarOpcao("Lander 250");
                    adicionarOpcao("FZ6");
                    adicionarOpcao("XT 1200Z SUPER TÉNÉRÉ");
                    adicionarOpcao("YZF-R3");
                    adicionarOpcao("MT-09");
                    adicionarOpcao("YZF-R15");
                    adicionarOpcao("Tracer 900 GT");
                    adicionarOpcao("YZ250F");
                    adicionarOpcao("YZ450F");
                    adicionarOpcao("Niken GT");
                    adicionarOpcao("VMAX");
                    adicionarOpcao("XSR900");
                    adicionarOpcao("XSR700");
                    adicionarOpcao("YZF-R7");
                    adicionarOpcao("Tenere 700");
                    adicionarOpcao("WR250F");
                    adicionarOpcao("Bolt");
                    adicionarOpcao("FJR1300");
                    adicionarOpcao("SR400");
                    adicionarOpcao("YZF-R125");
                    adicionarOpcao("XMAX 300");
                    adicionarOpcao("YZF-R15M");
                    adicionarOpcao("MT-03");
                    adicionarOpcao("YZF-R125");
                    adicionarOpcao("Cygnus X 125");
                    adicionarOpcao("NMAX");
                    adicionarOpcao("Crypton 115");
                    adicionarOpcao("Fazer 150");
                    adicionarOpcao("Neo 125 UBS");
                    adicionarOpcao("YS 150 Fazer");
                    adicionarOpcao("Factor 125 ED");
                    // Adicione mais modelos conforme necessário
                    break;
                case "HONDA":
                    adicionarOpcao("CB 500F");
                    adicionarOpcao("CBR 1000RR");
                    adicionarOpcao("CG 160 FAN");
                    adicionarOpcao("CB 650R");
                    adicionarOpcao("CRF 450L");
                    adicionarOpcao("XRE 300");
                    adicionarOpcao("CBR 600RR");
                    adicionarOpcao("CB 300R");
                    adicionarOpcao("CB 1000R");
                    adicionarOpcao("CRF 250L");
                    adicionarOpcao("CB 125F");
                    adicionarOpcao("Forza 300");
                    adicionarOpcao("CB 1100 EX");
                    adicionarOpcao("Rebel 500");
                    adicionarOpcao("Gold Wing");
                    adicionarOpcao("Africa Twin");
                    adicionarOpcao("CB 300R");
                    adicionarOpcao("CB 650F");
                    break;
                case "KAWASAKI":
                    adicionarOpcao("NINJA 300");
                    adicionarOpcao("VERSYS 650");
                    adicionarOpcao("Z900");
                    adicionarOpcao("NINJA ZX-6R");
                    adicionarOpcao("Z400");
                    adicionarOpcao("VULCAN S");
                    adicionarOpcao("Z650");
                    adicionarOpcao("NINJA 650");
                    adicionarOpcao("W800");
                    adicionarOpcao("Z900RS");
                    adicionarOpcao("Z1000");
                    adicionarOpcao("Z H2");
                    adicionarOpcao("Versys 1000");
                    adicionarOpcao("Z H2 SE");
                    adicionarOpcao("ZX-10R");
                    adicionarOpcao("Ninja H2 SX SE");
                    adicionarOpcao("Z H2");
                    adicionarOpcao("Z H2 SE");
                    break;
                case "SUZUKI":
                    adicionarOpcao("GSX-R750");
                    adicionarOpcao("V-STROM 650");
                    adicionarOpcao("BOULEVARD M800");
                    adicionarOpcao("GSX-S750");
                    adicionarOpcao("BURGMAN 400");
                    adicionarOpcao("SV650");
                    adicionarOpcao("GSX250R");
                    adicionarOpcao("GW250 Inazuma");
                    adicionarOpcao("VanVan 200");
                    adicionarOpcao("DR-Z400SM");
                    break;

                case "DAFRA":
                    adicionarOpcao("APACHE RTR 150");
                    adicionarOpcao("CITYCOM S 300i");
                    adicionarOpcao("NEXT 250");
                    adicionarOpcao("HORIZON 250");
                    adicionarOpcao("APACHE RTR 200");
                    adicionarOpcao("CITYCOM S 300i ABS");
                    adicionarOpcao("SUPERA 400");
                    adicionarOpcao("NEXT 300");
                    adicionarOpcao("MAXSYM TL 400");
                    adicionarOpcao("HORIZON 150");
                    break;

                case "TRYUMPH":
                    adicionarOpcao("STREET TWIN");
                    adicionarOpcao("SPEED TRIPLE 1200 RS");
                    adicionarOpcao("BONNEVILLE T120");
                    adicionarOpcao("TIGER 800");
                    adicionarOpcao("BONNEVILLE SPEEDMASTER");
                    adicionarOpcao("ROCKET 3 GT");
                    adicionarOpcao("TRIDENT 660");
                    adicionarOpcao("SCRAMBLER 1200 XC");
                    adicionarOpcao("STREET SCRAMBLER");
                    adicionarOpcao("TIGER 900 GT");
                    break;

                case "BMW":
                    adicionarOpcao("S 1000 RR");
                    adicionarOpcao("R 1250 GS");
                    adicionarOpcao("F 750 GS");
                    adicionarOpcao("R 18");
                    adicionarOpcao("F 900 R");
                    adicionarOpcao("S 1000 XR");
                    adicionarOpcao("G 310 R");
                    adicionarOpcao("G 310 GS");
                    adicionarOpcao("F 800 R");
                    adicionarOpcao("F 800 GS");
                    break;

                case "HARLEY DAVIDSON":
                    adicionarOpcao("IRON 883");
                    adicionarOpcao("FAT BOB 114");
                    adicionarOpcao("STREET GLIDE");
                    adicionarOpcao("SPORTSTER IRON 1200");
                    adicionarOpcao("HERITAGE CLASSIC");
                    adicionarOpcao("ROAD KING");
                    adicionarOpcao("SOFTAIL SLIM");
                    adicionarOpcao("LOW RIDER S");
                    adicionarOpcao("FORTY-EIGHT");
                    adicionarOpcao("ELECTRA GLIDE STANDARD");
                    break;

                case "KTM":
                    adicionarOpcao("DUKE 390");
                    adicionarOpcao("RC 390");
                    adicionarOpcao("1290 SUPER DUKE R");
                    adicionarOpcao("690 SMC R");
                    adicionarOpcao("790 DUKE");
                    adicionarOpcao("1190 ADVENTURE R");
                    adicionarOpcao("390 ADVENTURE");
                    adicionarOpcao("250 DUKE");
                    adicionarOpcao("790 ADVENTURE R");
                    adicionarOpcao("690 ENDURO R");
                    break;

                                
                // Adicione casos para outras marcas
            }
        });

        function adicionarOpcao(modelo) {
            var option = document.createElement("option");
            option.value = modelo;
            option.text = modelo;
            modeloSelect.add(option);
        }
    });
</script>
</body>

</html>