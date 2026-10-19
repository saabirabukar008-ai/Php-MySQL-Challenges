 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f9;
        }
        nav {
            background-color: rgb(24 90 188);
        }
        .sidebar {
            height: 100vh;
            position: sticky;
            top: 0;
            background-color: rgb(232,240,254);
        }
        .sidebar li {
            background-color: rgb(24 90 188) !important;            
            padding: 10px 15px;
            margin: 5px;
            border-radius: 5px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff !important;
        }
        .section-bg {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .card-img-top {
            border-radius: 10px 10px 0 0;
        }
        footer {
            background-color: rgb(24 90 188);
            color: white;
        }
    </style>
</head>
 
 
 
 <aside class="col-lg-3 p-3 sidebar">
                <h4 class="text-center">Navigation</h4>
                <ul class="list-unstyled">
                    <li><a href="#students" class="text-dark">Student Profiles</a></li>
                    <li><a href="#courses" class="text-dark">Student Courses</a></li>
                    <li><a href="#grades" class="text-dark">Student Grades</a></li>
                    <li><a href="#events" class="text-dark">Upcoming Events</a></li>
                </ul>
            </aside>
