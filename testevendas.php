
    <?php 
        include("validaregistro.php");
        include("conn.php");
        @$mes = trim($_POST["mês"]);
        @$valorLiquido = trim($_POST["valorLiquido"]);
        @$valorBruto= trim($_POST["valorBruto"]);
        @$ano= trim($_POST["ano"]);

        $sql = "INSERT INTO vendas VALUES(null, $valorBruto, $valorLiquido,'$mes',$ano)";
        $result = $conn->query($sql);

        if(!$result){
            header("Location: erro.php");
            exit(0);

        } else{
             header("Location: vendas.php");
             exit(0);
        }
    ?>
