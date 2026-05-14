class bank{
    Bankname=123;
    username;
    fahername;
    CNIC;
    accountnumber;
    #accountpassword;
      
    constructor(user, fname , cnic, number, password){
        this.username=user;
        this.fathername=fname;
        this.CNIC=cnic;
        this.accountnumber=number;
        this.#accountpassword=password;
    }

    showdetails(){
        console.log("username=", this.username );
         console.log("fathername=", this.fathername );
          console.log("CNIC =", this.CNIC );
         console.log("accountnumber=", this.accountnumber );
          
    }

    
}

let name = prompt("Enter your name");
let fathername=prompt("enter your father name");
let cnic=prompt("enter you cnic");
let accountnumber=prompt("enter your account number");
let accountpassword=prompt("eneter you account password");

let bankdetails=new bank(name,fathername,cnic,accountnumber,accountpassword);
bankdetails. showdetails();
