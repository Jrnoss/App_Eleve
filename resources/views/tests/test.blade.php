
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPELEVE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  bonjour Mr  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Designation</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tabs as $item )
      <tr>
        <td>
          {{$item["designation"]}}
        </td>
        <td>
        {{$item["prix"].'Fcfa'}}
        </td>
      </tr>
        
      @endforeach
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>