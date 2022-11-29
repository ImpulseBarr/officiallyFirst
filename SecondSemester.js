let tabSecond;
window.addEventListener("load", function(){
    tabSecond = document.getElementById("modu");
    fetch("SecondSemester.php")
    .then(response=>response.json())
    .then(data => {
        let hstr = "";
        for(let i =0; i < data.length; i++){

            let Secondsemester41147 = data[i];

            hstr += "<tr>";
			hstr += "<td>" + (Secondsemester41147.ModuleCode)+ "</td>";
			hstr += "<td>" + (Secondsemester41147.ModuleName || "") + "</td>";
			hstr += "<td>" + (Secondsemester41147.Class || "") + "</td>";
			hstr += "</tr>";
		};


		tabSecond.innerHTML = hstr;
    });

});