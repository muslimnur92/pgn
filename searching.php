<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script>
        function searchByEmployeeName() {
            var input = document.getElementById("employeeName").value;
            
            // Lakukan operasi pencarian berdasarkan NameEmploye
            // Misalnya, tampilkan hasil pencarian di area dengan id "result"
            var result = document.getElementById("result");
            result.innerHTML = "Hasil pencarian berdasarkan NameEmploye: " + input;
            
            // Lakukan operasi lain sesuai kebutuhan Anda
        }
        
        function searchByDepartmentName() {
            var input = document.getElementById("departmentName").value;
            
            // Lakukan operasi pencarian berdasarkan NameDepartemen
            // Misalnya, tampilkan hasil pencarian di area dengan id "result"
            var result = document.getElementById("result");
            result.innerHTML = "Hasil pencarian berdasarkan NameDepartemen: " + input;
            
            // Lakukan operasi lain sesuai kebutuhan Anda
        }
    </script>
</head>
<body>
    <h1>Search</h1>
    <label for="employeeName">Search by Employee Name:</label>
    <input type="text" id="employeeName" name="employeeName">
    <button onclick="searchByEmployeeName()">Search</button>
    
    <br><br>
    
    <label for="departmentName">Search by Department Name:</label>
    <input type="text" id="departmentName" name="departmentName">
    <button onclick="searchByDepartmentName()">Search</button>
    
    <br><br>
    
    <div id="result"></div>
</body>
</html>
