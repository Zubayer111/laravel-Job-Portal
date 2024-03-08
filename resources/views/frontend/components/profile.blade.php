
<body>

<div class="container card m-4">
    <div class="card-body-padding">
  <h2 class="text-center m-4">Candidate Information Form</h2>
  <hr style="width:100%", size="6", color=black>  
  <form class="m-4" action="{{route("createCandidate")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4 class="text-bold m-4">Personal Information</h4>
    <hr style="margin-top:5px;
    margin-bottom:5px;
    height:1px;
    width:100%;
    border-top:1px solid ;", size="6", color=black>
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
      <label for="father_name">Father's Name:</label>
      <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter Father's Name">
    </div>
    <div class="form-group">
      <label for="mother_name">Mother's Name:</label>
      <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter Mother's Name">
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of Birth:</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
    </div>
    <select class="form-select" name="blood_group">
      <option value="">Select Blood Group</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
  </select>
  
    <div class="form-group">
      <label for="mobile_no">Mobile Number:</label>
      <input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Mobile Number">
    </div>
    <div class="form-group">
      <label for="emergency_contact_no">Emergency Contact Number:</label>
      <input type="tel" class="form-control" id="emergency_contact_no" name="emergency_contact_no" placeholder="Enter Emergency Contact Number">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control" id="address" name="address" placeholder="Enter Address" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label for="whatsapp">WhatsApp:</label>
      <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter WhatsApp">
    </div>
    <div class="form-group">
      <label for="linkedin_link">LinkedIn Link:</label>
      <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="Enter LinkedIn Profile Link">
    </div>
    <div class="form-group">
      <label for="facebook_link">Facebook Link:</label>
      <input type="url" class="form-control" id="facebook_link" name="facebook_link" placeholder="Enter Facebook Profile Link">
    </div>
    <div class="form-group">
      <label for="github_link">GitHub Link:</label>
      <input type="url" class="form-control" id="github_link" name="github_link" placeholder="Enter GitHub Profile Link">
    </div>
    <div class="form-group">
      <label for="behance_dribble_link">Behance/Dribble Link:</label>
      <input type="url" class="form-control" id="behance_dribble_link" name="behance_dribble_link" placeholder="Enter Behance or Dribble Profile Link">
    </div>
    <div class="form-group">
      <label for="portfolio_website">Portfolio Website:</label>
      <input type="url" class="form-control" id="portfolio_website" name="portfolio_website" placeholder="Enter Portfolio Website">
    </div>
    <div class="form-group">
      <label for="skills">Skills:</label>
      <textarea class="form-control" id="skills" name="skills" placeholder="Enter Skills" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="expected_salary">Expected Salary:</label>
      <input type="number" class="form-control" id="expected_salary" name="expected_salary" placeholder="Enter Expected Salary">
    </div>
    <div class="form-group">
        <label for="image_url">Image</label>
        <input type="file" class="form-control-file" id="image_url" name="image_url">
      </div>
    <!-- New Fields -->
    <h4 class="text-bold m-4">Educational Information</h4>
    <hr style="margin-top:5px;
    margin-bottom:5px;
    height:1px;
    width:100%;
    border-top:1px ;", size="100", color=black>
    <div class="form-group">
      <label for="degree">Degree:</label>
      <input type="text" class="form-control" id="degree" name="degree[]" placeholder="Enter Degree">
    </div>
    <div class="form-group">
      <label for="institution">Institution:</label>
      <input type="text" class="form-control" id="institution" name="institution[]" placeholder="Enter Institution">
    </div>
    <div class="form-group">
      <label for="department">Department:</label>
      <input type="text" class="form-control" id="department" name="department[]" placeholder="Enter Department">
    </div>
    <div class="form-group">
      <label for="passing_year">Passing Year:</label>
      <input type="number" class="form-control" id="passing_year" name="passing_year[]" placeholder="Enter Passing Year">
    </div>
    <div class="form-group">
      <label for="gpa">GPA:</label>
      <input type="text" class="form-control" id="gpa" name="gpa[]" placeholder="Enter GPA">
    </div>
    <div class="form-group">
        <label for="degree">Degree:</label>
        <input type="text" class="form-control" id="degree" name="degree[]" placeholder="Enter Degree">
      </div>
      <div class="form-group">
        <label for="institution">Institution:</label>
        <input type="text" class="form-control" id="institution" name="institution[]" placeholder="Enter Institution">
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department[]" placeholder="Enter Department">
      </div>
      <div class="form-group">
        <label for="passing_year">Passing Year:</label>
        <input type="number" class="form-control" id="passing_year" name="passing_year[]" placeholder="Enter Passing Year">
      </div>
      <div class="form-group">
        <label for="gpa">GPA:</label>
        <input type="text" class="form-control" id="gpa" name="gpa[]" placeholder="Enter GPA">
      </div>
      <div class="form-group">
        <label for="degree">Degree:</label>
        <input type="text" class="form-control" id="degree" name="degree[]" placeholder="Enter Degree">
      </div>
      <div class="form-group">
        <label for="institution">Institution:</label>
        <input type="text" class="form-control" id="institution" name="institution[]" placeholder="Enter Institution">
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department[]" placeholder="Enter Department">
      </div>
      <div class="form-group">
        <label for="passing_year">Passing Year:</label>
        <input type="number" class="form-control" id="passing_year" name="passing_year[]" placeholder="Enter Passing Year">
      </div>
      <div class="form-group">
        <label for="gpa">GPA:</label>
        <input type="text" class="form-control" id="gpa" name="gpa[]" placeholder="Enter GPA">
      </div>

    <button type="submit" class="btn btn-primary m-auto">Submit</button>
  </form>
</div>
</div>
</body>

