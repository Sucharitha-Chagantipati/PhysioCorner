<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="applicationSave.php"  >
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name:</label>
    <input type="text" name="name" class="form-control" id="exampleInputName">
  </div>
  <div class="mb-3">
    <label for="exampleInputAge" class="form-label">Age:</label>
    <input type="number" name="age" class="form-control" id="exampleInputAge">
  </div>
  <div class="mb-3">
    <label for="exampleInputProf" class="form-label">Applying For:</label>
    <input type="text" name="prof" class="form-control" id="exampleInputProf">
  </div>
  <div class="mb-3">
    <label for="exampleInputExp" class="form-label">Experience:</label>
    <input type="number" name="experience" class="form-control" id="exampleInputExp">
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Mobile Number:</label>
    <input type="text" name="number" class="form-control" id="exampleInputNumber">
  </div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
</body>
</html>