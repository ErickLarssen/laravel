<x-layout titulo="">
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 1px 0;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('logo.png') }}" alt="Bootstrap" style="width: 150px; height: auto;">
            </a>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 160px);">
        <div class="bg-danger d-flex flex-column align-items-center" style="width: 80rem; min-height: 100vh; margin-top: 20px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); padding: 20px;">
            <h1 class="text-center" style="color: white; font-size: 45px; margin-top: 25px;">Comece agora, o sucesso espera por você!</h1>

            <!-- Container Branco -->
            <div class="bg-white content-box" style="width: 90%; min-height: 600px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 20px; position: relative;">
                <p style="color: red; font-size: 30px; font-weight: bold; position: absolute; top: 20px; left: 20px;">Plano Red:</p>
                <div class="bg-danger content-box d-flex justify-content-between align-items-center" style="width: 80%; min-height: 100px; margin: 80px auto 0; border-radius: 50px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 20px 40px;">
                    <p style="color: white; font-size: 40px; font-weight: bold;">R$55,00/Mês</p>
                    <p style="color: white; font-size: 20px; font-weight: bold;">1 Ano de Aprenda+</p>
                </div>
                <div class="bg-danger content-box d-flex justify-content-center align-items-center text-center" style="width: 80%; min-height: 100px; margin: 80px auto 0; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 20px 40px; margin-top: 20px;">
                    <a href="{{ url('/cadastrar') }}">
                        <button onclick="window.location.href='pagina-destino.html'" style="background: none; border: none; color: white; font-size: 40px; font-weight: bold; cursor: pointer;">
                            MATRICULE-SE
                        </button>
                    </a>
                </div>

                <p style="color: red; font-size: 30px; font-weight: bold; margin-bottom: 10px; padding-left: 120px;">Benefícios:</p>

                <ul style="padding-left: 150px; font-size: 18px; margin-top: 5px;">
                    <li style="color: black; font-size: 18px; font-weight: bold; margin-bottom: 5px;">Acesso ao serviço completo</li>
                    <li style="color: black; font-size: 18px; font-weight: bold; margin-bottom: 5px;">Acesso a conteúdos e ferramentas básicas</li>
                    <li style="color: black; font-size: 18px; font-weight: bold; margin-bottom: 5px;">Atualizações mensais</li>
                    <li style="color: black; font-size: 18px; font-weight: bold; margin-bottom: 5px;">Cadastro fácil e rápido</li>
                    <li style="color: black; font-size: 18px; font-weight: bold; margin-bottom: 5px;">Funcionalidade de feedback ou avaliação</li>
                </ul>

            </div>
        </div>                  
    </div>


    <br><br>

    <footer class="bg-danger text-white py-4" style="background-color: red; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);">
        <div class="container mx-auto text-center">
            <p style="font-weight: 500;">&copy; 2025 Aprende+EAD. Todos os direitos reservados.</p>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-black-400 mx-2" style="font-weight: 500; text-decoration: none;">Instagram</a>
                <a href="#" class="text-white hover:text-black-400 mx-2" style="font-weight: 500; text-decoration: none;">Facebook</a>
                <a href="#" class="text-white hover:text-black-400 mx-2" style="font-weight: 500; text-decoration: none;">X</a><br><br>
            </div>
        </div>
    </footer>
</x-layout>
