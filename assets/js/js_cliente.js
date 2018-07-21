function confirmar_exclusao(cliente) {
    if (!confirm("Tem certeza que deseja excluir o cliente " + cliente + " ? ")) {
        return false;
    }
    return true;
}