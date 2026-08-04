<section id="hero" class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <p class="hero-greeting">
                    $ whoami
                </p>

                <h1 class="hero-title">
                    Leonardo Leiva
                </h1>

                <p class="hero-subtitle">
                    Building modern web applications
                    with clean code and great user experiences.
                </p>

                <p class="hero-description">
                    Laravel • PHP • JavaScript • Bootstrap • MySQL
                </p>

                <div class="hero-buttons mt-4">

                    <a href="#projects" class="btn btn-neon">
                        View projects
                    </a>

                    <a
                        href="{{ asset('cv/Leonardo_Leiva_CV.pdf') }}"
                        class="btn btn-neon"
                        download>

                        <i class="bi bi-download"></i>

                        Download CV

                    </a>

                </div>

            </div>

            <div class="col-lg-6 text-center">

                <div class="profile-container">

                    <img src="{{ asset('img/portada.png') }}" class="profile-image">

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <x-card class="h-100 feature-backend">

                    <div class="text-center">

                        <i class="bi bi-code-slash feature-icon"></i>

                        <h4 class="mt-4 feature-card-title">
                            Backend Development
                        </h4>

                        <p class="feature-card-description">
                            Building scalable web applications with Laravel, PHP and MySQL.
                        </p>

                        <div class="feature-tags">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>

                    </div>

                </x-card>

            </div>

            <div class="col-md-4">

                <x-card class="h-100 feature-network">

                    <div class="text-center">

                        <i class="bi bi-hdd-network feature-icon"></i>

                        <h4 class="mt-4 feature-card-title">
                            Networking
                        </h4>

                        <p class="feature-card-description">
                            Hands-on experience with Cisco networking, routing and switching.
                        </p>

                        <div class="feature-tags">
                            <span>Cisco</span>
                            <span>CCNA</span>
                            <span>Routing</span>
                        </div>

                    </div>

                </x-card>

            </div>

            <div class="col-md-4">

                <x-card class="h-100 feature-hardware">

                    <div class="text-center">

                        <i class="bi bi-pc-display feature-icon"></i>

                        <h4 class="mt-4 feature-card-title">
                            Hardware
                        </h4>

                        <p class="feature-card-description">
                            PC building, hardware maintenance and performance optimization.
                        </p>

                        <div class="feature-tags">
                            <span>PC Build</span>
                            <span>Diagnostics</span>
                            <span>Maintenance</span>
                        </div>

                    </div>

                </x-card>

            </div>

        </div>

    </div>

</section>