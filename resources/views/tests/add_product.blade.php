<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Formulaire</h1> 
  <form action="{{route('add_product')}}" method="post">
    @csrf
  <label for="designation">Designation</label>
  <input type="text" id="designation" name="designation" class="form_control" required>     
<label for="prix" >Prix</label>
<input type="text" id="prix" name="prix" class="form-control">
<button type="submit" class="btn-btn-primary">Ajout</button>
     </form> 
     

</body>
</html>