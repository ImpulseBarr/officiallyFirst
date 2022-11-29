let tabclassreps;
window.addEventListener("load", function(){
    tabclassreps = document.getElementById("Repcont");
    fetch("Classreps.php")
    .then(response=>response.json())
    .then(data => {
        let hstr = "";
        for(let i =0; i < data.length; i++){

            let Classrep41147 = data[i];

            hstr += "<tr>";
			hstr += "<td>" + Classrep41147.Id+ "</td>";
			hstr += "<td>" + (Classrep41147.Name || "") + "</td>";
			hstr += "<td>" + (Classrep41147.Class|| "") + "</td>";
			hstr += "<td>" + (Classrep41147.Phone || "") + "</td>";
			hstr += "<td>" + (Classrep41147.Email || "") + "</td>";
			hstr += "</tr>";
		};
		tabclassreps.innerHTML = hstr;

    });

});