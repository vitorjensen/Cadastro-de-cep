
@extends('layouts.layout_create')

@section('title')
Cadastro
@endsection

@section('content')

<script language="JavaScript">
	
  function mascara(t, mask){
 
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 
  if (texto.substring(0,1) != saida){
      t.value += texto.substring(0,1);
  }

 }


</script>

<body onload="foco()">
<div class="card">
<div class="card-body">
<div class="card card-default" >
  <div class="card-header" style="background-color: whitesmoke;">
  <h6 class="card-title">Cadastro / <span>Endereços:</span></h6>
 
      
    </div>
    <div class="modal-body">

        <div class="card-body" style="display: block;" data-select2-id="44">
        <div class="row">
        <div class="card-body">
        <div class="row">
        <div class="col-6">
        <div class="form-group">
        <div class="form-custom-control">
        <label class="form-check-label" for="flexRadioDefault1">Via Cep </label>
        <input class="form-check-input" type="radio" name="txt_pessoa" id="txt_pessoa" value="Física" style="margin: 5px;" onchange="formCep();">
  
    <label class="form-check-label" for="flexRadioDefault2">Manual</label>
    <input class="form-check-input" type="radio" name="txt_pessoa" id="txt_pessoa" checked value="Jurídica" style="margin: 5px;" onchange="formManual();">
    </div>
    </div>

</div>
</div>
</div>
<script>

function formCep(){
      //console.log("carregar formulario pessao juridica");
      document.getElementById("form-cep").style.display = 'block';
      document.getElementById("form-rua").style.display = 'none';
      document.getElementById("form-cidade").style.display = 'none';
    }
    function formManual(){
      //console.log("carregar formulario pessao fisica");
      document.getElementById("form-cep").style.display = 'block';
      document.getElementById("form-rua").style.display = 'block';
      document.getElementById("form-cidade").style.display = 'block';
    }
    
  </script>

    <form action="{{ route('clientes-store')}}" id="frm_cep" name="frm_cep" method="POST" enctype="multipart/form-data">  
      @csrf   
    <div class="row">
    <div class="col-4" id="form-cep">
    <label>Cep:</label>
    <input type="text" id="cep" maxlength="8" name="cep" value="{{ old('cep') }}" class="form-control cep {{ $errors->has('cep') ? 'is-invalid' : ''}}">
    <div class="invalid-feedback">{{ $errors-> first('cep')}}</div>
    </div>

    <div class="col-4" id="form-rua">
    <label>Rua:</label>
    <input type="text" id="rua" name="rua" value="{{ old('rua') }}" class="form-control {{ $errors->has('rua') ? 'is-invalid' : ''}}">
    <div class="invalid-feedback">{{ $errors-> first('rua')}}</div>
    </div>

    <div class="col-4" id="form-cidade">
    <label>Cidade:</label>
    <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}" class="form-control  {{ $errors->has('cidade') ? 'is-invalid' : ''}}">
    <div class="invalid-feedback">{{ $errors-> first('cidade')}}</div>
    </div>
    </div>
    </div>
    <br>

    </div>
    </div>

<div class="card-footer" style="background-color: whitesmoke;">
<button class="btn btn-sm btn-info float-left" onclick="return validar_dados()"><i class="fa fa-check"></i> Cadastrar:</button>


</form>
</div>

</div>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/jquery-mask/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/auth/register.js')}}"></script>


</body>
@endsection