function calculate (){

   
   let ModuleA = document.querySelector("#ModuleA").value;
   let ModuleB = document.querySelector("#ModuleB").value;
   let ModuleC = document.querySelector("#ModuleC").value;
   let ModuleD = document.querySelector("#ModuleD").value;
   let ModuleE = document.querySelector("#ModuleE").value;
   let ModuleF = document.querySelector("#ModuleF").value;
   let ModuleG = document.querySelector("#ModuleG").value;
   let ModuleH = document.querySelector("#ModuleH").value;
   let ModuleI = document.querySelector("#ModuleI").value;
   let N = document.querySelector("#Number").value;

   if (ModuleA == "")
   { 
      ModuleA = 0.00;
   }

   if (ModuleB == "")
   { 
      ModuleB = 0.00;
   }

   if (ModuleC == "")
   { 
      ModuleC = 0.00;
   }

   if (ModuleD == "")
   { 
      ModuleD = 0.00;
   }

   if (ModuleE == "")
   { 
      ModuleE = 0.00;
   }

   if (ModuleF == "")
   { 
      ModuleF = 0.00;
   }

   if (ModuleG == "")
   { 
      ModuleG = 0.00;
   }

   if (ModuleH == "")
   { 
      ModuleH = 0.00;
   }

   if (ModuleI == "")
   { 
      ModuleI = 0.00;
   }

   let TotalGP = parseFloat(ModuleA) + parseFloat(ModuleB) + parseFloat(ModuleC) + parseFloat(ModuleD) + parseFloat(ModuleE)  + parseFloat(ModuleF) +
   + parseFloat(ModuleG)  + parseFloat(ModuleH)  + parseFloat(ModuleI);
   
   let GradePointAverage = TotalGP / N;
      
   if (GradePointAverage >= 1.5) {
   document.querySelector("#showdata").innerHTML =`Grade Point Average: ${GradePointAverage}. <br>
   You Passed. `;}
   else 
   {
      document.querySelector("#showdata").innerHTML =`Grade Point Average: ${GradePointAverage} <br>
      You Failed. `;
   }

};