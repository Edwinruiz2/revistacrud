<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Ingreso de revista</title>
</head>
<body>
  <form class="row g-3">
  <div class="col-md-4 position-relative">
    

<label for="validationTooltip01" class="form-label">Nombre:</label>
<input type="text" name="name" class="form-control is-valid" id="validationTooltip01" value="{{isset($revista->name)?$revista->name:''}}" required>
<label for="validationTooltip02" class="form-label">isbn:</label>
<input type="number" name="isbn"class="form-control is-valid" id="validationTooltip02"value="{{isset($revista->isbn)?$revista->isbn:''}}"required>
<label for="validationServer03" class="form-label">Fecha:</label>
<input type="date" name="date" class="form-control is-valid" id="validationServer03"value="{{isset($revista->date)?$revista->date:''}}" required>
<label for="validationServer04" class="form-label">Tipo de revista:</label>
<input type="text" name="type" class="form-control is-valid" id="validationServer04"value="{{isset($revista->type)?$revista->type:''}}"required>
<label for="validationServer05" class="form-label">Director de la revista:</label>
<input type="text" name="director" class="form-control is-valid" id="validationServer05"value="{{isset($revista->director)?$revista->director:''}}"required>
<div class="valid-tooltip">
      Looks good!
    </div>
</div>
<br>
<br><button type="submit">Guardar</button>
</form>

</body>

</html>

