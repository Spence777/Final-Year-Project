<?php include('includes/header.php'); ?>
<section style="margin-top: 100px; margin-bottom: 50px;">
    <div class="container">
        <div class="col-md-12">
        <h4 class="text-center">Give Us feedback to serve you better</h4>


        <?php 

if (isset($_POST['addForm'])) {
  // print_r($_POST); die;
  $dateadded = date('Y-m-d H:i:s');
  $category = $_POST['categoryid'];
  $projectName = $_POST['projectName'];
  $leaderOfProject = $_POST['leaderOfProject'];
  $projectComplete = $_POST['projectComplete'];
  $benefied = $_POST['benefited'];
  $govtDoneEnough = $_POST['govtDoneEnough'];
  $serviceHasAProblem = $_POST['serviceHasAProblem'];
  $unnecessaryService = $_POST['unnecessaryService'];
  $serviceProvidedOnTime = $_POST['serviceProvidedOnTime'];
  $challengesFaced = $_POST['challengesFaced'];
  $accessToService = $_POST['accessToService'];
  $localGovDoneEnough = $_POST['localGovDoneEnough'];
  $effortPutIn = $_POST['effortPutIn'];
  $sufficientPersonnel = $_POST['sufficientPersonnel'];
  $recommendService = $_POST['recommendService'];
  $Interventions = $_POST['Interventions'];
  $problemFaced = $_POST['problemFaced'];
  $programSuccess = $_POST['programSuccess'];
  $excelsheet = $_POST['excelsheet'];
  
  

  // $data = array('names'=>$names, 'email'=>$email, 'phone'=>$phone, 'username'=>$username, 'password'=>password_hash($password, PASSWORD_DEFAULT));

  // $sql = ("SELECT *FROM monitor");

  // $result = $conn->query($sql);

  // if ($result->num_rows > 0) {
  //   echo "<div class='alert alert-danger text-center'>The Book record already exists</div>";
  //     header('Location'. $_SERVER["HTTP_REFERER"]);
  // }else{
    // $insert = "INSERT INTO monitor
    // (datemonitored, category, projectName, projectleader, projectcomplete, benefited, govtDoneEnough, serviceHasAProblem, unnecessaryService
    // , serviceProvidedOnTime, challengesFaced, accessToService, localGovDoneEnough, effortPutIn, sufficientPersonnel, recommendService,
    // Interventions, problemFaced, programSuccess, excelsheet ) 
    // VALUES
    // ('$dateadded', '$category',  '$projectName', '$leaderOfProject', ' $projectComplete', '$benefied', '  $govtDoneEnough', ' $serviceProblem'
    // , ' $unnecessaryService', '$serviceProvidedOnTime', '$challengesFaced', '$accessToService', '$localGovDoneEnough', ' $effortPutIn', 
    // '$sufficientPersonnel', '$recommendService', '$Interventions', '$problemFaced', '$programSuccess', '$excelsheet' )";

//     if ($conn->query($insert) === TRUE) {
//       echo "<div class='alert alert-success text-center'>Form submitted successfully..</div>";
//         // header("location:$base_url"."addpublication.php");
//         header("Refresh:2; url=index.php");
//     } else {
//         echo "<div class='alert alert-danger text-center'>Error: ".$insert." <br> ".$conn->error."</div>";
//         header("location:$base_url"."index.php");
//     }
//   }

// }

// custom insert
 
$sql = "INSERT INTO monitor
(datemonitored, category, projectName, leaderOfProject, projectComplete, benefited, govtDoneEnough, serviceHasAProblem, unnecessaryService
, serviceProvidedOnTime, challengesFaced, accessToService, localGovDoneEnough, effortPutIn, sufficientPersonnel, recommendService,
Interventions, problemFaced, programSuccess, excelsheet ) 
VALUES
('$dateadded', '$category',  '$projectName', '$leaderOfProject', ' $projectComplete', '$benefied', '  $govtDoneEnough', ' $serviceHasAProblem'
, ' $unnecessaryService', '$serviceProvidedOnTime', '$challengesFaced', '$accessToService', '$localGovDoneEnough', ' $effortPutIn', 
'$sufficientPersonnel', '$recommendService', '$Interventions', '$problemFaced', '$programSuccess', '$excelsheet' )";


// if ($conn->query($sql) === TRUE) {
//   echo "Form added successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center'>Form submitted successfully..</div>";
          // header("location:$base_url"."addpublication.php");
          header("Refresh:2; url=index.php");
      } else {
          echo "<div class='alert alert-danger text-center'>Error: ".$insert." <br> ".$conn->error."</div>";
          header("location:$base_url"."index.php");
      }

