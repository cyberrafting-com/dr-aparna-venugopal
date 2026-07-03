@php
    $urologyOpen = request()->routeIs('kidney-surgery', 'prostatectomy', 'bladder-surgery');
    $andrologyOpen = request()->routeIs('ed-treatment', 'male-infertility-assessment', 'hormonal-therapy', 'vasectomy');
    $stoneOpen = request()->routeIs('lithotripsy', 'ureteroscopy', 'percutaneous-nephrolithotomy', 'kidney-stone-prevention-tips');
    $urinaryCareOpen = request()->routeIs('urinary-tract-infection', 'bladder-dysfunction-treatment', 'overactive-bladder-solutions', 'cystoscopy-procedures');
    $prostateCareOpen = request()->routeIs('bph-treatment', 'prostate-cancer-diagnosis', 'prostatectomy', 'post-surgery-rehabilitation');
    $sexualHealthOpen = request()->routeIs('ed-sexual-dysfunction-treatment', 'testosterone-replacement-therapy', 'peyronie-disease-treatment');
    $minimallyInvasiveOpen = request()->routeIs('laparoscopic-surgeries', 'robotic-assisted-surgeries', 'benefits-of-minimally-invasive-procedures');
    $pediatricOpen = request()->routeIs('congenital-urological-conditions', 'hypospadias', 'pediatric-kidney-stones', 'pediatric-urinary-tract-surgeries');
    $preventiveOpen = request()->routeIs('kidney-health-checkup', 'prostate-health-screening', 'urology-lifestyle-advice');
@endphp

