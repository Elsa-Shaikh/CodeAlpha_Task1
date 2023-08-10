<?php include 'Auth/conn.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1: Survey Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="JS/sweetAlert.js"></script>
</head>
<body>
    <marquee behavior="" direction="">
    <h1>Welcome! Kindly Share Your Ideas With Us</h1>
    </marquee>
    
    <div class="container">
        <form action="Auth/insert.php" method="post">
            <div class="form-container" id="form1">
                <h3>Artificial intelligence (AI) Survey Form</h3>
                <p>Artificial intelligence (AI) is attracting the interest of scientists and engineers, entrepreneurs
                    and government leaders, and researchers and educators.</p>
                <p>Please share your ideas, suggestion, knowledge or experience with us!</p>
                <p>Let's Start!</p>

                <input type="email" placeholder="Email" name="uemail" required>
                <input type="text" placeholder="Full Name" name="uname" required>
                <input type="tel" placeholder="Phone Number" name="uphone" required>
                <input type="text" placeholder="Gender" name="ugender" required>
                <input type="text" placeholder="City" name="ucity" required>
                <input type="text" placeholder="Education Level" name="ueducation" required>
                <input type="text" placeholder="College or University" name="uuni" required>
                <input type="text" placeholder="Department" name="udepart" required>

                <div class="btn-box">
                    <button type="button" id="next1">Next</button>
                </div>
            </div>
            <div class="form-container" id="form2">
                <input type="text" placeholder="What is the Future of AI?" name="future" required>
                <input type="text" placeholder="What is the Future of AI in Pakistan?" name="fpak" required>
                <input type="text" placeholder="how can you integrate AI in your field?" name="integrate" required>
                <input type="text" placeholder="In you point of view, what is the best example of AI?" name="example" required>
                <textarea cols="30" rows="10" placeholder="Share your idea about AI?" name="idea" required></textarea>
                <textarea cols="30" rows="10" placeholder="how can AI bring revolution?" name="revo" required></textarea>
                <input type="text" placeholder="How AI is used in daily life?" name="daily" required>
                <input type="text" placeholder="what are the impact of AI?" name="impact" required>
                <input type="text" placeholder="What are the disadvantages of AI?" name="dis" required>
                <input type="text" placeholder="Is AI good or bad for society?" name="society" required>
                
                <div class="btn-box">
                    <button type="button" id="back1">Back</button>
                    <button type="button" id="next2">Next</button>
                </div>
            </div>
            <div class="form-container" id="form3">
                <label for="human">Is AI safe for humans?</label>
                <select name="safe" id="human">
                    <option value="">Choose</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="use">Is AI really Usefull?</label>
                <select name="usefull" id="use">
                    <option value="">Choose</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="knowledge">Rate your AI Knowledge</label>
                <select name="rate" id="knowledge">
                    <option value="">Choose</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="prefer">What is your perferences?</label>
                <select name="preferences" id="prefer">
                    <option value="">Choose</option>
                    <option value="Robotics">Robotics</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="HCI">Human Computer Interaction</option>
                    <option value="Data Science">Data Science</option>
                </select>
                <label for="choose">Choose one of them?</label>
                <select name="choose" id="choose">
                    <option value="">Choose</option>
                    <option value="AI">AI</option>
                    <option value="Blockchain">Blockchain</option>
                    <option value="AWS">AWS</option>
                    <option value="CC">Cloud Computing</option>
                </select>
                <label for="everused">Will you ever used AI?</label>
                <select name="ever" id="everused">
                    <option value="">Choose</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="world">Is our IT industry leading towards the digital world?</label>
                <select name="leading" id="world">
                    <option value="">Choose</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <div class="btn-box">
                    <button type="button" id="back2">Back</button>
                    <button type="submit" class="btnSubmit" name="btn">Submit</button>
                </div>
            </div>
        </form>
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Information</small></div>
            <div class="step-col"><small>Opinion</small></div>
            <div class="step-col"><small>Selection</small></div>
        </div>
    </div>
<script src="JS/script.js"></script>

<?php
if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
    ?>
<script>
swal({
  title: "<?php echo $_SESSION['status']; ?>",
//   text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code']; ?>",
  button: "OK",
});
</script>
    <?php    
    unset($_SESSION['status']); }
?>





</body>
</html>