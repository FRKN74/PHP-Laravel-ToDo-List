<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/todo.css')}}">
    <title>To-Do List</title>
</head>
<body>
    <div class="container">
        <h3 style="text-align: center; margin-bottom:10px">To-Do List</h3>
            <div class="row">
                <div class="col-md-3 border-light left-bar">
                    <label style="color: green; ">Tamamlandı</label> 
                    <hr style="color: white"> 
                    <div class="tamamla">
                        
                        <ul id="todoContainerSOl">
                            @foreach ($veriler as $okey)
                                @if ($okey->durum == "okey")                  
                                <li id="okeys">
                                    <a href="{{route('todo.delete',$okey->id)}}" class="delete">X</a>
                                    <label style=" text-decoration: line-through">{{$okey->gorev}}</label>
                                </li>
                                @endif
                            @endforeach

                    </div>
                </div>
                <div class="col-md-6 border-secondary text-center orta">
                    <form action="{{route('todo.create')}}" method="post">
                        @csrf
                        <div class="input-group form-group">
                            <input type="text" name="gorev" id="inpGorev" class="form-control" placeholder="Yeni görev giriniz" autofocus>

                                <button type="submit" class="input-group-text btn btn-success ml-2 "><i class="fa fa-add"></i></button>
                        </div>
                    </form>

                    <div class="content" id="orta">
                        <ul id="todoContainer">
                            
                            @foreach ($veriler as $todo)
                                @if($todo->durum == "none")
                                    <li>
                                        <a href="{{route('todo.delete',$todo->id)}}" class="delete">X</a><label>{{$todo->gorev}}</label>
                                        <a name="later" href="{{route('todo.later',$todo->id)}}"  class="btn btn-secondary btn-sm float-right mr-2 mb-1" value="okey">Sonra</a>
                                        <a name="okey" href="{{route('todo.okey',$todo->id)}}"  class="btn btn-success btn-sm float-right mr-2 mb-1" value="okey">Tamamala</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        
                        
                        
                    </div>


                </div>
                <div class="col-md-3 border-secondary right-bar">
                    <label style="color: red;" >Tamamlanyaman(Sonra)</label>
                    <hr style="color: white"> 

                    <div class="sonra">
                        
                        <ul id="todoContainerSag">
                            @foreach ($veriler as $later)
                                @if ($later->durum == "later")

                                    <li id="later">
                                        <a href="{{route('todo.delete',$later->id)}}" class="delete">X</a>
                                        <label>{{$later->gorev}}</label><a href="{{route('todo.gerial',$later->id)}}" class="btn btn-warning float-right btn-sm">Geri al</a>
                                    </li>

                                @endif
                            @endforeach
                            
                            
                    </div>
                    
                </div>

    </div>






<script src="{{asset('js/todo.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>