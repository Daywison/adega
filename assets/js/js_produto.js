function confirmar_exclusao(produto) {
    if (!confirm("Tem certeza que deseja excluir o produto " + produto + " ? ")) {
        return false;
    }
    return true;
}