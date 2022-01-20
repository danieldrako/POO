function Account(name, document) {
    this.id;
    this.name = name;
    this.document = document;
    this.email;
    this.password;

}

/*
A partir de las nuevas especificaciones del EcmaScript 6 ya podemos declarar una clase con la palabra reservada class, aunque es importante aclarar que estos no dejan de ser prototipos, sino todo lo contrario.

Además tendremos una palabra clave para definir un constructor, y dentro de este estarán las propiedades de nuestra clase definidas listas para inicializarse.

Transcribamos el código JavaScript que generamos anteriormente a este nuevo estándar.

La clase Car quedaría así:
class Car {

    constructor(license, driver) {
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }

    printDataCar() {
        console.log(this.driver)
        console.log(this.driver.name)
        console.log(this.driver.document)
    }
    
}

Si quisiéramos declarar un método, en esta nueva sintaxis dejaremos de utilizar la palabra clave function.

Ahora veamos a la clase Account:

class Account {

    constructor(name, document) {
        this.id;
        this.name = name;
        this.document = document;
        this.email;
        this.password;
    }
    

}


*/