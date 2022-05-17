<style>
    body {
      font-size:16px;
      margin: 5px;
      background-color: #2d197c;
    }


header{
  padding-right:50px;
  padding-left:50px;
  padding-top:20px;
  position: sticky;
  left: 0;
  top: 0;
  background: #fff;
}
.head {
  justify-content: space-between;
  display: flex;
  font-weight: bolder;
  position: sticky;
  bottom: 0;
}

.head1{
  padding: 10px;
  margin: 10px;
}

.head2{
  padding: 10px;
  margin: 10px;
}

ul{
  list-style: none;
  margin-top: -8px;
}

    td {
      padding: 5px 10px;
      text-align: center;
    }

    .narabe{
      display:flex;
      flex-flow: column;
    }

    .button {
    text-align: left;
    border: 2px solid #dc70fa;
    font-size: 12px;
    color: #dc70fa;
    background-color: #fff;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
}
.input-add {
    width: 80%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
}
.input-update {
    width: 90%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
}
    .card {
    background-color: #fff;
    width: 50vw;
    padding: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
}
    h2 {
      font-size:28px;
      color:white;
      text-shadow:1px 0 5px #289ADC;
      margin-left: 1px;
      margin: 0;
    }
    .content {
      margin:10px; 
    }
</style>
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
      <h2 class="title">カテゴリー追加</h2>
            <div class="todo">
              @if ($errors->has('content'))
                  <tr>
                    <th>ERROR</th>
                  <td>
                  {{$errors->first('content')}} 
                </td>
            </tr>
          @endif
        <form action="/cate/create" method="post">
            @csrf
          <input type="text" class="input-add" name="content">
          <input class="button" type="submit" value="追加" />
        </form>
          <div class="narabe">
        <table>
            @csrf
          <tr>
            <th></th>
            <th>カテゴリー一覧</th>
            <th></th>
            <th></th>
          </tr>
          
                    <tr>
            @foreach ($cates as $item)
            
            <td>
              
            </td>

            <form action="/cate/update" method="post">
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
              <form action="/cate/delete" method="post" >
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