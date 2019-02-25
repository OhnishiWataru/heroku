@extends('layouts.front')

@section('content')
  <body>
    <center>
      <table border="1" width="200" height="200">
        <div class="row mt-5">
          <div class="col-md-4 mx-auto">
            <h2>編集履歴</h2>
            <ul class="list-group">
              @if ($profile_form->histories != NULL)
                @foreach ($profile_form->histories as $history)
                  <li class="list-group-item">{{ $history->edited_at }}</li>
                @endforeach
              @endif
            </ul>
          </div>
        </div>
        <tr class="center">
          <h2 class="2">Myプロフィール</h2>
        </tr>
        <tr class="center">
          <td>氏名</td>
          <td>{{ $profiles[0]->name }}</td>
        </tr>
        <tr class="center">
          <td>性別</td>
          <td>{{ $profiles[0]->gender }}</td>
        </tr>
        <tr class="center">
          <td>趣味</td>
          <td>{{ $profiles[0]->hobby }}</td>
        </tr>
        <tr class="center">
          <td>自己紹介</td>
          <td>{{ $profiles[0]->introduction }}</td>
        </tr>
      </table>
    </center>
  </body>
@endsection
