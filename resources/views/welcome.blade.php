<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Марафон</title>
  <meta name="description" content="Марафон" />
  <meta name="keywords" content="Марафон" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
{{  'test' }}
@for($i=1; $i < 14; $i++)

    <img src="images/{{ $i }}.jpg" />

@endfor




<style>
    img {
        width: 100%;
    }
</style>
</body>

</html>
