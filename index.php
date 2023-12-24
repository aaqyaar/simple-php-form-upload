<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2 class="text-center"
    style="margin:20px"
    >Student Information Form</h2>
    <form action="process.php" method="POST" enctype="multipart/form-data">
      <!-- Personal Information -->
      <h3>Personal Information</h3>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="placeOfBirth">Place of Birth:</label>
        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" required>
      </div>
      <div class="form-group">
        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="sex">Sex:</label>
        <select class="form-control" id="sex" name="sex" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone:</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <!-- Parent Information -->
      <h3>Parent Information</h3>
      <div class="form-group">
        <label for="parentName">Parent's Name:</label>
        <input type="text" class="form-control" id="parentName" name="parentName" required>
      </div>
      <div class="form-group">
        <label for="parentTelephone">Parent's Telephone:</label>
        <input type="tel" class="form-control" id="parentTelephone" name="parentTelephone" required>
      </div>
      <div class="form-group">
        <label for="relationship">Relationship:</label>
        <input type="text" class="form-control" id="relationship" name="relationship" required>
      </div>

      <!-- Academic Information -->
      <h3>Academic Information</h3>
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" name="id" required>
      </div>
      <div class="form-group">
        <label for="faculty">Faculty:</label>
        <input type="text" class="form-control" id="faculty" name="faculty" required>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department" required>
      </div>
      <div class="form-group">
        <label for="class">Class:</label>
        <input type="text" class="form-control" id="class" name="class" required>
      </div>
      <div class="form-group">
        <label for="registrationDate">Registration Date:</label>
        <input type="date" class="form-control" id="registrationDate" name="registrationDate" required>
      </div>

      <div class="form-group">
        <label for="profileImage">Profile Image:</label>
        <input type="file" class="form-control-file" id="profileImage" name="profileImage" accept=".png, .jpg, .jpeg, .gif">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
