//Linked List
//Basic Generics
//Anotações e Enums
//Polimorfismo Param~etric????/
//PADROES DE PROJETOS????????/
//Herança       
//Dependencia, Associação (Composição e agregação)

enum Peso{PESADO, LEVE, DA_PRA_LEVAR} //Enums são como classes
enum UserStatus{
    OK(1, "Esta tudo de boa"),
    NOT_OK(2, "Não tá legal")

    private int valor;
    private String descricao;
    private UserStatus(int v, String d){
        this.valor = v;
        this.descricao = d;
    }
 
}