<div class="services-sidebar shadow-sm rounded-4 p-3 bg-white sticky-top mb-5 mb-lg-0" >
    <h4 class="mb-3 px-2 pb-3 border-bottom fs-5 fw-bold text-dark">Our Services</h4>
    <div class="accordion" id="servicesAccordion">
        <!-- Urology Surgery -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingUrology">
                <button class="accordion-button rounded-3 {{ $urologyOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUrology" aria-expanded="{{ $urologyOpen ? 'true' : 'false' }}" aria-controls="collapseUrology">
                    Urology Surgery
                </button>
            </h2>
            <div id="collapseUrology" class="accordion-collapse collapse {{ $urologyOpen ? 'show' : '' }}" aria-labelledby="headingUrology" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('kidney-surgery') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('kidney-surgery') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Kidney Surgery</span></a></li>
                        <li><a href="{{ route('prostatectomy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('prostatectomy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Prostatectomy</span></a></li>
                        <li><a href="{{ route('bladder-surgery') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('bladder-surgery') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Bladder Surgery</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Male Infertility & Andrology -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingAndro">
                <button class="accordion-button rounded-3 {{ $andrologyOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAndro" aria-expanded="{{ $andrologyOpen ? 'true' : 'false' }}" aria-controls="collapseAndro">
                    Male Infertility
                </button>
            </h2>
            <div id="collapseAndro" class="accordion-collapse collapse {{ $andrologyOpen ? 'show' : '' }}" aria-labelledby="headingAndro" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('ed-treatment') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('ed-treatment') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>ED treatment</span></a></li>
                        <li><a href="{{ route('male-infertility-assessment') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('male-infertility-assessment') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Male infertility assessment</span></a></li>
                        <li><a href="{{ route('hormonal-therapy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('hormonal-therapy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Hormonal therapy</span></a></li>
                        <li><a href="{{ route('vasectomy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('vasectomy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Vasectomy / reversal</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Kidney Stone Treatment -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingStone">
                <button class="accordion-button rounded-3 {{ $stoneOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStone" aria-expanded="{{ $stoneOpen ? 'true' : 'false' }}" aria-controls="collapseStone">
                    Kidney Stone
                </button>
            </h2>
            <div id="collapseStone" class="accordion-collapse collapse {{ $stoneOpen ? 'show' : '' }}" aria-labelledby="headingStone" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('lithotripsy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('lithotripsy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Lithotripsy (Shockwave / Laser)</span></a></li>
                        <li><a href="{{ route('ureteroscopy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('ureteroscopy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Ureteroscopy</span></a></li>
                        <li><a href="{{ route('percutaneous-nephrolithotomy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('percutaneous-nephrolithotomy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Percutaneous Nephrolithotomy</span></a></li>
                        <li><a href="{{ route('kidney-stone-prevention-tips') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('kidney-stone-prevention-tips') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Kidney stone prevention tips</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Urinary Tract & Bladder Care -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingBladder">
                <button class="accordion-button rounded-3 {{ $urinaryCareOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBladder" aria-expanded="{{ $urinaryCareOpen ? 'true' : 'false' }}" aria-controls="collapseBladder">
                    Urinary Tract Care
                </button>
            </h2>
            <div id="collapseBladder" class="accordion-collapse collapse {{ $urinaryCareOpen ? 'show' : '' }}" aria-labelledby="headingBladder" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('urinary-tract-infection') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('urinary-tract-infection') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Urinary tract infection (UTI)</span></a></li>
                        <li><a href="{{ route('bladder-dysfunction-treatment') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('bladder-dysfunction-treatment') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Bladder dysfunction treatment</span></a></li>
                        <li><a href="{{ route('overactive-bladder-solutions') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('overactive-bladder-solutions') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Overactive bladder solutions</span></a></li>
                        <li><a href="{{ route('cystoscopy-procedures') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('cystoscopy-procedures') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Cystoscopy procedures</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Prostate Care -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingProstate">
                <button class="accordion-button rounded-3 {{ $prostateCareOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProstate" aria-expanded="{{ $prostateCareOpen ? 'true' : 'false' }}" aria-controls="collapseProstate">
                    Prostate Care
                </button>
            </h2>
            <div id="collapseProstate" class="accordion-collapse collapse {{ $prostateCareOpen ? 'show' : '' }}" aria-labelledby="headingProstate" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('bph-treatment') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('bph-treatment') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>BPH treatment</span></a></li>
                        <li><a href="{{ route('prostate-cancer-diagnosis') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('prostate-cancer-diagnosis') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Prostate Cancer Diagnosis</span></a></li>
                        <li><a href="{{ route('prostatectomy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('prostatectomy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Prostatectomy</span></a></li>
                        <li><a href="{{ route('post-surgery-rehabilitation') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('post-surgery-rehabilitation') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Post-surgery rehabilitation</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sexual Health & Andrology -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingSexualHealth">
                <button class="accordion-button rounded-3 {{ $sexualHealthOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSexualHealth" aria-expanded="{{ $sexualHealthOpen ? 'true' : 'false' }}" aria-controls="collapseSexualHealth">
                    Sexual Health &amp; Andrology
                </button>
            </h2>
            <div id="collapseSexualHealth" class="accordion-collapse collapse {{ $sexualHealthOpen ? 'show' : '' }}" aria-labelledby="headingSexualHealth" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('ed-sexual-dysfunction-treatment') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('ed-sexual-dysfunction-treatment') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>ED and sexual dysfunction treatment</span></a></li>
                        <li><a href="{{ route('testosterone-replacement-therapy') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('testosterone-replacement-therapy') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Testosterone replacement therapy</span></a></li>
                        <li><a href="{{ route('peyronie-disease-treatment') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('peyronie-disease-treatment') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Peyronie's disease treatment</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Minimally Invasive Urology -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingMinimallyInvasive">
                <button class="accordion-button rounded-3 {{ $minimallyInvasiveOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMinimallyInvasive" aria-expanded="{{ $minimallyInvasiveOpen ? 'true' : 'false' }}" aria-controls="collapseMinimallyInvasive">
                    Minimally Invasive Urology
                </button>
            </h2>
            <div id="collapseMinimallyInvasive" class="accordion-collapse collapse {{ $minimallyInvasiveOpen ? 'show' : '' }}" aria-labelledby="headingMinimallyInvasive" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('laparoscopic-surgeries') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('laparoscopic-surgeries') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Laparoscopic surgeries</span></a></li>
                        <li><a href="{{ route('robotic-assisted-surgeries') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('robotic-assisted-surgeries') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Robotic-assisted surgeries</span></a></li>
                        <li><a href="{{ route('benefits-of-minimally-invasive-procedures') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('benefits-of-minimally-invasive-procedures') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Benefits of minimally invasive procedures</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pediatric Urology -->
        <div class="accordion-item border-0 mb-1 rounded-3">
            <h2 class="accordion-header" id="headingPediatric">
                <button class="accordion-button rounded-3 {{ $pediatricOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePediatric" aria-expanded="{{ $pediatricOpen ? 'true' : 'false' }}" aria-controls="collapsePediatric">
                    Pediatric Urology
                </button>
            </h2>
            <div id="collapsePediatric" class="accordion-collapse collapse {{ $pediatricOpen ? 'show' : '' }}" aria-labelledby="headingPediatric" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('congenital-urological-conditions') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('congenital-urological-conditions') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Congenital urological conditions</span></a></li>
                        <li><a href="{{ route('hypospadias') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('hypospadias') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Hypospadias</span></a></li>
                        <li><a href="{{ route('pediatric-kidney-stones') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('pediatric-kidney-stones') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Pediatric kidney stones</span></a></li>
                        <li><a href="{{ route('pediatric-urinary-tract-surgeries') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('pediatric-urinary-tract-surgeries') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Pediatric urinary tract surgeries</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Preventive Urology -->
        <div class="accordion-item border-0 rounded-3">
            <h2 class="accordion-header" id="headingPreventive">
                <button class="accordion-button rounded-3 {{ $preventiveOpen ? '' : 'collapsed' }} bg-light py-2 px-3 sidebar-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePreventive" aria-expanded="{{ $preventiveOpen ? 'true' : 'false' }}" aria-controls="collapsePreventive">
                    Preventive Urology
                </button>
            </h2>
            <div id="collapsePreventive" class="accordion-collapse collapse {{ $preventiveOpen ? 'show' : '' }}" aria-labelledby="headingPreventive" data-bs-parent="#servicesAccordion">
                <div class="accordion-body p-2 pt-2">
                    <ul class="list-unstyled mb-0 ms-1">
                        <li><a href="{{ route('kidney-health-checkup') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('kidney-health-checkup') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Kidney health checkups</span></a></li>
                        <li><a href="{{ route('prostate-health-screening') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('prostate-health-screening') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Prostate health screenings</span></a></li>
                        <li><a href="{{ route('urology-lifestyle-advice') }}" class="d-flex align-items-center text-decoration-none sidebar-accordion-link {{ request()->routeIs('urology-lifestyle-advice') ? 'active-service-link fw-bold' : 'text-muted sidebar-link-hover' }}"><i class="fa-solid fa-chevron-right me-2 sidebar-chevron-icon"></i> <span>Lifestyle advice</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
