function confirmar_exclusao(cliente) {
    if (!confirm("Tem certeza que deseja excluir o cliente " + cliente + " ? ")) {
        return false;
    }
    return true;
}


function buscaCliente() {
    var retorno = "";
    var pesq = $('#pesq').val();
    $.ajax({
        url: base_url + "cliente/buscaCliente_json",
        type: "post",
        dataType: "json",
        data: { pesq: pesq },
        success: function(data) {
            $.each(data, function(key) {
                retorno += "<tr>";
                retorno += "<td align='left'>" + data[key].id_cliente + "</td>";
                retorno += "<td align='left'>" + data[key].cliente + "</td>";
                retorno += "<td align='center'>" + data[key].email + "</td>";
                retorno += "<td align='center'>" + data[key].celular + "</td>";
                retorno += "<td align='center'> <a href='" + base_url + "cliente/editar/" + data[key].id_cliente + "' class='btn alterar '>Alterar</a>";
                retorno += "<a href='" + base_url + "cliente/excluir/" + data[key].id_cliente + "' class='btn excluir '>Excluir</a></td>";
                retorno += "</tr>";
            });
            $('#listaCliente').html(retorno);
        }


    });
}