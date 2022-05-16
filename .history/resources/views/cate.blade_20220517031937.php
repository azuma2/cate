  <body>
  <header>
    <div class="head">
      <ul>
        <li class="head1"><a href="{{ url('/') }}">TODO</a></li>
        <li class="head2"><a href="{{ url('/cate') }}">カテゴリー一覧</a></li>
      </ul>
    </div>
  </header>
  <div class="container">
    <div class="card">
      <h2 class="title">Todo List</h2>
            <div class="todo">
              @if ($errors->has('content'))
                  <tr>
                    <th>ERROR</th>
                  <td>
                  {{$errors->first('content')}} 
                </td>
            </tr>
          @endif
        <form action="/todo/create" method="post">
            @csrf
          <input type="text" class="input-add" name="content">
          <input class="button" type="submit" value="追加" />
        </form>
          <div class="narabe">
        <table>
            @csrf
          <tr>
            <th>カテゴリー</th>
          </tr>
          
                    <tr>
            @foreach ($items as $item)
            
            <td>
              
            </td>

            <form action="/todo/update" method="post">
              @csrf
              <td>
                <input type="text" class="input-update" value="{{$item->content}}" name="content" />
              </td>
              <td>
                <input type="hidden"  name="id" value="{{$item->id}}">
                <input class="button" type="submit" value="更新" >
              </td>
            </form>
            <td>
              <form action="/todo/delete" method="post" >
                    @csrf
                <input  type="hidden" name="id" value="{{$item->id}}" >
                <input class="button" type="submit" value="削除" >
              </form>
            </td>
            </div>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  </div>

</body>
</html>