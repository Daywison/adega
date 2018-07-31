function confirmar_exclusao(produto) {
    if (!confirm("Tem certeza que deseja excluir o produto " + produto + " ? ")) {
        return false;
    }
    return true;
}

function buscaProduto() {
    var retorno = "";
    var pesq = $('#pesq').val();
    $.ajax({
        url: base_url + "produto/buscaProduto_json",
        type: "post",
        dataType: "json",
        data: { pesq: pesq },
        success: function(data) {
            $.each(data, function(key) {
                retorno += "<tr>";
                retorno += "<td align='left'>" + data[key].id_produto + "</td>";
                retorno += "<td align='left'>" + data[key].produto + "</td>";
                retorno += "<td align='center'>" + data[key].estoque_atual + "</td>";
                retorno += "<td align='center'>" + data[key].preco + "</td>";
                retorno += "<td align='center'>" + data[key].preco + "</td>";
                retorno += "<td align='center'> <a href='" + base_url + "produto/editar/" + data[key].id_produto + "' class='btn alterar '>Alterar</a>";
                retorno += "<a href='" + base_url + "produto/excluir/" + data[key].id_produto + "' class='btn excluir '>Excluir</a></td>";
                retorno += "</tr>";
            });
            $('#listaProduto').html(retorno);
        }


    });
}