<?php
session_start();
if (isset($_REQUEST['txtNome'])) {
    if (!isset($_SESSION['alunos']))
        $_SESSION['alunos'] = [];

    extract($_REQUEST);
    array_push(
        $_SESSION['alunos'],
        [
            'nome' => $txtNome,
            '1Semestre' => $txt1Semestre,
            '2Semestre' => $txt2Semestre
        ]
    );
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <p>
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome do aluno" required />
        </p>
        <p>
            <input type="number" name="txt1Semestre" id="txt1Semestre" step="0.5" min="0" max="10" />
        </p>
        <p>
            <input type="number" name="txt2Semestre" id="txt2Semestre" step="0.5" min="0" max="10" />
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
    <?php if (isset($_SESSION['alunos'])) { ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>1º Semestre</th>
                    <th>2º Semestre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['alunos'] as $aluno) { ?>
                    <tr>
                        <td><?php echo $aluno['nome'] ?></td>
                        <td><?php echo $aluno['1Semestre'] ?></td>
                        <td><?php echo $aluno['2Semestre'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>