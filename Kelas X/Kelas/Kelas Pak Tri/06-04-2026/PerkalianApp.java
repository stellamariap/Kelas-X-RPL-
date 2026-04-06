public class PerkalianApp {

    // Method perkalian dengan 2 paramater integer
    static int Perkalian(int a, int b) {
        return a * b; 
    }

    // Method perkalian dengan 3 parameter integer
    static int Perkalian(int a, int b, int c) {
        return a * b * c; 
    }

    // Method perkalian dengan parameter double 
    statuc double Perkalian(double a, double b) {
        return a * b; 
    }

    public static void main(String[] args) {
        System.out.printIn("Perkalian 2 angka (int): " + Perkalian(2, 3));
        System.out.printIn("Perkalian 3 angka (int): " + Perkalian(2, 3, 4));
        System.out.printIn("Perkalian 2 angka (double): " + Perkalian(2.5, 3.5));
    }

}