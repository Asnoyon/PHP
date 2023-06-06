
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form in Php</title>
</head>
<body>
  
  <form action="id.php" method="POST">
    <h1>Create Your Virtual ID Card</h1>
    <!-- Name field -->
    
    <div class="form-field">
      <label for="name-field">Name</label>
      <section>
        <input type="text" name="std_name" id="name-field">
      </section>
    </div>

    <!-- Phone Field -->
    <div class="form-field">
      <label for="phn">Phone</label>
      <section>
        <input type="text" name="std_phone" id="phn">
      </section>
    </div>
    <!-- Email field -->
    <div class="form-field">
      <label for="email">Email</label>
      <section>
        <input type="email" name="std_email" id="email">
      </section>
    </div>
     <!-- Course field -->
     <div class="form-field">
      <label for="course">Course</label>
      <section>
        <input type="text" name="std_course" id="course">
      </section>
    </div>
     <!-- Batch field -->
     <div class="form-field">
      <label for="batch">Batch</label>
      <section>
        <input type="text" name="std_batch" id="batch">
      </section>
    </div>
    <!-- Buttons -->
    <div class="form-buttons">
      <input type="submit" value="Submit" name="submit_btn">
    </div>
  </form>
</body>
</html>