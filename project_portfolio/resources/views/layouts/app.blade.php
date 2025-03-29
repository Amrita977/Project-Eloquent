<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .about-me {
    text-align: center;
    margin: 30px auto;
    padding: 20px;
    width: 50%;
    background: white;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.about-me h2 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.about-me p {
    font-size: 16px;
    color: #666;
}

.contact-link {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    transition: 0.3s;
}

.contact-link:hover {
    text-decoration: underline;
    color: #0056b3;
}

        /* Navbar Styling */
/* Navbar */
.navbar {
    background-color: #007bff;
    padding: 15px;
    text-align: center;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin: 15px;
    font-size: 18px;
    font-weight: bold;
    transition: 0.3s;
}

.navbar a:hover {
    color: #ffeb3b;
    text-decoration: underline;
}

/* Hero Section */
.hero-section {
    text-align: center;
    padding: 50px;
    background: linear-gradient(135deg, #e3f2fd, #ffffff);
    margin: 100px auto 30px;
    width: 60%;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.hero-section h1 {
    font-size: 32px;
    font-weight: bold;
}

.hero-section p {
    font-size: 18px;
    color: #444;
}

/* Project Card */
.projects-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 30px;
}

.project-card {
    background-color: white;
    padding: 20px;
    width: 45%;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s, box-shadow 0.3s;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
}

.project-link {
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
}

.project-link:hover {
    text-decoration: underline;
    color: #0056b3;
}


    </style>
</head>
<body>
    
    
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/projects">Projects</a>
        <a href="/contact">Contact</a>
    </nav>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to My Portfolio</h1>
        <p>My name is Amrita Rajvansh, As a fourth-year Computer Science and Engineering student with expertise in Python, 
            MySQL, and web technologies, and practical experience from my industrial training at Sai Technologies, I am
             eager to apply for the Python Developer position. My proficiency in Python development, knowledge of front-end
              technologies,and focus on scalable, efficient solutions make me a strong candidate for contributing to your team.
            </p>
    </div>
    
    <!-- Projects Section -->
    <div class="projects-container">
        <div class="project-card">
            <h2>My First Project</h2>
            <p>This is a simple project.</p>
            <a href="#" class="project-link">View Project</a>
        </div>
    </div>
    
    
</body>
</html>
