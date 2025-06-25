<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Md. Uodoy Hossan Rafi | Competitive Programmer & Developer</title>
        <meta name="description" content="Competitive programmer and problem solver specializing in C++, algorithms, and backend development." />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <body>
        <header class="navbar">
            <div class="logo">
                <i class="fas fa-code"></i>
                Md. Uodoy Hossan Rafi
            </div>
            <nav>
                <a href="#home" class="nav-link active">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#contact" class="nav-link">Contact</a>
            </nav>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </header>

        <main>
            <!-- Hero Section -->
            <section class="hero" id="home">
                <div class="hero-content">
                    <img src="{{ asset('assets/rafiwho.jpg') }}" alt="Md. Uodoy Hossan Rafi" class="profile-img" />
                    <h1 class="hero-title">
                        <span class="greeting">Hi there, I'm</span>
                        <span class="name">Md. Uodoy Hossan Rafi</span>
                    </h1>
                    <p class="hero-subtitle">Competitive Programmer & Problem Solver</p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">View My Work</a>
                        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </section>

            <!-- About Section -->
            <section class="about-section" id="about">
                <div class="container">
                    <h2 class="section-title">About Me</h2>
                    <div class="about-content">
                        <div class="about-text">
                            <p>I'm a passionate <strong>competitive programmer</strong> and <strong>problem solver</strong> with a deep love for algorithmic challenges and efficient solutions. My journey in programming started with solving complex problems and has evolved into creating impactful applications.</p>
                            
                            <div class="highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-trophy"></i>
                                    <span>Competitive Programmer</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-code"></i>
                                    <span>Strong in C++ & Algorithms</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-brain"></i>
                                    <span>Dynamic Programming Expert</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-rocket"></i>
                                    <span>Problem Solving Enthusiast</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section class="skills-section" id="skills">
                <div class="container">
                    <h2 class="section-title">Skills & Technologies</h2>
                    <div class="skills-grid">
                        <div class="skill-category">
                            <h3><i class="fas fa-language"></i> Programming Languages</h3>
                            <div class="skills-list">
                                <div class="skill-item" data-skill="C++">
                                    <i class="fab fa-cpp"></i>
                                    <span>C++</span>
                                    <div class="skill-level">Advanced</div>
                                </div>
                                <div class="skill-item" data-skill="C">
                                    <i class="fas fa-code"></i>
                                    <span>C</span>
                                    <div class="skill-level">Advanced</div>
                                </div>
                                <div class="skill-item" data-skill="Python">
                                    <i class="fab fa-python"></i>
                                    <span>Python</span>
                                    <div class="skill-level">Intermediate</div>
                                </div>
                                <div class="skill-item" data-skill="Java">
                                    <i class="fab fa-java"></i>
                                    <span>Java</span>
                                    <div class="skill-level">Intermediate</div>
                                </div>
                                <div class="skill-item" data-skill="JavaScript">
                                    <i class="fab fa-js"></i>
                                    <span>JavaScript</span>
                                    <div class="skill-level">Intermediate</div>
                                </div>
                            </div>
                        </div>

                        <div class="skill-category">
                            <h3><i class="fas fa-tools"></i> Tools & Technologies</h3>
                            <div class="skills-list">
                                <div class="skill-item" data-skill="Linux">
                                    <i class="fab fa-linux"></i>
                                    <span>Linux</span>
                                    <div class="skill-level">Advanced</div>
                                </div>
                                <div class="skill-item" data-skill="Git">
                                    <i class="fab fa-git-alt"></i>
                                    <span>Git</span>
                                    <div class="skill-level">Advanced</div>
                                </div>
                                <div class="skill-item" data-skill="VS Code">
                                    <i class="fas fa-code"></i>
                                    <span>VS Code</span>
                                    <div class="skill-level">Advanced</div>
                                </div>
                                <div class="skill-item" data-skill="Neovim">
                                    <i class="fas fa-terminal"></i>
                                    <span>Neovim</span>
                                    <div class="skill-level">Advanced</div>
                                </div>
                            </div>
                        </div>

                        <div class="skill-category">
                            <h3><i class="fas fa-brain"></i> Algorithmic Skills</h3>
                            <div class="skills-list">
                                <div class="skill-item" data-skill="Dynamic Programming">
                                    <i class="fas fa-cogs"></i>
                                    <span>Dynamic Programming</span>
                                </div>
                                <div class="skill-item" data-skill="Graph Algorithms">
                                    <i class="fas fa-project-diagram"></i>
                                    <span>Graph Algorithms</span>
                                </div>
                                <div class="skill-item" data-skill="String Algorithms">
                                    <i class="fas fa-font"></i>
                                    <span>String Algorithms</span>
                                </div>
                                <div class="skill-item" data-skill="Data Structures">
                                    <i class="fas fa-layer-group"></i>
                                    <span>Data Structures</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projects Section -->
            <section class="projects-section" id="projects">
                <div class="container">
                    <h2 class="section-title">Featured Projects</h2>
                    <div class="projects-grid">
                        <div class="project-card">
                            <div class="project-image">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="project-content">
                                <h3>Competitive Programming Solutions</h3>
                                <p>A comprehensive collection of solutions to various competitive programming problems from platforms like Codeforces, LeetCode, and HackerRank.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">C++</span>
                                    <span class="tech-tag">Algorithms</span>
                                    <span class="tech-tag">Data Structures</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card">
                            <div class="project-image">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="project-content">
                                <h3>Halaal Water Website</h3>
                                <p>A modern website for my Halaal drinking water business with online ordering and customer management features.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">HTML/CSS</span>
                                    <span class="tech-tag">JavaScript</span>
                                    <span class="tech-tag">Node.js</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card">
                            <div class="project-image">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="project-content">
                                <h3>AI Projects Collection</h3>
                                <p>Various AI and machine learning projects including chatbots, sudoku solvers, and pattern recognition systems.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">Python</span>
                                    <span class="tech-tag">AI/ML</span>
                                    <span class="tech-tag">TensorFlow</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card">
                            <div class="project-image">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="project-content">
                                <h3>Compiler Design Project</h3>
                                <p>A complete compiler implementation for a custom programming language with lexical analysis, parsing, and code generation.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">C++</span>
                                    <span class="tech-tag">Compiler Design</span>
                                    <span class="tech-tag">Lexical Analysis</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="contact-section" id="contact">
                <div class="container">
                    <h2 class="section-title">Get In Touch</h2>
                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>rafiwho@example.com</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h3>Location</h3>
                                    <p>Dhaka, Bangladesh</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <h3>Availability</h3>
                                    <p>Open for opportunities</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/md-uodoy-hossan-rafi-346a9b1a0/" target="_blank" class="social-link">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a href="https://x.com/uodoyhossan" target="_blank" class="social-link">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="https://github.com/rafiwho" target="_blank" class="social-link">
                                <i class="fab fa-github"></i>
                                <span>GitHub</span>
                            </a>
                            <a href="https://codeforces.com/profile/rafiwho" target="_blank" class="social-link">
                                <i class="fas fa-code"></i>
                                <span>Codeforces</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <p>&copy; 2024 Md. Uodoy Hossan Rafi. All rights reserved.</p>
                <p>Built with <i class="fas fa-heart"></i> and lots of coffee</p>
            </div>
        </footer>

        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
