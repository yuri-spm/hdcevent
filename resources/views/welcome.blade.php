<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HDCEvent</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>       
    </head>
    <body>
       <h1>Algum título</h1>
       <img src="/img/banner.jpg" alt="Banner">
       @if(10 < 5)
          <p>A condição e true <p>
       @endif
      @if ($nome == "Pedro")
          <p>O nome é Pedro</p>
      @elseif($nome == "Yuri")
          <p>O nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissao}}</p>
      @else
        <p>O nome não é Pedro</p>
      @endif      
      
      @for ($i = 0; $i < count($arr); $i++)
          <p>{{$arr[$i]}} - {{$i}}</p>
          @if ($i == 2)
             <p>O i e 2</p>
          @endif
      @endfor
            
      @php
          $name = "João";
          echo $name;
      @endphp
    @foreach ($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p>{{$nome}}</p>
    @endforeach
    </body>
</html>
