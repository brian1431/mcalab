
import java.util.*;
import java.text.*;

interface Calculation{
	void total();

}

class Order implements Calculation{
	int P_id, quantity;
	String Name;
	float price,total;
	
	
	public Order( int p_id, String n, int q, float p) {
		
		P_id = p_id;
		Name = n;
		quantity = q;
		price = p;
		
		
	}
	
	@Override
	public void total() {
		total = 0 + (quantity * price);
		
		
		
	}
	
	public void Display() {
		
		 System.out.println(P_id+"\t\t\t"+Name+"\t\t\t"+quantity+"\t\t\t"+price+"\t\t\t\t"+total);
		
	}
	
	
}

public class Bill {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int n, P_id, quant;
		String P_name;
		float price,net_amt=0;
		
		 
	        
	    DateFormat df=new SimpleDateFormat("dd/MM/yyyy");
	    Date d= new Date();
	    System.out.println("\t\t\tSHOPPING CART");
		System.out.println("\nEnter the number of products to be added:");
        n = sc.nextInt();
        
        Order  O[] = new Order[n];
        for ( int i = 0; i<n; i++)
          {
        	System.out.println("\nItem No:"+(i+1));
        	
        	System.out.println("Enter the Product ID:");
        	P_id = sc.nextInt();
        	
        	System.out.println("Enter the Product Name:");
        	P_name = sc.next();
        	
        	System.out.println("Enter the quantity:");
        	quant = sc.nextInt();
        	
        	System.out.println("Enter the unit price:");
        	price = sc.nextFloat();
        	
            O[i] = new Order(P_id,P_name,quant,price);
            O[i].total();
            
          }
        
        System.out.println("\n\n\t\t\t\t\t\tINVOICE GENERATED");
        
        System.out.println("Date: "+df.format(d));
        
        
        System.out.println("\nProduct Id\t\tName\t\tQuantity\t\t\tunit price\t\t\tTotal");
		
        
        for ( int i = 0; i<n; i++)
        {
           O[i].Display();
           net_amt += O[i].total;
		
        }
       
        System.out.println("\t\t\t\t\t\t\t\t\t\t\tNet. Amount\t"+ net_amt);
			
		


	}

}
