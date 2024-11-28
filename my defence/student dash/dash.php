
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stud dashbaord</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="home - Copy.jpg" alt="">
                        <span class="nav-item">Student Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-tasks"></i>
                        <span class="nav-item">Enrolment</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-tasks"></i>
                        <span class="nav-item">Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Submit</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a>
                </li>
                <li>
                        <a href="" class="logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-item">Logout</span>
                        </a>
                </li>
            </ul> 
        </nav>
        <section class="main">
            <div class="main-top" id="php-section">
                <i class="fas fa-user-cog"></i>
                <?php
                 include 'index.php';
                ?>
            </div>
            <section class="main-course">
                <h1>Tasks</h1>
                <?php
                
                ?>
            </section>
        </section>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"></script> -->
</body>
</html>