<x-layout titulo="">
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 1px 0;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('logo.png') }}" alt="Bootstrap" width="200" height="200">
            </a>
            <div class="d-flex ms-auto">
                <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
                <a class="nav-link" href="{{ route('contato') }}">Contato</a>
            </div>
        </div>
    </nav>




    <footer class="bg-danger text-black py-8" style="background-color: red; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);">
    <div class="container mx-auto text-center">
        <p style=" color: white; font-weight: 500;">&copy; 2025 Aprende+EAD. Todos os direitos reservados.</p>
        <div class="mt-5">
            <a href="#" class="text-white hover:text-black-400 mx-2" style="font-weight: 500; text-decoration: none;">Instagram</a>
            <a href="#" class="text-white hover:text-black-400 mx-2" style="font-weight: 500; text-decoration: none;">Facebook</a>
            <a href="#" class="text-white hover:text-black-400 mx-2" style="font-weight: 500; text-decoration: none;">X</a><br><br>
        </div>
    </div>
    </footer>

    
</x-layout>