function validateform(){  
    var username = document.myform.username.value;  
    var password = document.myform.password.value;  
      
    if (username==null || username==""){  
      alert("É necessário preencher o campo username e password");  
      return false;  
    }else if(password.length<8){  
      alert("Password tem de ter um mínimo de 8 caracteres");  
      return false;  
      }  
    }
