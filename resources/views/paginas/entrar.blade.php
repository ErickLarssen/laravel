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
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="display: block; margin-bottom: 5px; color: white; font-weight: 500;">E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="padding: 10px;" placeholder="Digite seu e-mail">
            <div id="emailHelp" class="form-text" style="font-size: 12px; color: white;">Não iremos compartilhar os seus dados com mais ninguém.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="display: block; margin-bottom: 5px; color: white; font-weight: 500;">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" style="padding: 10px;" placeholder="Digite sua senha">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" style="display: block; margin-top: 5px; color: white;">Verificar</label>
        </div>
        <a href="{{ url('/home') }}">
            <button type="submit" class="btn btn-danger" style="width: 100%; padding: 12px; font-weight: 500; background-color: white; color: red;">Entrar</button><br>
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
