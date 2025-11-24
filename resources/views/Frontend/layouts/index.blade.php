@include('Frontend.layouts.header')

    <!-- Page Specific Content -->
    @yield('content')

    <!-- WhatsApp Floating Button -->
    <a href="whatsapp://send?phone=919834133361" class="whatsapp-float"
        onclick="if(!navigator.userAgent.match(/Android|iPhone|iPad/i)){ window.location='https://wa.me/919834133361';}"
    >
        <img src="/img/whatsapp1.png" alt="WhatsApp Chat" />
    </a>

@include('Frontend.layouts.footer')