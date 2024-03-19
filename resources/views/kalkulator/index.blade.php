<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wcall</title>
<style> 
    
    body {
  font-family: Arial, sans-serif;
  background-color: #829460;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.kalkulator {
  background-color: #B6E2A1; 
  padding: 20px;
  border-radius: 35px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
  text-align: center;
}

h1 {
  color: #000000;
  margin-bottom: 20px;
  font-family: Georgia, serif; /* Added a fallback font */
}

input[type="submit"] {
  padding: 10px 20px;
  margin: 0 5px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: #B2B377;
  color: black;
  font-size: 16px;
  font-family: Audiowide;
  font-weight: bold;
  transition: background-color 0.3s;
}

input[type="submit"]:hover {
  background-color: #F1F5A8;F1F5A8
}

label {
  color: #000000;
  margin-bottom: 20px; /* Corrected the typo in margin-bottom */
  font-family: 'Times New Roman', serif; /* Changed to a serif font */
}

 </style>  
</head>
<body>
    <div class="kalkulator">
<h1>KALKULATOR WCALL</h1>
   
    <form action="{{ route('kalkulator.store') }}" method="post" >
        @csrf
        <label for="a">Masukan Angka Pertama :</label><br><br>
        <input type="number" name="a" id="a"></label><br><br>
        <label for="b">Masukan Angka Kedua :</label><br><br>
        <input type="number" name="b" id="b"></label><br><br>
        <input type="submit" value="Tambahkan" name="op">
        <input type="submit" value="Kurangkan" name="op">
        <input type="submit" value="Kalikan" name="op">
        <input type="submit" value="Bagikan" name="op">
        <input type="submit" value="Reset" name="op">

    </form>
    
</div>
</body>
</html>