//Linked List = lista encadeada que aponta para o proximo elemento e o anterior elemento
//Anotações e Enums
//PADROES DE PROJETOS????????/
//Herança       
//Dependencia, Associação (Composição e agregação)
package javastudy;
enum Peso{PESADO, LEVE, DA_PRA_LEVAR} //Enums são como classes
enum UserStatus{
    OK(1, "Esta tudo de boa"),
    NOT_OK(2, "Não tá legal");

    private int valor;
    private String descricao;
    private UserStatus(int v, String d){
        this.valor = v;
        this.descricao = d;
    }

}