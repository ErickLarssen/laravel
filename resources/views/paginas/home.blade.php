<x-layout titulo="">
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 1px 0;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('logo.png') }}" alt="Bootstrap" width="200" height="200">
            </a>
            <div class="d-flex ms-auto" style="gap: 100px; font-weight: bold;">
                <a class="nav-link" href="{{ route('sobre') }}">CONTATO</a>
                <a class="nav-link" href="{{ route('contato') }}">SOBRE</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
    <h1>Olá (Nome do Aluno)</h1><br><br>
    <div class="container mt-5">
    <h1>TECNOLOGIA</h1><br><br><br>
    <h2 style="color: red; font-weight: bold;">Desenvolvimento Web:</h2><br>
    </div>

    <div class="d-flex justify-content-start mt-5" style="align-items: flex-start;">
    <video src="{{ asset('AdobeStock_350754664.mov') }}" class="img-fluid" style="width: 30%; border-radius: 30px; margin-right: 20px; margin-left: 140px;" controls>
        Seu navegador não suporta a tag de vídeo.
    </video>
    <div>
        <h3>(Nome do Video)</h3><br><br>
        <p>Descrição do video</p>
    </div>
    </div>

    </div><br><br><br>

    <div class="container mt-5">
    <h1>SOBRE</h1><br><br><br>

    <!-- Caixa Centralizada -->
    <div class="d-flex justify-content-between mt-4" style="width: 70em; height: 30em; background-color: white; border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); margin: 0 auto; display: flex; align-items: center; justify-content: center;">
    <p style="font-size: 20px; color: #333; text-align: center; padding: 20px; line-height: 1.6;">
        <strong>Sobre a Nossa Instituição</strong><br><br>
        Nossa instituição é dedicada a oferecer uma educação de qualidade em diversas áreas essenciais para o crescimento pessoal e profissional. Com cursos em Mecânica, Idiomas, Bem-Estar, Tecnologia, Psicologia e Negócios, buscamos capacitar nossos alunos para que eles possam enfrentar os desafios do mercado de trabalho com confiança e competência. Oferecemos um ambiente de aprendizado inovador, com professores altamente qualificados e metodologias que estimulam o desenvolvimento integral de nossos estudantes, preparando-os para um futuro promissor e repleto de oportunidades. Venha fazer parte de nossa comunidade e invista no seu sucesso!
    </p>
    </div>
    </div>

    <footer class="bg-danger text-black py-8" style="background-color: red; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); margin-top: 200px;">
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
