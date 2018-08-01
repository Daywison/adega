$(function() {
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
            $("input:text").val("");
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


function novaVenda() {
    data = $("#data_venda").val();
    hora = $("#hora_venda").val();
    $.ajax({
        url: base_url + "venda/novaVenda",
        type: "post",
        data: {
            data_venda: data,
            hora_venda: hora
        },
        success: function(data) {
            $("#id_venda").val(data);
        }
    })
}

function finalizarVenda() {
    id_venda = $("#id_venda").val();
    data = $("#data_venda").val();
    hora = $("#hora_venda").val();
    $.ajax({
        url: base_url + "venda/novaVenda",
        type: "post",
        data: {
            data_venda: data,
            hora_venda: hora,
            id_venda: id_venda
        },
        success: function() {
            window.location.href = base_url + "venda/detalhes/" + id_venda
        }
    })
}


function cancelaVenda() {
    id_venda = $("#id_venda").val();
    $.ajax({
        url: base_url + "venda/cancelaVenda",
        type: "post",
        data: {
            id_venda: id_venda
        },
        success: function() {
            alert("tudo limpo");
        }
    })
}