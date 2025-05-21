<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Widia Senja Rahayu</title>
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    <script src="script.js"></script>
</head>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuIcon = document.querySelector('#menu-icon');
        const navbar = document.querySelector('.navbar');

        menuIcon.onclick = () => {
            menuIcon.classList.toggle('bx-x');
            navbar.classList.toggle('active');
        };

        document.onclick = (e) => {
            if (!menuIcon.contains(e.target) && !navbar.contains(e.target)) {
                menuIcon.classList.remove('bx-x');
                navbar.classList.remove('active');
            }
        };
    });
</script> 
<body>
    <header>
        <div class="logo">WSR</div>
        <div id="menu-icon" class="bx bx-menu"></div>
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skill">Skill</a></li>
                <li><a href="#reason">Reason</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
        
    <section id="home">
        <h1>Hallo!</h1>
        <p>Wellcome To My Portfolio</p>
    </section>

    <section id="about" class="intro">
        <div class="profile">
            <img src="Profile.jpeg" alt="Foto Profil">
            <div class="profile-text">
            <h1>Widia Senja Rahayu</h1>
            <p>I am an informatics student with a strong passion for digital design, artificial intelligence (AI), 
                data analysis, and document administration. I am always eager to explore how technology can drive innovation, especially in the creative industry, such as K-Pop. 
                In addition to my technical skills, I am also proficient in document management, report writing, and project proposal preparation in a structured and efficient manner.</p>
            </div>
        </div>
    </section>
    
    <section id="skill">
        <h2>Skill</h2>
        <div class="skills">
            <div class="skill-item">
                <img src="Figma.jpeg" alt="Figma">
                <div class="stars">★★★★☆</div>
            </div>
            <div class="skill-item">
                <img src="Microsoft Office.jpeg" alt="Microsoft Office">
                <div class="stars">★★★★★</div>
            </div>
            <div class="skill-item">
                <img src="Canva.jpeg" alt="Canva">
                <div class="stars">★★★★☆</div>
            </div>
            <div class="skill-item">
                <img src="html.jpg" alt="HTML">
                <div class="stars">★★★☆☆</div>
            </div>
            <div class="skill-item">
                <img src="python.jpg" alt="Python">
                <div class="stars">★★★☆☆</div>
            </div>
            <div class="skill-item">
                <img src="css.jpg" alt="CSS">
                <div class="stars">★★★☆☆</div>
            </div>
        </div>
    </section>
    
    <section id="reason">
        <h2>Reason Why You Should Hire Me</h2>
        <ul>
            <li>Highly Disciplined & Responsible</li>
            <li>Adaptable & Quick Learner</li>
            <li>Strong Teamwork & Communication Skills</li>
            <li>Managerial & Administrative Skills</li>
        </ul>
    </section>
    
    <section id="testimoni">
        <h2>Testimoni</h2>
        <div class="testimonials">
            <div class="testimonial">
                <img src="user1.jpeg" alt="User 1">
                <p>"A highly dedicated and detail-oriented individual. Their ability to integrate AI, data analysis, and digital design into innovative solutions is truly impressive!"</p>
                <h4>Project Manager</h4>
                <span>Tech Innovate</span>
            </div>
            <div class="testimonial">
                <img src="user2.jpg" alt="User 2">
                <p>"Quick to adapt and always eager to learn new technologies. Their strong problem-solving skills and efficiency in project management make them a valuable team member."</p>
                <h4>Lead Developer</h4>
                <span>Creative Tech</span>
            </div>
            <div class="testimonial">
                <img src="user3.jpg" alt="User 3">
                <p>"Reliable, disciplined, and great at handling both technical and managerial tasks. Their ability to manage projects systematically is outstanding!"</p>
                <h4>Supervisor</h4>
                <span>Digital Solutions</span>
            </div>
        </div>
    </section>    
    
    <section id="project">
        <h2>Project</h2>
        <div class="project-item">
            <h3>SeogYang E-Commerce Website Design</h3>
            <img src="project.jpg" alt="SeogYang Project">
            <p>The project is a UI/UX design concept for SeogYang, an e-commerce website specializing in beauty, fashion, and accessories. The design follows a soft pastel aesthetic, creating a modern and elegant shopping experience.</p>
        </div>
    </section>
    
    <section id="contact">
    <h2>Contact</h2>
    <form id="contact_form" method="post" action="submit.php">
        <div class="form-group">
            <input type="text" name="name" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Nomor Telepon">
        </div>
        <div class="form-group">
            <textarea name="message" placeholder="Pesan..."></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

    <!-- Popup container -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <p id="popup-text"></p>
        </div>
    </div>
</section>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Validasi + popup -->
<script>
    $(function () {
        $('#contact_form').submit(function (e) {
            e.preventDefault();
            const name = $('[name="name"]').val().trim();
            const email = $('[name="email"]').val().trim();
            const phone = $('[name="phone"]').val().trim();
            const message = $('[name="message"]').val().trim();

            let error = '';
            if (!name) error = 'Silakan isi nama lengkap Anda.';
            else if (!email) error = 'Silakan isi email Anda.';
            else if (!phone) error = 'Silakan isi nomor telepon Anda.';
            else if (!message) error = 'Silakan isi pesan Anda.';

            if (error) {
                $('#popup-text').text(error);
                $('#popup').fadeIn().delay(2000).fadeOut();
            } else {
                // Kirim ke PHP menggunakan AJAX
                $.ajax({
                    url: 'submit.php',
                    method: 'POST',
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        message: message
                    },
                    success: function (res) {
                        $('#popup-text').text('Form berhasil dikirim!');
                        $('#popup').fadeIn().delay(2000).fadeOut();
                        $('#contact_form')[0].reset(); // reset form
                    },
                    error: function () {
                        $('#popup-text').text('Terjadi kesalahan saat mengirim data.');
                        $('#popup').fadeIn().delay(2000).fadeOut();
                    }
                });
            }
        });
    });
</script>
    
    <footer>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skill">Skill</a></li>
                <li><a href="#reason">Reason</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="social-media">
            <a href="https://wa.me/628968770563" target="_blank">WhatsApp</a>
            <a href="https://instagram.com/wd.snj.rhy49" target="_blank">Instagram</a>
            <a href="mailto:snjrhywd@gmail.com">Gmail</a>            
        </div>
        <p>&copy; 2025 Widia Senja Rahayu</p>
    </footer>
</body>
</html>