<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nagorik Unnoyon Badminton Tournamemt 2025</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Amatic+SC');

@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap');



body {
  background-color: #b394c9;
  font-family: 'Amatic SC';
}

#root {
    display: flex;
    justify-content: center;
    /* align-items: center; */
    /* height: 100vh; */
    /* min-width: 445px; */

    
}



table {
  border-collapse: collapse;
  width: 100vw;
  /* min-width: 445px; */
  
}

th, td {
  text-align: center;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #330b7775;
}


  </style>
</head>
<body >

  <div class="flex justify-center flex-col items-center">
    <h1 class="text-2xl mx-auto font-bold text-center pt-4">Nagorik Unnoyon Badminton Tournamemt 2025</h1>
    <h1 class="text-xl font-bold text-center pt-4 underline pb-2">Group A - Ranking</h1>
  </div>
  <div id="root" class="">
    <div class="table"  style="font-family: 'Amatic SC';font-wight:bold;">
      <table class="text-xl md:text-2xl lg:text-3xl">
        <tr>
          <th>Ranking</th>
          <th>Team</th>
          <th>MP</th>
          <th>W</th>
          {{-- <th>D</th> --}}
          <th>L</th>
          <th>Pts</th>
          <th>Pts(+/-)</th>
        </tr>
        @php($i = 1)
        @foreach ($teams_a as $item)
            <tr class="text-xl md:text-3xl font-bold">
                <td>{{ $i++ }}</td>
                <td class="text-xl font-normal" style="font-family: sans-serif;">{{ $item->team_name }}</td>
                <td>{{ $item->match_played }}</td>
                <td>{{ $item->win }}</td>
                {{-- <td>{{ $item->draw }}</td> --}}
                <td>{{ $item->lose }}</td>
                <td>{{ $item->points }}</td>
                <td>{{ $item->points_plus_min }}</td>
               
            </tr>
        @endforeach
      </table>
    </div>
  </div>

  {{-- ======================= Group B ====================== --}}
  <h1 class="text-xl font-bold text-center pt-4 underline pb-2">Group B - Ranking</h1>
  <div id="root" class="w-screen">
    <div class="table"  style="font-family: 'Amatic SC';font-wight:bold;">
      <table class="text-xl md:text-2xl lg:text-3xl ">
        <tr>
          <th>Ranking</th>
          <th>Team</th>
          <th>MP</th>
          <th>W</th>
          {{-- <th>D</th> --}}
          <th>L</th>
          <th>Pts</th>
          <th>Pts(+/-)</th>
        </tr>
        @php($i = 1)
        @foreach ($teams_b as $item)
            <tr class="text-xl font-bold">
                <td>{{ $i++ }}</td>
                <td class="text-xl font-normal" style="font-family: sans-serif;"> {{ $item->team_name }}</td>
                <td>{{ $item->match_played }}</td>
                <td>{{ $item->win }}</td>
                {{-- <td>{{ $item->draw }}</td> --}}
                <td>{{ $item->lose }}</td>
                <td>{{ $item->points }}</td>
                <td>{{ $item->points_plus_min }}</td>
               
            </tr>
        @endforeach
      </table>
    </div>
  </div>


</body>
</html>