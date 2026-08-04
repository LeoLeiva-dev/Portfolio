<section id="projects" class="projects-section py-5">

    <div class="container">

        <x-section-title
            number="03"
            title="Tech Lab"
            subtitle="Experiments, prototypes and ideas currently under development." />

        <div class="row g-4 mt-4">

            <!-- Aquí van las cards -->

            <div class="col-lg-4">

                <x-project-card

                    category="WEB"

                    title="DirtFlow X"

                    description="Rebuilding my original MTB e-commerce project with a cleaner architecture and improved user experience."

                    image="{{ asset('img/dirtflow.png') }}" class="dirtflow-image">

                    <span class="skill-chip">Laravel</span>

                    <span class="skill-chip">Bootstrap</span>

                    <span class="skill-chip">MySQL</span>

                </x-project-card>

            </div>

            <div class="col-lg-4">

                <x-project-card

                    category="WEB"

                    title="SINVA"

                    description="Refactoring and expanding a healthcare management system with better structure and maintainability."

                    image="{{ asset('img/SINVA.png') }}" class="SINVA-image">

                    <span class="skill-chip">Laravel</span>

                    <span class="skill-chip">Blade</span>

                    <span class="skill-chip">MySQL</span>

                </x-project-card>

            </div>
            <div class="col-lg-4">

                <x-project-card

                    category="..."

                    title="Currently Exploring"

                    description="New ideas involving Laravel, networking, APIs and modern web technologies."

                    image="{{ asset('img/proximamente.png') }}" class="proximamente-image">

                    <span class="skill-chip">Laravel</span>

                    <span class="skill-chip">Azure</span>

                    <span class="skill-chip">Networking</span>

                    <span class="skill-chip">Python</span>

                </x-project-card>

            </div>

        </div>

    </div>

</section>