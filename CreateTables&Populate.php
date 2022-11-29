<?php
	require_once "../../db.php";

    $sql = "CREATE TABLE Lecturer41147(No int primary key AUTO_INCREMENT not null, Name varchar(40) not null, AcademicStatus varchar(30), Phone varchar(20), Email varchar(50) )";
    if ($conn -> query($sql) === TRUE){
        echo "Lecturer Table Created successfully";
    }
    else 
    {
        echo "error while creating the table: ".$conn->error;
    }

    $query = "CREATE TABLE Classrep41147(Id int(5) primary key not null, Name varchar(30) not null, Class varchar(5), Phone varchar(15), Email varchar(50) )";
    if ($conn -> query($query) === TRUE){
        echo "classrep Table Created successfully";
    }
    else 
    {
        echo "error while creating the table: ".$conn->error;
    }

    $code = "CREATE TABLE Firstsemester41147(ModuleCode varchar(7) primary key not null, ModuleName varchar(50) not null, Class varchar(5) not null)";
    if ($conn -> query($code) === TRUE){
        echo "FirstModules Table Created successfully";
    }
    else 
    {
        echo "error while creating the table: ".$conn->error;
    }

    $syntax = "CREATE TABLE Secondsemester41147(ModuleCode varchar(7) primary key not null, ModuleName varchar(50) not null, Class varchar(5) not null)";
    if ($conn -> query($syntax) === TRUE){
        echo "SecondModules Table Created successfully";
    }
    else 
    {
        echo "error while creating the table: ".$conn->error;
    }


    $sql = "INSERT INTO Classrep41147(Id,Name,Class,Phone,Email) VALUES(41243,'Festus T.M Kahunla','Year4','078302242','Kahunla@gmail.com');";
    $sql .= "INSERT INTO Classrep41147(Id,Name,Class,Phone,Email) VALUES(41223,'Chernor .A Bah','Year3','099567898','Chrii@gmail.com');";
    $sql .= "INSERT INTO Classrep41147(Id,Name,Class,Phone,Email) VALUES(41345,'Janet kalokoh','Year2','088345546','janeykal@gmail.com');";
    $sql .= "INSERT INTO Classrep41147(Id,Name,Class,Phone,Email) VALUES(40435,'Alie Marah','Year5','076787657','Aliemar@gmail.com');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG214','Applied Electricity 1','Year2');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG215','Electronic Engineeering 1','Year2');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG216','Measurement and Instrumentation','Year2');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG217','Introduction to Electrical Engineering','Year2');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG311','Electronics','Year3');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG312','Electrical Circuits','Year3');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG313','Computer Operating system','Year3');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG315','Communication 1','Year3');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG316','Digital Electronics','Year3');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG317','Electrical and Electronic Lab','Year3');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG410','Computer PRogramming 1','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG411','Signal Analysis/Processing','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG412','Control Systems','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG413','Electrical Machines','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG414','Advance Digital Systems','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG415','Mobile Communication','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG416','Engineering Management','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG417','Electrical and Electronics Lab','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG418','Satellite Communication','Year4');";
    $sql .= "INSERT INTO Firstsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG419','Power System','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG222','Applied Electricity 2','Year2');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG224','Computer Hardware & Maintenance','Year2');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG225','Fundamental Of Digital Systems','Year2');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG227','Simulation Tools','Year2');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG321','Electronics','Year3');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG322','Electrical Circuit','Year3');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG323','Intro To Micro Computer','Year3');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG324','Electromagnetic Fields and waves','Year3');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG325','Communication','Year3');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG326','Digital Systems 2','Year3');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG421','Data Processing','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG422','Control System','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG423','Computer Programming 2','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG424','Advance Digital Designs 2','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG425','Optical Commmunication','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG426','Engineering Economics','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG427','Web Design','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG428','Power Engineering','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG429','renewable Energy System','Year4');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG523','Digital Control Systems 5','Year5');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG527','Computer Modeling in Power Eng','Year5');";
    $sql .= "INSERT INTO Secondsemester41147(ModuleCode,ModuleName,Class) VALUES('EENG524','Pulse Modulation & Information Theory','Year5');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Prof J.A.S redwood Sawyer','Professor','076670904/088001019','abiosehrs@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Dr. Samba Sesay','Senior Lecturer/HOD','076323708','sambasey@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Dr. David Caulker','Lecturer 1','078622914/088090706','dauda9@yahoo.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Dr. Mohamed Babah Turay','Lecturer 1','076622306/033992867','medbabsturay@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Ibrahim Thorlu-Bangura','Lecturer 1','076775765','1961thorlu@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Melvin S.A Haffner','Lecturer 2','076610279','melhaf@yahoo.co.uk');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Abdul Alex Mansaray','Lecturer 2','073784034/077313979','ablexmans74@gamil.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Abdulai Sankoh','Lecturer 2','076156254','abdulasankoh66@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Dr. Patrick Tarawalie','Associate Lecturer','076612184','patrick.tarawalli1926@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Dr. Maurice Sesay','Associate Lecturer','076682894','amorbensay2005@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Abdul Bah','Associate Lecturer','078333444','abdulmasbah@yahoo.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Kelcise Sesay','RTA','078929465','kelcise83@yahoo.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Abdulai Kamara','Chief Technician','076500288','superdul1957@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Peacock Cole','Chief Technician','078316212','frapcole83@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Freddie Wright','Principal Technician','078833995','freddiewright72@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Osman M.s Kanu','Part Time(PT)','076764805','osmankanu57@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Ms. Fudia Abioseh Aina Samura','Senior Clerk/Secretary','079147543/077979908','samura_fudia@yahoo.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Melville Langley','Senior Lab Technician','079415721/033567455','melvillelangley@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. John Bangura','Lab Technician','076245008','johnnybokelobangura@gmail.com');";
    $sql .= "INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('Mr. Ansumana Kamara','Special Messenger','076380710','ansumanak777@gmail.com');";
    
    if ($conn->multi_query($sql)=== TRUE){
        echo "New Record created successfully"."\n";
    }
    else{
        echo "Error recording: ".$conn->error;
    }
    
?>