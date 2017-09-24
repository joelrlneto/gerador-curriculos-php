$(function(){
    $("#btn-adicionar-formacao").click(function(e){
        e.preventDefault();
        var linha = '<div class="card">'+
                    '    <div class="card-body">'+
                    '        <div class="row">'+
                    '            <div class="col-12 col-md-5">'+
                    '                <input type="text" class="form-control" placeholder="Curso">'+
                    '            </div>'+
                    '            <div class="col-12 col-md-5">'+
                    '                <input type="text" class="form-control" placeholder="Instituição">'+
                    '            </div>'+
                    '            <div class="col-12 col-md">'+
                    '                <input type="text" class="form-control" placeholder="Conclusão">'+
                    '            </div>'+
                    '            <div class="col-12 col-md">'+
                    '                <button type="button" class="btn btn-danger form-control btn-remover-item" title="Remover formação">&times;</button>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '</div>';
        $("#div-formacoes").append(linha);
    });

    $("#btn-adicionar-experiencia").click(function(e){
        e.preventDefault();
        var linha = '<div class="card">'+
                    '    <div class="card-body">'+
                    '        <div class="row">'+
                    '            <div class="col-12 col-md-4">'+
                    '                <input type="text" class="form-control" placeholder="Cargo">'+
                    '            </div>'+
                    '            <div class="col-12 col-md-3">'+
                    '                <input type="text" class="form-control" placeholder="Empresa">'+
                    '            </div>'+
                    '            <div class="col-6 col-md-2">'+
                    '                <input type="text" class="form-control" placeholder="Início">'+
                    '            </div>'+
                    '            <div class="col-6 col-md-2">'+
                    '                <input type="text" class="form-control" placeholder="Fim">'+
                    '            </div>'+
                    '            <div class="col col-md">'+
                    '                <button type="button" class="btn btn-danger btn-remover-item form-control" title="Remover experiência">&times;</button>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '</div>';
        $("#div-experiencias").append(linha);
    });

    $("#div-formacoes, #div-experiencias").on("click", ".btn-remover-item", function(){
        $(this).parent().parent().parent().parent().remove();
    })
});