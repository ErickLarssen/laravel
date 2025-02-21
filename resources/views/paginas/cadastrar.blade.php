<x-layout titulo="">
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 1px 0;">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{ asset('logo.png') }}" alt="Bootstrap" style="width: 150px; height: auto;">
        </a>
    </div>
    </nav>


    <form class="bg-danger" style="max-width: 400px; margin: 0 auto; margin-top: 30px; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">
        <h2 style="text-align: center; color: white; font-weight: bold;">CADASTRO ALUNO</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="display: block; margin-bottom: 5px; color: white; font-weight: 500;">Nome Completo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="padding: 10px;" placeholder="Digite seu nome completo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="display: block; margin-bottom: 5px; color: white; font-weight: 500;">E-mail</label>
            <input type="password" class="form-control" id="exampleInputPassword1" style="padding: 10px;" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="display: block; margin-bottom: 5px; color: white; font-weight: 500;">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" style="padding: 10px;" placeholder="Digite sua senha">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="display: block; margin-bottom: 5px; color: white; font-weight: 500;">Confirme a Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" style="padding: 10px;" placeholder="Digite sua senha novamente">
        </div>
        <a href="{{ url('/entrar') }}">
            <button type="submit" class="btn btn-danger" style="width: 100%; padding: 12px; font-weight: 500; background-color: white; color: red;">Cadastrar</button><br>
        </a>
        <button type="submit" class="btn btn-danger" style="width: 100%; padding: 12px; font-weight: 500; background-color: white; color: red;">Voltar</button>
    </form>

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
