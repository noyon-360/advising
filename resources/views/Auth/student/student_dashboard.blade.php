<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Dashboard</title>

    <style>
        /* Container styling */
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0056b3;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
        }

        .navbar-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }

        /* Profile section styling */
        .profile-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-pic {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .upload-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .upload-btn:hover {
            background-color: #218838;
        }

        .note {
            font-size: 0.9em;
            color: #6c757d;
        }

        /* User info styling */
        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info h2 {
            font-size: 1.5em;
            margin-bottom: 5px;
        }

        .result-btn,
        .download-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .result-btn:hover,
        .download-btn:hover {
            background-color: #0056b3;
        }

        /* Semester info styling */
        .semester-info {
            margin-top: 20px;
        }

        .semester-info h3 {
            text-align: center;
            font-size: 1.3em;
            margin-bottom: 20px;
        }

        .semester-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            background-color: #f8f9fa;
            width: 18%;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card p {
            font-size: 0.9em;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .card h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .card a {
            color: #007bff;
            text-decoration: none;
            font-size: 0.9em;
        }

        .card a:hover {
            text-decoration: underline;
        }

        /* Color specific cards */
        .pre-advised {
            background-color: #ffc107;
            color: #212529;
        }

        .advised {
            background-color: #28a745;
            color: #fff;
        }

        .credits-left {
            background-color: #6f42c1;
            color: #fff;
        }

        .waiver {
            background-color: #17a2b8;
            color: #fff;
        }

        .dues {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Primeasia University</h1>
            <div class="navbar-links">
                <a href="#">Dashboard</a>
                <a href="#">Student</a>
            </div>
        </div>

        <div class="content">
            <div class="profile-section">
                <img src="{{ asset('path/to/profile_image.png') }}" alt="Profile Picture" class="profile-pic">
                <button class="upload-btn">Upload Picture</button>
                <p class="note">NB: Click on the photo to change your photo. Photo size should be 150 X 150 px and
                    should not exceed 300KB and JPEG format.</p>
            </div>

            <div class="user-info">
                <h2>Nazibullah</h2>
                <p>212019042</p>
                <p>B.Sc. in Computer Science & Engineering</p>
                <button class="result-btn">Result</button>
                <button class="download-btn">Download Advising Paper</button>
            </div>

            <div class="semester-info">
                <h3>Current Semester: Summer-2024</h3>
                <div class="semester-cards">
                    <div class="card pre-advised">
                        <p>PreAdvised Credits:</p>
                        <h4>0</h4>
                        <a href="#">Click to see details</a>
                    </div>
                    <div class="card advised">
                        <p>Advised Credits:</p>
                        <h4>14</h4>
                        <a href="#">Click to see details</a>
                    </div>
                    <div class="card credits-left">
                        <p>Credits Left:</p>
                        <h4>29</h4>
                        <a href="#">Click to see details</a>
                    </div>
                    <div class="card waiver">
                        <p>Waiver Percentage:</p>
                        <h4>40%</h4>
                        <a href="#">Click to see details</a>
                    </div>
                    <div class="card dues">
                        <p>Semester Dues:</p>
                        <h4>0/- ৳</h4>
                        <a href="#">Click to see details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>