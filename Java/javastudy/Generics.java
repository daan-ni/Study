//Basic Generics
//Polimorfismo Parametrico
package javastudy;
public class Generics<T> {
    private T data;

    public T getData(){System.out.println(this.data); return this.data; }
    public void setData(T data){
        // obligatory if not null
        this.data = data;
    }
    
}