<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Arrays</title>
</head>

<body>
    <div class="w3-third w3-center w3-animate-top w3-padding">
        <?php
        $estados = array(
            array("estado" => "Acre", "sigla" => "AC"),
            array("estado" => "Alagoas", "sigla" => "AL"),
            array("estado" => "Amapá", "sigla" => "AP"),
            array("estado" => "Amazonas", "sigla" => "AM"),
            array("estado" => "Bahia", "sigla" => "BA"),
            array("estado" => "Ceará", "sigla" => "CE"),
            array("estado" => "Espírito Santo", "sigla" => "ES"),
            array("estado" => "Goiás", "sigla" => "GO"),
            array("estado" => "Maranhão", "sigla" => "MA"),
            array("estado" => "Mato Grosso", "sigla" => "MT"),
            array("estado" => "Mato Grosso do Sul", "sigla" => "MS"),
            array("estado" => "Minas Gerais", "sigla" => "MG"),
            array("estado" => "Pará", "sigla" => "PA"),
            array("estado" => "Paraíba", "sigla" => "PB"),
            array("estado" => "Paraná", "sigla" => "PR"),
            array("estado" => "Pernambuco", "sigla" => "PE"),
            array("estado" => "Piauí", "sigla" => "PI"),
            array("estado" => "Rio de Janeiro", "sigla" => "RJ"),
            array("estado" => "Rio Grande do Norte", "sigla" => "RN"),
            array("estado" => "Rio Grande do Sul", "sigla" => "RS"),
            array("estado" => "Rondônia", "sigla" => "RO"),
            array("estado" => "Roraima", "sigla" => "RR"),
            array("estado" => "Santa Catarina", "sigla" => "SC"),
            array("estado" => "São Paulo", "sigla" => "SP"),
            array("estado" => "Sergipe", "sigla" => "SE"),
            array("estado" => "Tocantins", "sigla" => "TO"),
            array("estado" => "Distrito Federal", "sigla" => "DF")
        ); ?>
        <table class="w3-table-all w3-hoverable w3-textblack">'
            <tr class="w3-teal ">'
                <th class="w3-center"> Estado</th>';
                <th class="w3-center"> Sigla</th>'
            </tr>
            <?php foreach ($estados as $estado) { ?>
                <tr>
                    <td class="w3-center"><?php echo $estado['estado'] ?></td>
                    <td class="w3-center"><?php echo $estado['sigla'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br>
    </div>
</body>

</html>