<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
    <!--=============== HEADER ===============-->
    @include('components.header')

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        @include('components.home')

        <!--=============== ABOUT ===============-->
        @include('components.about')

        <!--=============== SKILLS ===============-->
        @include('components.skills')

        <!--=============== SERVICES ===============-->
        @include('components.services')

        <!--=============== WORK ===============-->
        @include('components.work')

        <!--=============== TESTIMONIALS ===============-->
        @include('components.testimonials')

        <!--=============== CONTACT ===============-->
        @include('components.contact')
    </main>

    <!--=============== FOOTER ===============-->
    @include('components.footer')

    @include('components.script')
</body>

</html>
