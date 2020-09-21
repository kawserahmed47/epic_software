<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chart</title>

      {{-- ChartScript --}}
      {{-- @if($usersChart)
      {!! $usersChart->script() !!}
      @endif --}}
</head>
<body>

    <h1>Sample Graphs</h1>

<div style="width: 80%;margin: 0 auto;">
    {!! $resultsChart->container() !!}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $resultsChart->script() !!}
    
</body>
</html>