<?php
 // Create XML structure for students
 $studentsXML = new SimpleXMLElement('<Students></Students>');
// Add student details
 $student1 = $studentsXML->addChild('Student');
 $student1->addChild('RollNo', '101');
 $student1->addChild('Name', 'John Doe');
 $student1->addChild('Address', '123 Main St, City');
 $student1->addChild('College', 'ABC College');
 $student1->addChild('Course', 'Computer Science');
 $student2 = $studentsXML->addChild('Student');
 $student2->addChild('RollNo', '102');
 $student2->addChild('Name', 'Jane Smith');
 $student2->addChild('Address', '456 Elm St, Town');
 $student2->addChild('College', 'XYZ College');
 $student2->addChild('Course', 'Electrical Engineering');
 // Save the XML structure to student.xml
 $studentsXML->asXML('student.xml');
 echo "student.xml file created successfully.";
 ?>
 <?php
 // Load student.xml file
 $studentsXML = simplexml_load_file('student.xml');
 // Accept course as input
 $course = "Computer Science"; // You can replace this with user input
 // Print students details for the specified course
 echo "<table border='1'>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Address</th>
            <th>College</th>
            <th>Course</th>
        </tr>";
 foreach ($studentsXML->Student as $student) {
    if ((string)$student->Course == $course) {
        echo "<tr>";
        echo "<td>".$student->RollNo."</td>";
        echo "<td>".$student->Name."</td>";
        echo "<td>".$student->Address."</td>";
        echo "<td>".$student->College."</td>";
        echo "<td>".$student->Course."</td>";
        echo "</tr>";
    }
}
 echo "</table>";
 ?>