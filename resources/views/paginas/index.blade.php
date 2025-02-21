<x-layout titulo="">
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 1px 0;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('logo.png') }}" alt="Bootstrap" width="200" height="200">
            </a>
        </div>
    </nav>

    <!-- Container Centralizado -->
    <div class="d-flex justify-content-center align-items-center mt-5" style="height: calc(100vh - 200px);">
        <div class="bg-danger" style="width: 80rem; height: 600px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);">
            <h1 class="text-center" style="color: white; font-size: 45px; margin-top: 25px;">ESTAMOS AQUI PARA AJUDAR VOCÊ A ALCANÇAR SEUS OBJETIVOS</h1>
            <div class="d-flex align-items-center" style="margin-left: 100px; margin-top: 35px; gap: 180px;">
                <img src="{{ asset('pexels-buro-millennial-636760-1438081.jpg') }}" width="550px" alt="Imagem Banner" style="border-radius: 50px;">
                <div class="ms-5" style="margin-top: 0px;">
                <a href="{{ url('/entrar') }}">
                    <button type="button" class="btn btn-white btn-lg w-100 mb-4" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); background-color: white; color: red; margin-top: 30px; font-weight: 600;">Entrar</button>
                </a>
                <a href="{{ url('/planos') }}">
                    <button type="button" class="btn btn-white btn-lg w-100" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); background-color: white; color: red; font-weight: 600;">Veja o Plano</button>
                </a>
                </div>
            </div>
        </div>                  
    </div>

    <br><br>

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
