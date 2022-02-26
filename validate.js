function validate(arg){
    if(arg.value==""){
        document.getElementById(arg.id).classList.add("is-invalid");
        return false;
    }else{
       document.getElementById(arg.id).classList.remove("is-invalid");
       document.getElementById(arg.id).classList.add("is-valid"); 
       return true; 
    } 
   }