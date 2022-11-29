let tabFirst;
window.addEventListener("load", function(){
    tabFirst = document.getElementById("modo");
    fetch("FirstSemester.php")
    .then(response=>response.json())
    .then(data => {
        let hstr = "";
        for(let i =0; i < data.length; i++){

            let Firstsemester41147 = data[i];

            hstr += "<tr>";
			hstr += "<td>" + (Firstsemester41147.ModuleCode)+ "</td>";
			hstr += "<td>" + (Firstsemester41147.ModuleName || "") + "</td>";
			hstr += "<td>" + (Firstsemester41147.Class || "") + "</td>";
			hstr += "</tr>";
		};
		tabFirst.innerHTML = hstr;

    });

});