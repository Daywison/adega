$(function() {
    $("#pesq").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: base_url + "produto/buscaProduto_json",
                type: "post",
                dataType: "json",
                data: { pesq: request.term },
                success: function(data) {
                    response($.map(data, function(item) {
                        return {
                            label: item.produto,
                            id: item.id_produto,
                            estoque_atual: item.estoque_atual

                        }
                    }));
                }
            });
        },
        select: function(event, ui) {
            if (ui.item) {
                $('#id_produto').val(ui.item.id);
                $('#estoque_atual').val(ui.item.estoque_atual)
                $('#qtde').focus();
            }
        }

    });

    $("#qtde").on("keydown", function(event) {
        if (event.keyCode === 13) {
            inserir();
            $("input:text").val("");
            $("#pesq").focus();
        }
    })
});

function inserir() {
    id_produto = $("#id_produto").val();
    qtde = $("#qtde").val();
    motivo = "Entrada avulsa";
    $.ajax({
        url: base_url + "entrada/inserir",
        type: "post",
        data: {
            id_produto: id_produto,
            motivo: motivo,
            qtde: qtde
        },
        success: function() {
            listaEntradaAtual();
        }
    })
}

function listaEntradaAtual() {
    var retorno = "";
    $.ajax({
        url: base_url + "entrada/listarEntradasAtuais",
        type: "post",
        dataType: "json",
        success: function(data) {
            $.each(data, function(key) {
                retorno += "<tr>";
                retorno += "<td align='left'>" + data[key].id_produto + "</td>";
                retorno += "<td align='left'>" + data[key].data_entrada + "</td>";
                retorno += "<td align='center'>" + data[key].produto + "</td>";
                retorno += "<td align='center'>" + data[key].qtde_entrada + "</td>";
                retorno += "<td align='center'><a href='" + base_url + "entrada/excluir/" + data[key].id_entrada + "' class='btn excluir '>Excluir</a></td>";
                retorno += "</tr>";
            });
            $('#listaEntrada').html(retorno);
        }
    });
}