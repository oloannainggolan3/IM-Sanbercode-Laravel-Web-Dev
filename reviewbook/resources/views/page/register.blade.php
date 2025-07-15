<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form method="POST" action="/welcome">
        @csrf
        <label>First name: </label> <br />
        <br />
            <input type="text" name="first_name" required placeholder="nama awal"> <br />
        <br />
        <label>Last name: </label> <br />   
        <br />
            <input type="text" name="last_name" required placeholder="nama akhir"> <br />
        <br />
        <label>Gender:</label> <br />
        <br />
            <input type="radio" value="1" name="kelamin" required /> Male <br />
            <input type="radio" value="2" name="kelamin" required/> Famale <br />
            <input type="radio" value="3" name="kelamin" required /> Other <br />
        <br />
        <label>Nationality:</label> <br />
        <br />
        <select name="nationality">
            <option value="1" required>Indonesia </option>
            <option value="2" required>Singapore</option>
            <option value="3" required>Malaysia</option>
            <option value="4" required>Brunei</option>
        <br />
        </select> <br />
        <br />
      <label>Languaage Spoken:</label> <br />
        <br />
            <input type="checkbox" value="1" name="bahasa"  /> Bahasa Indonesia <br />
            <input type="checkbox" value="2" name="bahasa" /> English <br />
            <input type="checkbox" value="3" name="bahasa" /> Other <br />
        <br />
        <label>Bio:</label> <br />
        <br />
            <textarea name="bio" rows="8" cols="40"> </textarea> <br />

        <button type="submit">Sign Up</button>
    
    </form>
    
</body>
</html>
