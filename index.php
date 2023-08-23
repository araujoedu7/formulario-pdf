<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


    <title>Gerar PDF</title>
</head>
<body>
    <H2>COMO GERAR PDF COM PHP</H2>

    <form method="post" action="gerar_pdf.php">

    <label for="">Nome: </label>
    <input type="text" name="nome" placeholder="Nome completo"> <br><br>


    <label for="">E-mail: </label>
    <input type="email" name="email" placeholder="Preencha seu email"> <br><br>

    <label for="">Descrição </label>
    <textarea name="descrição" placeholder="preencha sua descrição" ></textarea> <br><br>

<input type="submit" name="btn-gerar" value="Gerar PDF">

    
    </form>
</body>
</html>