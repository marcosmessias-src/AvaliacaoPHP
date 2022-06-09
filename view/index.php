<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php require_once 'resources/alerts.php'; ?>

    <div class="row">
      <form action="index.php" method="post" class="col-auto">
          <input type="hidden" name="classe" value="Usuarios">
          <input type="hidden" name="acao" value="cadastro">
          <button type="submit" class="btn btn-primary">Cadastro</button>
      </form>

      <form action="index.php" method="post" class="col-auto">
          <input type="hidden" name="classe" value="Auth">
          <input type="hidden" name="acao" value="login">
          <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>

    <h1>Tela inicial</h1>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>