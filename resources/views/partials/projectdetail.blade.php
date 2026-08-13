<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['title'] }} - Portofolio Rido Izril Qonata</title>

    <!-- Google Fonts (Poppins untuk teks, Anton untuk judul besar) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap (dipakai navbar untuk toggler/collapse di mobile) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS utama situs (sudah termasuk style khusus halaman detail project) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

<section class="pdetail-hero">

    <span class="pdetail-watermark">DETAIL</span>

    <div class="pdetail-hero-inner">

        <a href="{{ url('/#project') }}" class="pdetail-back reveal">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
            Kembali ke Project
        </a>

        <span class="pdetail-eyebrow reveal">Project Detail</span>

        <h1 class="pdetail-title reveal">{{ $project['title'] }}</h1>
        <p class="pdetail-subtitle reveal">{{ $project['subtitle'] }}</p>

        <div class="pdetail-meta reveal">
            <div class="meta-item">
                <span class="meta-label">Role</span>
                <span class="meta-value">{{ $project['role'] }}</span>
            </div>
            <div class="meta-divider"></div>
            <div class="meta-item">
                <span class="meta-label">Durasi</span>
                <span class="meta-value">{{ $project['duration'] }}</span>
            </div>
            <div class="meta-divider"></div>
            <div class="meta-item">
                <span class="meta-label">Status</span>
                <span class="meta-value status-done">{{ $project['status'] }}</span>
            </div>
        </div>

        <div class="pdetail-showcase reveal">

            @php $showcaseImages = $project['images'] ?? []; @endphp

            @if (!empty($showcaseImages))
            <div class="showcase-slider" id="gallerySlider">

                <button type="button" class="slider-arrow prev" id="gPrev" aria-label="Gambar sebelumnya">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                </button>

                <div class="slider-viewport">
                    <div class="slider-track" id="sliderTrack">
                        @foreach ($showcaseImages as $img)
                            @php
                                $src = is_array($img) ? ($img['src'] ?? '') : $img;
                                $caption = is_array($img) ? ($img['caption'] ?? '') : '';
                            @endphp
                            <div class="slide">
                                @if ($caption)
                                    <span class="showcase-badge">{{ $caption }}</span>
                                @endif
                                <img src="{{ asset($src) }}" alt="{{ $caption ?: $project['title'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="button" class="slider-arrow next" id="gNext" aria-label="Gambar berikutnya">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                </button>
            </div>

            <div class="slider-dots" id="sliderDots"></div>
            @endif
        </div>

    </div>
</section>

<section class="pdetail-about">
    <div class="pdetail-about-inner">

        <div class="pdetail-about-text reveal">
            <h2 class="section-heading">Tentang Project</h2>

            @foreach ($project['description'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach

            @if (!empty($project['tech_stack']))
                <h3 class="pdetail-subheading">Tech Stack</h3>
                <div class="tech-stack">
                    @foreach ($project['tech_stack'] as $tech)
                        <span class="tech-badge">{{ $tech }}</span>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="pdetail-side-card reveal">
            @if (!empty($project['features']))
                <h3>Fitur Utama</h3>
                <ul class="feature-list">
                    @foreach ($project['features'] as $feature)
                        <li><span class="feature-check">&#10003;</span> {{ $feature }}</li>
                    @endforeach
                </ul>
            @endif

           @if (!empty($project['source_url']))
                <div class="pdetail-links">
                    <a href="{{ $project['source_url'] }}"
                    class="btn-more btn-block"
                    target="_blank"
                    rel="noopener noreferrer">
                        Source Code
                    </a>
                </div>
            @endif
        </div>

    </div>
</section>

<section class="pdetail-nav">
    <a href="{{ route('project.detail', $prevProject['slug']) }}" class="pdetail-nav-link prev reveal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        <div>
            <span>Sebelumnya</span>
            <strong>{{ $prevProject['title'] }}</strong>
        </div>
    </a>

    <a href="{{ url('/#project') }}" class="pdetail-nav-all reveal">Semua Project</a>

    <a href="{{ route('project.detail', $nextProject['slug']) }}" class="pdetail-nav-link next reveal">
        <div>
            <span>Berikutnya</span>
            <strong>{{ $nextProject['title'] }}</strong>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
    </a>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===== Reveal on scroll ===== */
    const revealEls = document.querySelectorAll('.pdetail-hero .reveal, .pdetail-about .reveal, .pdetail-nav .reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.15 });

    revealEls.forEach((el) => observer.observe(el));

    /* ===== Showcase slider ===== */
    const track = document.getElementById('sliderTrack');
    if (!track) return;

    const slides = Array.from(track.children);
    const dotsWrap = document.getElementById('sliderDots');
    const prevBtn = document.getElementById('gPrev');
    const nextBtn = document.getElementById('gNext');
    const sliderEl = document.getElementById('gallerySlider');
    let current = 0;
    let autoplayTimer = null;

    slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('aria-label', 'Ke gambar ' + (i + 1));
        dot.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(dot);
    });

    function updateSlide() {
        track.style.transform = `translateX(-${current * 100}%)`;

        slides.forEach((slide, i) => {
            slide.classList.toggle('active-slide', i === current);
        });

        Array.from(dotsWrap.children).forEach((dot, i) => {
            dot.classList.toggle('active', i === current);
        });
    }

    function goTo(index) {
        current = (index + slides.length) % slides.length;
        updateSlide();
        restartAutoplay();
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    function restartAutoplay() {
        clearInterval(autoplayTimer);
        autoplayTimer = setInterval(next, 4000);
    }

    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);
    sliderEl.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
    sliderEl.addEventListener('mouseleave', restartAutoplay);

    updateSlide();
    restartAutoplay();
});
</script>

    <!-- Bootstrap JS (untuk navbar toggler di mobile) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>