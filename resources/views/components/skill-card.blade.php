<div {{ $attributes->merge(['class' => 'skill-card']) }}>

    <div class="skill-icon">
        <i class="{{ $icon }}"></i>
    </div>

    <h3 class="skill-title">
        {{ $title }}
    </h3>

    <p class="skill-description">
        {{ $description }}
    </p>

    <div class="skill-list">
        {{ $slot }}
    </div>

</div>