class UberPool extends Car {
    String brand;
    String model;

    public UberPool(String license, Account driver, String brand, String model){            //Constructor que coincide cno el de la clase padre
        super(license, driver);      //llamada al metodo constructor de la clase car
        this.brand = brand;         // super hará referencia a los atributos y los metodos de la super  clase 
        this.model = model;             //this  hará referencia a los atributos de la clase hija 

        
    } 
}

    

