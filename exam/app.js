   

    function fonction() {
        var res = document.getElementById("soratr").value;
        document.getElementById("essayer").innerHTML = res;
    }




    var myInput = document.getElementById("soratr");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function(){
           
        var length = document.getElementById("length");
        //validation length   
        if (myInput.value.length >=10){        
            length.classList.remove("invalid");
            length.classList.add("valid");
            } 
            else {
            length.classList.remove("valid");
            length.classList.add("invalid");
            }
    }
      


