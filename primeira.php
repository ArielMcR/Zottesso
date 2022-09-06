<?php require_once("validaregistro.php"); ?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagens/logo.png">
    <style>
        h1{
            color: white;
        }
    </style>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./estilos/style2.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Dashboard Painel</title>
    
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./imagens/logo.png" alt="">
            </div>

            <span class="logo_name">Gerenciamento</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="primeira.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="vendas.php">
                    <i class="uil uil-shopping-cart"></i>
                    <span class="link-name">Vendas</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Gráficos</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-user-md"></i>
                    <span class="link-name">Cadastrar Funcionário</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chat-info"></i>
                    <span class="link-name">Demitir Funcionário</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="sair.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Modo Claro</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
    
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar...">
            </div>    
        </div>
        <div class="header" >
        <header>
         <?php 
        $nome = $_COOKIE['usuario'];
        echo "Seja Bem Vindo, $nome";
         ?>
     </header>
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-bill"></i>
                        <span class="text">Total Bruto</span>
                        <span class="number"> 
                        <table style="text-aling:center;" border = '0'>
                               
                        <?php 
                         $sql_tipo = "SELECT SUM(valorBruto) AS valorFinalBruto FROM vendas";
                         $resulta = $con->query($sql_tipo);
                    
                         
                        while ( $row = $resulta->fetch_assoc()){     
                            $bruto = $row['valorFinalBruto'];    
                            echo '<tr>';
                            echo '<td>R$'. number_format($bruto, 2, ',', '.') .'</td>';
                            echo '</tr>'; 
                              }
                             
                            ?>
                         </table>
                        </span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-user-md"></i>
                        <span class="text">Total de Funcionário</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-dollar-sign"></i>
                        <span class="text">Total Liquído</span>
                        <span class="number">
                        <table style="text-aling:center;" border = '0'>
                        <?php 
                         $sql_tipo = "SELECT SUM(valorLiquido) AS valorFinal FROM vendas";
                         $resulta = $con->query($sql_tipo);
                    
                         
                        while ( $row = $resulta->fetch_assoc()){     
                            $liquido = $row['valorFinal'];    
                            echo '<tr>';
                            echo '<td>R$'. number_format($liquido, 2, ',', '.') .'</td>';
                            echo '</tr>'; 
                              }
                             
                            ?>
                         </table>
                        </span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-chart-line"></i>
                    <span class="text">Ganhos Recentes</span>
                </div>
               
            <div class="activity-data">
                 <?php
                    $sql_tipo = "SELECT valorLiquido, Mês FROM vendas";
                    $roda = $con->query($sql_tipo);
                    if ($roda->num_rows == 0) {
                        echo "<h1>Nenhum dado cadastrado</h1>";
                    } else {
                    
                    ?>
                <script src="./javascript/script.js"></script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
              
                    function drawChart() {
                      var data = google.visualization.arrayToDataTable([
                        ['Vendas', 'Mês'],
                        <?php 
                        $sql_tipo = "SELECT valorLiquido, Mês FROM vendas";
                        $resulta = $con->query($sql_tipo);
                               

                        while ( $row = $resulta->fetch_assoc()){            
                      	$liquido = $row['valorLiquido'];
                        $Mês = $row['Mês'];
                        ?>['<?php echo $Mês?>',<?php echo $liquido?>], 
                        <?php } ?>
                         ]);
              
                      var options = {
                        title: 'Vendas da Empresa',
                        curveType: 'function',
                        legend: { position: 'bottom' }
                      };
              
                      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
              
                      chart.draw(data, options);
                    }
                     <?php } ?>
                  </script>
                   <div id="curve_chart" style="border-radius:12%;align-items:center;padding-top:1em;padding-left:1em;width: 1100px; height: 600px"></div>
        
    </section>
        
</body>
</html>
