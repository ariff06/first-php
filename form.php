<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page SignUp</title>
    <style>
        /* CSS untuk styling halaman signup */
        body {
          font-family: Arial, sans-serif;
          background-color: #030303;
          margin: 0;
          padding: 0;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 200vh;
          background-image: url(https://media.giphy.com/media/RfnQuPrBYOzpdh8yrh/giphy.gif);
          background-repeat: no-repeat;
          background-size: cover;
          color: rgba(255, 255, 255, 0.096);
        }
    
        h1 {
          color: #000000;
        }
    
        h2 {
          color: #000000;
        }
    
        form {
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          padding: 20px;
          width: 400px;
        }
    
        label {
          display: block;
          margin-top: 10px;
          color: #555;
        }
    
        input[type='text'],
        select,
        textarea {
          width: 90%;
          padding: 10px;
          margin-top: 5px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }
    
        p {
          margin-top: 10px;
          color: #555;
        }
    
        .gender-container {
          display: flex;
          flex-direction: column;
        }
    
        .gender-container label {
          display: flex;
          align-items: center;
        }
    
        .language-container {
          display: flex;
          flex-direction: column;
        }
    
        .language-container label {
          display: flex;
          align-items: center;
        }
    
        input[type='submit'] {
          background-color: #333;
          color: #fff;
          padding: 10px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          margin-top: 10px;
        }
    
        input[type='submit']:hover {
          background-color: #555;
        }

        

            /* CSS untuk tombol "Sign Up" */
        button {
            background-color: #3498db;
            color: #fff; 
            padding: 10px 20px;
            border: none; 
            border-radius: 5px;
            cursor: pointer; 
        }

        /* CSS saat mengarahkan kursor ke tombol */
        button:hover {
            background-color: #2980b9;
        }

      </style>
</head>
<body>
<form action="welcome.php" method="get">
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>

    <label for="fname">First Name :</label>
    <input type="text" id="fname" name="fname" required>
    <br>
    <br>
    <label for="lname">Last Name :</label>
    <input type="text" id="lname" name="lname" required>

    <p>Gender :</p>
    <input type="radio" id="pria" name="gender" value="Pria" required><label for="pria">Male</label>
    <br>
    <input type="radio" id="wanita" name="gender" value="Wanita" required><label for="wanita">Female</label>

    <p>Nationality</p>
        <select name="Nationality" id="Nationality" >
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="Sunda">Sunda</option>
            <option value="Jawa">Jawa</option>
        </select>

        <p>Language spoken</p>
    <input type="checkbox" id="indo" name="language[]" value="Bahasa Indonesia">
    <label for="indo">Bahasa Indonesia</label><br>
    <input type="checkbox" id="inggris" name="language[]" value="English">
    <label for="inggris">English</label><br>
    <input type="checkbox" id="lainnya" name="language[]" value="Other">
    <label for="lainnya">Other</label><br>

    <p>Bio</p>
    <textarea name="data" id="data" cols="30" rows="10"></textarea>
    <button type="submit" >Sign Up</a></button> 
</form>
</body>
</html>