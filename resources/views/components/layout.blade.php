<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"
          ,maximun-scale="1.0" ,minimun-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $metaTitle ?? 'Default Title'}}</title>
</head>
<body>
<x-partials.navigation/>
{{ $slot }}

@isset($sidebar)
    <div id='sidebar'>
        <h3>Sidebar</h3>
        <div>{{ $sidebar }}</div>
    </div>
@endisset
</body>
</html>

