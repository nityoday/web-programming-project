
   var result=0;

   function calculate(value) {
       result = result + value;
       document.getElementById("result").innerHTML = result;
       document.getElementById("inr").style.display = "inline";
   }

   /*
   window.addEventListener("load", afterLoaded,false);
   function afterLoaded(){
    document.getElementById("ShowTotal").innerHTML = result;     
   }
   */
   