<h1>Fornecedor</h1>

@if(empty($usuarios))
   <h2>Não existem usuarios cadastrados</h2>
@endif

{{-- @if(isset($fornecedores))
   @for ($i = 0; isset($fornecedores[$i]); $i++)
      <div>
         Fornecedor : {{$itemFornecedor[$i]['nome'] ?? 'sem nome'}}
         <br>
         status : {{$itemFornecedor[$i]['status'] ?? 'sem status'}}
         <br> 
         cnpj : {{$itemFornecedor[$i]['cnpj'] ?? 'sem cnpj'}}
         <br>
         <hr>
      </div>
   @endfor
@endif --}}

@foreach ($fornecedores as $itemFornecedor)
   Iteração atua: {{ $loop->iteration }} <br>
   <div>
      @if ($loop->first)
          Primeira iteração do loop
      @endif
      <br>
      Fornecedor : {{$itemFornecedor['nome'] ?? 'sem nome'}}
      <br>
      status : {{$itemFornecedor['status'] ?? 'sem status'}}
      <br> 
      cnpj : {{$itemFornecedor['cnpj'] ?? 'sem cnpj'}}
      <br>
      @if ($loop->last)
         Ultima iteração do loop
         <br>
         Total de registros {{ $loop->count }}
      @endif
      <hr>
   </div>
@endforeach

@if (isset($fornecedores) && count($fornecedores) > 0  && count($fornecedores) < 10)
      <h2>Existem {{count($fornecedores)}} fornecedores cadastrados</h2> 
   @else
      <h2>Não existem fornecedores cadastrados</h2>
@endif


{{-- @unless (count($fornecedores) > 0  && count($fornecedores) < 10) @endunless retorna apenas se for false --}} 