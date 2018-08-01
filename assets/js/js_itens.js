$(function() {
    $("#produto").autocomplete({
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
                            estoque_atual: item.estoque_atual,
                            preco: item.preco

                        }
                    }));
                }
            });
        },
        select: function(event, ui) {
            if (ui.item) {
                $('#id_produto').val(ui.item.id);
                $('#estoque').val(ui.item.estoque_atual);
                $('#preco').val(ui.item.preco);
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

function inserirItens() {
    retorno = "";
    cont = 1;
    id_produto = $("#id_produto").val();
    id_venda = $("#id_venda").val();
    qtde = $("#qtde").val();
    preco = $("#preco").val();
    $.ajax({
        url: base_url + "itens/inserir",
        dataType: 'json',
        type: "post",
        data: {
            id_venda: id_venda,
            id_produto: id_produto,
            preco: preco,
            qtde: qtde
        },
        success: function(data) {
            $.each(data, function(key) {
                subtotal = data[key].preco * data[key].qtde;
                retorno += "<tr>";
                retorno += "<td align='left'>" + cont++ + "</td>";
                retorno += "<td align='left'>" + data[key].produto + "</td>";
                retorno += "<td align='right'>" + moeda(parseFloat(data[key].preco)) + "</td>";
                retorno += "<td align='right'>" + data[key].qtde + "</td>";
                retorno += "<td align='right'>" + moeda(subtotal) + "</td>";
                retorno += "<td align='center'><a href='javascript:;' onclick='excluir(" + data[key].id_item + ")' class='btn excluir '>Excluir</a></td>";
                retorno += "</tr>";
            });
            $('#listaProduto').html(retorno);
        }
    })
}

function listaItens() {
    var retorno = "";
    cont = 0;
    $.ajax({
        url: base_url + "itens/listarItens",
        type: "post",
        dataType: "json",
        success: function(data) {
            $.each(data, function(key) {
                subtotal = data[key].preco * data[key].qtde;
                retorno += "<tr>";
                retorno += "<td align='left'>" + cont++ + "</td>";
                retorno += "<td align='left'>" + data[key].produto + "</td>";
                retorno += "<td align='right'>" + moeda(parseFloat(data[key].preco)) + "</td>";
                retorno += "<td align='right'>" + data[key].qtde + "</td>";
                retorno += "<td align='right'>" + moeda(subtotal) + "</td>";
                retorno += "<td align='center'><a href='javascript:;' onclick='excluir(" + data[key].id_item + ")' class='btn excluir '>Excluir</a></td>";
                retorno += "</tr>";
            });
            $('#listaProduto').html(retorno);
        }
    });
}

function excluir(id) {
    retorno = "";
    cont = 1;
    id_venda = $("#id_venda").val();
    $.ajax({
        url: base_url + "itens/excluir",
        type: "post",
        dataType: "json",
        data: {
            id_item: id,
            id_venda: id_venda
        },
        success: function(data) {
            $.each(data, function(key) {
                subtotal = data[key].preco * data[key].qtde;
                retorno += "<tr>";
                retorno += "<td align='left'>" + cont++ + "</td>";
                retorno += "<td align='left'>" + data[key].produto + "</td>";
                retorno += "<td align='right'>" + moeda(parseFloat(data[key].preco)) + "</td>";
                retorno += "<td align='right'>" + data[key].qtde + "</td>";
                retorno += "<td align='right'>" + moeda(subtotal) + "</td>";
                retorno += "<td align='center'><a href='javascript:;' onclick='excluir(" + data[key].id_item + ")' class='btn excluir '>Excluir</a></td>";
                retorno += "</tr>";
            });
            $('#listaProduto').html(retorno);
        }
    });
}

function moeda(valor) {
    return "R$ " + valor.toFixed(2).replace(".", ",");
}

function limparItens() {
    $.ajax({
        url: base_url + "itens/limparItens",
        type: "post",
        data: { id_venda: $("#id_venda").val() },
        success: function() {
            $('#listaProduto').html("");
        }
    });
}