package javastudy;
public class Main{
    public static void main(String args[]){
        Generics<String> nov = new Generics<>();
        String oi = "Oieee! I'm using Whatsapp";
        nov.setData(oi);
        nov.getData();
    }
}