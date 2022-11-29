let tablecturers;
window.addEventListener("load", function(){
    tablecturers = document.getElementById("Lectcont");
    fetch("Lecturers.php")
    .then(response=>response.json())
    .then(data => {
        let hstr = "";
        for(let i =0; i < data.length; i++){

            let Lecturer41147 = data[i];

            hstr += "<tr>";
			hstr += "<td>" + (Lecturer41147.No)+ "</td>";
			hstr += "<td>" + (Lecturer41147.Name || "") + "</td>";
			hstr += "<td>" + (Lecturer41147.AcademicStatus|| "") + "</td>";
			hstr += "<td>" + (Lecturer41147.Phone || "") + "</td>";
			hstr += "<td>" + (Lecturer41147.Email || "") + "</td>";
			hstr += "</tr>";
		};
		tablecturers.innerHTML = hstr;

    });

});