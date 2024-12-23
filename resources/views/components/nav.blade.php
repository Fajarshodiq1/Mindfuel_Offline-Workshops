<nav class="fixed top-0 flex items-center w-full justify-between p-6 bg-white z-30">
    <!-- Logo -->
    <a href={{ route('front.index') }}>
        <img src="{{ asset('assets/images/logos/Logo.svg') }}" class="flex shrink-0" alt="logo">
    </a>

    <!-- Menu Button for Mobile -->
    <button id="menu-button" class="lg:hidden flex items-center justify-center w-10 h-10 rounded focus:outline-none"
        aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <!-- Navigation Links -->
    <ul id="menu"
        class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:justify-center gap-6 w-full lg:w-auto bg-white lg:bg-transparent lg:p-0 p-4 absolute lg:static top-16 left-0 shadow-lg lg:shadow-none">
        <li
            class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
            <a href={{ route('front.check_booking') }}>View My Booking</a>
        </li>
        <li
            class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
            <a href="">Workshop</a>
        </li>
        <li
            class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
            <a href="">Community</a>
        </li>
        <li
            class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
            <a href="">Testimony</a>
        </li>
    </ul>

    <!-- Contact Button -->
    <a href="#" class="hidden lg:flex items-center rounded-full h-12 px-6 gap-[10px] bg-aktiv-green">
        <span class="font-semibold text-white">Contact CS</span>
        <img src="{{ asset('assets/images/icons/whatsapp.svg') }}" class="w-6 h-6" alt="icon">
    </a>
</nav>

<script>
    // Toggle the mobile menu
    document.getElementById('menu-button').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';

        this.setAttribute('aria-expanded', !isExpanded);
        menu.classList.toggle('hidden');
    });
</script>

<style>
    /* Add spacing between menu items in mobile view */
    @media (max-width: 1024px) {
        .mobile-item-spacing {
            margin-bottom: 40px;
            /* Adjust as needed */
        }
    }
</style>
