<div class="project-card">

    <div class="project-image">

        <img
            src="{{ asset($image) }}"
            alt="{{ $title }}">

        <div class="project-status">

            <span class="status-label">

                STATUS

            </span>

            <span class="status-value">

                {{ $status }}

            </span>

        </div>

        <div class="project-overlay">

            <span class="btn btn-neon disabled">

                <i class="bi bi-tools"></i>

                In Development

            </span>

        </div>

    </div>

    <div class="project-content">

        <span class="project-category">
            {{ $category }}
        </span>

        <h3>

            {{ $title }}

        </h3>

        <p>

            {{ $description }}

        </p>

        <div class="project-tech">

            {{ $slot }}

        </div>

    </div>

</div>