// $conn->close();

}
// end custom insert

?>       



<form class="row g-3" action="monitor.php" method="post">
  
  <div class="col">
    <label for="inputState" class="form-label">1. Select Category</label>
    <select id="inputState" name="categoryid" class="form-select" required>
      <option value="">Choose Category</option>
      <?php 
          $sql = ("SELECT *FROM categories");
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo " <option value=".$row['categoryid'].">".$row['categoryname']."</option> ";
            }
          }
      ?>
    </select>
  </div>
  
  <div class="mb-3">
    <label for="projectName"  class="form-label">2. What is the name of the project you wish to monitor?</label>
    <input type="text" name="projectName" class="form-control" id="projectName" placeholder="eg. Mulago Hospital">
  </div>

  <!-- <div class="mb-3">
    <label for="projectLeader" class="form-label">3. Who is runnung the project?</label>
    <input type="text" name="leaderOfProject class="form-control" id="projectLeader" placeholder="Responsible person or Person in Charge">
  </div> -->

  <div class="mb-3">
    <label for="projectLeader"  class="form-label">3. Who is runnung the project?</label>
    <input type="text" name="leaderOfProject" class="form-control" id="projectLeader" placeholder="Responsible person or Person in Charge">
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">4. Is the project currently completed?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="projectComplete" value="Yes" id="projectCompleteYes1">
        <label class="form-check-label" for="projectCompleteYes1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="projectComplete" value="No" id="projectCompleteNo2">
        <label class="form-check-label" for="projectCompleteNo2">
          No
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">5. Have you benefited from this project?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="benefited" value="Yes" id="benefited">
        <label class="form-check-label" for="benefited">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="benefited" value="No" id="benefited" >
        <label class="form-check-label" for="benefited">
          No
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">6. Do you feel the local government has done enough to see the success of this project?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="govtDoneEnough" value="Yes" id="govtDoneEnough">
        <label class="form-check-label" for="govtDoneEnough">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="govtDoneEnough" value="No" id="govtDoneEnough" >
        <label class="form-check-label" for="govtDoneEnough">
          No
        </label>
      </div>
    </div>
  </fieldset>

  
  <div class="mb-3">
    <label for="serviceHasProblem"  class="form-label">7. If you think this service has a problem, please highlight it below?</label>
    <textarea class="form-control" name="serviceHasAProblem" id="serviceHasProblem" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label for="aspect"  class="form-label">8. What aspects of the service did you find gave the least benefit?</label>
    <textarea class="form-control" name="unnecessaryService" id="aspect" rows="3"></textarea>
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">9. Was the service provided on time?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="serviceProvidedOnTime" value="Yes" id="providedOnTime1">
        <label class="form-check-label" for="providedOnTime1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="serviceProvidedOnTime" value="No" id="providedOnTime2" >
        <label class="form-check-label" for="providedOnTime2">
          No
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">10. Have you faced any challenges while accessing this?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="challengesFaced" value="Yes" id="challengeFaced1">
        <label class="form-check-label" for="challengeFaced1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="challengesFaced" value="No" id="challengeFaced2">
        <label class="form-check-label" for="challengeFaced2">
          No
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">11. How easy would it be to access this service if it were open to you?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="accessToService" value="Extremely-easy" id="accessToService1">
        <label class="form-check-label" for="accessToService1">
          Extremely Easy
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="accessToService" value="Somewhat-Easy" id="accessToService2">
        <label class="form-check-label" for="accessToService2">
          Somewhat Easy
        </label>
      </div>
      <!-- <div class="form-check">
        <input class="form-check-input" type="radio" name="accessToService" value="" id="accessToService3">
        <label class="form-check-label" for="accessToService3">
          Neutral
        </label>
      </div> -->
      <div class="form-check">
        <input class="form-check-input" type="radio" name="accessToService" value="Difficult" id="accessToService4">
        <label class="form-check-label" for="accessToService4">
          Difficult
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="accessToService" value="Impossible" id="accessToService5">
        <label class="form-check-label" for="accessToService5">
          Impossible
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">12. Has the local government done everything possible to make delivery of this service as easy as possible</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="localGovDoneEnough" id="localGovDoneEnough1" value="Yes">
        <label class="form-check-label" for="localGovDoneEnough1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="localGovDoneEnough" id="localGovDoneEnough2" value="No">
        <label class="form-check-label" for="localGovDoneEnough2">
          No
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">13. How much effort did you put in to see that you accessed this service?</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="effortPutIn" Value="Extremely-Alot-of-Effort" id="effortPutIn1">
        <label class="form-check-label" for="effortPutIn1">
          Extremely alot of effort
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="effortPutIn" Value="Much-Effort" id="effortPutIn2">
        <label class="form-check-label" for="effortPutIn2">
          Much Effort
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="effortPutIn" Value="Accessible" id="effortPutIn3">
        <label class="form-check-label" for="effortPutIn3">
          Accessible
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="effortPutIn" Value="Little-effort" id="effortPutIn4">
        <label class="form-check-label" for="effortPutIn4">
          Little effort
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="effortPutIn" Value="No-Effort" id="effortPutIn5">
        <label class="form-check-label" for="effortPutIn5">
          No Effort
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">14. Were there sufficient personnel to attend to you</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sufficientPersonnel" value="Yes" id="sufficientPersonnel1">
        <label class="form-check-label" for="sufficientPersonnel1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sufficientPersonnel" value="No" id="sufficientPersonnel2">
        <label class="form-check-label" for="sufficientPersonnel2">
          No
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label pt-0">15. Would you recommend this government service to your friends and family</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="recommendService" value="Yes" id="recommendService1">
        <label class="form-check-label" for="recommendService1">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="recommendService" value="No" id="recommendService2">
        <label class="form-check-label" for="recommendService2">
          No
        </label>
      </div>
    </div>
  </fieldset>

    <div class="mb-3">
      <label for="solution"  class="form-label">16. What were specific interventions put into place by the program to fight the problem you think it should fix?</label>
      <textarea class="form-control" name="Interventions" id="solution" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label for="problemEncountered"  class="form-label">17. What were the kinds of problems encountered in delivering the program — were there enough resources from the beginning to do it well?</label>
      <textarea class="form-control" name="problemFaced" id="problemEncountered" rows="3"></textarea>
    </div>

    <fieldset class="row mb-3">
      <legend class="col-form-label pt-0">18. Was the program more successful with certain groups of people than with others?</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="programSuccess" value="yes" id="programSucess1">
          <label class="form-check-label" for="programSucess1">
            Yes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="programSuccess" value="No" id="programSucess2">
          <label class="form-check-label" for="programSucess2">
            No
          </label>
        </div>
      </div>
    </fieldset>

    <fieldset class="row mb-3" >
        <legend class ="">19. Upload an Excel spreadsheet.</legend>
        <div class="input-group mb-3">
          <input type="file" name="excelsheet" class="form-control" id="file">
          <!-- <label class="input-group-text" for="file">Upload</label> -->
        </div>
    </fieldset>
    
    <button type="submit" name="addForm" class="btn btn-primary">Submit</button>
</form>
    
</section>

<?php include('includes/footer.php'); ?>