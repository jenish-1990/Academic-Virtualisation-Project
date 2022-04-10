<?php
    require('./includes/auth_validate.php');
    require_once('./includes/config.php');
    include_once('./includes/header.php');
    define( 'ACCESS_RESTRICTED_PASS_658963', TRUE ); 
    include('./includes/dbconnection.php');
    $obj = new dbconnection(); 
    $data = $obj->get_profile_details($_SESSION['user_id']);  
?>

      <section class="myprofile">
        <div class="personal-info">
          <img src="assets/img/profile-icon.png" alt="user-image" class="user-image" />
          <div class="inner-flex">
            <p class="user-name"><?php echo $data['name'];?> (<?php echo ucwords($data['account_type']);?>)</p>
          </div>
          <a
            href="#"
            class="edit-info"
            data-id=""
            data-toggle="modal"
            data-target="#edit"
            id=""
            >Edit</a
          >
        </div>
        <div class="college-info">
          <strong class="college-title">College:</strong>
          <p class="college-name">
            Sarvajanink College of Engineering & Technology
          </p>
          <strong class="course-title">Course:</strong>
          <p class="course-name"><?php echo $data['course'];?></p>
          <strong class="email-title">Email:</strong>
          <p class="email-id"><?php echo $data['email'];?></p>
          <?php if($data['enrollment'] != null) { ?>
            <strong class="year-title">Year:</strong>
            <p class="year-define"><?php echo $data['year'];?></p>
            <strong class="id-title">ID:</strong>
            <p class="id-name"><?php echo $data['enrollment'];?></p>
            <strong class="sem-title">Semester:</strong>
            <p class="sem-study"><?php echo $data['semester'];?></p>
          <?php } ?>
        </div>
        <div class="sub-menu">
          <div class="submenu-part">
            <a href="./mynotes.php">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="192"
                height="192"
                fill="#9296ad"
                viewBox="0 0 256 256"
                class="submenu-icon"
              >
                <rect width="256" height="256" fill="none"></rect>
                <line
                  x1="96"
                  y1="96"
                  x2="160"
                  y2="96"
                  fill="none"
                  stroke="#9296ad"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></line>
                <line
                  x1="96"
                  y1="128"
                  x2="160"
                  y2="128"
                  fill="none"
                  stroke="#9296ad"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></line>
                <line
                  x1="96"
                  y1="160"
                  x2="128"
                  y2="160"
                  fill="none"
                  stroke="#9296ad"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></line>
                <path
                  d="M156.68629,216H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8V156.68629a8,8,0,0,1-2.34315,5.65686l-51.3137,51.3137A8,8,0,0,1,156.68629,216Z"
                  fill="none"
                  stroke="#9296ad"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></path>
                <polyline
                  points="215.276 159.992 160 159.992 160 215.272"
                  fill="none"
                  stroke="#9296ad"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></polyline>
              </svg>
            </a>
            <a href="./mynotes.php" class="submenu-link">My Notes</a>
          </div>
          <div class="submenu-part">
            <a href="./savednotes.php">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="192"
                height="192"
                fill="#9296ad"
                viewBox="0 0 256 256"
                class="submenu-icon"
              >
                <rect width="256" height="256" fill="none"></rect>
                <path
                  d="M192,224l-64.0074-40L64,224V48a8,8,0,0,1,8-8H184a8,8,0,0,1,8,8Z"
                  fill="none"
                  stroke="#9296ad"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="16"
                ></path>
              </svg>
            </a>
            <a href="./savednotes.php" class="submenu-link">Saved Notes</a>
          </div>
        </div>
        <div class="preferences">
          <h2 class="preferences-heading">PREFERENCES</h2>
          <div class="interest preferences-flex">
            <strong class="interest-title">Interested In:</strong>
            <p class="interest-info">
            <?php echo $data['interest'];?>
            </p>
          </div>
          <div class="extra preferences-flex">
            <strong class="extra-title">Extra Curricular Activities:</strong>
            <p class="extra-info">
            <?php echo $data['ext_curr'];?>
            </p>
          </div>
        </div>
      </section>
    </div>

    <div class="modal fade editprofile" id="edit" role="dialog">
      <div class="modal-dialog">
        <div class="modal-body">
          <!-- Header -->
          <div class="form-header">
            <h1>Edit Profile Details</h1>
          </div>
          <!-- /Header -->

          <!-- Main Form Started -->
          <label for="fullName">Your Name: *</label>
          <input type="text" placeholder="Full Name" name="name" id="edit-name" value="<?php echo $data['name'];?>" />

          <label for="email">Your Email: *</label>
          <input
            type="email"
            placeholder="abcd@xyz.com"
            name="email"
            id="edit-email"
            value="<?php echo $data['email'];?>"
            required
          />

          <label for="password">Password:</label>
          <input type="password" placeholder="Password" name="password" id="edit-password"/>

          <label for="Course">Course: *</label>
          <input type="text" placeholder="Course" name="course" id="edit-course" value="<?php echo $data['course'];?>" required />

          <label for="College">College: *</label>
          <input type="text" placeholder="College" name="college" id="edit-college" value="<?php echo $data['college'];?>" required />

          <?php if($data['enrollment'] != null) { ?>

          <label for="Enrollment">Enrollment No: *</label>
          <input type="number" placeholder="Enrtollment no" id="edit-enrollment" name="enrollment" value="<?php echo $data['enrollment'];?>" required />
          
          <label for="semester">Semester: *</label>
          <input type="text" placeholder="Sem" name="semester" id="edit-semester" value="<?php echo $data['semester'];?>" required />

          <label for="Year">Year: *</label>
          <input type="number" placeholder="Year" name="year" id="edit-year" value="<?php echo $data['year'];?>" required />

          <?php } ?>

          <label for="interest">Interested In:</label>
          <input
            type="text"
            name="interest"
            id="edit-interest"
            placeholder="Ex: (Data Science, Pyhton, Circuits)"
            value="<?php echo $data['interest'];?>"
          />

          <label for="extra_curr">Extra Curricular Activities</label>
          <input type="text" id="edit-extra_curr" name="extra_curr" value="<?php echo $data['ext_curr'];?>" placeholder="Ex: (Dancing, Singing, Piano)" />

          <input type="hidden" id="account_type" value="<?php echo $data['account_type'];?>">

          <!-- Submit Button -->
          <button class="submit" onclick="update_profile()">Submit</button>
        </div>
      </div>
    </div>
    <!-- ---------javascript---------- -->

<?php
  include_once('./includes/footer.php');
?>

