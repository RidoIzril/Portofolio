<section class="myproject" id="project">
 
    <span class="myproject-watermark">PROJECT</span>
 
    <h1 class="myproject-heading">MY PROJECT</h1>
 
    <div class="carousel">
 
        <button type="button" class="carousel-arrow arrow-left" id="prevBtn" aria-label="Project sebelumnya">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
 
        <div class="carousel-track">
 
            <div class="carousel-card side-card side-left" id="sideLeft">
                <div class="card-frame">
                    <img id="sideLeftImg" src="" alt="Project sebelumnya">
                </div>
                <p class="card-title" id="sideLeftTitle"></p>
                <p class="card-subtitle" id="sideLeftSubtitle"></p>
                <span class="card-btn">Selengkapnya</span>
            </div>
 
            <div class="carousel-card center-card" id="centerCard">
                <div class="card-frame">
                    <img id="centerImg" src="" alt="Project aktif">
                </div>
            </div>
 
            <div class="carousel-card side-card side-right" id="sideRight">
                <div class="card-frame">
                    <img id="sideRightImg" src="" alt="Project berikutnya">
                </div>
                <p class="card-title" id="sideRightTitle"></p>
                <p class="card-subtitle" id="sideRightSubtitle"></p>
                <span class="card-btn">Selengkapnya</span>
            </div>
 
        </div>
 
        <button type="button" class="carousel-arrow arrow-right" id="nextBtn" aria-label="Project berikutnya">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
 
    </div>
 
    <div class="myproject-info">
        <h3 id="activeTitle">Internship Project</h3>
        <h4 id="activeSubtitle">Attendance and training website</h4>
        <a href="#" class="btn-more" id="activeLink">Selengkapnya</a>
    </div>
 
    <div class="carousel-pagination">
        <button type="button" id="pagPrev" aria-label="Sebelumnya">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <div class="pagination-numbers" id="paginationNumbers"></div>
        <button type="button" id="pagNext" aria-label="Berikutnya">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
    </div>
 
</section>
 
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Ganti isi array ini dengan 8 project kamu.
    const projects = [
        { image: "{{ asset('images/projectblc1.png') }}", title: "Project Magang", subtitle: "Website pelatihan dan Profile Perusahaan", slug: "project-magang" },
        { image: "{{ asset('images/kantincust.png') }}", title: "Website Kantin UPNVJT", subtitle: "Website transaksi dan Pengelolaan", slug: "Project-Kantin-UPNVJT" },
        { image: "{{ asset('images/12.png') }}", title: "Project PKL", subtitle: "Website Profil Perusahaan dan Manejemen Pelatihan", slug: "project-PKL" },
        { image: "{{ asset('images/SIE3.png') }}", title: "Sistem Informasi Eksekutif", subtitle: "Visualisasi Data dan Analisis What If", slug: "project-SIE" },
        { image: "{{ asset('images/pakman.png') }}", title: "Game Pakman", subtitle: "Website Game Points", slug: "project-pakman" },
        { image: "{{ asset('images/uiux.png') }}", title: "UI / UX", subtitle: "Pelaporan Kerusakan Jalan", slug: "project-UIUX" },
        { image: "{{ asset('images/SIPUtama.png') }}", title: "Sistem Informasi Pemesanan", subtitle: "Website Pemesanan Online", slug: "project-SIP" },
    ];

     let current = 0;
    const total = projects.length;
 
    const centerImg = document.getElementById('centerImg');
    const centerCard = document.getElementById('centerCard');
    const sideLeftImg = document.getElementById('sideLeftImg');
    const sideLeftTitle = document.getElementById('sideLeftTitle');
    const sideLeftSubtitle = document.getElementById('sideLeftSubtitle');
    const sideRightImg = document.getElementById('sideRightImg');
    const sideRightTitle = document.getElementById('sideRightTitle');
    const sideRightSubtitle = document.getElementById('sideRightSubtitle');
    const activeTitle = document.getElementById('activeTitle');
    const activeSubtitle = document.getElementById('activeSubtitle');
    const activeLink = document.getElementById('activeLink');
    const paginationNumbers = document.getElementById('paginationNumbers');
 
    function mod(n, m) {
        return ((n % m) + m) % m;
    }
 
    function render() {
        const prevIndex = mod(current - 1, total);
        const nextIndex = mod(current + 1, total);
 
        centerCard.classList.remove('pop');
        void centerCard.offsetWidth; // restart animation
        centerCard.classList.add('pop');
 
        centerImg.src = projects[current].image;
        sideLeftImg.src = projects[prevIndex].image;
        sideLeftTitle.textContent = projects[prevIndex].title;
        sideLeftSubtitle.textContent = projects[prevIndex].subtitle;
        sideRightImg.src = projects[nextIndex].image;
        sideRightTitle.textContent = projects[nextIndex].title;
        sideRightSubtitle.textContent = projects[nextIndex].subtitle;
 
        activeTitle.textContent = projects[current].title;
        activeSubtitle.textContent = projects[current].subtitle;
        activeLink.href = "/project/" + projects[current].slug;
 
        renderPagination();
    }
 
    function renderPagination() {
        paginationNumbers.innerHTML = '';
 
        let start = current - 1;
        if (start < 0) start = 0;
        if (start > total - 3) start = Math.max(total - 3, 0);
 
        const count = Math.min(3, total);
 
        for (let i = start; i < start + count; i++) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.textContent = i + 1;
            btn.className = 'pag-number' + (i === current ? ' active' : '');
            btn.addEventListener('click', () => {
                current = i;
                render();
                restartAutoplay();
            });
            paginationNumbers.appendChild(btn);
        }
    }
 
    function goNext() {
        current = mod(current + 1, total);
        render();
    }
 
    function goPrev() {
        current = mod(current - 1, total);
        render();
    }
 
    document.getElementById('nextBtn').addEventListener('click', () => { goNext(); restartAutoplay(); });
    document.getElementById('prevBtn').addEventListener('click', () => { goPrev(); restartAutoplay(); });
    document.getElementById('pagNext').addEventListener('click', () => { goNext(); restartAutoplay(); });
    document.getElementById('pagPrev').addEventListener('click', () => { goPrev(); restartAutoplay(); });
    document.getElementById('sideRight').addEventListener('click', () => { goNext(); restartAutoplay(); });
    document.getElementById('sideLeft').addEventListener('click', () => { goPrev(); restartAutoplay(); });
 
    /* ===== Autoplay ===== */
    let autoplayTimer = null;
    const AUTOPLAY_DELAY = 4000;
    const myprojectSection = document.querySelector('.myproject');
 
    function startAutoplay() {
        autoplayTimer = setInterval(goNext, AUTOPLAY_DELAY);
    }
 
    function stopAutoplay() {
        clearInterval(autoplayTimer);
    }
 
    function restartAutoplay() {
        stopAutoplay();
        startAutoplay();
    }
 
    if (myprojectSection) {
        myprojectSection.addEventListener('mouseenter', stopAutoplay);
        myprojectSection.addEventListener('mouseleave', startAutoplay);
    }
 
    render();
    startAutoplay();
});
</script>