<h1>Fornecedor</h1>

@if(empty($usuarios))
   <h2>Não existem usuarios cadastrados</h2>
@endif



@if (isset($fornecedores) && count($fornecedores) > 0  && count($fornecedores) < 10)
      <h2>Existem {{count($fornecedores)}} fornecedores cadastrados</h2> 
   @else
      <h2>Não existem fornecedores cadastrados</h2>
@endif

{{-- @unless (count($fornecedores) > 0  && count($fornecedores) < 10) @endunless //retorna apenas se for false --}} 