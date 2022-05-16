  </head>
  <body>
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
          <input type="text" class="input-add" name="content" />
          <input class="button" type="submit" value="追加" />
        </form>
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
          <input type="text" class="input-add" name="content" />
          <input class="button" type="submit" value="追加" />
        </form>
          <div class="narabe">
        <table>
            @csrf
          <tr>

      </div>
    </div>
  </div>
  </div>

</body>
</html>
