<section id="about" class="about-section">

    <div class="container">

        <x-section-title
            number="01"
            title=" About Me"
            subtitle="PROFILE INITIALIZED"
        />

        <div class="row g-5 align-items-center">

            <!-- FOTO -->
            <div class="col-lg-4">

                <div class="about-photo">

                    <div class="photo-frame">

                        <div class="photo-label">

                            PROFILE

                        </div>

                        <img
                            src="{{ asset('img/portada.png') }}"
                            alt="Leonardo Leiva"
                            class="img-fluid">

                        <div class="photo-status">

                            <span></span>

                            ONLINE

                        </div>

                    </div>

                </div>

            </div>

            <!-- INFORMACIÓN -->
            <div class="col-lg-8">

                <x-card class="about-card">

                    <div class="about-content">

                        <div class="status-badge">
                            <span class="status-dot"></span>
                            AVAILABLE FOR PROJECTS
                        </div>

                        <h2 class="about-name">
                            Leonardo Leiva
                        </h2>

                        <div class="about-info-description">

                            <p>I'm a Web Development student passionate about building modern web applications, learning new technologies, 
                                and solving real-world problems through software.

                                I enjoy creating clean, maintainable solutions while continuously improving my skills in web development, networking, and computer hardware.
                            </p>

                        </div>

                        <div class="about-roles">

                            <p>> Web Developer</p>
                            <p>> Networking Enthusiast</p>
                            <p>> Hardware Enthusiast</p>
                            <p>> Continuous Learner</p>

                        </div>

                        <hr class="terminal-divider">

                        <div class="about-info">

                            <div class="info-block">

                                <span class="info-title">MISSION</span>

                                <p>
                                    My goal is to become a full-stack 
                                    developer who builds scalable applications with clean architecture and delivers 
                                    outstanding user experiences.
                                </p>

                            </div>

                            <div class="info-block">

                                <span class="info-title">CURRENT FOCUS</span>

                                <ul class="focus-list">

                                    <li>Laravel</li>
                                    <li>Clean Architecture</li>
                                    <li>Networking</li>
                                    <li>UI/UX Design</li>

                                </ul>

                            </div>

                        </div>

                        <hr class="terminal-divider">

                        <div class="about-buttons">

                            <a href="#" class="btn btn-neon">
                                Download CV
                            </a>

                            <a href="#contact" class="btn btn-outline-neon">
                                Contact
                            </a>

                        </div>

                    </div>

                </x-card>

            </div>

            <div class="row mt-5 g-4">

                <div class="col-6 col-md-3">
                    <x-stat-card value="3+" title="Major Projects" />
                </div>

                <div class="col-6 col-md-3">
                    <x-stat-card value="12+" title="Technologies" />
                </div>

                <div class="col-6 col-md-3">
                    <x-stat-card value="∞" title="Learning" />
                </div>

                <div class="col-6 col-md-3">
                    <x-stat-card value="8+" title="Certifications" />
                </div>

            </div>

        </div>

    </div>

</section>