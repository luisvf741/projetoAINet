@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center;">
        <h2>Novo pedido</h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="POST">

                    <!-- data do pedido -->
                    <label for="datetimepicker1">Data do pedido</label>
                    <div class="input-group date form-group{{ $errors->has('date') ? ' has-error' : '' }}"
                         id='datetimepicker1'>

                        <input type='text' class="form-control" placeholder="Data do pedido (dd/mm/yyyy)"/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>

                    <!-- Descricao -->
                    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }} input-group"
                         style="min-width:100%">
                        <label for="comment">Descrição do pedido:</label>
                        <textarea class="form-control" id="comment">	</textarea>
                    </div>

                    <!-- Seleção ficheiro -->
                    <div class="form-group{{ $errors->has('ficheiro') ? ' has-error' : '' }} ">
                        <label for="img[]" class="control-label">Ficheiro</label>

                        <div class="input-group file_picker">
                            <input type="file" accept=".jpg,.tif,.png,.docx,.xls,.odt,.pdf" name="img[]" class="file" style="border-radius:0;
                            padding:10px;">

                            @if ($errors->has('ficheiro'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('ficheiro') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>

                    <!-- data limite do pedido -->
                    <label for="datetimepicker2">Data limite pedido</label>
                    <div class="input-group date form-group{{ $errors->has('date') ? ' has-error' : '' }}"
                         id='datetimepicker2'>

                        <input type='text' class="form-control" placeholder="Data limite do pedido (dd/mm/yyyy)"/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <div class="form-group">
                        <!-- Butões selecao cores -->
                        <div class="btn-group" data-toggle="buttons">
                            <h4>Imprimir</h4>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="cor"> Cores
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="preto_branco"> Pretro/Branco
                            </label>
                        </div>

                        <!-- Butões agrafado  -->
                        <div class="btn-group" data-toggle="buttons">
                            <h4>Agrafado</h4>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="agrafado" value="agrafado"> Agrafado
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="nao_agrafado"> Não agrafado
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- Tamanho papel  -->
                        <div class="btn-group" data-toggle="buttons">
                            <h4>Tamanho Papel</h4>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="a4"> A4
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="a3"> A3
                            </label>
                        </div>
                        <!-- Tipo papel  -->
                        <div class="btn-group" data-toggle="buttons">
                            <h4>Tipo Papel</h4>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="rascunho"> Rascunho
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="normal"> Normal
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="normal"> Fotográfico
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Aceitar</button>
                        <a href="{{route('request')}}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection