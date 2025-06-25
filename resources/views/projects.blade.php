<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Projects - Md. Uodoy Hossan Rafi</title>
        <meta name="description" content="Portfolio of projects and applications developed by Md. Uodoy Hossan Rafi" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <body>
        <header class="navbar">
            <div class="logo">
                <i class="fas fa-code"></i>
                <a href="/" style="text-decoration: none; color: inherit;">Md. Uodoy Hossan Rafi</a>
            </div>
            <nav>
                <a href="/#home" class="nav-link">Home</a>
                <a href="/#about" class="nav-link">About</a>
                <a href="/#skills" class="nav-link">Skills</a>
                <a href="/#projects" class="nav-link">Projects</a>
                <a href="/#contact" class="nav-link">Contact</a>
            </nav>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </header>

        <main style="margin-top: 80px;">
            <section class="projects-page-section">
                <div class="container">
                    <h1 class="section-title">My Projects</h1>
                    <p class="section-description">A collection of projects showcasing my skills in competitive programming, web development, and problem-solving.</p>
                    
                    <div class="project-filters">
                        <button class="filter-btn active" data-filter="all">All Projects</button>
                        <button class="filter-btn" data-filter="competitive">Competitive Programming</button>
                        <button class="filter-btn" data-filter="web">Web Development</button>
                        <button class="filter-btn" data-filter="ai">AI/ML</button>
                        <button class="filter-btn" data-filter="system">System Design</button>
                    </div>

                    <div class="projects-grid">
                        <div class="project-card" data-category="competitive">
                            <div class="project-image">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="project-content">
                                <h3>Competitive Programming Solutions</h3>
                                <p>A comprehensive collection of solutions to various competitive programming problems from platforms like Codeforces, LeetCode, and HackerRank. Features optimized algorithms and efficient data structure implementations.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">C++</span>
                                    <span class="tech-tag">Algorithms</span>
                                    <span class="tech-tag">Data Structures</span>
                                    <span class="tech-tag">Dynamic Programming</span>
                                </div>
                                <div class="project-stats">
                                    <div class="stat">
                                        <i class="fas fa-code-branch"></i>
                                        <span>500+ Solutions</span>
                                    </div>
                                    <div class="stat">
                                        <i class="fas fa-star"></i>
                                        <span>4.8 Rating</span>
                                    </div>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                    <a href="#" class="btn btn-small btn-secondary">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card" data-category="web">
                            <div class="project-image">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="project-content">
                                <h3>Halaal Water Website</h3>
                                <p>A modern, responsive website for my Halaal drinking water business. Features online ordering, customer management, and real-time inventory tracking with a clean, professional design.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">HTML/CSS</span>
                                    <span class="tech-tag">JavaScript</span>
                                    <span class="tech-tag">Node.js</span>
                                    <span class="tech-tag">MongoDB</span>
                                </div>
                                <div class="project-stats">
                                    <div class="stat">
                                        <i class="fas fa-users"></i>
                                        <span>100+ Customers</span>
                                    </div>
                                    <div class="stat">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span>500+ Orders</span>
                                    </div>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                    <a href="#" class="btn btn-small btn-secondary">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card" data-category="ai">
                            <div class="project-image">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="project-content">
                                <h3>AI Projects Collection</h3>
                                <p>Various AI and machine learning projects including chatbots, sudoku solvers, and pattern recognition systems. Demonstrates expertise in Python, TensorFlow, and neural networks.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">Python</span>
                                    <span class="tech-tag">TensorFlow</span>
                                    <span class="tech-tag">Neural Networks</span>
                                    <span class="tech-tag">NLP</span>
                                </div>
                                <div class="project-stats">
                                    <div class="stat">
                                        <i class="fas fa-brain"></i>
                                        <span>5 AI Models</span>
                                    </div>
                                    <div class="stat">
                                        <i class="fas fa-chart-line"></i>
                                        <span>95% Accuracy</span>
                                    </div>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                    <a href="#" class="btn btn-small btn-secondary">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card" data-category="system">
                            <div class="project-image">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="project-content">
                                <h3>Compiler Design Project</h3>
                                <p>A complete compiler implementation for a custom programming language with lexical analysis, parsing, semantic analysis, and code generation phases. Built from scratch in C++.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">C++</span>
                                    <span class="tech-tag">Compiler Design</span>
                                    <span class="tech-tag">Lexical Analysis</span>
                                    <span class="tech-tag">Parsing</span>
                                </div>
                                <div class="project-stats">
                                    <div class="stat">
                                        <i class="fas fa-file-code"></i>
                                        <span>10K+ Lines</span>
                                    </div>
                                    <div class="stat">
                                        <i class="fas fa-bug"></i>
                                        <span>99% Test Coverage</span>
                                    </div>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                    <a href="#" class="btn btn-small btn-secondary">
                                        <i class="fas fa-external-link-alt"></i> Documentation
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card" data-category="system">
                            <div class="project-image">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <div class="project-content">
                                <h3>Operating System Project</h3>
                                <p>A basic operating system implementation with process management, memory management, file system, and device drivers. Demonstrates deep understanding of system programming concepts.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">C</span>
                                    <span class="tech-tag">Assembly</span>
                                    <span class="tech-tag">OS Design</span>
                                    <span class="tech-tag">Kernel</span>
                                </div>
                                <div class="project-stats">
                                    <div class="stat">
                                        <i class="fas fa-microchip"></i>
                                        <span>Low Level</span>
                                    </div>
                                    <div class="stat">
                                        <i class="fas fa-memory"></i>
                                        <span>Memory Efficient</span>
                                    </div>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                    <a href="#" class="btn btn-small btn-secondary">
                                        <i class="fas fa-external-link-alt"></i> Documentation
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="project-card" data-category="web">
                            <div class="project-image">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="project-content">
                                <h3>Task Management System</h3>
                                <p>A full-stack task management application with user authentication, real-time updates, and collaborative features. Built with modern web technologies and responsive design.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">React</span>
                                    <span class="tech-tag">Node.js</span>
                                    <span class="tech-tag">Express</span>
                                    <span class="tech-tag">MongoDB</span>
                                </div>
                                <div class="project-stats">
                                    <div class="stat">
                                        <i class="fas fa-users"></i>
                                        <span>Multi-user</span>
                                    </div>
                                    <div class="stat">
                                        <i class="fas fa-sync"></i>
                                        <span>Real-time</span>
                                    </div>
                                </div>
                                <div class="project-links">
                                    <a href="https://github.com/rafiwho" target="_blank" class="btn btn-small">
                                        <i class="fab fa-github"></i> View Code
                                    </a>
                                    <a href="#" class="btn btn-small btn-secondary">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
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