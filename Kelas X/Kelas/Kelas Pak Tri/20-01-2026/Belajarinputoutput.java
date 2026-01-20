
import java.util.Scanner;


public class Belajarinputoutput {

    
    public static void main(String[] args) {
        
        Scanner inputUser= new Scanner(System.in) ;
            System.out.println("Inputkan Nama Anda: ");
        String nama= inputUser.nextLine(); 
            System.out.println("Nama Yang di Input: "+nama);
            
            System.out.print("Berapakah Nomor Absen Anda: ");
        int absen= inputUser.nextInt();
            System.out.println("Nomor Absen Anda: "+absen);
            
            System.out.println("Berapakah Uang Sakumu: ");
        double uang= inputUser.nextDouble(); 
            System.out.println("Uang Sakuku Adalah Rp."+uang);
            
            
        Scanner masukan= new Scanner(System.in); 
            System.out.println("Character apa yang Kamu Suka: ");
        String simbol= masukan.nextLine(); 
            System.out.println("Character yang Kamu Suka: "+simbol);
                
            
            
                
    }
    
}
